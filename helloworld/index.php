<?php
    session_start();

    $username= "joost";
    $Wachwoord= "1234";

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        header("location: tabel_kind.php");
    }

    if (isset( $_POST['username']) && isset($_POST['wachtwoord'])){
        if ($_POST['username'] == $username  && $_POST['wachtwoord'] == $Wachwoord){
            $_SESSION['logged_in'] = true;
            header("location: tabel_kind.php");
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>homescreen</title>
    <link rel="stylesheet" href="/Styles/Homescreen.css">
</head>
<body>
<a href="tabel_kind.php">tabel page</a>
<form method="POST" action="#">
    <br>
    Username:<br>
    <input type="text" name="username" placeholder="gebruikersnaam"><br><br>
    Wachtwoord:<br>
    <input type="text" name="wachtwoord" placeholder="wachtwoord"><br><br>
    <input type="submit" value="Login!">
</form>

</body>
</html>






