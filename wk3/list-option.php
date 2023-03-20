<?php
$devices = array("Mobile", "Laptop", "Tablet", "Camera");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic dropdown</title>
    <meta name="description" content="Dynamically Generate Select Dropdown options">
    <meta name="author" content="Mak Nikooray">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form>

    <select name="selection">
        <option selected="selected">Choose one</option>
        <?php
        // Iterating through the product array to populate options in form
        foreach($devices as $device){
            echo "<option value='" . strtolower($device) . "'>$device</option>";
        }
        ?>

    </select>
    <input list="devices" name="devices">
    <datalist id="devices">
        <?php
        // Iterating through the product array to populate options in form
        foreach($devices as $device){
            echo "<option value='" . strtolower($device) ."'>$device</option>";
        }
        ?>
    </datalist>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

</body>
</html>

<?php
echo "<hr>";
show_source(__FILE__);
?> 