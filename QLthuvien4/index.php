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
    $HoVaTen=$_POST['HoVaTen'];
    $MaMenber=$_POST['MaMenber'];
    $DiaChi=$_POST['DiaChi'];
    $LienHe=$_POST['LienHe'];
    $sql="Update quanlythuvien2 set HoVaTen='$HoVaTen',MaMenber='$MaMenber', Diachi='$DiaChi', LienHe='$LienHe' WHERE Id=".$Id;
    $conn->query($sql);
}
function DeleteData($conn){
    $Id=$_GET['Id'];
    $sql="Delete From quanlythuvien2 WHERE Id=".$Id;
    $conn->query($sql);
}
require_once "ListMenber.php";

?>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bai1/assets/css/bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php include "./body.php"?>
</body>
</html>
<?php
$conn->close();
?>