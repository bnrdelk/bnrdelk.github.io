<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(empty($_POST["name"] == false))
    {
        echo $_POST["name"]."<br>";
    } else {
        echo "Name required. <br>";
    }

    if(empty($_POST["username"] == false))
    {
        echo $_POST["username"]."<br>";
    } else {
        echo "Username required. <br>";
    }

    if(empty($_POST["password"] == false))
    {
        echo $_POST["password"]."<br>";
    } else {
        echo "Password required. <br>";
    }

    if(empty($_POST["address"] == false))
    {
        echo $_POST["address"]."<br>";
    } else {
        echo "Address required. <br>";
    }

    if(empty($_POST["zip-code"] == false))
    {
        echo $_POST["zip-code"]."<br>";
    } else {
        echo "ZIP Code required. <br>";
    }

    if(empty($_POST["email"] == false))
    {
        echo $_POST["email"]."<br>";
    } else {
        echo "Email required. <br>";
    }

    if(empty($_POST["sex"] == false))
    {
        echo $_POST["sex"]."<br>";
    } else {
        echo "Sex required. <br>";
    }

    if(empty($_POST["languages"] == true))
    {
        echo "Language is required. <br>";
    } else {
        for($i = 0; $i<sizeOf($_POST["languages"]); $i++)
        echo $_POST["languages"][$i]."<br>";
    }

    if(empty($_POST["about"] == false))
    {
        echo $_POST["about"]."<br>";
    } else {
        echo "About required. <br>";
    }

?>
</body>
</html>