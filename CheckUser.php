<?php
    $username=$_POST["username"];
    $password=$_POST["password"];
    if ($username=="Mike" && $password=="mysecretpassword"){
        setcookie('user', $username);
        setcookie('access-level', 'standard');
    }
?>