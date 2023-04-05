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
            <form id="from_reg" class="bg-light p-4 my-3" action="AddnewMenber.php" method="post">
            <h3 class="text-center">Thêm Mới Menber</h2>
            <div class="form-group">
                    <label for="HoVaTen">Họ và tên</label>
                    <input type="text" name="fullname" class="form-control" id="HoVaTen">
                </div>
                <div class="form-group">
                    <label for="MaSinhVien">Mã Thành Viên</label>
                    <input type="text" name="idmenber" class="form-control" id="MaMenber">
                </div>
                <div class="form-group">
                    <label for="VaiTro">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" id="DiaChi">
                </div>
                <div class="form-group">
                    <label for="VaiTro">Liên Hệ</label>
                    <input type="text" name="contact" class="form-control" id="Lienhe">
                </div>
                <input type="submit" class="btn btn-outline-primary btn-block mt-4 offset-3 col-6" name="btn-reg" value="Thêm Vào">
            </form>
            </div>
        </div>
    </div>
</body>
</html>