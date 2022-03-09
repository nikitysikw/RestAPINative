<?php
require_once "../../config/Database.php";

$gets = $_GET["id"];

$db = new Database();
$conn = $db->getConnection();

$a = $conn->query("select * from test where id =" . $gets[0]);
if ($row = $a->fetch_row()) {

} else {
    ?>
    <span>Not found 404</span>
    <?php
}