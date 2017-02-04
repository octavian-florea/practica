<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/initialize.php");

// Daca este deja logat de facut ceva
//if(!$session->is_logged_in()){redirect_to("/index.php");}

if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	// Check database to see if username/password exist.
	$found_user = User::authenticate($username,$password);
	
	if($found_user){
		$session->login($found_user);
		redirect_to(PUBLIC_URL."/".$found_user->tip."/home.php");
	}else{
		$message = "Username/password combination incorrect.";
	}
}else{ // Form has not been submitted
	$username = "";
	$password = "";
}
?>

<?php include_once(LAYOUTS_PATH."/header.php")?>
<style>
	body{
		background-color:#eee;
		padding-top:40px;
		padding-bottom:40px;
	}
</style>

<div class="container">
	<form class="form-login" role="form" action="#" method="post" style="margin:0 auto;max-width:330px;padding15px;">
		<h2 class="form-signin-heading">Please sign in</h2>
		<input name="username" type="text" placeholder="Email" class="form-control" value="<?php echo $username ?>">
		<input name="password" type="password" placeholder="Password" class="form-control" value="<?php echo $password ?>">
		<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
		<button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
		<div style="text-align:right">Nu aveti cont? <a href="register.php">Inregistrativa</a>.</div>
	</form>
</div>

<?php include_once(LAYOUTS_PATH."/footer.php")?>