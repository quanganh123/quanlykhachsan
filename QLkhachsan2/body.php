<div class="row">
    <div class="col-md-12">
        <?php
        switch ($action){
            case "update":
            case "insert":
                include $RootPath."/UpdateBook.php";
                break;
            default:
                include $RootPath."/ShowBook.php";
        }
        ?>
    </div>
</div>
