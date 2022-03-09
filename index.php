<?php
require_once "config/Database.php";
$db = new Database();
$conn = $db->getConnection();
$a = $conn->query("select * from test");
