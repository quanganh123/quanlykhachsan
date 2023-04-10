<?php 
require 'MysqliConnection.php';
if(isset($_POST['btn-reg']))
{
    $fullname=$_POST['fullname'];
    $designation=$_POST['designation'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    if(!empty($designation)&&!empty($fullname)&&!empty($user_name)&&!empty($password))
    {
        $sql = "INSERT INTO `quanlythuvien3` (`HoVaTen`,`Designation`,`user_name`,`password`)
        VALUES( '$fullname','$designation', '$user_name', '$password')";
        if($conn->query($sql)===TRUE)
        {
            echo "Lưu dữ liệu thành công!";
        }else
        {
            echo "Lõi {$sql}". $conn->errno;
        }
    }else
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
    <form id="from_reg" class="bg-light p-4 my-3" action="index.php" method="post">
    <br><input type="submit" class="btn btn-outline-info offset-3 col-6" name="btn-reg" value="Quay Lại Trang Chính">
    </form>
</body>
</html>
</div>
