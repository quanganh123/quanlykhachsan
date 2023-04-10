<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bai1/assets/css/bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title>Quản Lý Thư Viện</title>
</head>
<body>
<div class="row">
        <div class="titledangky col-sm-6">
            <h1 class="pt-5 my-5">Quản Lý Thư Viện </h1>
        </div>
        <div class="fromdangky pt-5 my-5">
            <form action="/code/QLthuvien2/AddnewAdmin.php" method="post">
                <h3 class="namefrom">Đăng Ký</h3>
                <div class="form-group">
                    <label for="HoVaTen">Họ và tên</label>
                    <input type="text" name="fullname" class="form-control" id="HoVaTen" placeholder="Nhập Họ Và Tên" required>
                    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                </div>
                <div class="form-group">
                    <label for="MaSinhVien">Mã Admin</label>
                    <input type="text" name="idadmin" class="form-control" id="MaAdmin" placeholder="Nhập Mã Admin" required>
                    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                </div>
                <div class="form-group">
                    <label for="VaiTro">Vai trò</label>
                    <input type="text" name="role" class="form-control" id="Vaitro" placeholder="Nhập Vai Trò" required>
                    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                </div>
                <div class="form-group">
                    <label for="user_name">Tài Khoản:</label>
                    <input type="text" class="form-control" id="user_name" placeholder="Nhập Tài Khoản" name="user_name" required>
                    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                </div>
                <div class="form-group">
                    <label for="password">Mật Khẩu:</label>
                    <input type="text" class="form-control" id="password" placeholder="Nhập Mật Khẩu" name="password" required>
                    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                </div>
                <button type="submit" class="btn btn-info offset-3 col-6" name="btn-reg">Đăng Ký</button>
            </form>
            <br>
            <form action="/code/index.php">
                <button type="submit" class="btn btn-info offset-3 col-6" >Đăng Nhập</button>
            </form>
        </div>
    </div>
</body>
</html>