<div class="row">
    <div class="col-md-12">
        <?php
        switch ($action){
            case "update":
            case "insert":
                include $RootPath."/UpdateEmployee.php";
                break;
            default:
                include $RootPath."/ShowEmployee.php";
        }
        ?>
    </div>
</div>
