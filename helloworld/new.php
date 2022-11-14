<!doctype html>
<html lang="en">
<head>
    <title>client toevoegen</title>
</head>
<body>
<h1>Client toevoegen</h1>
<a href="tabel_kind.php">terug</a><br>

<?php
//// define variables and set to empty values
//$clientErr = $naamErr = $GdatumErr = $geslachtErr = "";
//$client = $naam = $Gdatum = $geslacht = "";
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (empty($_POST["name"])) {
//        $clientErr = "Name is required";
//    } else {
//        $client = test_input($_POST["name"]);
//    }
//
//    if (empty($_POST["email"])) {
//        $emailErr = "Email is required";
//    } else {
//        $email = test_input($_POST["email"]);
//    }
//
//    if (empty($_POST["website"])) {
//        $website = "";
//    } else {
//        $website = test_input($_POST["website"]);
//    }
//
//    if (empty($_POST["comment"])) {
//        $comment = "";
//    } else {
//        $comment = test_input($_POST["comment"]);
//    }
//
//}
//
//function test_input($data){
//
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}
//
//?>

<form method="post" action="verwerk_inschrijving.php">
    <label>Client_id: <input type="text" name="id_client"></label><br>
    <!--    <label>Kin ID: <input type="text" name="id_kind"></label><br>-->
    <label>Naam kind: <input type="text" name="naam"></label><br>
    <label>Geboortedatum: <input type="date" name="Geboortedatum"></label><br>
    <label> Geslacht:
        <select name="geslacht">
            <option value="">M/V</option>
            <option value="M">M</option>
            <option value="F">V</option>
        </select>
    </label>
    <br>
    <input type="submit" name="toevoegen">
</form>

</body>
</html>

<?php
