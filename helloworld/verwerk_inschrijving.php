<?php
//variabelen naar leeg zetten


// data lezen
$id_client = $_POST['id_client'];
$id_kind = $_POST['id_kind'];
$naam = $_POST['naam'];
$gebootedatum = $_POST['Geboortedatum'];
$geslacht = $_POST['geslacht'];

// data in database zetten
$dbc = mysqli_connect('localhost', 'root', '', 'testdb') or die('geen verbinding met database');

$query = "INSERT INTO kinderen VALUES ('$id_client', '', '$naam', '$gebootedatum', '$geslacht')";
//, '$id_kind'


$result = mysqli_query($dbc,$query) or die('FOUT');

mysqli_close($dbc);

// bevestigen in database
if ($result){
    echo 'toevoegen gelukt';
    header("location: tabel_kind.php");
}
else{
    echo 'fouet opgetreden';
}

