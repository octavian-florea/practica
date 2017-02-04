<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/initializ.php");

$authentic = false;
if(isset($_POST['username']) && isset($_POST['password'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	// Check database to see if username/password exist.
	$found_user = User::authenticate($username,$password);
	if($found_user){
		$session->login($found_user);
		$authentic = true;
	}
}
echo $authentic;
?>