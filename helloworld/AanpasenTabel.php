<!doctype html>
<html lang="en">
<head>
    <title>Aanpassen</title>

</head>
<body>

<?php
$id = $_GET['id'];
$client_id = $_GET['id_client'];
$naam = $_GET['Naam'];
$geboortedatum = $_GET['Geboortedatum'];
$geslacht = $_GET['geslacht'];

echo "<h2>edit id $id</h2>"
?>

<form method="get" action="">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label> ID_Client
        <input type="text" name="id_client" value="<?php echo $client_id ?>">
    </label><br>
    <label> Naam:
        <input type="text" name="Naam" value="<?php echo $naam ?>">
    </label><br>
    <label>Geboortedatum:
        <input type="date" name="Geboortedatum">
    </label><br>
    <label> Geslacht:
        <select name="geslacht">
            <option value="">M/V</option>
            <option value="M">M</option>
            <option value="V">V</option>
        </select>
    </label><br>
    <input type="submit" name="submit" value="Go!">
</form>

</body>
</html>
