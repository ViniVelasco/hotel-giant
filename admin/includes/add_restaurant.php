<div class="page-wrapper">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formAddRestaurant">
            <div class="form-group">
                <label for="restaurant_name">Restaurant Name</label>
                <input type="text" class="form-control1 control3" name="restaurant_name" required>
            </div>

            <div class="form-group">
                <label for="restaurant_description">Restaurant Description</label>
                <textarea class="form-control1 text-area" cols="50" rows="5" name="restaurant_description"></textarea>
            </div>

            <div class="form-group">
                <label for="restaurant_image">Restaurant Image</label>
                <input type="file" name="restaurant_image" required>
            </div>

            <div class="form-group">
                <label for="restaurant_capacity">Restaurant Capacity</label>
                <input type="number" class="form-control1 control3" name="restaurant_capacity" required>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" class="form-control" name="create_restaurant" value="Create Restaurant"
                       required>
            </div>

        </form>
    </div>
    <script src="js/controller/add_restaurant_controller"></script>
