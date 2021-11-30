<?php

function login(){
    include 'db.php';
if (isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username = :user AND password = :pass";

    $stmt = $db->prepare($query);
    $stmt->bindParam(':user',$username);
    $stmt->bindParam(':pass',$password);
    $stmt->execute();
    $login = $stmt->fetch(PDO::FETCH_OBJ);
    if ($login !=null){
        $_SESSION['isingelogd'] = true;
        header("Location:index.php");
    }else{
        echo "Login is niet correct";
    }
}
}






function sessionDestroy(){
    if (isset($_POST['destroySession'])){
        session_destroy();
        header("Location:login.php");
        
    }
    }

?>