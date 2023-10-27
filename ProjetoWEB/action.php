<?php
    session_start();
    
    if(isset($_POST['f_tema'])){
        $_SESSION['tema'] = $_POST["f_tema"];
        header('Location: index.php');
    } else{
        header('Location: index.php');
    }
?>