<?php
namespace MyApp\rand;
function rand_char($str){
//    $len = strlen($str);
//    $rand_num = mt_rand(0, $len - 1);
//    return $str[$rand_num];

   return $str[mt_rand(0, strlen($str) - 1)];
}
