<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
</head>
<body>

<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$ClienErr = $NaamErr = $geboortedatumErr = "";
$ClienID = $Naam = $geboortedatum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id_client"])) {
        $ClienErr = "Name is required";
    } else {
        $ClientID = test_input($_POST["id_client"]);
    }

    if (empty($_POST["naam"])) {
        $NaamErr = "Email is required";
    } else {
        $Naam = test_input($_POST["naam"]);
    }

    if (empty($_POST["Geboortedatum"])) {
        $geboortedatum= "";
    } else {
        $geboortedatum = test_input($_POST["Geboortedatum"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Client_ID: <input type="text" name="id_client">
    <span class="error">* <?php echo $ClienErr;?></span>
    <br><br>
    Naam: <input type="text" name="naam">
    <span class="error">* <?php echo $NaamErr;?></span>
    <br><br>
    Geboortedatum<input type="date" name="Geboortedatum">
    <span class="error"><?php echo $geboortedatumErr;?></span>
    <br><br>
    geslacht:
    <select name="geslacht">
        <option value="">M/V</option>
        <option value="M">M</option>
        <option value="V">V</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

</body>
</html>

<?php

?>