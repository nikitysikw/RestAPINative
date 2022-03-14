<?php
$rand = rand(10000, 1000000);
?>

<h1>Вы уверены?</h1>
<span>Если да, введите число <?= $rand ?></span>
<form action="check.php" method="post">
	<label>
		<span>Поле для ввода:</span>
		<input type="number" name="input_number">
	</label>
	<input type="number" name="successful" value="<?= $rand ?>" hidden>
	<button type="submit">Проверить</button>
	<button type="submit" name="abort">Я передумал</button>
</form>
