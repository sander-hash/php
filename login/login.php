<?php
session_start();
include 'functions.php'

?>

<form method="post" action="login.php">
    <input type="text" name="username"/>
    <input type="password" name="password"/>
    <button type="submit" name="btnLogin">Login</button>
</form>


<?php
if(isset($_POST['btnLogin'])){
$usernaam = $_POST['username'];
$password = $_POST['password'];
login($usernaam, $password);
}
?>


