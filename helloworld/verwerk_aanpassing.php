<?php
$id = $_GET['id'];
$client_id = $_GET['id_client'];
$naam = $_GET['Naam'];
$geboortedatum = $_GET['Geboortedatum'];
$geslacht = $_GET['geslacht'];


//aanpassen en terugsturen
$id = $_GET['id'];

$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli ('localhost', $user, $pass, $db) or die();

$query = "UPDATE kinderen ";
$query .= "SET id_client = '$client_id', Naam = '$naam', Geboortedatum = '$geboortedatum', geslacht = '$geslacht'";
$query .= "WHERE id = $id";
$result = mysqli_query($db, $query) or die('fout bij updaten');
header("location: admin_list.php");