<div class="page-wrapper">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formAddRoom">
            <div class="form-group">
                <label for="room_name">Room Name</label>
                <input type="text" class="form-control1 control3" name="room_name" required>
            </div>

            <div class="form-group">
                <label for="room_description">Room Description</label>
                <textarea class="form-control1 text-area" cols="50" rows="5" name="room_description"></textarea>
            </div>

            <div class="form-group">
                <label for="room_image">Room Image</label>
                <input type="file" name="room_image" required>
            </div>

            <div class="form-group">
                <label for="room_price">Room Price</label>
                <input type="text" class="form-control1 control3" name="room_price" required>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="create_room" value="Create Room"
                       required>
            </div>

        </form>
    </div>

</div>
    <script src="js/controller/add_room_controller"></script>
