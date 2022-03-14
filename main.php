<?php
//var_dump($_SERVER);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main page</title>
</head>
<body>
<a href="/api/user/get/">Get users</a>
<a href="/api/user/get/1">Get one user</a>
<a href="/api/user/updateDB">Update DB users</a>
<a href="/api/user/myinfo?debug=true">Get info</a>
<form action="api/user/get" method="get">
	<label>
		<span>Номер записи пользователя</span>
		<input type="number" name="id">
	</label>
	<button type="submit">Получить запись пользователя</button>
</form>
<form action="api/user/delete" method="delete">
	<label>
		<span>Номер записи пользователя</span>
		<input type="number" name="id">
	</label>
	<button type="submit">Получить запись пользователя</button>
</form>
</body>
</html>
