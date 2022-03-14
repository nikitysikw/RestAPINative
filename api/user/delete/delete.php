<?php
require_once "../../../config/Database.php";

$db = new Database();
$conn = $db->getConnection();

if (isset($_GET["id"])) {
	$id = $_GET["id"];

	$stmt = $conn->prepare("select * from products where id = $id");
	if ($stmt->execute()) {
		$row = $stmt->get_result()->fetch_row();
		echo json_encode($row, JSON_PRETTY_PRINT + JSON_UNESCAPED_SLASHES + JSON_NUMERIC_CHECK);
	}
} else {

}