<?php

/** Write a function that inputs a string, converts it to uppercase of that string, converts that string to a numeric value (base36)
*/

function Convert($str){
        $str = strtoupper($str);
        $arr = str_split($str);
        foreach ($arr as &$var){
                $var = ord($var); // converts to ascii
        }
        print_r($arr);
        $arr = base_convert($arr,10,36);
        return $test;
}

$test = "test this string";
//echo Convert($test);


/** JSON encode/decode
*/

$winter = array(
        "head" => "scarf",
        "hands" => "mits",
        "feet" => "shoes",
        "hand" => "beer"
);

//print_r(json_encode($winter));
//echo "\n";

$json = '{"foo":"bar","baz":"long"}';
//print_r(json_decode($json));


/** Classes and functions
*/

class Actions{
        public static function chat(){
                echo "Hey coolguy!";
        }
}

$test = new Actions();
$test->chat();


/** Arrays
*/
$a = array("dog","cat","thing");
array_pop($a);

for($i = 0; $i < count($a); $i++){
    if($a[$i] !== 0){
        echo $i;
    }
}
