<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/initialize.php");

if(!$session->is_logged_in()) {redirect_to(PUBLIC_URL."/login.php");}

?>


<style>
	body{
		background-image:url('../img/modul_lucru.jpg');
	}
</style>

<div class="container" style="color:white;">
	<div style="width:500px;margin:290px 50px 50px 140px;padding-top:40px;font-size:40px;	text-shadow: 2px 2px black;">
		<b>Modul <em><u>Profesor</u></em> in lucru!<b>
	</div>
	
</div>
