<?php
$AdminId=null;
$Admin = null;
if(isset($_GET['Id']))
    $AdminId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlythuvien where Id=" . $AdminId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Admin = $row;
        }
    }
}else{
    $Admin=array(
        "Id"=>"",
        "HoVaTen"=>"",
        "MaAdmin"=>"",
        "VaiTro"=>"",
        "User_name"=>"",
        "Password"=>"",
    );
}
?>
<form class="pt-5" method="post" action="index.php?action=post_update">
    <h3 class="text-center">Sửa Admin</h3>
    <div class="row">
        <div class="offset-4 col-4">
            <div class="form-group">
                <label for="HoVaTen">Họ và tên</label>
                <input type="text" class="form-control" id="HoVaTen" name="HoVaTen">
            </div>
                <div class="form-group">
                    <label for="MaSinhVien">Mã Admin</label>
                    <input type="text" class="form-control" id="MaAdmin" name="MaAdmin">
                </div>
            <div class="form-group">
                <label for="Tuoi">Vai Trò</label>
                <input type="text" class="form-control" id="VaiTro" name="VaiTro">
            </div>
            <div class="form-group">
                <label for="User_name">User_name</label>
                <input type="text" class="form-control" id="User_name" name="User_name">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="text" class="form-control" id="Password" name="Password">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-4">
                <button class="btn btn-outline-primary">Cập nhật</button>
        </div>
    </div>
    <input type="hidden" name="Id" value="<?php echo $Admin["Id"] ?>">
</form>
