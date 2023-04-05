<?php
$ListMenber=array();
$sql="Select Id,HoVaTen,MaMenber,DiaChi,LienHe From quanlythuvien2";
$result=$conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListMenber,$row);
    }
}

    ?>