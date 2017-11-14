<?php require_once("classes/Room.php") ?>
<?php require_once("db.php"); ?>
<?php
    $room_name = mysqli_escape_string($connection, $_POST['room_name']);
    $room_description = mysqli_escape_string($connection, $_POST['room_description']);
    $room_price = mysqli_escape_string($connection, $_POST['room_price']);
    $room_image = $_FILES['room_image']['name'];
    $room_image_tmp = $_FILES['room_image']['tmp_name'];
    move_uploaded_file($room_image_tmp, "../rooms-images/$room_image");

    $room = new Room();
    $room->setRoomName($room_name);
    $room->setRoomDescription($room_description);
    $room->setRoomPrice($room_price);
    $room->setRoomImage($room_image);

    $query = "INSERT INTO rooms (room_name, room_description, room_image, room_price) ";
    $query .= "VALUES('{$room->getRoomName()}', '{$room->getRoomDescription()}', '{$room->getRoomImage()}', 
                       {$room->getRoomPrice()}) ";
    $insert_room  = mysqli_query($connection, $query);

    $result = array();
    if(!$insert_room){
        $result['insertRoom'] = false;
        echo json_encode($result);
        die("Error: " . mysqli_error($connection));

    }

    $result['insertRoom'] = true;
    echo json_encode($result);



