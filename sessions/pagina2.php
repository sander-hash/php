<?php

session_start();
if(isset($_SESSION['voornaam'])){
echo $_SESSION['voornaam'];
}
if(isset($_SESSION['achternaam'])){
echo $_SESSION['achternaam'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">

        <button name="btnSessionDestroy" type="submit" value="Submit">Session destroy</button>
</body>
</html>

<?php
if(isset($_POST['btnSessionDestroy'])){
    session_destroy();
}

?>