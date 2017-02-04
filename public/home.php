<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/includes/initialize.php");
	
	$view_locuri_practica = "";
	$locuri_practica = Practica::find_all();
	foreach ($locuri_practica as $key => $loc_practica){
		$view_locuri_practica .= '<div class="col-sm-3 col-lg-3 col-md-3">'
								.'<div class="thumbnail" id_practica='.$loc_practica->id.'>'
									.'<img alt="" src="/public/img/practica.jpg">' //320x150
									.'<div class="caption">'
										.'<h4 class="pull-right"></h4>'
										.'<h4>'.$loc_practica->titlu.''
										.'</h4>'
										.'<p>'.$loc_practica->subiect.'</p>'
										.'<p>'.$loc_practica->codop.'</p>'
									.'</div>'
								.'</div>'
								.'</div>';
		
	}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
			.action{
				background-image:url("img/header.jpg");
			}
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PRACTICA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" action="<?php echo PUBLIC_URL?>/login.php" method="post">
            <div class="form-group">
              <input name="username" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input name="password" type="password" placeholder="Password" class="form-control">
            </div>
            <button name="submit" type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron action">
      <div class="container">
        <h1>Cauti practica?</h1>
        <p>Primul site dedicat studentilor pentru gasirea de locuri de practica, cursuri si evenimente.</p>
        <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
      </div>
    </div>

    <div class="	">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Practica</h2>
          <p>Diverse locuri de practica oferite de companii din Romania din diverse arii ale economiei. Ai oportunitatea de a pune in practica cunostintele teoretice acumulate la scoala.</p>
          <p><a class="btn btn-default" href="practica.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Cursuri</h2>
          <p>Mediul de afaceri vine in sprijinul stundetilor prin oferirea de cursuri care sa ii pregateasca mai bine pentru piata muncii. </p>
          <p><a class="btn btn-default" href="cursuri.php" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Evenimente</h2>
          <p>Diverse activitati de la intalniri pana la concursuri pentru a construi o comunitate inchegata care sa produca excelenta.</p>
          <p><a class="btn btn-default" href="evenimente.php" role="button">View details &raquo;</a></p>
        </div>
      </div>
		<hr />
		<div style="font-size:20px"><b>Locuri de practica:</b></div>
		<div class="row">
           <?php echo $view_locuri_practica ?>
        </div>
	  
      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

		<script>
			// Autentifica utilizatorul daca nu exista redirect la pagina de logare
			//$(".login").click(function(){
			//	$.post("<?php echo PUBLIC_URL?>/autehnticate.php",
			//		{username:$(".username").val(),password:$(".password").val(),submit:true},
			//		function(data){
			//			alert(data);
			//		}
			//	);	
			//});
		</script>
		
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
