<?php
// declare(strict_types=1);
require 'model/users.php';
require 'model/issues.php';

$page = '';
if(!empty($_GET)){ // user requested to filter records by...
    if(isset($_GET['user_type']) || isset($_GET['status'])){
        $page = 'users';
        $status = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_STRING);  
        $parameters['status'] = $status;
        if(isset($_GET['user_type']) && count($_GET['user_type']) == 1){
            $user_type = filter_input(INPUT_GET, 'user_type', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY);
            // $parameters['user_type'] = $_GET['user_type'][0];
            $parameters['user_type'] = $user_type[0];
        }    
         foreach($parameters as $key => $val){
            if($val && array_key_exists($key, $users[0])){
                $users = filter_records($users, $key, $val);
            }
        }
    }

    else if(isset($_GET['page']) && !empty($_GET['page'])){
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
        // $page = $_GET['page'];
    }
}

if($page){
    switch($page){
        case 'home':
            include 'view/home.phtml'; 
            break; 
        case 'users':
            include 'view/users.phtml';
            break;
        case 'issues':
            include 'view/issues.phtml'; 
            break; 
        default:
            include 'view/error.phtml'; 
    }
}
else{
    include 'view/home.phtml';
}


// echo "<hr>";
// show_source(__FILE__); 