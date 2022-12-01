<!doctype html>
<html lang="en">
<head>
    <title>Aanpassen</title>
    <link rel="stylesheet" href="/Styles/Aanpassen.css">
    <meta name="robots" content="noindex, nofollow" />
</head>
<body>

<?php
$id_kind = $_GET['id'];
$client_id = $_GET['id_client'];
$naam = $_GET['Naam'];
$geboortedatum = $_GET['Geboortedatum'];
$geslacht = $_GET['geslacht'];

echo "<h2>edit id $id_kind</h2>"
?>

<form method="get" action="verwerk_aanpassing.php">
    <input type="hidden" name="id_kind" value="<?php echo $id_kind?>">
    <label> ID_Client
        <input type="text" name="id_client" value="<?php echo $client_id ?>">
    </label><br>
    <label> Naam:
        <input type="text" name="Naam" value="<?php echo $naam ?>">
    </label><br>
    <label>Geboortedatum:
        <input type="date" name="Geboortedatum" value="<?php echo $geboortedatum?>">
    </label><br>
    <label> Geslacht:
        <select name="geslacht">
            <option value="<?php echo $geslacht?>">M/V</option>
            <option value="M">M</option>
            <option value="V">V</option>
        </select>
    </label><br>
    <input type="submit" name="submit" value="Aanpasen">
</form>

</body>
</html>


<!---->
<!--<table>-->
<!--    <tr>-->
<!--        <form method="post" action="verwerk_aanpassing.php">-->
<!--            <input type="hidden" name="id_kind" value="--><?php //echo $id_kind?><!--">-->
<!--    <tr>-->
<!--        <td>Client_id:</td>-->
<!--        <td><input type="text" name="id_client" value="--><?php //echo $client_id ?><!--"></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Naam kind:-->
<!--        <td><input type="text" name="Naam" value="--><?php //echo $naam ?><!--"></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Geboortedatum:</td>-->
<!--        <td><input type="date" name="Geboortedatum""></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td> Geslacht: </td>-->
<!--        <td>-->
<!--            <select name="geslacht">-->
<!--                <option value="">M/V</option>-->
<!--                <option value="M">M</option>-->
<!--                <option value="V">V</option>-->
<!--            </select>-->
<!--        </td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>-->
<!---->
<!--        </td>-->
<!--        <td>-->
<!--            <input type="submit" name="submin" value="aanpasen">-->
<!--        </td>-->
<!--    </tr>-->
<!--    </form>-->
<!--    </tr>-->
<!--</table>-->

