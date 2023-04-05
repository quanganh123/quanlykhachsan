<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bai1/assets/css/bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title>Quản Lý Thư Viện</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="offset-3 col-6">
            <form id="from_reg" class="bg-light p-4 my-3" action="AddnewBook.php" method="post">
            <h3 class="text-center">Thêm Mới Book</h2>
            <div class="form-group">
                    <label for="TenSach">Tên Sách</label>
                    <input type="text" name="namebook" class="form-control" id="TenSach">
                </div>
                <div class="form-group">
                    <label for="TIeuDe">Tiêu Đề</label>
                    <input type="text" name="title" class="form-control" id="TieuDe">
                </div>
                <div class="form-group">
                    <label for="Gia">Giá</label>
                    <input type="text" name="price" class="form-control" id="Gia">
                </div>
                <div class="form-group">
                    <label for="TacGia">Tác Giả</label>
                    <input type="text" name="fullname" class="form-control" id="TacGia">
                </div>
                <div class="form-group">
                    <label for="NhaXuatBan">Nhà Xuất Bản</label>
                    <input type="text" name="fullname1" class="form-control" id="NhaXuatBan">
                </div>
                <div class="form-group">
                    <label for="Trạng Thái">Trạng Thái</label>
                    <input type="text" name="status" class="form-control" id="TrangThai">
                </div>
                <input type="submit" class="btn btn-outline-primary btn-block mt-4 offset-3 col-6" name="btn-reg" value="Thêm Vào">
            </form>
            </div>
        </div>
    </div>
</body>
</html>