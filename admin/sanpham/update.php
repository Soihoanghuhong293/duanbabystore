
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