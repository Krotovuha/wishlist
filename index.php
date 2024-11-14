<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;			
		}
		.td{
			text-decoration: none;
		}
		.center{
			margin: auto;
		}
		
		.d-flex{
			display: flex;
		}
		.arial{
			font-family: Arial;
		}
		.bg{
			background-color: #1b2838;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase td">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase td">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase td">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase td">Поддержка</a>	
					<a href="admin.php" class="text-light ms-4 text-uppercase td">Админ Панель</a>				
				</div>
			</div>
			
		</div>
	</div>
	<div style="background-color: #1b2838;height: 1100px;padding-top: 50px;" class="col-12">
		<div class="col-6 center d-flex" style="height: 85px;background: #1b2838;">
			<img src="minion.jpg" style="height: 85px;width: 85px;">
			<h1 class="text-light arial ms-3">СПИСОК ЖЕЛАЕМОГО Krot</h1>
		</div>
		<div class="bg col-9 mx-auto mt-3 d-flex justify-content-between">
			<input type="" name="Поиск по названию или метке" class="form-control w-50 ms-5" style="background-color: #1b2838;">
			<button class="dropdown-toggle btn btn-secondary" style="height:50px;">Настройки</button>
			<button class="dropdown-toggle btn btn-secondary" style="height:50px;">
				
				<span class="text-primary">Сортировать по:</span>
				 вашему предпочтению
			</button>
		</div>
		<hr style="color: white;margin-top: 25px;" class="col-9 center">
		<div class="col-9 mt-4 center" style="height: 450px;">
			<div class="col-12  d-flex" style="height: 225px;background: #3d4d5d;">
				<div class="d-flex align-items-center" style="width: 50px;height: 225px;background: #3d4d5d;border-right: solid black;">
					
					<img src="handle.png" class="center">
				</div>
				<div class="col-11 d-flex" style="background: #3d4d5d;">
					<img src="forza.png" class="col-4 d-flex align-items-center ms-3" style="height: 190px;margin-top: auto;margin-bottom: auto;">	
					<h1 class="text-light ms-4 arial" style="margin-top: 20px;">Forza Horizon 5</h1>
					<div class="col-3 d-flex" style="background:#323e4c ;height: 40px;margin-top: auto;margin-bottom: auto;">
						<div class="col-6 ms-2" style="padding-top: 5px;">
							<p class="text-light arial">3000 руб</p>
						</div>
						<button class="arial text-light btn" style="background: #62971d;margin-left: auto;">В корзину</button>
					</div>
				</div>
				
				
			</div>
			<div class="col-12  d-flex mt-3" style="height: 225px;background: #3d4d5d;">
				<div class="d-flex align-items-center" style="width: 50px;height: 225px;background: #3d4d5d;border-right: solid black;">
					
					<img src="handle.png" class="center">
				</div>
				<div class="col-11 d-flex" style="background: #3d4d5d;">
					<img src="cyberpunk.webp" class="col-4 d-flex align-items-center ms-3" style="height: 190px;margin-top: auto;margin-bottom: auto;">	
					<h1 class="text-light ms-4 arial" style="margin-top: 20px;">Cyberpunk: 2077</h1>
					<div class="col-3 d-flex" style="background:#323e4c ;height: 40px;margin-top: auto;margin-bottom: auto;">
						<div class="col-6 ms-2" style="padding-top: 5px;">
							<p class="text-light arial">2000 руб</p>
						</div>
						<button class="arial text-light btn" style="background: #62971d;margin-left: auto;">В корзину</button>
					</div>
				</div>
			</div>
			<?php 
				$connect = mysqli_connect("MySQL-8.2","root","","wishlist");
				$query = mysqli_query($connect, 'SELECT * FROM game');
				$game = $query -> fetch_assoc()
			 ?>
			<div class="col-12  d-flex mt-3" style="height: 225px;background: #3d4d5d;opacity: <?php 
				if (empty($game["img"])) {
					echo "0";
				}
				else  {
					echo "1";
				}

			 ?>;">
				<div class="d-flex align-items-center" style="width: 50px;height: 225px;background: #3d4d5d;border-right: solid black;">
					
					<img src="handle.png" class="center">
				</div>
				<div class="col-11 d-flex" style="background: #3d4d5d;">
					<img src="<?php echo $game["img"]; ?>" class="col-4 d-flex align-items-center ms-3" style="height: 190px;margin-top: auto;margin-bottom: auto;">	
					<h1 class="text-light ms-4 arial" style="margin-top: 20px;"><?php echo $game["title"]; ?></h1>
					<div class="col-3 d-flex" style="background:#323e4c ;height: 40px;margin-top: auto;margin-bottom: auto;">
						<div class="col-6 ms-2" style="padding-top: 5px;">
							<p class="text-light arial"> <?php echo $game["price"]; ?></p>
						</div>
						<button class="arial text-light btn" style="background: #62971d;margin-left: auto;">В корзину</button>
					</div>
				</div>
			</div>
		</div>

	</div>