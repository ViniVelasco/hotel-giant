<?php require_once("classes/User.php") ?>
<?php require_once("db.php"); ?>
<?php
$user_email = mysqli_escape_string($connection, $_POST['user_email']);
$query = "SELECT user_email FROM users where user_email = '{$user_email}' ";
$select_users = mysqli_query($connection, $query);
if($select_users->num_rows > 0){
    die("Já existe um usuário com este email no sistema.");
} else {
    $user_firstname = mysqli_escape_string($connection, $_POST['user_firstname']);
    $user_lastname = mysqli_escape_string($connection, $_POST['user_lastname']);
    $user_password = mysqli_escape_string($connection, $_POST['user_password']);
    $user_image = $_FILES['image']['name'];
    $user_image_tmp = $_FILES['image']['tmp_name'];
    $user_role = $_POST['user_role'];
    move_uploaded_file($user_image_tmp, "../users-images/$user_image");

    $user = new User();
    $user->setUserFirstname($user_firstname);
    $user->setUserLastname($user_lastname);
    $user->setUserPassword($user_password);
    $user->setUserEmail($user_email);
    $user->setUserImage($user_image);

    $query = "INSERT INTO users (user_firstname, user_lastname, user_password, user_email, user_image, user_role) ";
    $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_password}', '{$user_email}', '{$user_image}', '{$user_role}') ";
    $insert_user = mysqli_query($connection, $query);

    $result = array();
    if(!$insert_user){
        $result['insertUser'] = false;
        echo json_encode($result);
        die("Error: " . mysqli_error($connection));

    }

    $result['insertUser'] = true;
    echo json_encode($result);
}



