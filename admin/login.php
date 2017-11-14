<?php require_once("includes/login_header.php") ?>
  <div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="POST" action="" id="formLogin">
		<input name="email" type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
        <div class="submit"><input id="btnLogin" type="submit" value="Login"></div>

		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
    <script src="js/controller/login_controller.js"></script>
<?php require_once("includes/login_footer.php"); ?>