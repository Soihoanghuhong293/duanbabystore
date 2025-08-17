
<?php
    if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = "../upload/" . $img;

if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "không có hình";
}

?>

<div class="row">
            <div class="row frmtitle">
                <h1>cap nhat loai hang hoa</h1>
            </div>
            <div class="row frmcontent">
                                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                       <select name="iddm">
    <option value="0">Tất cả</option>
    <?php
        foreach ($listdanhmuc as $danhmuc) {
            // Lấy id và name của danh mục
            $iddm_dm = $danhmuc['id'];
            $tendm   = $danhmuc['name'];

            // Nếu sản phẩm đang có iddm trùng với danh mục thì chọn sẵn
            if ($iddm == $iddm_dm) {
                echo '<option value="'.$iddm_dm.'" selected>'.$tendm.'</option>';
            } else {
                echo '<option value="'.$iddm_dm.'">'.$tendm.'</option>';
            }
        }
    ?>
</select>


                      

                    </div>
                     <div class="row mb10">
                         ten san pham <br>
                    <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb10">
                      gia<br>
                    <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                    hinh anh<br>
                    <input type="file" name="hinh"  >
                    <?=$hinh ?>
                    </div>
                    <div class="row mb10">
                    mo ta <br>
                    
               <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <input type="submit" name="capnhat" value="cap nhat">
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
.frmcontent {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    margin-top: 15px;
    max-width: 600px;
    margin: 0 auto;
}

/* Tiêu đề */
.frmtitle h1 {
    background: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 0 0 10px 0;
    border-radius: 6px 6px 0 0;
    font-size: 20px;
    text-align: center;
}

/* Input + select + textarea */
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
    background: #f39c12;
}

.frmcontent input[type="button"] {
    background: #3498db;
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

/* Hình sản phẩm hiện tại */
.frmcontent img {
    margin-top: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

    </style>