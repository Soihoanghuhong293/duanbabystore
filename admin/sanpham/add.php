 <div class="row">
            <div class="row frmtitle">
                <h1>them moi loai san pham</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh muc san pham <br>
                       <select name="iddm" >
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';

                        }
                        ?>
                          <option value=""></option>
                       </select>

                    </div>
                     <div class="row mb10">
                         ten san pham <br>
                    <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                      gia<br>
                    <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                    hinh anh<br>
                    <input type="file" name="hinh" >
                    </div>
                    <div class="row mb10">
                    mo ta <br>
                    
                    <textarea name="mota"  cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Them moi">
                        <input type="reset" value="nhap lai">
                        <a href="index.php?act=listsp">
                        <input type="button" value="danh sasch"></a>
                        
                    </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                  
                ?>
                </form>
            </div>
        </div>
    </div>
    <style>
        /* Khung tổng */
.row {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    font-family: Arial, sans-serif;
}

/* Tiêu đề */
.frmtitle h1 {
    background: #4CAF50;   /* xanh lá nổi bật */
    color: white;
    padding: 12px 20px;
    margin: 0;
    border-radius: 6px 6px 0 0;
    text-align: center;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Nội dung form */
.frmcontent {
    background: #fff;
    border: 1px solid #ddd;
    border-top: none;
    padding: 20px;
    border-radius: 0 0 6px 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: 0 auto;
}

/* Label + input */
.frmcontent label,
.frmcontent br {
    margin-bottom: 5px;
    display: block;
    font-weight: bold;
    color: #333;
}

.frmcontent input[type="text"],
.frmcontent input[type="file"],
.frmcontent select,
.frmcontent textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 14px;
    transition: border 0.3s;
}

.frmcontent input[type="text"]:focus,
.frmcontent select:focus,
.frmcontent textarea:focus {
    border-color: #4CAF50;
    outline: none;
}

/* Nút bấm */
.frmcontent input[type="submit"],
.frmcontent input[type="reset"],
.frmcontent input[type="button"] {
    background: #4CAF50;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    margin-right: 8px;
    transition: background 0.3s;
}

.frmcontent input[type="reset"] {
    background: #f39c12; /* cam */
}

.frmcontent input[type="button"] {
    background: #3498db; /* xanh dương */
}

.frmcontent input[type="submit"]:hover {
    background: #43a047;
}

.frmcontent input[type="reset"]:hover {
    background: #e67e22;
}

.frmcontent input[type="button"]:hover {
    background: #2980b9;
}

/* Thông báo */
.frmcontent .thongbao {
    margin-top: 10px;
    font-size: 14px;
    color: #e74c3c;
}

    </style>