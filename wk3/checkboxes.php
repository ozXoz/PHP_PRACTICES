<?php
$foods = [];
if(isset($_POST['submit'])) {
    $foods = $_POST['food'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>From-checkboxes</title>
    <meta name="description" content="Checking values of checkboxes/radio buttons">
    <meta name="author" content="Mak Nikooray">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<h2>Select your favourite foods?</h2>
<form method="post" action="">

    <input type="checkbox" name='food[]'
        <?php echo in_array('Pizza', $foods)? 'checked': ''; ?>
           value="Pizza"> Pizza
    <input type="checkbox" name='food[]' value="Steak"> Steak
    <input type="checkbox" name='food[]' value="Chicken"> Chicken<br>
    <input type="checkbox" name='food[]' value="Tocos"> Tocos
    <input type="checkbox" name='food[]' value="Fish"> Fish
    <input type="checkbox" name='food[]' value="Pasta"> Pasta<br>
    <input type="checkbox" name='food[]' value="Soup"> Soup
    <input type="checkbox" name='food[]' value="Salad"> Salad
    <input type="checkbox" name='food[]' value="Shrimp"> Shrimp
    <p><input type="submit" value="Submit" name="submit"></p>
</form>

<?php

if(!empty($foods)) {
    echo "<h2>You selected following foods:</h2>";
    echo "<ul>";
    foreach($foods as $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>

<?php
echo "<hr>";
show_source(__FILE__);
?> 