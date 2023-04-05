<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="QLthuvien3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Quản Lý Thư Viện</title>
</head>

<body>
    <div class="row">
        <div class="logo col-sm-2 text-center pt-5">
            <h4 class="col-sm text-danger">Quản Lý Thư Viện</h4>
        </div>
        <div class="col-sm-10">
            <div class="menu">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Quản Lý Thư Viện</a>
                    </li>
                    <li class="nav-item dropdown col-sm-2">
                        <a class="dropdown-toggle text-secondary btn btn-outline-secondary" data-toggle="dropdown" href="">Menu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="http://localhost/code/QLthuvien2">Quản Lý Admin</a>
                            <a class="dropdown-item" href="http://localhost/code/QLthuvien3">Quản Lý Vendor</a>
                            <a class="dropdown-item" href="http://localhost/code/QLthuvien4">Quản Lý Menber</a>
                            <a class="dropdown-item" href="http://localhost/code/QLthuvien5">Quản Lý Employee</a>
                            <a class="dropdown-item" href="http://localhost/code/QLthuvien6">Quản Lý Book</a>
                        </div>
                    </li>
                    <li class="col-sm-7"></li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="/code/index.php">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="text-center text-danger pt-5 my-4">
                <h4>Quản Lý Thư Viện</h4>
            </div>
            <div class="container">
                <div class="input-group mb-3 col-sm-3">
                    <input type="text" class="form-control" id="myInput" placeholder="Search">
                </div>
                <table class="table table-striped table-hover table-sm text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Họ và Tên</th>
                            <th></th>
                            <th><a class="btn btn-outline-success" href="FromAddmewVendor.php">Thêm mới</a></th>
                        </tr>
                    </thead>
                    <tbody class="myTable">
                        <?php foreach ($ListVendor as $Vendor) { ?>
                            <tr>
                                <td><?php echo $Vendor["Id"] ?></td>
                                <td><?php echo $Vendor["HoVaTen"] ?></td>
                                <td><a class="btn btn-outline-success" href="/code/QLthuvien3/index.php?action=update&Id=<?php echo $Vendor["Id"] ?>">Sửa</a></td>
                                <td><a class="btn btn-outline-info" href="/code/QLthuvien3/index.php?action=delete&Id=<?php echo $Vendor["Id"] ?>">Xóa</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>