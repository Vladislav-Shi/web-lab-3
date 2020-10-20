<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/af06815fdc.js"></script> 
	

	</style>

    <title>Exchange currency</title>
  </head>
  
  
  <body>
  
	<?php require "../db.php"; // подключаем файл для соединения с БД
	?>
	<?php 
	
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
				<li class="nav-item">
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
	<div class="container">
		<?php if(isset($_SESSION['auth'])) : ?>
			<center><H1>Личный кабинет<H1></center>
			<H6>Добро пожаловать, <?php echo $_SESSION['auth']->name; ?>!</H6>
			<center><H3>Ваша история операций:<H3></center>
			<?php
			$login = $_SESSION['auth']->login;
			$result = R::find('lich', 'login = ?', [$login]);
			if (count($result)>=1)
			{?>
				<div class="row text-center">
					<div class="col">ID</div>
					<div class="col text-center">DATE</div>
					<div class="col">SUMMA</div>
					<div class="col">VALUTA</div>
					<div class="col">KURS</div>
					<div class="col">OPERACIA</div>
				</div>
				<hr align="center" width="100%" color="Grey"/>
			<?php
				$N=count($result);
				for($i = 1; $i <= $N; $i++)// получаем все строки в цикле по одной
				{
			?>
					<div class="row text-center">
						<div class="col"><?php echo $result[$i]->id?></div>
						<div class="col"><?php echo $result[$i]->date?></div>
						<div class="col"><?php echo $result[$i]->summa?></div>
						<div class="col"><?php echo $result[$i]->valuta?></div>
						<div class="col"><?php echo $result[$i]->kursval?></div>
						<div class="col"><?php echo $result[$i]->operac?></div>
					</div>
					<hr align="center" width="100%" color="Grey"/>
			<?php
				}
			}
			else
			{
				echo ' История операций пуста!';
			}
			?>
		<?php else : ?>
			<H1>Вы не авторизованы!</H1>
			<H6>Войдите в аккаунт и повторите попытку снова.</H6>
		<?php endif; ?>
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