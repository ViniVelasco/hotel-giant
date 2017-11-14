<?php require_once("includes/db.php"); ?>
<?php require_once("includes/header_admin.php")?>
<?php require_once("includes/navigation.php"); ?>
<div id="page-wrapper">
<?php
        $source = '';
        if(isset($_GET['source'])){
            $source = $_GET['source'];

        }
    switch($source){
        case 'add_user':
            require_once("includes/add_user.php");
            break;
        case 'edit_user':
            require_once("includes/edit_user.php");
            break;
        default:
            require_once("includes/view_all_users.php");
    }
?>
</div>
<?php require_once("includes/footer_admin.php") ?>
