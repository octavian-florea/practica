<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/initialize.php");

if(!$session->is_logged_in()) {redirect_to(PUBLIC_URL."/login.php");}

	$view_locuri_practica = "";
	$locuri_practica = Practica::find_all();
	foreach ($locuri_practica as $key => $loc_practica){
		$view_locuri_practica .= '<div class="col-sm-3 col-lg-3 col-md-3">'
								.'<div class="thumbnail" id_practica='.$loc_practica->id.'>'
									.'<img alt="" src="/public/img/practica.jpg">'
									.'<div class="caption">'
										.'<h4 class="pull-right"></h4>'
										.'<h4><a href="#">'.$loc_practica->titlu.'</a>'
										.'</h4>'
										.'<p>'.$loc_practica->subiect.'</p>'
										.'<p>'.$loc_practica->codop.'</p>'
									.'</div>'
								.'</div>'
								.'</div>';
		
	}
?>

<?php include_once(LAYOUTS_PATH."/header.php")?>
<style>
	body{
		background-image:url('../img/modul_lucru.jpg');
	}
</style>
	<div class="container" style="color:white;">
	<div class="row">
        <?php echo $view_locuri_practica ?>
      </div>
      </div>
	  

<?php include_once(LAYOUTS_PATH."/footer.php")?>
