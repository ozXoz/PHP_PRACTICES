<?php

$subject="";
$colour="";
$comment="";
$out_str="";

if(isset($_GET['subject']) && isset($_GET['colour']) && isset($_GET['comment'])){

    $subject=$_GET['subject'];
    $colour=$_GET['colour'];
    $comment=$_GET['comment'];
    $out_str = "<h2>$subject</h2>
                <h3>$comment</h3>";
}
echo "<section class='$colour'>$out_str</section>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 1 Lab</title>
    <meta name="description" content="Lab 1 week 1">
    <meta name="author" content="Onur Korkmaz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .red{
            background-color: red;

        }
        .blue{

            background-color: blue;

        }

        .yellow{

            background-color: yellow;

        }
    </style>



</head>
<body>


<form method="get">

    <p1><input type="text" placeholder="subject" name="subject"></p1>
    <p><select name="colour" id="colour"

        <option value="red">Red</option>
        <option value="blue ">Blue</option>
        <option value="yellow">Yellow</option>

        </select></p>
    <textarea name="comment" rows="5" cols="50" placeholder="comment"></textarea>

    <p><input type="submit" value="Submit"></p>


</form>




<script src=https://my.gblearn.com/js/loadscript.js></script>

</body>
</html>

<?php
echo "<hr>";
show_source(__FILE__);
