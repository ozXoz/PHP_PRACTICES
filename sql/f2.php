<?php

// 1 -) connect to database
$db_connect=new mysqli("localhost","","","test");

//var_dump($db_connect);


// 2-) validation



/*if(mysqli_connect_errno()>0){

    die('cannot connect to database'. mysqli_connect_error());
}

/// or for second validation
*/




if($db_connect->connect_errno){

    die('cannot connect to database'. $db_connect->connect_error);



}

// 3.) query


$query="SELECT * FROM STUDENTS";
echo $query;


// 4. query execution
$result=$db_connect->query($query);
// eklemen lazim queriyideki herseyi gostermek icin ama diger yonteme gerek yok.

//var_dump($result->fetch_assoc());
echo $result->num_rows. "<hr>";
//var_dump($result->fetch_assoc());

/// baska yontemle gosterme datalari aslinda yakin daha kolay gibi gostermeye calismis
while($row=$result->fetch_assoc()){

echo "Name :".$row['name']."Student ID".$row['student_id']. "<hr>";


}
$result->free();
$db_connect->close();
