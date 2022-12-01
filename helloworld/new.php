<!doctype html>
<html lang="en">
<head>
    <title>Kind toevoegen</title>
    <link rel="stylesheet" href="/Styles/newCient.css">

</head>
<body>
<h1>Client toevoegen</h1>

<button onclick="window.location.href='tabel_kind.php'">Anuleren</button>
<br><br>

<table>
    <tr>
        <form method="post" action="verwerk_inschrijving.php">
    <tr>
        <td>Client_id:</td>
        <td><input type="text" name="id_client"></td>
    </tr>
    <tr>
        <td>Naam kind:
        <td><input type="text" name="naam"></td>
    </tr>
    <tr>
        <td>Geboortedatum:</td>
        <td><input type="date" name="Geboortedatum"></td>
    </tr>
    <tr>
        <td> Geslacht: </td>
        <td>
            <select name="geslacht">
                <option value="">M/V</option>
                <option value="M">M</option>
                <option value="V">V</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>

        </td>
        <td>
            <input type="submit" name="toevoegen">
        </td>
    </tr>
    </form>
    </tr>
</table>

</body>
</html>

<?php
