<?php
    require_once "model/db.php";
    require_once "model/product.php";
    require_once "view/header.php";

    if(isset($_GET["page"])$$($_GET["page"])!=""){
        $page = $_GET['page'];

        switch ($page) {
            case 'value':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        
    }else{
        require_once "view/home.php";
    }
    require_once "view/footer.php";
?>
