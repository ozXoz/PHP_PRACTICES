<?php
    $subject = '';
    $colour = 'white';
    $comment = '';
    $output_str = '';
    //Retrieve info from query string and store them in local variables
    if(isset($_GET['subject']) && isset($_GET['colour']) ){
        $subject = $_GET['subject'];
        $colour = $_GET['colour'];
        $comment = $_GET['comment'];
        $output_str = "<h2>$subject</h2><h3>$comment</h3>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Input</title>
    <meta name="description" content="Week 1 lab exercise">
    <meta name="author" content="Mak Nikooray">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .lightyellow{
            background-color: lightyellow;
        }
        .lightblue{
            background-color: lightblue;
        }
        .pink{
            background-color: pink;
        }
    </style>
</head>
<body>
    
    <h1>Working with form</h1>   

   <form method='GET'>
        <p><input type="text" placeholder="Subject" name="subject"></p>
        <p>
            <select name="colour">
                <option value="pink">Pink</option>
                <option value="lightyellow">Light yellow</option>
                <option value="lightblue">Light blue</option>
                
            </select>
        </p>
        
        <textarea name="comment" rows="4" cols="40" placeholder="comment"></textarea>
        <p>
            <input type="submit" value="Submit">
        </p>
        
    </form>
        <?php echo "<section class='$colour'>$output_str</section>"; ?>
        <script src=https://my.gblearn.com/js/loadscript.js></script>

    </body>
    </html>
        