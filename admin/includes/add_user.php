<div class="page-wrapper">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formAddUser">
            <div class="form-group">
                <label for="user_firstname">Firstname</label>
                <input type="text" class="form-control1 control3" name="user_firstname" required>
            </div>

            <div class="form-group">
                <label for="user_lastname">Lastname</label>
                <input type="text" class="form-control1 control3" name="user_lastname" required>
            </div>

            <div class="form-group">
                <select name="user_role" id="" class="form-control1 control3">
                    <option value="receptionist">Select Options</option>
                    <option value="admin">Admin</option>
                    <option value="receptionist">Receptionist</option>
                </select>
            </div>

            <div class="form-group">
                <label for="post_image">User Image</label>
                <input type="file" name="image" required>
            </div>

            <div class="form-group">
                <label for="user_email">Email</label>
                <input type="email" class="form-control1 control3" name="user_email" required>
            </div>

            <div class="form-group">
                <label for="user_password">Password</label>
                <input type="password" class="form-control1 control3" name="user_password" required>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" class="form-control" name="create_user" value="Register"
                       required>
            </div>

        </form>
    </div>
    <script src="js/controller/add_user_controller"></script>
