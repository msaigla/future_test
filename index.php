<?php include_once ("function.php");?>
<!doctype html>
<html lang="ru">
	  <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css" >
		
		<title>Hello</title>
	</head>
	<body style="background-color: #f7f7f7;">
			<div class="header">
				<div class="contact">
					<p style="color: black">Телефон: (499) 340-94-71</p>
					<p>Email: <u>info@future-group.ru</u></p>
				</div>
				<div class="title">Комментарии</div>
				<div class="logo"><img src="images/logo.png"></div>
			</div>
		
	    <div class="top"></div>
		<div class="back">
			<div class="container">
				<?php userList($connect);?>
				<?php $connect->close();?>
				<hr />
				<h2>Оставить комментарий</h2>
				<form class="add-chat" method="post">
					<div class="form-group">
						<label for="Name">Имя</label>
						<input class="form-control name" id="Name" name="name" type="text"/>
					</div>
					<div class="form-group">
						<label for="Text">Текст</label>
						<textarea class="form-control" id="Text" name="text" type="text" row="3"></textarea>
					</div>
					<input type="submit" name="add" class="btn btn-primary" value="Отправить" />
				</form>
			</div>
		</div>
	<footer>
		<div class="logo"><img src="images/logo.png"></div>
		<div class="contact-footer">
			<p style="color: black">Телефон: (499) 340-94-71</p>
			<p>Email: <u>info@future-group.ru</u></p>
			<p>Адрес: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></p>
		</div>
		<div class="footer-copyright text-center py-3" style="padding-bottom: 12px;">© 2010 - 2014 Future. Все права защищены</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>