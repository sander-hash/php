<?php
session_start();
if (isset($_POST['btnSubmit'])){
    $_SESSION['voornaam'] = $_POST['voornaam'];
    $_SESSION['achternaam'] = $_POST['achternaam'];
    header('location:/sessions/pagina2.php');
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
        <input name="voornaam" type="text"/>
        <input name="achternaam" type="text"/>
        <button name="btnSubmit" type="submit" value="Submit">Submit</button>
</body>
</html>

<?php



?>