<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/af06815fdc.js"></script> 

    <title>Exchange currency</title>
  </head>
  
  <body>
  
	<?php
	require "../db.php"; // подключаем файл для соединения с БД
	?>
	
  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
		<a class="navbar-brand" href="intro.php">
			<img src="logo.png" style="width:54px;">
			ExchCurrency
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="intro.php">Главная</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="kursval.php">Курсы валют</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="otdel.php">Отделения</a>
				</li>
				<li class="nav-item mr-3">
					<!-- Если авторизован выведет логин -->
					<?php if(isset($_SESSION['auth'])) : ?>
					<a href="lichkab.php"><?php echo $_SESSION['auth']->login; ?></a></br>

					<!-- Пользователь может нажать выйти для выхода из системы -->
					<a href="../logout.php"><center>Выйти</center></a>
					<?php else : ?>

					<!-- Если пользователь не авторизован выведем кнопку на авторизацию -->
					<a href="../login.php" class="btn btn-outline-secondary mr-3">Войти в аккаунт</a>
					<?php endif; ?>
				</li>
			</ul>
			<form class="form-inline">
				<input class="form-control" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-primary" type="submit">Search</button>
			</form>
		</div>
	</nav>
  </header>
	
	<main>
	
	
	<div class="container pb-3 pt-3">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6 text-center"><H1>Точки обслуживания в Волгограде</H1></div>
			<div class="col-3"></div>
		</div>
		<div id="map-container" class="pt-5">
			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1mzU8RrZJyCm7Dqyk3pbLXLtyHqDHJkPm" width="100%" height="450"></iframe>
		</div>
		<div class="row d-flex pt-3">
			<div class="col">
				<h6>Главный офис:</h6>
				<p class="pt-0 text-center">ул.Богомольца, д.89<br>Телефон: 8-800-545-34-56</br></p>
			</div>
			<div class="col">
				<h6>Режим работы:</h6>
				<p class="pt-0 text-center">Пн-пт с 9:00 до 18:00, обед с 12 до 13<br>сб, вс - выходные</br></p>
			</div>
		</div>
		<hr align="center" width="90%" color="Grey"/>
		<div class="row d-flex">
			<div class="col">
				<h6>Офис:</h6>
				<p class="pt-0 text-center">ул.Комсомольская, д.6<br>Телефон: 8-800-545-43-65</br></p>
			</div>
			<div class="col">
				<h6>Режим работы:</h6>
				<p class="pt-0 text-center">Пн-пт с 9:00 до 18:00 без перерывов<br>сб, вс - выходные</br></p>
			</div>
		</div>
		<hr align="center" width="90%" color="Grey"/>
		<div class="row d-flex">
			<div class="col">
				<h6>Отделение обмена:</h6>
				<p class="pt-0 text-center">пр-т.Университетский, д.100а<br>Телефон: 8-902-456-24-55</br></p>
			</div>
			<div class="col">
				<h6>Режим работы:</h6>
				<p class="pt-0 text-center">Пн-пт с 8:00 до 18:00, обед с 12 до 13<br>сб с 9 до 17, вс - выходной</br></p>
			</div>
		</div>
		<hr align="center" width="90%" color="Grey"/>
		<div class="row d-flex">
			<div class="col">
				<h6>Банкомат:</h6>
				<p class="pt-0 text-center">ул.Шефская, д.2<br>По вопросам по телефону: 8-800-555-35-35</br></p>
			</div>
			<div class="col">
				<h6>Режим работы:</h6>
				<p class="pt-0 text-center">Круглосуточно <br>Дни тех.обслуживания - пн, четверг </br></p>
			</div>
		</div>
		<hr align="center" width="90%" color="Grey"/>
	</div>
	</main>
	
	<footer class="page-footer font-small unique-color-dark bg-light mt-3">
		<div class="primary-color">
			<div class="container-fluid">
				<div class="row py-4 d-flex align-items-center" style ="height: 5em">
					<div class="col-md-6 col-lg-5 text-center text-md-left mb-4">
						<a href="intro.php"> <img src="logo.png" style="width:60px;"> </a>
						<a class="ml-2 white-text"> Вы можете связаться с нами в социальных сетях!</a>
					</div>
					<div class="col-md-6 col-lg-7 text-center text-md-right">
						<a href="#" class="fb-ic ml-0">
							<i class="fa fa-facebook white-text mr-4 fa-2x"></i>
						</a>
						<a href="#" class="fb-ic ml-0">
							<i class="fa fa-twitter white-text mr-4 fa-2x"></i>
						</a>
						<a href="#" class="fb-ic ml-0">
							<i class="fa fa-instagram white-text mr-4 fa-2x"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

  </body>
</html>