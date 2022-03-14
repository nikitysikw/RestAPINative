<?php
$rand = rand(10000, 1000000);

if (isset($_POST['abort'])) {
	header("Location: http://apiwebsite.loc/");
	exit;
}

if ($_POST['input_number'] != $_POST['successful']) {
	header("Location: http://apiwebsite.loc/api/user/updateDB/index.php");
	exit;
}

header("Location: http://apiwebsite.loc/api/user/updateDB/updateDB.php");
exit;