<div class="row">
    <div class="col-md-12">
        <?php
        switch ($action){
            case "update":
            case "insert":
                include $RootPath."/UpdateMenber.php";
                break;
            default:
                include $RootPath."/ShowMenber.php";
        }
        ?>
    </div>
</div>
