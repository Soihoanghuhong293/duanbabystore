<?php
function insert_taikhoan($user, $pass, $email){
    $sql = "INSERT INTO taikhoan(user, password, email) 
            VALUES('$user','$pass','$email')";
    pdo_execute($sql);
}
// Lấy danh sách tài khoản
function loadall_taikhoan(){
    $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}

// Xóa tài khoản
function delete_taikhoan($id){
    $sql = "DELETE FROM taikhoan WHERE id=".$id;
    pdo_execute($sql);
}
