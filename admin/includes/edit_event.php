<?php require_once("db.php"); ?>
<?php
    if(isset($_GET['e_id'])){
        $event_id = $_GET['e_id'];
        $query = "SELECT * FROM events WHERE event_id = $event_id ";
        $select_event = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_event)){
            $event_id  = $row['event_id'];
            $event_name = $row['event_name'];
            $event_description = $row['event_description'];
            $event_price = $row['event_price'];
            $event_date = $row['event_date'];
            $event_capacity = $row['event_capacity'];
            $event_image = $row['event_image'];
        }
    }
?>
<div class="graphs">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formEditEvent">
            <div class="form-group">
                <label for="event_name">Event Name</label>
                <input type="text" class="form-control1 control3" name="event_name" required value="<?php echo $event_name; ?>">
            </div>

            <div class="form-group">
                <label for="event_description">Event Description</label>
                <textarea class="form-control1 text-area" cols="50" rows="5" name="event_description"><?php echo $event_description; ?></textarea>
            </div>

            <div class="form-group">
                <img width="100px" src="events-images/<?php echo $event_image; ?>" alt="event image">
                <input type="file" name="event_image">
            </div>

            <div class="form-group">
                <label for="event_capacity">Event Capacity</label>
                <input type="number" class="form-control1 control3" name="event_capacity" required value="<?php echo $event_capacity; ?>">
            </div>

            <div class="form-group">
                <label for="event_price">Event Price</label>
                <input type="text" class="form-control1 control3" name="event_price" required value="<?php echo $event_price; ?>">
            </div>

            <div class="form-group">
                <label for="event_date">Event Date</label>
                <input type="date" class="form-control1 control3" name="event_date" required value="<?php echo $event_date; ?>">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" class="form-control" name="edit_restaurant" value="Edit Event"
                       required>
            </div>

        </form>
    </div>
</div>
    <script src="js/controller/edit_event_controller.js"></script>
