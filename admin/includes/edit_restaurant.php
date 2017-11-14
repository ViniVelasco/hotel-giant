<?php require_once("db.php"); ?>
<?php
    if(isset($_GET['r_id'])){
        $restaurant_id = $_GET['r_id'];
        $query = "SELECT * FROM restaurants WHERE restaurant_id = $restaurant_id ";
        $select_restaurant = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_restaurant)){
            $restaurant_name = $row['restaurant_name'];
            $restaurant_description = $row['restaurant_description'];
            $restaurant_capacity = $row["restaurant_capacity"];
            $restaurant_image = $row["restaurant_image"];
        }
    }
?>
<div class="graphs">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formEditRestaurant">
            <div class="form-group">
                <label for="restaurant_name">Restaurant Name</label>
                <input type="text" class="form-control1 control3" name="restaurant_name" required value="<?php echo $restaurant_name; ?>">
            </div>

            <div class="form-group">
                <label for="restaurant_description">Restaurant Description</label>
                <textarea class="form-control1 text-area" cols="50" rows="5" name="restaurant_description"><?php echo $restaurant_description; ?></textarea>
            </div>

            <div class="form-group">
                <img width="100px" src="images/<?php echo $restaurant_image; ?>" alt="restaurant image">
                <input type="file" name="restaurant_image">
            </div>

            <div class="form-group">
                <label for="restaurant_capacity">Restaurant Capacity</label>
                <input type="number" class="form-control1 control3" name="restaurant_capacity" required value="<?php echo $restaurant_capacity; ?>">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" class="form-control" name="edit_restaurant" value="Edit Restaurant"
                       required>
            </div>

        </form>
    </div>
</div>
    <script src="js/controller/edit_restaurant_controller.js"></script>
