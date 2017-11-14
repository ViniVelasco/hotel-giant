<?php
session_start();
$result = array();
if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role'] = "admin"){
        $result['logado'] = true;
//        $result['userImage'] =  'users-images/' . $_SESSION['user_image'];
        echo json_encode($result);
    } else {
        $result['logado'] = false;
        echo json_encode($result);
    }
}