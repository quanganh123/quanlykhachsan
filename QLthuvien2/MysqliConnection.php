<?php
$server="localhost";
$username="root";
$password="";
$database="quanlythuvien";
$conn=new mysqli($server,$username,$password,$database);
if($conn->connect_error){
    die("connection false:".$conn->connect_error);
}
?>