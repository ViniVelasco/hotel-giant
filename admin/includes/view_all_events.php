<?php
if(isset($_GET['delete'])){
    $event_id_del = $_GET['delete'];
    $query = "DELETE FROM events WHERE event_id = {$event_id_del}";
    $delete_event = mysqli_query($connection, $query);
    if(!$delete_event){
        die("Error: " . mysqli_error($connection));
    }
    header("Location: event.php");
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
                <th>Capacity</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
<?php
            $query = "SELECT * FROM events";
            $events_query = mysqli_query($connection, $query);

            if (!$events_query) {
                die("Erro: " . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($events_query)) {
                $event_id  = $row['event_id'];
                $event_name = $row['event_name'];
                $event_description = $row['event_description'];
                $event_price = $row['event_price'];
                $event_date = $row['event_date'];
                $event_capacity = $row['event_capacity'];
                $event_image = $row['event_image'];

                echo "<tr>";
                echo "<td>$event_id </td>";
                echo "<td>$event_name</td>";
                echo "<td>$event_description</td>";
                echo "<td>$event_price</td>";
                echo "<td><img width='200' height='220' class='thumbnail' src='events-images/{$event_image}' alt='event image'></td>";
                echo "<td>$event_capacity</td>";
                echo "<td>$event_date</td>";
                echo "<td><a href='event.php?source=edit_event&e_id={$event_id}'>Edit</a></td>";
                echo "<td><a href='event.php?delete={$event_id}'>Delete</a></td>";
                echo "<tr>";
            }
?>
            </tbody>
        </table>
    </div>
</div>