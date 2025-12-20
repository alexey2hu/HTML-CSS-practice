<!DOCTYPE html>
<!-- -->
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
	<title>HTML 5</title>
</head>

<body>
	<!-- <form>
		<label for="#inputTextID">Подсказка: </label>
		<input type="text" id='inputTextID'>
		<select name="select">
			<option value="default">-- По умолчанию --</option>
			<option value="1">-- Пункт 1 --</option>
			<option value="three">-- Пункт 2 --</option>
		</select>
		<textarea name="" id="" cols="20" rows="10"></textarea>
		<button type='submit'>Отправить данные</button>
	</form> -->

	<form action="">
		<!-- Добавляет границу для данных внутри -->
		<fieldset>
			<legend>Два инпута</legend>
			<input type="text">
			<input type="text">
		</fieldset>
		<fieldset>
			<legend>Инпут + выбор</legend>
			<input type="text">
			<select name="select">
				<option value="0">-- По умолчанию --</option>
				<option value="1">-- Пункт 1 --</option>
				<option value="2">-- Пункт 2 --</option>
			</select>
		</fieldset>
		<button type='submit'>submit</button>
		<button type='reset'>reset</button>
	</form>
</body>

</html>