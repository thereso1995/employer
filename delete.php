<?php
require_once("db.php");
$pdo_statement=$db->prepare("delete from em where id=" . $_GET['id']);
$pdo_statement->execute();
header('location:index.php');
?>