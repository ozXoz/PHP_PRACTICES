<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <meta name="description" content="Template">
    <meta name="author" content="your name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .twelve{
            font-size: 12pt;
        }
        .eighteen{
            font-size: 18pt;
        }
        .twenty_four{
            font-size: 24pt;
        }

        .under_line{
            text-decoration: underline;

        }

        .upper_case{
            text-transform: uppercase;
        }



    </style>

</head>
<body>
<?php

$check_boxes_text_style="";
$radio_button_text_style="";
$first_name="";
$last_name="";
$student_id="";
$course_list= array ("COMP1223"=>"Web Development Fundamentals","COMP1168"=>"Database Management",
    "COMP1202"=>"Object-Oriented Programming","COMP3044"=>"Linux Essentials","COMP1230"=>"Advanced Web Programming",
    "COMP2130"=>"Application Development using Java");

$output="";

if (isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['id_student'])&&
    isset($_POST['all_courses']) &&isset($_POST['text_style']) && isset($_POST['text_size'])) {

    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $student_id = $_POST['id_student'];
    $course_list = $_POST['all_courses'];
    $check_boxes_text_style=$_POST['text_style'];
    $radio_button_text_style=$_POST['text_size'];




    $output = "<h2>$first_name $last_name $student_id $course_list  </h2>";

}




?>


<form action="101303363.php" method="post">
    <label for="fname">First name</label>
    <input type="text" name="f_name" id="f_name" placeholder="Onur" value=""><br>
    <label for="lname">Last name</label>
    <input type="text" name="l_name" id="l_name" placeholder="Korkmaz" value=""><br>
    <label for="student_id">Student ID</label>
    <input type="text" name="id_student" id="id_student" placeholder="101303363" value=""><br>
    <label for="courses>">Choose Courses</label>

    <select id="courses" name="all_courses">

        <option value="<?php echo "COMP1168=".$course_list['COMP1168']?>">COMP1168 - Database Management</option>
        <option value="<?php echo "COMP1202 =". $course_list['COMP1202']?>">COMP1202 - Object-Oriented Programming</option>
        <option value="<?php echo "COMP3044 =". $course_list['COMP3044']?>">COMP3044 - Linux Essentials</option>
        <option value="<?php echo "COMP1202 =". $course_list['COMP1202']?>">COMP1202 - Application Development using Java</option>
        <option value="<?php echo "COMP1230 =". $course_list['COMP1230']?>">COMP1230 - Advanced Web Programming</option>
        <option value="<?php echo "COMP2130 =". $course_list['COMP2130']?>">COMP2130 - Application Development using Java</option>
    </select>
    <br>
    <h1>Check Boxes</h1>

    <p>
    <section name="text_style">
        <label for="check_boxes">Strong</label>
        <input type="checkbox" id="strong" name="strong">
        <label for="check_boxes">Underline</label>
        <input type="checkbox" id="underline" name="underline">
        <label for="check_boxes">UpperCase</label>
        <input type="checkbox" id="uppercase" name="uppercase">
        </p>
    </section>
    <br>

    <p> Radio button
        <br>
    <div name="text_size">

        <input type="radio" id="12_pt" name="px_12" value="12pt">
        <label for="12_px">12 pt</label><br>

        <input type="radio" id="18_pt" name="pt_18" value="18pt">
        <label for="18_pt">18 pt</label><br>

        <input type="radio" id="24_pt" name="pt_24" value="24pt">
        <label for="24_pt">24pt</label>
    </div>

    <br>
    <input type="submit" value="submit">

</form>

<p>



    <?php echo $output; ?>

<p>











</p>


</body>
</html>
<script src=https://my.gblearn.com/js/loadscript.js></script>

<hr><code><span style="color: #000000">
&lt;!DOCTYPE&nbsp;html&gt;<br />&lt;html&nbsp;lang="en"&gt;<br />&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Template&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="description"&nbsp;content="Template"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="author"&nbsp;content="your&nbsp;name"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="viewport"&nbsp;content="width=device-width,&nbsp;initial-scale=1.0"&gt;<br /><br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;src=https://my.gblearn.com/js/loadscript.js&gt;&lt;/script&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br /><span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;hr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">show_source</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>