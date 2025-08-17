<h2>Danh sách tài khoản</h2>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Email</th>
        <th>Vai trò</th>
        <th>Hành động</th>
    </tr>
    <?php 
    foreach ($listtk as $tk) {
        extract($tk);
        echo '<tr>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$email.'</td>
                <td>'.$role.'</td>
                <td>
                    <a href="index.php?act=xoatk&id='.$id.'">Xóa</a>
                </td>
            </tr>';
    }
    ?>
</table>
