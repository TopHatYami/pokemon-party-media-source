<?php
include '../db.php';
$db = new DB;
$active = $_POST['active'];
$id = $_POST['id'];
$db->query("UPDATE pokemon SET active='$active' WHERE id = $id");
?>
