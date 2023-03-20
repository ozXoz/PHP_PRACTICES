<?php


// 1. connect to database

$db_connect=mysqli_connect("localhost","","","test");

//var_dump($db_connect);


// 2. validation

if(mysqli_connect_errno()>0){

    die('cannot connect to database'. mysqli_connect_error());
}

// 3. query preparation

$query="SELECT * FROM STUDENTS";
echo $query;

// 4. query execution
$result=mysqli_query($db_connect,$query);
//var_dump($result);

// it count table echo mysqli_num_rows($result);

//// see the table in mysql

while($row=mysqli_fetch_array($result)){

    echo "Rov value : ".print_r($row,true). "<hr>";
    // or

    //echo "Name :".$row[1]. "StudentId".$row[2];


}

mysqli_free_result($result);
mysqli_close($db_connect);
// 5. manage the information


