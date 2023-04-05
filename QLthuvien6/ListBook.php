<?php
$ListBook=array();
$sql="Select Id,TenSach,TieuDe,Gia,TrangThai,TacGia,NhaXuatBan From quanlythuvien6";
$result=$conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListBook,$row);
    }
}
?>