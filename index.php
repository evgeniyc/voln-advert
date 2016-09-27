<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Сайт бесплатных объявлений Вольнянска</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="plugins/slicknav/slicknav.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>
	<div id="body" class="container">
		<header>
			<div id="header" class="row">
				<div id="logo" class="col-md-2"><img src="img/logo.png" alt="logotip"></div>
				<div id="title"class="col-md-8"><h1>Сайт бесплатных объявлений г.Вольнянск</h1></div>
				<div class="col-md-2"></div>
			</div>
		</header>
		<nav>
			<ul id="main-menu">
				<li><a href="#">+ Добавить объявление</a></li>
				<li><a href="#">О нас</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="#">Главная</a></li>
			</ul>
		</nav>
		<div class="clearfix"></div>
		<section>
			<div class="row">
				<div class="col-sm-3 col-xs-12">
					<aside>
						<div id="menu" class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Разделы:</h3>
							</div>
							<div class="panel-body">
								<ul>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consectetur adipiscing elit</li>
									<li>Vestibulum quam eros</li>
									<li>Sollicitudin in vestibulum</li> 
									<li>Posuere ac mauris</li>
									<li>Etiam ornare auctor rutrum</li> 
									<li>Praesent sagittis sollicitudin nunc</li>
									<li>Nulla rutrum eros vel sagittis porttitor</li>
									<li>Etiam quis volutpat ante</li> 
									<li>Nam ut magna quis tortor lacinia efficitur</li>
									<li>Nam at fringilla nunc, et gravida augue</li> 
									<li>Aenean blandit vel quam non vulputate</li> 
								</ul>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-sm-9 col-xs-12">
					<article>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Содержание:</h3>
							</div>
							<div class="panel-body">
								<?php 
								$j=0;
								for($i=0; $i<25; $i++): $j++;?>
									<a href="#"><div class="advert">
										<div class="advert_head">Продам дом в Вольнянске</div>
										<div class="advert_body"><img src="img/houses/<?php echo $j.'.jpg'; ?>" width="100%" height="100%"></div>
										<div class="advert_footer">Цена: $20000</div>
									</div></a>
								<?php if($j==10) 
										$j=0;
								endfor; ?>
							</div>
						</div>
					</article>
				</div>
			</div>	
		</section>
		<div class="clearfix"></div>
		<footer>Бесплатные объявления Вольнянска<br>&#169;Webmake 2016</footer>
	</div><!--container-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="plugins/slicknav/slicknav.js"></script>
	<script>
		$(function(){
			$('#main-menu').slicknav({
				label: '',
				duration: 300,
				prependTo:'section'
			});
		});
	</script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	
</body>
</html>