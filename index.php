<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Тестовое задание</title>
	<link rel="stylesheet" href="/style.css" />
	<script src="/script.js"></script>
</head>
<body>
	<div class="section full-height">

      	<input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn"/>
      	<label for="modal-btn">Кликни</label> 		
      	
		<div class="modal">		
	      	<div class="modal-wrap">	
				<form id="form" action="/amo/amo.php" method="post" onsubmit="javascript:return emailValidate();">
					<label for="phone">Введите телефон для подтверждения доступа:</label>
					<input id="phone" name="phone" placeholder="+7 (000) 000-00-00" data-phone-pattern required />
					<label for="email">Введите Email для получения файлов:</label>
					<input type="text" name="email" id="email" placeholder="E-mail" required />
					<input type="submit" value="Скачать файлы">
				</form>
	      	</div>			          		
      	</div>	
	</div>
</body>
</html>
