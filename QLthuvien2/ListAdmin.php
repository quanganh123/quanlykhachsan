<?php
$ListAdmin=array();
$limit=3;
$totalRecord=1;
$offset=isset($_GET["offset"])?(int)$_GET["offset"]:0;
$sql="Select Id,HoVaTen,MaAdmin,VaiTro,User_name,Password From quanlythuvien limit $offset,$limit";
$result=$conn->query($sql);
$total_records= $result->num_rows;
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListAdmin,$row);
    }
}
$sql = "SELECT * from quanlythuvien";
if ($result = mysqli_query($conn, $sql)) 
{
    $totalRecord = mysqli_num_rows( $result );
}
?>


 

