<?php 
require 'MysqliConnection.php';
if(isset($_POST['btn-reg']))
{
    $fullname=$_POST['fullname'];
    $idadmin=$_POST['idadmin'];
    $role=$_POST['role'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    if(!empty($fullname)&&!empty($idadmin)&&!empty($role)&&!empty($user_name)&&!empty($password))
    {
        $sql = "INSERT INTO `quanlythuvien` (`HoVaTen`,`MaAdmin`,`VaiTro`,`User_name`,`Password`)
        VALUES('$fullname', '$idadmin', '$role', '$user_name', '$password')";
        if($conn->query($sql)===TRUE)
        {
            echo "Lưu dữ liệu thành công!";
        }else
        {
            echo "Lỗi {$sql}". $conn->errno;
        }
    }
    else
    {
        echo "Bạn cần nhập đầy đú thông tin trước khi thêm!";
    }
}
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
    <form id="from_reg" class="bg-light p-4 my-3" action="/code/QLthuvien2/index.php" method="post">
    <br><input type="submit" class="btn btn-outline-info offset-3 col-6" name="btn-reg" value="Quay Lại Trang Chính">
    </form>
</body>
</html>

