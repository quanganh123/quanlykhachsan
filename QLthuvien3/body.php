<div class="row">
    <div class="col-md-12">
        <?php
        switch ($action){
            case "update":
            case "insert":
                include $RootPath."/UpdateVendor.php";
                break;
            default:
                include $RootPath."/ShowVendor.php";
        }
        ?>
    </div>
</div>