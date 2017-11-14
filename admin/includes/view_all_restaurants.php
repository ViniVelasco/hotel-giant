<?php
if(isset($_GET['delete'])){
    $restaurant_id_del = $_GET['delete'];
    $query = "DELETE FROM restaurants WHERE restaurant_id = {$restaurant_id_del}";
    $delete_restaurant = mysqli_query($connection, $query);
    if(!$delete_restaurant){
        die("Error: " . mysqli_error($connection));
    }
    header("Location: restaurant.php");
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
                <th>Capacity</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
<?php
            $query = "SELECT * FROM restaurants";
            $restaurants_query = mysqli_query($connection, $query);

            if (!$restaurants_query) {
                die("Erro: " . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($restaurants_query)) {
                $restaurant_id  = $row['restaurant_id'];
                $restaurant_name = $row['restaurant_name'];
                $restaurant_description = $row['restaurant_description'];
                $restaurant_image = $row['restaurant_image'];
                $restaurant_capacity = $row['restaurant_capacity'];

                echo "<tr>";
                echo "<td>$restaurant_id </td>";
                echo "<td>$restaurant_name</td>";
                echo "<td>$restaurant_description</td>";
                echo "<td>$restaurant_capacity</td>";
                echo "<td><img width='200' height='220' class='thumbnail' src='images/{$restaurant_image}' alt='restaurant image'></td>";
                echo "<td><a href='restaurant.php?source=edit_restaurant&r_id={$restaurant_id}'>Edit</a></td>";
                echo "<td><a href='restaurant.php?delete={$restaurant_id}'>Delete</a></td>";
                echo "<tr>";
            }
?>
            </tbody>
        </table>
    </div>
</div>