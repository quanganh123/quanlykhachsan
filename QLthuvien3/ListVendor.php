<?php
$ListVendor=array();
$sql="Select Id,HoVaTen From quanlythuvien1 Limit 5";
$result=$conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListVendor,$row);
    }
}
?>