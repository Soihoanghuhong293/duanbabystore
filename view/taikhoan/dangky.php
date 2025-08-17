<div class="boxtitle">Đăng ký thành viên</div>
<div class="boxcontent">
    <form action="index.php?act=dangky" method="post">
        <input type="text" name="user" placeholder="Tên đăng nhập" required><br>
        <input type="password" name="pass" placeholder="Mật khẩu" required><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="submit" name="dangky" value="Đăng ký">
    </form>
    <h3 style="color:green">
        <?php if(isset($thongbao) && $thongbao!="") echo $thongbao; ?>
    </h3>
</div>
