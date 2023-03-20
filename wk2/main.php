<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Include</title>
    <meta name="description" content="Demo the use of include control">
    <meta name="author" content="your name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        nav{
            background: yellow;
        }
    </style>
</head>
<body>
<?php

if(isset($_GET['user']) && !empty($_GET['user'])){
    $user = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_STRING);
    //$user = $_GET['user'];
    include "greetuser.inc.php";
}
else{
    include "greetanonymous.inc.php";
}
?>
<main>
    <?php include "home.inc.php" ?>
</main>
</body>
</html>
<?php
echo "<hr>";
show_source(__FILE__);
?>