<?php
include 'functions.php';
session_start();
if ($_SESSION['isingelogd'] == 'true'){
echo "u bent ingelogd!";
}else{
    header("Location:login.php");
}

?>
<form method="post">
    <button type="submit" name="destroySession">Uitloggen</button>
</form>
<?php
sessionDestroy();
?>