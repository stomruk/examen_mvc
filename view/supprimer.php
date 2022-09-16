<?php
include ("../controller/database.php");

$req = "DELETE FROM" . $_GET['table'] . "WHERE id = :id";
$request = $db->prepare($req);
$request->bindParam(':id', $_GET['id']);
$request->execute();

$destination = $_GET['table'];




header("Location: ../index.php");
