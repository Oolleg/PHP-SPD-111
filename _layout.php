<!doctype html>
<html>

<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
	<!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP SPD-111</title>
	<link rel="stylesheet" href="/css/site.css"/>
</head>

<body>
<nav>
	<div class="nav-wrapper teal">
		<div class = "container">
			
			  <a href="/" class="brand-logo"><img src="/img/php.png"/></a>
			  <ul id="nav-mobile" class="right ">
				<?php foreach( [
					'basics' => 'Основи',
					'layout' => 'Шаблонізація',
					'regexp' => 'Основи regexp',
					'api'    => 'API',
					'registr' => '<i class="material-icons">app_registration</i>',
				] as $href => $name ) : ?>
					<li <?= $uri==$href ? 'class="active"' : '' ?> ><a href="/<?= $href ?>"><?= $name ?></a></li>
				<?php endforeach ?>
				 <!-- Modal Trigger -->
				 <li class ="modal-trigger" href="#modal1"><a>Sign In</a></li>
					
			  </ul>

		</div>
	</div>
	  <!-- Modal Structure -->
 <?php include 'signin.php' ; ?>
</nav>
  
<div class="container">
  
	<?php include $page_body ; ?>
</div>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/js/site.js"></script>
</body>
</html>