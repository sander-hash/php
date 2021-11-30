
<?php
$user="root";
$pass="";
try {
    $db = new PDO('mysql:host=localhost;dbname=login', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
