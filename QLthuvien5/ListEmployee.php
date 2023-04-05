<?php
$ListEmployee=array();
$sql="Select Id,HoVaTen,Designation,User_name,Password From quanlythuvien3";
$result=$conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListEmployee,$row);
    }
}
?>