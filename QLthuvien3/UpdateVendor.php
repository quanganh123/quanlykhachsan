<?php
$VendorId=null;
$Vendor = null;
if(isset($_GET['Id']))
    $VendorId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlythuvien1 where Id=" . $VendorId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Vendor = $row;
        }
    }
}else{
    $Vendor=array(
        "Id"=>"",
        "HoVaTen"=>"",
    );
}
?>
<form class="pt-5" method="post" action="index.php?action=post_update">
<h3 class="text-center">Sửa Venbor</h2>
    <div class="row">
        <div class="offset-4 col-4">
            <div class="form-group">
                <label for="HoVaTen">Họ và tên</label>
                <input type="text" class="form-control" id="HoVaTen" name="HoVaTen">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-4">
                <button class="btn btn-outline-primary">Cập nhật</button>
        </div>
    </div>
    <input type="hidden" name="Id" value="<?php echo $Vendor["Id"] ?>">
</form>
