<?php
if(isset($_GET['delete'])){
    $room_id_del = $_GET['delete'];
    $query = "DELETE FROM rooms WHERE room_id = {$room_id_del}";
    $delete_room = mysqli_query($connection, $query);
    if(!$delete_room){
        die("Error: " . mysqli_error($connection));
    }
    header("Location: room.php");
}
?>
<div class="page-wrapper">
    <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
<?php
            $query = "SELECT * FROM rooms";
            $rooms_query = mysqli_query($connection, $query);

            if (!$rooms_query) {
                die("Erro: " . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($rooms_query)) {
                $room_id  = $row['room_id'];
                $room_name = $row['room_name'];
                $room_description = substr($row['room_description'], 0, 60);
                $room_image = $row['room_image'];
                $room_price = $row['room_price'];

                echo "<tr>";
                echo "<td>$room_id </td>";
                echo "<td>$room_name</td>";
                echo "<td>$room_description...</td>";
                echo "<td>$room_price</td>";
                echo "<td><img width='220' height='220' class='thumbnail' src='rooms-images/{$room_image}' alt='room image'></td>";
                echo "<td><a href='room.php?source=edit_room&r_id={$room_id}'>Edit</a></td>";
                echo "<td><a href='room.php?delete={$room_id}'>Delete</a></td>";
                echo "<tr>";
            }
?>
            </tbody>
        </table>
    </div>
</div>