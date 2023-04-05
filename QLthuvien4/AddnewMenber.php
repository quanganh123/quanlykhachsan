<?php 
require 'MysqliConnection.php';
if(isset($_POST['btn-reg']))
{
    $idmenber=$_POST['idmenber'];
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    if(!empty($idmenber)&&!empty($fullname)&&!empty($address)&&!empty($contact))
    {
        $sql = "INSERT INTO `quanlythuvien2` (`HoVaTen`,`MaMenber`,`DiaChi`,`LienHe`)
        VALUES( '$fullname','$idmenber', '$address','$contact')";
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
</body>
</html>
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
