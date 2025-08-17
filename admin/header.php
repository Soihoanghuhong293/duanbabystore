<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
 
</head>
<body>
  <div class="boxcenter">
    <div class="row mb headeradmin">
      ADMIN BY PXQ 
    </div>

    <div class="row mb menu">
      <ul>
        <li><a href="index.php?act=listtk">👤 Tài khoản</a></li>
        <li><a href="index.php?act=adddm">📂 Danh mục</a></li>
        <li><a href="index.php?act=addsp">📦 Hàng hóa</a></li>
        <li><a href="index.php?act=dsbl">💬 Bình luận</a></li>
        <li><a href="index.php?act=thongke">📊 Thống kê</a></li>
        <li><a href="../index.php">🏠 Trang chủ</a></li>

      </ul>
    </div>

    <div class="content">
      <div class="card">
        <h2>Chào mừng bạn đến trang quản trị</h2>
      </div>
    </div>
  </div>
</body>
</html>




 <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Arial, sans-serif;
    }

    body {
      background: #f0f2f5;
      color: #333;
      width: 980px;
      margin: 0 auto;
    }

    .boxcenter {
      width: 100%;
      margin: 0 auto;
    }

    /* Header */
    .headeradmin {
      background: #0077b6;
      color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 1px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    /* Menu */
    .menu {
      background: #0096c7;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .menu ul {
      display: flex;
      list-style: none;
      justify-content: center;
    }

    .menu ul li {
      margin: 0 15px;
    }

    .menu ul li a {
      display: block;
      padding: 14px 20px;
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      border-radius: 6px;
      transition: 0.3s;
    }

    .menu ul li a:hover {
      background: #48cae4;
    }

    /* Nội dung giả để bạn thấy */
    .content {
      padding: 30px;
      text-align: center;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      margin: 15px auto;
      max-width: 600px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
  </style>