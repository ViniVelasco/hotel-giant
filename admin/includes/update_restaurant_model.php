<?php require_once("classes/Restaurant.php") ?>
<?php require_once("db.php") ?>
<?php

$restaurant_name = mysqli_escape_string($connection, $_POST['restaurant_name']);
$restaurant_description = mysqli_escape_string($connection, $_POST['restaurant_description']);
$restaurant_capacity = mysqli_escape_string($connection, $_POST['restaurant_capacity']);
$restaurant_id = $_POST['restaurant_id'];

$restaurant_image= $_FILES['restaurant_image']['name'];
$restaurant_image_tmp = $_FILES['restaurant_image']['tmp_name'];
move_uploaded_file($restaurant_image_tmp, "../images/" . $restaurant_image);

if(empty($restaurant_image)){
    $query = "SELECT * FROM restaurants WHERE restaurant_id = {$restaurant_id}";
    $search_image = mysqli_query($connection, $query);

    if (!$search_image) {
        die("Error: " . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($search_image)) {
        $restaurant_image = $row['restaurant_image'];
    }

}


$restaurant = new Restaurant();
$restaurant->setRestaurantId($restaurant_id);
$restaurant->setRestaurantName($restaurant_name);
$restaurant->setRestaurantDescription($restaurant_description);
$restaurant->setRestaurantImage($restaurant_image);

$query = "UPDATE restaurants SET ";
$query .= "restaurant_name = '{$restaurant->getRestaurantName()}', ";
$query .= "restaurant_description = '{$restaurant->getRestaurantDescription()}', ";
$query .= "restaurant_image = '{$restaurant->getRestaurantImage()}' ";
$query .= "WHERE restaurant_id = {$restaurant->getRestaurantId()}";
$update_query = mysqli_query($connection, $query);

if(!$update_query){
    $result['updateRestaurant'] = false;
    die("Error: " . mysqli_error($connection));
}

$result['updateRestaurant'] = true;
echo json_encode($result);