<?php require_once("classes/Event.php") ?>
<?php require_once("db.php"); ?>
<?php
    $event_name = mysqli_escape_string($connection, $_POST['event_name']);
    $event_description = mysqli_escape_string($connection, $_POST['event_description']);
    $event_capacity = mysqli_escape_string($connection, $_POST['event_capacity']);
    $event_price = mysqli_escape_string($connection, $_POST['event_price']);
    $event_date = mysqli_escape_string($connection, $_POST['event_date']);
    $event_image = $_FILES['event_image']['name'];
    $event_image_tmp = $_FILES['event_image']['tmp_name'];
    move_uploaded_file($event_image_tmp, "../events-images/$event_image");

    $event_date = date('Y-m-d',strtotime($event_date));

    $event = new Event();
    $event->setEventName($event_name);
    $event->setEventDescription($event_description);
    $event->setEventCapacity($event_capacity);
    $event->setEventePrice($event_price);
    $event->setEventDate($event_date);
    $event->setEventImage($event_image);

    $query = "INSERT INTO events (event_name, event_description, event_capacity, event_image, event_price, event_date) ";
    $query .= "VALUES('{$event->getEventName()}', '{$event->getEventDescription()}', {$event->getEventCapacity()}, 
              '{$event->getEventImage()}', {$event->getEventePrice()}, '{$event->getEventDate()}' ) ";
    $insert_event = mysqli_query($connection, $query);

    $result = array();
    if(!$insert_event){
        $result['insertEvent'] = false;
        echo json_encode($result);
        die("Error: " . mysqli_error($connection));

    }

    $result['insertEvent'] = true;
    echo json_encode($result);



