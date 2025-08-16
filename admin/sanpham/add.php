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