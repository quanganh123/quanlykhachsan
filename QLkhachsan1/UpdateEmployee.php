<?php
$EmployeeId=null;
$Employee = null;
if(isset($_GET['Id']))
    $EmployeeId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlythuvien3 where Id=" . $EmployeeId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Employee = $row;
        }
    }
}else{
    $Employee=array(
        "Id"=>"",
        "HoVaTen"=>"",
        "Designation"=>"",
        "User_name"=>"",
        "Password"=>"",
    );
}
?>
<form class="pt-5" method="post" action="index.php?action=post_update">
<h3 class="text-center">Sửa Employee</h2>
    <div class="row">
        <div class="offset-4 col-4">
            <div class="form-group">
                <label for="HoVaTen">Họ và tên</label>
                <input type="text" class="form-control" id="HoVaTen" name="HoVaTen">
            </div>
                <div class="form-group">
                    <label for="Designation">Chỉ Định</label>
                    <input type="text" class="form-control" id="Designation" name="Designation">
                </div>
            <div class="form-group">
                <label for="User_name">User_name</label>
                <input type="text" class="form-control" id="User_name" name="User_name">
            </div>
            <div class="form-group">
                <label for="text">Password</label>
                <input type="text" class="form-control" id="Password" name="Password">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-4">
                <button class="btn btn-outline-primary">Cập nhật</button>
        </div>
    </div>
    <input type="hidden" name="Id" value="<?php echo $Employee["Id"] ?>">
</form>
