<?php require_once("classes/User.php"); ?>
<?php require_once("db.php"); ?>
<?php
session_start();


$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$user = new User();
$user->setUserEmail($email);
$user->setUserPassword($password);

$query = "SELECT * FROM users WHERE user_email = '{$user->getUserEmail()}' ";
$select_user = mysqli_query($connection, $query);

if(!$select_user){
    die("Error: " . mysqli_error($connection));
} else if($select_user->num_rows == 0) {
    $return['login'] = false;
    echo json_encode($return);
} else {
    while ($row = mysqli_fetch_array($select_user)) {
        $db_user_id = $row['user_id'];
        $db_user_email = $row['user_email'];
        $db_user_password = $row['user_password'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
        $db_user_image = $row['user_image'];
    }

    $return = array();
    if ($user->getUserEmail() !== $db_user_email && $user->getUserPassword() !== $db_user_password) {
        $return['login'] = false;
        echo json_encode($return);
    } else if ($user->getUserEmail() == $db_user_email && $user->getUserPassword() == $db_user_password) {
        $_SESSION['user_email'] = $db_user_email;
        $_SESSION['user_firstname'] = $db_user_firstname;
        $_SESSION['user_lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;
        $_SESSION['user_image'] = $db_user_image;
        $return['login'] = true;
        echo json_encode($return);
    } else {
        $return['login'] = false;
        echo json_encode($return);
    }
}