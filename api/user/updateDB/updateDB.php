<?php
require_once "../../../config/Database.php";

$db = new Database();
$conn = $db->getConnection();

$contents = file_get_contents("../../../testData/products.json");
$json_contents = json_decode($contents, 1);

$a = $conn->query("TRUNCATE TABLE products");

$stmt = $conn->prepare("INSERT INTO `products`(`title`, `price`, `description`, `category`, `image`, `rating`) VALUES (?, ?, ?, ? ,? ,?)");
for ($i = 0; $i < count($json_contents); $i++) {
	$json_content = $json_contents[$i];
	$stmt->bind_param("sisssi", $json_content['title'], $json_content['price'],
		$json_content['description'], $json_content['category'], $json_content['image'], $json_content['rating']['rate']);
	$stmt->execute();
}

echo "Compile";
echo "<a href='http://apiwebsite.loc/'>На главную</a>";