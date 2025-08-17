 <div class="row">
            <div class="row frmtitle mb"><h1>danh sach san pham</h1></div>

             <form action="index.php?act=listsp" method="post">
                        <input type="text" name ="kyw">
                        <select name="iddm" >
                            <option value="0" selected>Tat ca</option>
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';

                        }
                        ?>
                          <option value=""></option>
                       </select>
                       <input type="submit" name="listok" value="GO">
             </form>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>ma loai</th>
                            <th>ten san pham</th>
                            <th>hinh</th>
                            <th>gia</th>
                            <th>luot xem</th>
                            <th></th>
                        </tr>
                        <?php
                             
foreach($listsanpham as $sanpham){
    extract($sanpham);
    $suasp="index.php?act=suasp&id=".$id;
    $xoasp="index.php?act=xoasp&id=".$id;
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height='80'>";
    }else{
    $hinh="khong co hinh";
    }
    echo '<tr>
             <td><input type="checkbox" name="" id=""></td>
             <td>'.$id.'</td>
             <td>'.$name.'</td>
             <td>'.$hinh.'</td>
             <td>'.$price.'</td>
             <td>'.$luotxem.'</td>
             <td>
                 <a href="'.$suasp.'"><input type="button" value="sửa"></a>  
                 <a href="'.$xoasp.'"><input type="button" value="xóa"></a>
             </td>
          </tr>';
}
?>

                        
                    </table>
                   
                </div>
                <div class="row mb10">
                    <input type="button" value="chon tat ca">
                    <input type="button" value=" bo chon tat ca">
                    <input type="button" value="xoa cac muc da chon">
                    <a href="index.php?act=addsp"><input type="button" value="nhap them"></a>
                </div>
            </div>
        </div>

        <style>
            /* Khung tổng */
.frmcontent {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    margin-top: 15px;
    max-width: 1000px;
    overflow-x: auto; /* scroll ngang nếu table quá rộng */
}

/* Tiêu đề */
.frmtitle h1 {
    background: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 0;
    border-radius: 6px 6px 0 0;
    font-size: 20px;
    text-align: center;
}

/* Form tìm kiếm */
.frmcontent form {
    margin-bottom: 15px;
}

.frmcontent input[type="text"],
.frmcontent select {
    padding: 6px 10px;
    margin-right: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.frmcontent input[type="submit"] {
    padding: 6px 12px;
    background: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.frmcontent input[type="submit"]:hover {
    background: #43a047;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table th,
table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

table th {
    background: #f2f2f2;
    font-weight: bold;
}

table tr:nth-child(even) {
    background: #f9f9f9;
}

table tr:hover {
    background: #f1f1f1;
}

/* Button sửa/xóa */
table input[type="button"] {
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 0 2px;
}

table input[value="sửa"] {
    background: #3498db;
    color: #fff;
}

table input[value="sửa"]:hover {
    background: #2980b9;
}

table input[value="xóa"] {
    background: #e74c3c;
    color: #fff;
}

table input[value="xóa"]:hover {
    background: #c0392b;
}

/* Các nút bên dưới table */
.frmcontent .row.mb10 input[type="button"] {
    padding: 6px 12px;
    border-radius: 4px;
    border: none;
    margin-right: 6px;
    cursor: pointer;
    background: #4CAF50;
    color: #fff;
}

.frmcontent .row.mb10 input[type="button"]:hover {
    background: #43a047;
}

.frmcontent .row.mb10 a input[type="button"] {
    background: #3498db;
}

.frmcontent .row.mb10 a input[type="button"]:hover {
    background: #2980b9;
}

        </style>