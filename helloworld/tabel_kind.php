<!DOCTYPE html>
<html>
<head>
    <title>Tabel met inhoud</title>
    <link rel="stylesheet" href="/Styles/tabelscreen.css">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body>
<nav>
    <?php
    include 'header.php';
    ?>
</nav>

<table>
    <tr>
        <th>id_Client</th>
        <th>id_Kind</th>
        <th>Naam</th>
        <th>Geboortedatum</th>
        <th>Geslacht</th>
    </tr>

    <?php

    $user = 'root';
    $pass = '';
    $db = 'testdb';

    $db = new mysqli ('localhost', $user, $pass, $db) or die();

    $sql = "SELECT id_client, id_kind, Naam, Geboortedatum, geslacht from kinderen";
    $result = $db->query($sql);

    if ($result->num_rows . 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                  <td>" . $row["id_client"] . "</td>
                  <td>" . $row["id_kind"] . "</td>
                  <td>" . $row["Naam"] . "</td>
                  <td>" . $row["Geboortedatum"] . "</td>
                  <td>" . $row["geslacht"] . "</td>
                  </tr>";
        }
    } else {
        echo "</table>";
    }
    $db->close();


    ?>
</table>

<br><button onclick="window.location.href='new.php'">Nieuw kiid</button>
<br><br>

<footer>
</footer>
</body>
</html>