<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <?php 
        // echo "<h2>Hello PHP </h1> <br>";
        # echo 'Hello PHP', "<br>";
        // echo "Hello PHP";
        /* 
            this is 
            multiple line 
            comment in 
            php
        */

        // Variables

        // $nameStudent = 'Arif';
        // $number = 12;
        // echo $name;
        //echo $nameStudent;
        // $var1 = 1;
        // $var2 = 3.14;
        // $var3 = "I am String";
        // $var4 = false;
        // var_dump($var4);
        // var_dump($var3);

        //Embeding PHP
        // echo "<p>Lorem ipsum dolor sit amet.</p>";
        // echo "<h1>My name is $nameStudent</h1>";
        
        // ECHO VS PRINT
        // echo
        // echo is a statement i.e used to display the output. it can be used with parentheses echo or without parentheses echo.
        // echo can pass multiple string separated as ( , )
        // echo doesn't return any value
        // echo is faster then print
        // $name = "Arif";
        // echo $name;
        // echo($name);

        // $name = "Arif";
        // $profile = "PHP Developer";
        // $age = 25;
        // echo $name , $profile , $age, " years old";
        // $ret = echo $name;

        
    // Print
    // Print is also a statement i.e used to display the output. it can be used with parentheses print( ) or without parentheses print.
    // using print can doesn't pass multiple argument
    // print always return 1
    // it is slower than echo

    // $name="Arif";
    // print $name;
    // //or
    // print ($name);

    // $name = "Arif";
    // $profile = "PHP Developer";
    // $age = 25;
    // print $name , $profile , $age, " years old"; 

    $name = "Arif";
    $ret =  print $name;
    //To test it returns or not
    echo $ret;


    ?>
</body>
</html>