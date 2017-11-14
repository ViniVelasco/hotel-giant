<?php require_once("db.php"); ?>
<?php
    if(isset($_GET['u_id'])){
        $user_id = $_GET['u_id'];
        $query = "SELECT * FROM users WHERE user_id = $user_id ";
        $select_user = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_user)){
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row["user_email"];
            $user_role = $row["user_role"];
            $user_image = $row["user_image"];
            $user_password = $row["user_password"];
        }
    }
?>
<div class="graphs">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formEditUser">
            <div class="form-group">
                <label for="user_firstname">Firstname</label>
                <input type="text" class="form-control1 control3" name="user_firstname" required value="<?php echo $user_firstname; ?>">
            </div>

            <div class="form-group">
                <label for="user_lastname">Lastname</label>
                <input type="text" class="form-control1 control3" name="user_lastname" required value="<?php echo $user_lastname; ?>">
            </div>

            <div class="form-group">
                <select name="user_role" id="" class="form-control1 control3">
                    <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
                    <?php
                    if($user_role = 'admin'){
                        echo "<option value='receptionist'>Receptionist</option>";
                    } else {
                        echo "<option value='admin'>Admin</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <img width="100px" src="users-images/<?php echo $user_image; ?>" alt="user image">
                <input type="file" name="image">
            </div>

            <div class="form-group">
                <label for="user_email">Email</label>
                <input type="email" class="form-control1 control3" name="user_email" required value="<?php echo $user_email; ?>">
            </div>

            <div class="form-group">
                <label for="user_password">Password</label>
                <input type="password" class="form-control1 control3" name="user_password" required value="<?php echo $user_password; ?>">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="create_user" value="Register" required>
            </div>

        </form>
    </div>
</div>
    <script src="js/controller/edit_user_controller.js"></script>
