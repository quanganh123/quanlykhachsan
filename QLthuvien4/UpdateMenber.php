<?php
$MenberId=null;
$Menber = null;
if(isset($_GET['Id']))
    $MenberId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlythuvien2 where Id=" . $MenberId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Menber = $row;
        }
    }
}else{
    $Menber=array(
        "Id"=>"",
        "HoVaTen"=>"",
        "MaMenber"=>"",
        "DiaChi"=>"",
        "LienHe"=>"",
    );
}
?>
<form class="pt-5" method="post" action="index.php?action=post_update">
<h3 class="text-center">Sửa Menber</h2>
    <div class="row">
        <div class="offset-4 col-4">
            <div class="form-group">
                <label for="HoVaTen">Họ và tên</label>
                <input type="text" class="form-control" id="HoVaTen" name="HoVaTen">
            </div>
                <div class="form-group">
                    <label for="MaSinhVien">Mã Thành Viên</label>
                    <input type="text" class="form-control" id="MaMenber" name="MaMenber">
                </div>
            <div class="form-group">
                <label for="Tuoi">Địa Chỉ</label>
                <input type="text" class="form-control" id="DiaChi" name="DiaChi">
            </div>
            <div class="form-group">
                <label for="Tuoi">Liên Hệ</label>
                <input type="text" class="form-control" id="LienHe" name="LienHe">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-4">
                <button class="btn btn-outline-primary">Cập nhật</button>
        </div>
    </div>
    <input type="hidden" name="Id" value="<?php echo $Menber["Id"] ?>">
</form>
