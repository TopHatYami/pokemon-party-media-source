<?php
include '../db.php';
$db = new DB;
$name = $_POST['name'];
$id = $_POST['id'];
$db->query("UPDATE pokemon SET nickname='$name' WHERE id = $id");
?>
