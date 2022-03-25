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
	      	<div class="modal-wrap" style="width: 910px; height:550px; display: block;">
			<div class="header">Получите набор файлов<br />для руководителя:</div>
			<div class="row">
				<div class="col images">
					<img src="/img/icon.png">
					<br />
					<img src="/img/img.png">
				</div>
				<div class="col">
					<form id="form" action="/amo/amo.php" method="post" onsubmit="javascript:return emailValidate();">
						<label for="email">Введите Email для получения файлов:</label><br />
						<input type="text" name="email" id="email" placeholder="E-mail" required /><br /><br />
						<label for="phone">Введите телефон для подтверждения доступа:</label><br />
						<input type="text" name="phone" id="phone" placeholder="+7 (000) 000-00-00" data-phone-pattern required /><br />
						<input type="submit" value="Скачать файлы">
						<div class="files">PDF 4,7 MB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOC 0,8 MB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XLS 1,2 MB</div>
					</form>
				</div>
			</div>
	      	</div>			          		
      	</div>	
	</div>
</body>
</html>
