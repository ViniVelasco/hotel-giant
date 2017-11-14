<?php
if(isset($_GET['delete'])){
    $user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$user_id}";
    $delete_user = mysqli_query($connection, $query);
    if(!$delete_user){
        die("Error: " . mysqli_error($connection));
    }
    header("Location: user.php");
}
?>
<div class="page-wrapper">
    <div class="bs-example4" data-example-id="contextual-table">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Role</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
<?php
            $query = "SELECT * FROM users";
            $users_query = mysqli_query($connection, $query);

            if (!$users_query) {
                die("Erro: " . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($users_query)) {
                $user_id = $row['user_id'];
                $user_email = $row['user_email'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_role = $row['user_role'];
                $user_image = $row['user_image'];

                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_role</td>";
                echo "<td><img width='100' height='120' class='thumbnail' src='users-images/{$user_image }' alt='user image'></td>";
                echo "<td><a href='user.php?source=edit_user&u_id={$user_id}'>Edit</a></td>";
                echo "<td><a href='user.php?delete={$user_id}'>Delete</a></td>";
                echo "<tr>";
            }
?>
            <tr class="success">
                <th scope="row">3</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>