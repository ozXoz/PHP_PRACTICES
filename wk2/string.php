

<?php

$user="Guest";
$welcome = "Hello World";

echo $welcome;
$txt='Reviev of lecture';
$txt1='John\'s protery';

echo '<br>'.$txt;
echo '<br>'.$txt1;


///Heredoc string ////

$msg=<<<EOT
<pre>

hello "$user".
Have you had your shot yet?

</pre>

EOT;

echo $msg;


$msg1=<<<EOT

<pre>

User name:
Password:
Age:
Country;
Current Country;



</pre>






EOT;

echo $msg1;

/// Nowdoc String ////

$nowdoc=<<<LABEL
<p>String</p>
<p>Nowdoc</p>


LABEL;
//// print, printf,echo are the same work//
echo $nowdoc;
$number = 9;
$str = "Beijing";

//prinf ( iicindeki yani formatttki yerde ne yazmak istiyorsak  onun onune % koy ornek oonur wanrs to go %party


printf("There are % u million bicycles in %s.",$number,$str);
$tmp_txt = "can be used to format string";

//// ask memoli about values//////
/// Ayiktim ama yinede soracam her kisaltmanin bir anlami var ////
//printf("<br>Integer: %d,  Float: %.2, Char from ASCII: %c, String: %s", 5, 2.2567, 97, $tmp_txt);

//// Ask Teacher why he uses mt? if we use just rand we got same result ???? ///


printf("Random Number Between 0-100: %d",mt_rand(0,100));
///// If we want to negative number between 0-100 do mt_rand(0,100)* -1;
//printf("Random Number Between 0-100: %d",mt_rand(0,100) * -1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <meta name="description" content="Template">
    <meta name="author" content="your name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<script src=https://my.gblearn.com/js/loadscript.js></script>

</body>
</html>

<hr><code><span style="color: #000000">
&lt;!DOCTYPE&nbsp;html&gt;<br />&lt;html&nbsp;lang="en"&gt;<br />&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Template&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="description"&nbsp;content="Template"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="author"&nbsp;content="your&nbsp;name"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="viewport"&nbsp;content="width=device-width,&nbsp;initial-scale=1.0"&gt;<br /><br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;src=https://my.gblearn.com/js/loadscript.js&gt;&lt;/script&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br /><span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;hr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">show_source</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>