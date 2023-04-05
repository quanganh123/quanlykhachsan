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
        <div class="titledangnhap col-sm-6">
            <h1 class="pt-5 my-5">Quản Lý Thư Viện</h1>
        </div>
        <div class="fromdangnhap pt-5 my-5">
            <form action="/code/QLthuvien2/Treckdangnhap.php" class="was-validated" method="post">
                <h3 class="namefrom">Đăng Nhập</h3>
                <div class="form-group">
                    <label for="user_name">Tài Khoản:</label>
                    <input type="text" class="form-control" id="user_name" placeholder="Nhập Tài Khoản" name="user_name" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                </div>
                <div class="form-group">
                    <label for="password">Mật Khẩu:</label>
                    <input type="password" class="form-control" id="password" placeholder="Nhập Mật Khẩu" name="password" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                </div>
                <button type="submit" class="btn btn-info offset-3 col-6">Đăng Nhập</button>
            </form>
            <br>
            <form action="/code/dangky.php">
                <button type="submit" class="btn btn-info offset-3 col-6">Đăng Ký</button>
            </form>
        </div>
    </div>
</body>
</html>
