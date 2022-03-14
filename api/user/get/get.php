<?php
require_once "../../../config/Database.php";

$db = new Database();
$conn = $db->getConnection();

header("Content-type: application/json");

if (isset($_GET["id"])) {
	$id = $_GET["id"];

	$stmt = $conn->prepare("select * from products where id = $id");
	if ($stmt->execute()) {
		$row = $stmt->get_result()->fetch_assoc();
		echo json_encode($row, JSON_PRETTY_PRINT + JSON_UNESCAPED_SLASHES + JSON_NUMERIC_CHECK);
	}
} else {
	$stmt = $conn->query("select * from products limit 20");
	while ($temp = $stmt->fetch_assoc()) {
		$all[] = $temp;
	}
	echo json_encode($all, JSON_PRETTY_PRINT + JSON_UNESCAPED_SLASHES + JSON_NUMERIC_CHECK);
}