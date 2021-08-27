<?php
$employess = array(
    array(
        "name" => "Arif",
        "designation" => "CEO",
        "age" => 28,
        "skills" => "PHP, MySql, Python, C#, JavaScript, AJAX"
    ),
    array(
        "name" => "Arif",
        "designation" => "CEO",
        "age" => 28,
        "skills" => "PHP, MySql, Python, C#, JavaScript, AJAX"
    ),
    array(
        "name" => "Arif",
        "designation" => "CEO",
        "age" => 28,
        "skills" => "PHP, MySql, Python, C#, JavaScript, AJAX"
    )
);

// foreach ($employess as $employe) {
//     print "<pre>";
//     foreach ($employe as $key => $value) {
//         print "$key: $value<br>";
//     }
//     print "</pre>";
// }


/////////////////////////////////////////////////


$employess = array(
    array(
        "name" => "Arif",
        "designation" => "CEO",
        "age" => 28,
        "skills" => "PHP, MySql, Python, C#, JavaScript, AJAX"
    ),
    array(
        "name" => "Arif",
        "designation" => "CEO",
        "age" => 28,
        "skills" => "PHP, MySql, Python, C#, JavaScript, AJAX"
    ),
    array(
        "name" => "Arif",
        "designation" => "CEO",
        "age" => 28,
        "skills" => "PHP, MySql, Python, C#, JavaScript, AJAX"
    )
);

// print "<pre>";
// print_r($employess);
// print "</pre>";

///////////////////////////////////////////////////
// count() & sizeOf() & is_array
$num = array(20, 18, 19, 15, 13, 16, 14, 12, 9, 17, 5);
// print sizeof($num);

// print is_array($num);
// print "<br>";
// $array = "hello world";
// var_dump(is_array($array));

///////////////////////////////////////////////////

// The in_array() function searches an array for a specific value.

$people = array("Peter", "Joe", "Glenn", "Cleveland");

// if (in_array("Ali", $people)) {
//     echo "Match found";
// } else {
//     echo "Match not found";
// }

///////////////////////////////////////////////////

//The array_merge() function merges one or more arrays into one array.
// $a1 = array("red", "green");
// $a2 = array("green", "yellow");
// print_r(array_merge($a1, $a2));
// echo "<br>";
// $a1 = array("a" => "red", "b" => "green");
// $a2 = array("c" => "blue", "b" => "yellow");
// print_r(array_merge($a1, $a2));

///////////////////////////////////////////////////

//The array_push() function inserts one or more elements to the end of an array.
// $a = array("red", "green");
// array_push($a, "blue", "yellow");
// print_r($a);

///////////////////////////////////////////////////
// The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.
// $a = array("a" => "red", "b" => "green");
// array_unshift($a, "blue");
// print_r($a);
//print_r(array_unshift($a,"blue"));


///////////////////////////////////////////////////

//The array_shift() function removes the first element from an array, and returns the value of the removed element.

// $a = array("a" => "red", "b" => "green", "c" => "blue");
// echo array_shift($a);
// print_r($a);

// Note: If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 (See example below)

// $a = array(0 => "red", 1 => "green", 2 => "blue");
// echo array_shift($a);
// print_r($a);

/////////////////////////////////////////////////
// Sort the elements of the $cars array in ascending alphabetical order:
// $num = array(20, 18, 19, 15, 13, 16, 14, 12, 9, 17, 5);
// sort($num);
// $array = count($num);
// for ($i = 0; $i < $array; $i++) {
//     echo $num[$i] . "<br>";
// }

/////////////////////////////////////////////////
// The rsort() function sorts an indexed array in descending order.
// $cars=array("Volvo","BMW","Toyota");
// rsort($cars);

// Sort the elements of the $numbers array in descending numerical order:

// $numbers=array(4,6,2,22,11);
// rsort($numbers);

//////////////////////////////////////////////////////////
// Sort an associative array in ascending order, according to the value:
// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// asort($age);

/////////////////////////////////////////////////////////
// Sort an associative array in ascending order, according to the key
// $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
// ksort($age);

/////////////////////////////////////////////////////////
// Return the sum of all the values in the array (5+15+25):
// $a=array(5,15,25);
// echo array_sum($a);

// Return the sum of all the values in the array (52.2+13.7+0.9):

// $a=array("a"=>52.2,"b"=>13.7,"c"=>0.9);
// echo array_sum($a);

////////////////////////////////////////////
// array_key_exists() function