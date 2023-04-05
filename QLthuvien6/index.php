<!doctype html>
<?php
$RootPath=__DIR__;
require_once "MysqliConnection.php";
$action="";
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch ($action){
    case "post_update":
        UpdateData($conn);
        break;
    case "delete":
        DeleteData($conn);
    default:
        break;
}

function UpdateData($conn)
{
    $Id=$_POST['Id'];
    $TenSach=$_POST['TenSach'];
    $TieuDe=$_POST['TieuDe'];
    $Gia=$_POST['Gia'];
    $TrangThai=$_POST['TrangThai'];
    $fullname=$_POST['TenTacGia'];
    $fullname1=$_POST['TenNhaXuatBan'];
    $sql="Update quanlythuvien6 set TenSach='$TenSach',TieuDe='$TieuDe', Gia='$Gia', TrangThai='$TrangThai', TacGia='$fullname' , NhaXuatBan='$fullname1'WHERE Id=".$Id;
    $conn->query($sql);
}
function DeleteData($conn){
    $Id=$_GET['Id'];
    $sql="Delete From quanlythuvien6 WHERE Id=".$Id;
    $conn->query($sql);
}
require_once "ListBook.php";

?>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bai1/assets/css/bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bai1/assets/css/style.css">
    <title>Quản Lý Thư Viện</title>
</head>
<body>
    <?php include "./body.php"?>
</body>
</html>
<?php
$conn->close();
?>