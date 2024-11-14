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
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-12 " style="background: #1b2838;height: 100%;">
		<div class="col-3 mx-auto text-center" style="padding-top: 40px;">
			<h1 class="arial text-light center">Добавить товар</h1>
			<form action="insert.php" method="GET">
				<input type="" name="img" class="form-control mt-2" style="background: white;" placeholder="картинка">
				<input type="" name="title" class="form-control mt-2" style="background: white;" placeholder="название">
				<input type="" name="price" class="form-control mt-2" style="background: white;" placeholder="цена">
				<button class="btn btn-success mt-2">добавить игру</button>
			</form>
		</div>

			
	</div>
</body>