
<?php
     if(is_array($dm)){
        extract($dm);
     }
?>

<div class="row">
            <div class="row frmtitle">
                <h1>cap nhat loai hang hoa</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        ma loai <br>
                    <input type="text" name="maloai" disabled>

                    </div>
                     <div class="row mb10">
                    ten loai <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;  ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">

                        <input type="submit" name="capnhat" value="cap nhat">
                        <input type="reset" value="nhap lai">
                        <a href="index.php?act=listdm">
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
        /* Khung tổng form */
.frmcontent {
    background: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 6px;
    max-width: 500px; /* rộng vừa đủ */
    margin: 20px auto; /* căn giữa màn hình */
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

/* Input */
.frmcontent input[type="text"],
.frmcontent input[type="hidden"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

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
    background: #4CAF50; /* mặc định xanh lá */
    transition: background 0.3s;
}

.frmcontent input[type="reset"] {
    background: #f39c12; /* cam */
}

.frmcontent input[type="button"] {
    background: #3498db; /* xanh dương */
}

.frmcontent input[type="submit"]:hover { background: #43a047; }
.frmcontent input[type="reset"]:hover { background: #e67e22; }
.frmcontent input[type="button"]:hover { background: #2980b9; }

/* Thông báo */
.frmcontent .thongbao {
    margin-top: 10px;
    font-size: 14px;
    color: #e74c3c;
    text-align: center;
}

/* Căn giữa toàn bộ div nút */
.frmcontent .row.mb10 {
    text-align: center;
}

    </style>