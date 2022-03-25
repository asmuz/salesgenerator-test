<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Тестовое задание</title>
	<link rel="stylesheet" href="/style.css" />
	<script src="/script.js"></script>
<script type="text/javascript">

</script>
</head>
<body>

	<div class="section full-height">

      	<input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn"/>
      	<label for="modal-btn">Кликни</label> 		

      	<div class="modal">		
	      	<div class="modal-wrap">	
<form id="form" action="/amo/amo.php" method="post" onsubmit="javascript:return emailValidate();">
   <div class="row">
     <label for="phone">Введите телефон для подтверждения доступа:</label>
  </div>
   <div class="row">
<input id="phone" name="phone" placeholder="+7 (000) 000-00-00" data-phone-pattern required />
  </div>
     <div class="row">
     <label for="email">Введите Email для получения файлов:</label>
  </div>
   <div class="row">
       <input type="text" name="email" id="email" placeholder="E-mail" required />
  </div>
  <input type="submit" value="Скачать файлы">
</form>
	      	</div>			          		
      	</div>	

	</div>

</body>
</html>