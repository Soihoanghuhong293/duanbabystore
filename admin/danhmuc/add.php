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


    <style>
        /* Khung tổng */
.frmcontent {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    margin-top: 15px;
    max-width: 500px; /* nhỏ hơn form sản phẩm */
    margin: 0 auto; /* căn giữa màn hình */
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

/* Input */
.frmcontent input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 14px;
}

.frmcontent input[type="text"]:disabled {
    background: #f0f0f0;
    color: #999;
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

/* Thông báo */
.frmcontent .thongbao {
    margin-top: 10px;
    font-size: 14px;
    color: #e74c3c;
    text-align: center;
}

    </style>