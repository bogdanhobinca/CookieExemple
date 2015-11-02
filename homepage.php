<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    if (isset($_COOKIE['access-level'])){
        displayAccessLevel($_COOKIE['access-level']);
    }else{
        echo "<p>Not allowed</p>";
    }

    function displayAccessLevel($acceessLevel){
        echo "<p>Welcome!</p>";
        if ($acceessLevel == "standard"){
            echo "<p>You are currently logged in as a standard user</p>";
        }else if ($acceessLevel=="root"){
            echo "<p>You are currently logged in as a root user</p>";
            echo "<p>You now have access to additional administrative features</p>";
        }
    }
?>
</body>
</html>
