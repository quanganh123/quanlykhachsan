<?php 
require 'MysqliConnection.php';
if(isset($_POST['btn-reg']))
{
    $namebook=$_POST['namebook'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $status=$_POST['status'];
    $fullname=$_POST['fullname'];
    $fullname1=$_POST['fullname1'];
    if(!empty($namebook)&&!empty($title)&&!empty($price)&&!empty($status)&!empty($fullname)&!empty($fullname1))
    {
        $sql = "INSERT INTO `quanlythuvien6` (`TenSach`,`TieuDe`,`Gia`,`TrangThai`,`TacGia`,`NhaXuatBan`)
        VALUES( '$namebook','$title', '$price','$status','$fullname','$fullname1')";
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
    <title>Document</title>
</head>
<body>
    
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
