 <div class="row">
            <div class="row frmtitle"><h1>DANH SÁCH HÀNG HÓA</h1></div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                             foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                         <td><input type="checkbox" name="" id=""></td>
                                         <td>'.$id.'</td>
                                         <td>'.$name.'</td>
                                         <td><a href="'.$suadm.'"><input type="button" value="sua"></a>  <a href="'.$xoadm.'"><input type="button" value="xoa"></a></td>
                                      </tr>';
                             }
                        ?>
                        
                    </table>
                   
                </div>
                <div class="row mb10">
                    <!-- <input type="button" value="chon tat ca">
                    <input type="button" value=" bo chon tat ca">
                    <input type="button" value="xoa cac muc da chon"> -->
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" style="display:block; margin: 10px auto; ">
</a>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="view/css/style.css">
        <style>
            /* Khung tổng form */
.frmcontent {
    background: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 6px;
    max-width: 600px;
    margin: 20px auto;
    font-family: Arial, sans-serif;
}

/* Tiêu đề form */
.frmtitle h1 {
    background: #4CAF50;
    color: #fff;
    padding: 10px;
    margin: 0 0 15px 0;
    border-radius: 6px 6px 0 0;
    text-align: center;
    font-size: 18px;
}

/* Input, select, textarea */
.frmcontent input[type="text"],
.frmcontent input[type="file"],
.frmcontent select,
.frmcontent textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

/* Input disabled */
.frmcontent input[disabled] {
    background: #f0f0f0;
    color: #999;
}

/* Nút bấm */
.frmcontent input[type="submit"],
.frmcontent input[type="reset"],
.frmcontent input[type="button"] {
    padding: 8px 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: #fff;
    margin-right: 6px;
}

/* Màu nút */
.frmcontent input[type="submit"] { background: #4CAF50; }
.frmcontent input[type="reset"] { background: #f39c12; }
.frmcontent input[type="button"] { background: #3498db; }

/* Hover */
.frmcontent input[type="submit"]:hover { background: #43a047; }
.frmcontent input[type="reset"]:hover { background: #e67e22; }
.frmcontent input[type="button"]:hover { background: #2980b9; }

/* Bảng danh sách sản phẩm/danh mục */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table th, table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

table th {
    background: #f2f2f2;
}

table tr:nth-child(even) { background: #f9f9f9; }
table tr:hover { background: #f1f1f1; }

        </style>