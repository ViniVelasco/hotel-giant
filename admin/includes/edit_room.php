<?php require_once("db.php"); ?>
<?php
    if(isset($_GET['r_id'])){
        $room_id = $_GET['r_id'];
        $query = "SELECT * FROM rooms WHERE room_id = $room_id ";
        $select_room = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_room)){
            $room_id  = $row['room_id'];
            $room_name = $row['room_name'];
            $room_description = substr($row['room_description'], 0, 60);
            $room_image = $row['room_image'];
            $room_price = $row['room_price'];
        }
    }
?>
<div class="graphs">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formEditRoom">
            <div class="form-group">
                <label for="room_name">Room Name</label>
                <input type="text" class="form-control1 control3" name="room_name" required value="<?php echo $room_name; ?>">
            </div>

            <div class="form-group">
                <label for="room_description">Room Description</label>
                <textarea class="form-control1 text-area" cols="50" rows="5" name="room_description"><?php echo $room_description; ?></textarea>
            </div>

            <div class="form-group">
                <img width="100px" src="rooms-images/<?php echo $room_image; ?>" alt="room image">
                <input type="file" name="room_image">
            </div>


            <div class="form-group">
                <label for="room_price">Room Price</label>
                <input type="text" class="form-control1 control3" name="room_price" required value="<?php echo $room_price; ?>">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" class="form-control" name="edit_room" value="Edit Room"
                       required>
            </div>

        </form>
    </div>
</div>
    <script src="js/controller/edit_room_controller.js"></script>
