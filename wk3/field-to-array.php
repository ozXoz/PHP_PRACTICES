<?php
// (A) $_POST WILL CONTAIN ALL THE POSTED FORM DATA AS USUAL
// print_r($_POST);
// $_POST['COLORS'] WILL BE AN ARRAY
// foreach ($_POST['colors'] as $color) {
//     echo $color . "<br>";
//   }

$colors = filter_input(INPUT_POST, 'colors', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($colors === NULL) {
    $colors = ['red', 'green'];
}
foreach ($colors as $color) {
    echo $color . "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>From-field-Array</title>
    <meta name="description" content="Storm form fields into a array and populate values of fields">
    <meta name="author" content="Mak Nikooray">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<form method="post">
    <label>Favorite Colors</label>
    <!-- JUST APPEND [] BEHIND THE NAME to make it an array-->
    <!-- <input type="text" name="colors[]" required value="red"/>
    <input type="text" name="colors[]" required value="green"/> -->
    <input type="text" name="colors[]" value='<?php echo $colors[0];?>'>
    <input type="text" name="colors[]" required value='<?php echo $colors[1];?>'>
    <input type="text" name="colors[]" value="pink">
    <input type="submit" value="Submit">
</form>

</body>
</html>

<?php
echo "<hr>";
show_source(__FILE__);
?> 