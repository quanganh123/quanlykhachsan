<?php
$BookId=null;
$Book = null;
if(isset($_GET['Id']))
    $BookId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlythuvien2 where Id=" . $BookId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Book = $row;
        }
    }
}else{
    $Book=array(
        "Id"=>"",
        "TenSach"=>"",
        "TieuDe"=>"",
        "Gia"=>"",
        "TrangThai"=>"",
    );
}
?>
<form class="pt-5" method="post" action="index.php?action=post_update">
    <h3 class="text-center">Sửa Book</h3>
    <div class="row">
        <div class="offset-4 col-4">
            <div class="form-group">
                <label for="TenSach">Tên Sách</label>
                <input type="text" class="form-control" id="TenSach" name="Tensach">
            </div>
                <div class="form-group">
                    <label for="TieuDe">Tiêu Đề</label>
                    <input type="text" class="form-control" id="TieuDe" name="TieuDe">
                </div>
            <div class="form-group">
                <label for="Gia">Giá</label>
                <input type="text" class="form-control" id="Gia" name="Gia">
            </div>
            <div class="form-group">
                <label for="TenTacGia">Tác Giả</label>
                <input type="text" class="form-control" id="TacGia" name="TacGia">
            </div>
            <div class="form-group">
                <label for="TenNhaXuatBan">Nhà Xuất Bản</label>
                <input type="text" class="form-control" id="TenNhaXuatBan" name="TenNhaXuatBan">
            </div>
            <div class="form-group">
                <label for="TrangThai">Trạng Thái</label>
                <input type="text" class="form-control" id="TrangThai" name="TrangThai">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-4">
                <button class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
    <input type="hidden" name="Id" value="<?php echo $Book["Id"] ?>">
</form>
