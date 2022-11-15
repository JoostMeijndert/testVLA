<?php
$id = $_GET['id'];

$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli ('localhost', $user, $pass, $db) or die();

$query = "DELETE FROM kinderen WHERE id_kind = '$id'";
$result = mysqli_query($db, $query) or die('fout bij delte');

header("location: admin_list.php");