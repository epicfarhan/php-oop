<?php

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $color = htmlspecialchars($_POST['colors']);
    if (empty($firstname) || empty($lastname)) {
        header("Location:index.php");
    }else{
        header("Location:sent.php");
    }
}