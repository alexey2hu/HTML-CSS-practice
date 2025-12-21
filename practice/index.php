<!DOCTYPE html>
<!-- -->
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="./images/icons/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="./styles/index.css">
	<title>HTML5+CSS3</title>
</head>

<body>
	<!-- Абсолютные пути-->
	<a href="https://google.com">Ссылка на гугл</a>
	<img src="d:/...">

	<!-- Относительные пути-->
	<!-- С текущей папки -->
	<img src="images/icons/favicon.ico">
	<!-- С текущей папки (Явное уточнение) -->
	<img src="./images/icons/favicon.ico">
	<!-- Выход с текущей папки (../) -->
	<hr>
	<img src="../practice/images/icons/favicon.ico">
	<br>
	<!-- От корня проекта (!Лучший вариант для серверов!) -->
	<img src="/practice/images/icons/favicon.ico">
</body>

</html>