<div class="row mb">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner">
                        <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="view/img/banner1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="view/img/banner2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="view/img/banner3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $i=0;
                    foreach ($spnew as $sp){
                        extract($sp);
                        $hinh=$img_path.$img;
                        if(($i==2) || ($i==5)||($i==8)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp '.$mr.'">
        <div class="row img"><img src="'.$hinh.'" alt=""></div>
        <p class="price">$'.$price.'</p>
        <a class="product-name" href="#">'.$name.'</a>
      </div>';
                               $i+=1;
                    }
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="view/img/sp1.jpeg" alt=""></div>
                        <p>$30</p>
                        <a href="#">dong ho</a>
                    </div> -->
                </div>

            </div>
            <div class="boxphai ">
                <div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent fromtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10" >
                             Ten dang nhap  <br>
                           <input  type="text" name="user" id="">
                           </div>
                           <div class="row mb10" >
                             mat khau <br>
                             <input type="password" name="pass" id="">
                             </div>

                            
                            <div class="row mb10" >
                            ghi nho dang nhap <br>
                            <input type="checkbox" name="" id=""> 
                            </div>
                            <div class="row mb10" >
                            <input type="submit" value="Dang nhap">
                            </div>
                            
                        </form>
                        <li>
                                <a href=""> quen mat khau</a>
                            </li>
                            <li>
                                <a href="index.php?act=dangky">Đăng ký thành viên</a>
                            </li>
                    </div>

                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                            }
                             ?>
                            <!-- <li><a href="#">Dong ho</a></li>
                            <li><a href="#">lap top</a></li>
                            <li><a href="#">Dien thoai</a></li>
                            <li><a href="#">balo</a></li> -->
                        </ul>

                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text">
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        
                        <div class="row mb10 top10">
                            <img src="view/img/sp1.jpeg" alt="">
                            <a href="#">cay but than lly</a>

                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/sp1.jpeg" alt="">
                            <a href="#">cay but than lly</a>

                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/sp1.jpeg" alt="">
                            <a href="#">cay but than lly</a>

                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/sp1.jpeg" alt="">
                            <a href="#">cay but than lly</a>

                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/sp1.jpeg" alt="">
                            <a href="#">cay but than lly</a>

                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/sp1.jpeg" alt="">
                            <a href="#">cay but than lly</a>

                        </div>
                    </div>
                </div>
            </div>
            

        </div>





        <style>
            /* Khung bên phải */
.boxphai {
    width: 250px;
    float: right;
    font-family: Arial, sans-serif;
    font-size: 14px;
}

/* Tiêu đề từng box */
.boxtitle {
    background: #2c3e50;
    color: #fff;
    padding: 10px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 6px 6px 0 0;
}

/* Nội dung trong box */
.boxcontent, 
.boxcontent2 {
    border: 1px solid #ddd;
    border-top: none;
    padding: 12px;
    background: #f9f9f9;
    border-radius: 0 0 6px 6px;
}

/* Form tài khoản */
.fromtaikhoan input[type="text"],
.fromtaikhoan input[type="password"] {
    width: 100%;
    padding: 6px;
    margin-top: 4px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.fromtaikhoan input[type="submit"] {
    background: #27ae60;
    color: #fff;
    padding: 8px 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.fromtaikhoan input[type="submit"]:hover {
    background: #219150;
}

/* Menu danh mục */
.menudoc ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.menudoc ul li {
    border-bottom: 1px solid #eee;
}

.menudoc ul li a {
    display: block;
    padding: 8px;
    text-decoration: none;
    color: #333;
}

.menudoc ul li a:hover {
    background: #eee;
    color: #27ae60;
}

/* Search box */
.searbox {
    text-align: center;
    margin-top: 8px;
}

.searbox input[type="text"] {
    width: 90%;
    padding: 6px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Top 10 yêu thích */
.top10 {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
}

.top10 img {
    width: 40px;
    height: 40px;
    object-fit: cover;
    margin-right: 8px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

.top10 a {
    color: #333;
    text-decoration: none;
}

.top10 a:hover {
    color: #27ae60;
    text-decoration: underline;
}

        </style>