 <div class="row">
            <div class="row frmtitle">
                <h1>them moi loai hang hoa</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        ma loai <br>
                    <input type="text" name="maloai" disabled>

                    </div>
                     <div class="row mb10">
                    ten loai <br>
                    <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Them moi">
                        <input type="reset" value="nhap lai">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>

                        
                    </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                   
                ?>
                </form>
            </div>
        </div>
    </div>