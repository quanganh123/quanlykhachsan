<?php
require 'MysqliConnection.php';
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM `quanlythuvien` WHERE user_name='$user_name' AND password='$password' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header('Location: http://localhost/code/QLthuvien2');
    }else
    {
        echo "Sai MẬT KHẨU hoặc TÀI KHOẢN!";
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bai1/assets/css/bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title>Quản Lý Thư Viện</title>
</head>
<body>
    <form id="from_reg" class="bg-light p-4 my-3" action="/code/index.php" method="post">
    <br><input type="submit" class="btn btn-outline-info offset-3 col-6" name="btn-reg" value="Quay Lại Trang Chính">
    </form>
</body>
</html>