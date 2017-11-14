<?php require_once("classes/User.php") ?>
<?php require_once("db.php") ?>
<?php

$user_firstname = mysqli_escape_string($connection, $_POST['user_firstname']);
$user_lastname = mysqli_escape_string($connection, $_POST['user_lastname']);
$user_email = mysqli_escape_string($connection, $_POST['user_email']);
$user_password = mysqli_escape_string($connection, $_POST['user_password']);
$user_role = mysqli_escape_string($connection, $_POST['user_role']);
$user_id = $_POST['user_id'];

$user_image= $_FILES['image']['name'];
$user_image_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($user_image_tmp, "../users-images/" . $user_image);

if(empty($user_image)){
    $query = "SELECT * FROM users WHERE user_id = {$user_id}";
    $search_image = mysqli_query($connection, $query);

    if (!$search_image) {
        die("Error: " . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($search_image)) {
        $user_image = $row['user_image'];
    }

}


$user = new User();
$user->setUserFirstname($user_firstname);
$user->setUserLastname($user_lastname);
$user->setUserImage($user_image);
$user->setUserEmail($user_email);
$user->setUserPassword($user_password);
$user->setUserRole($user_role);
$user->setUserId($user_id);

$query = "UPDATE users SET ";
$query .= "user_firstname = '{$user->getUserFirstname()}', ";
$query .= "user_lastname = '{$user->getUserLastname()}', ";
$query .= "user_email = '{$user->getUserEmail()}', ";
$query .= "user_password = '{$user->getUserPassword()}', ";
$query .= "user_role = '{$user->getUserRole()}', ";
$query .= "user_image = '{$user->getUserImage()} '";
$query .= "WHERE user_id = {$user->getUserId()}";
$update_query = mysqli_query($connection, $query);

if(!$update_query){
    die("Error: " . mysqli_error($connection));
}

$result['updateUser'] = true;
echo json_encode($result);