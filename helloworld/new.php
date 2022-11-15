<!doctype html>
<html lang="en">
<head>
    <title>client toevoegen</title>
</head>
<body>
<h1>Client toevoegen</h1>
<a href="tabel_kind.php">terug</a><br>


<form method="post" action="verwerk_inschrijving.php">
    <label>Client_id: <input type="text" name="id_client"></label><br>
    <!--    <label>Kin ID: <input type="text" name="id_kind"></label><br>-->
    <label>Naam kind: <input type="text" name="naam"></label><br>
    <label>Geboortedatum: <input type="date" name="Geboortedatum"></label><br>
    <label> Geslacht:
        <select name="geslacht">
            <option value="">M/V</option>
            <option value="M">M</option>
            <option value="V">V</option>
        </select>
    </label>
    <br>
    <input type="submit" name="toevoegen">
</form>

</body>
</html>

<?php
