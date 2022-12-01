<!doctype html>
<html lang="en">
<head>
    <title>Admin page</title>
    <link rel="stylesheet" href="/Styles/admin_page.css">

</head>
<body>
<nav>
    <?php
    include 'header.php';
    ?>
</nav>

<a href="tabel_kind.php">Terug</a>

<?php

//Conectie datavbaze
$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli ('localhost', $user, $pass, $db) or die();

//kijken in database en alle kind_ID laten zien
$query = "SELECT * FROM kinderen";
$result = mysqli_query($db, $query) or die('fout bij query');

//loop waar alle Kind_ID in beelt komen

echo '<table>';

while ($row = mysqli_fetch_array($result)) {

    $client_id = $row['id_client'];
    $id_kind = $row['Id_kind'];
    $naam = $row['Naam'];
    $geboortedatum = $row['Geboortedatum'];
    $geslacht = $row['geslacht'];

    echo '<tr>';
    echo "<td>$client_id</td><td>$id_kind</td><td>$naam</td><td>$geboortedatum</td><td>$geslacht</td>";

    echo '<td>';
    echo '<a href="AanpasenTabel.php?id=' . $id_kind . '&id_client=' . $client_id . '&Naam=' . $naam . '&Geboortedatum=' . $geboortedatum . '&geslacht=' . $geslacht . '">"Aanpassen"</a>';
    echo '</td>';

    echo '<td>';
    echo '<a href="delete.php?id=' . $id_kind . '">"delete"</a>';
    echo '</td>';

    echo '</tr>';

}
echo '</table>';


?>


</body>
</html>

<?php

?>