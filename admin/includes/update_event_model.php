<?php require_once("classes/Event.php") ?>
<?php require_once("db.php") ?>
<?php

$event_name = mysqli_escape_string($connection, $_POST['event_name']);
$event_description = mysqli_escape_string($connection, $_POST['event_description']);
$event_price = mysqli_escape_string($connection, $_POST['event_price']);
$event_date = mysqli_escape_string($connection, $_POST['event_date']);
$event_capacity = mysqli_escape_string($connection, $_POST['event_capacity']);
$event_id = $_POST['event_id'];

$event_image= $_FILES['event_image']['name'];
$event_image_tmp = $_FILES['event_image']['tmp_name'];
move_uploaded_file($event_image_tmp, "../images/" . $event_image);

$event_date = date('Y-m-d', strtotime($event_date));

if(empty($event_image)){
    $query = "SELECT * FROM events WHERE event_id = {$event_id}";
    $search_image = mysqli_query($connection, $query);

    if (!$search_image) {
        die("Error: " . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($search_image)) {
        $event_image = $row['event_image'];
    }

}


$event = new Event();
$event->setEventName($event_name);
$event->setEventDescription($event_description);
$event->setEventePrice($event_price);
$event->setEventDate($event_date);
$event->setEventCapacity($event_capacity);
$event->setEventImage($event_image);
$event->setEventId($event_id);

$query = "UPDATE events SET ";
$query .= "event_name = '{$event->getEventName()}', ";
$query .= "event_description = '{$event->getEventDescription()}', ";
$query .= "event_price = '{$event->getEventePrice()}', ";
$query .= "event_date = '{$event->getEventDate()}', ";
$query .= "event_capacity = '{$event->getEventCapacity()}', ";
$query .= "event_image = '{$event->getEventImage()}' ";
$query .= "WHERE event_id = {$event->getEventId()}";
$update_query = mysqli_query($connection, $query);

if(!$update_query){
    $result['updateEvent'] = false;
    die("Error: " . mysqli_error($connection));
}

$result['updateEvent'] = true;
echo json_encode($result);