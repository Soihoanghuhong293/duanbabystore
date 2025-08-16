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
                                <a href=""> dang ky thanh vien</a>
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