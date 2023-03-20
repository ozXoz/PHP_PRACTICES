<?php
// (A) $_POST['fav'] ITSELF WILL BE A MULTI-DIMENSIONAL ARRAY
// print_r($_POST['fav']);

// (B) FAVORITE COLORS
// print_r($_POST['fav']['colors']);

// (C) FAVORITE FOOD
// print_r($_POST['fav']['foods']);
$colors = [1, 2];
$fav = filter_input(INPUT_POST, 'fav', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($fav === NULL) {
    $fav = ['colors' => [], 'foods' =>[ ]];
}

$colors = array_filter($fav['colors']); // get rid of empty elements

if(count($colors) > 0){
    echo "<h2>Colours</h2>";
    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";
}
$foods = array_filter($fav['foods']); // get rid of empty elements
if(count($foods) > 0){
    echo "<h2>Foods</h2>";
    echo "<ul>";
    foreach ($foods as $food) {
        echo "<li>$food</li>";
    }
    echo "</ul>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>From-2D Array</title>
    <meta name="description" content="Storing values of fields in a 2-D array">
    <meta name="author" content="Mak Nikooray">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<form method="post">
    <!-- JUST AS IN PHP, WE USE NAME[KEY][] TO SPECIFY MULTI-DIMENSION ARRAYS -->
    <label>Favorite Colors</label>  <br>
    <input type="text" name="fav[colors][]" required value="red">
    <input type="text" name="fav[colors][]" required value="green">
    <input type="text" name="fav[colors][]">
    <br>
    <label>Favorite Food</label>  <br>
    <input type="text" name="fav[foods][]" required value="pizza">
    <input type="text" name="fav[foods][]" required value="eggs">
    <input type="text" name="fav[foods][]">

    <input type="submit" value="Submit">
</form>

</body>
</html>

<?php
echo "<hr>";
show_source(__FILE__);
?> 