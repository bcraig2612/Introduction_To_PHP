<!-- Other syntax, but bad form based off of old servers not knowing how to read it --!>
<!--<? ?>-->
<!--<= ?>-->
<!--<% %>-->

<?php 

// DECLARING VARIABLES
//$name = 'Brandon';
//$age = 24;

// DECLARING CONSTANT VARIABLE
// define('NAME', 'Brandon');

// DISPLAYING VARIABLES USING ECHO
// echo $name;
// echo $age;

// STRINGS
// $stringOne = 'my email is ';
// $stringTwo = 'bcraig2612@gmail.com';

// HOW YOU CONCATENATE TWO STRINGS
// echo $stringOne . $stringTwo;
// echo 'Hey, my name is ' . $name;

// USING DOUBLE QUOTES
// echo " Hey my name is $name ";

// echo "The ninja screamed \"whaaaaaa\"";
// echo 'The ninja screamed "ahhhhhh"';

// FINDING CHARACTERS
// echo $name[0];
// echo $name[1];
// echo $name[2];
// echo $name[3];
// echo $name[4];
// echo $name[5];
// echo $name[6];

// RETURNS THE LENGTH OF THE VARIABLE PASSED IN
//echo strlen($name);

// RETURNS THE STRING UPPER AND LOWER CASE
//echo strtoupper($name);
//echo strtolower($name);

// REPLACES A SPECIFIC VALUE WITH ANOTHER VALUE
// 3 arguments: The value you want replaced, the value you want to update with, the variable you are editing
// Case sensitive
//echo str_replace('B', 'Z', $name);

// NUMBERS
// INTEGER & FLOATS
// INTEGER: 34, 200, 3
// FLOAT: 3.14, 1.1
// $radius = 25;
// $pi = 3.14;
// BASIC OPERATORS: * , / , + , - , **
//echo $pi*$radius**2; --> returns 1962.5

// ORDER OF OPERATION: BRACKETS --> INDICES --> DIVIDE --> MULTIPLY --> ADD --> SUBTRACT
// echo 2 * (4 + 9) / 3; --> returns 8.6666666666667

// INCREMENT & DECREMENT OPERATORS: 
// echo $radius++;
// echo $radius++;
// echo $radius++;

// echo $pi--;
// echo $pi--;
// echo $pi--;

// SHORTHAND OPERATORS 
// $age = 99;
// echo $age; --> 99
// $age += 10;
// echo $age; --> returns 109
// $age -= 10;
// echo $age; --> returns 89
// $age *= 4;
// echo $age; --> returns 396

// NUMBER FUNCTIONS
// FLOORS TO THE NEAREST INTEGER
// echo floor($pi); --> returns 3
// MOVES TO THE CEILING (UP) INTEGER
// echo ceil($pi); --> returns 4


// INDEXED ARRAYS

// $peopleOne = ['Brandon', 'Ethan', 'Christian', 'Brian'];
// echo $peopleOne[0];
// print_r($peopleOne);

// $peopleTwo = array('Bob', 'Bill', 'Jim', 'Tim');
// echo $peopleTwo[2];
// print_r($peopleTwo);

// $ages = [20, 30, 40, 50];
// print_r($ages);

// $ages[1] = 25;
// print_r($ages);

// $ages[] = 60;
// print_r($ages);

// array_push($ages, 70);
// print_r($ages);

// echo count($ages); --> returns 6

// $peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// ASSOCIATIVE ARRAYS (KEY & VALUE PAIRS)

// $ninjasOne = ['Brandon' => 'Black Belt', 'Ethan' => 'Orange Belt', 'Christian' => 'Brown Belt'];
// echo $ninjasOne['Ethan']; --> 'Orange Belt'
// print_r($ninjasOne);
// $ninjasTwo = array('Brian' => 'Green Belt', 'Nathen' => 'Yellow Belt');
// print_r($ninjasTwo);
// $ninjasTwo['Kaylee'] = 'Pink Belt';
// print_r($ninjasTwo);
// echo count($ninjasOne); --> returns 3
// echo count($ninjasTwo); --> returns 3
// $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
// print_r($ninjasThree);

// MULTI-DIMENSIONAL ARRAYS
// "Arrrays within arrays"

// $blogs = [
    // ['Title' => 'Mario Party', 'Author' => 'Mario', 'Content' => 'Lorem', 'Likes' => 30],
    // ['Title' => 'Mario Cart Cheats', 'Author' => 'Toad', 'Content' => 'Lorem', 'Likes' => 25],
    // ['Title' => 'Zelda Hidden Chests', 'Author' => 'Link', 'Content' => 'Lorem', 'Likes' => 50]
// ];

// print_r($blogs); --> returns all of the data within blogs
// print_r($blogs[1]); --> Array ( [0] => Mario Cart Cheats [1] => Toad [2] => Lorem [3] => 25 )
// print_r($blogs[1][1]); --> returns 'Toad'
// echo $blogs[2]['Author']; --> return 'Link'
// echo count($blogs); returns --> 3

// $blogs[] = ['Title' => 'Castle Party', 'Author' => 'Peach', 'Content' => 'Lorem', 'Likes' => 100];

// print_r($blogs);

// $popped = array_pop($blogs);
// print_r($popped);


// LOOPS:
// $ninjas = [
//     ['Name' => 'Brandon', 'Super-Power' => 'Invincibility'], 
//     ['Name' => 'Brian', 'Super-Power' => 'Telekenesis'], 
//     ['Name' => 'Ethan', 'Super-Power' => 'Teleportation'], 
//     ['Name' => 'Christian', 'Super-Power' => 'Flight']
// ];

// for($i = 0; $i < count($ninjas); $i++) {
//     echo $ninjas[$i] . '<br />';
// }

// foreach($ninjas as $ninja) {
//     echo $ninja . '<br />';
// }

// $i = 0;

// while($i < count($ninjas)) {
//     echo $ninjas[$i]['Name'] . ' - ' . $ninjas[$i]['Super-Power'];
//     echo '<br />';
//     $i++;
// }

?>


<!DOCTYPE html>
<html>
    <head>

        <title> PHP Tutorials </title>

    </head>
    <body>

        <!-- <h1> User Profile Page </!--> -->
    <!-- DISPLAYING VARIABLES WITHING THE HTML DOCUMENT -->
        <!-- <div> <?php echo $name; ?> </div> -->
        <!-- <div> <?php echo $age; ?> </div> -->
        <!-- <div> <?php echo NAME; ?> </div> -->

        <h2> Super Heroes </h2>
        <ul>
            <?php foreach($ninjas as $ninja) { ?>

                <h3> <?php echo $ninja['Name']; ?> </h3>
                <h4> <?php echo $ninja['Super-Power']; ?> </h4>

            <?php } ?>

        </ul>  



    </body>
</html>