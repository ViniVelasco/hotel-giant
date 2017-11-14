<?php require_once("classes/Room.php") ?>
<?php require_once("db.php") ?>
<?php
$room_id = $_POST['room_id'];
$room_name = mysqli_escape_string($connection, $_POST['room_name']);
$room_description = mysqli_escape_string($connection, $_POST['room_description']);
$room_price = mysqli_escape_string($connection, $_POST['room_price']);

$room_image = $_FILES['room_image']['name'];
$room_image_tmp = $_FILES['room_image']['tmp_name'];
move_uploaded_file($room_image_tmp, "../rooms-images/$room_image");

if ($_FILES['room_image']['size'] > 1000000) {
    $result['updateRoom'] = false;
    die("O limite de tamanho de imagem foi excedido, favor renderizar a imagem");
}

if(empty($room_image)){
    $query = "SELECT * FROM rooms WHERE room_id = {$room_id}";
    $search_image = mysqli_query($connection, $query);

    if (!$search_image) {
        die("Error: " . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($search_image);
    $room_image = $row['room_image'];
}


$room = new Room();
$room->setRoomName($room_name);
$room->setRoomImage($room_image);
$room->setRoomPrice($room_price);
$room->setRoomDescription($room_description);
$room->setRoomId($room_id);

$query = "UPDATE rooms SET ";
$query .= "room_name = '{$room->getRoomName()}', ";
$query .= "room_description = '{$room->getRoomDescription()}', ";
$query .= "room_image = '{$room->getRoomImage()}', ";
$query .= "room_price = {$room->getRoomPrice()} ";
$query .= "WHERE room_id = {$room->getRoomId()} ";
$update_query = mysqli_query($connection, $query);

if(!$update_query){
    $result['updateRoom'] = false;
    die("Error: " . mysqli_error($connection));
}

$result['updateRoom'] = true;
echo json_encode($result);