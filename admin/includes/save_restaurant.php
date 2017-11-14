<?php require_once("classes/Restaurant.php") ?>
<?php require_once("db.php"); ?>
<?php
    $restaurant_name = mysqli_escape_string($connection, $_POST['restaurant_name']);
    $restaurant_description = mysqli_escape_string($connection, $_POST['restaurant_description']);
    $restaurant_capacity = mysqli_escape_string($connection, $_POST['restaurant_capacity']);
    $restaurant_image = $_FILES['restaurant_image']['name'];
    $restaurant_image_tmp = $_FILES['restaurant_image']['tmp_name'];
    move_uploaded_file($restaurant_image_tmp, "../images/$restaurant_image");

    $restaurant = new Restaurant();
    $restaurant->setRestaurantName($restaurant_name);
    $restaurant->setRestaurantDescription($restaurant_description);
    $restaurant->setRestaurantCapacity($restaurant_capacity);
    $restaurant->setRestaurantImage($restaurant_image);

    $query = "INSERT INTO restaurants (restaurant_name, restaurant_description, restaurant_capacity, restaurant_image) ";
    $query .= "VALUES('{$restaurant->getRestaurantName()}', '{$restaurant->getRestaurantDescription()}', {$restaurant->getRestaurantCapacity()}, 
              '{$restaurant->getRestaurantImage()}') ";
    $insert_restaurant = mysqli_query($connection, $query);

    $result = array();
    if(!$insert_restaurant){
        $result['insertRestaurant'] = false;
        echo json_encode($result);
        die("Error: " . mysqli_error($connection));

    }

    $result['insertRestaurant'] = true;
    echo json_encode($result);



