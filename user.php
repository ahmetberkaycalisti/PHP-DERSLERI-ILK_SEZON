<?php 


if (isset($_POST['submit_variables'])) {
    echo ucwords(strtolower($_POST['firstname'])) . " " . $_POST['lastname'];
    echo "<br>";
    echo $_POST['email'];
    // header( "refresh:5;url=index.php" );
    echo "<script>console.log('BABBA BIZ GELMISTIK')</script>";
    header("refresh:3;url=/php-essentials-traning/");
}


$people = array("Alice", "Bob", "Catherine", "Osman", "Recep");

// foreach($people as $key => $value) {
//     echo "{$key} => {$value}" . "<br>";
// }

// foreach ($people as $value => $key) {
//     echo "{$value} => {$key}" . "<br>";
// }

// for ($i=0; $i <= 5; $i++) { 
//     # code...
//     echo "{$i} is passed" . "<br>";
// }

// count($people) == 5

// for ($i=0; $i < count($people) ; $i++) { 
//     # code...
//     echo "{$i} is passed {$people[$i]}" . "<br>";
// }

// print_r($people);
// echo "<br>";
// echo $people[2];

// echo var_dump($people);


// foreach ($people as $var) {
//     echo $var . "<br>";
// }


$numbers = array(5, 3, 7);
$sum = 0;

foreach ($numbers as $number) {
    # code...
    $sum = $sum + $number;
}

// echo $sum;

// echo("sum");
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo($sum);

// echo "<h1>SELAMUN ALEYKUM</h1>";


// $characterName = "John";
// $characterAge = 35;

// echo "There once was a man named $characterName <br>";
// echo "He was $characterAge years old <br>";

// Data types
// $phrase = "To be or not to be";
// $age = 30;
// $gpa = 30.0;
// $isMale = false;
// null;

// echo $phrase[9];

// echo str_replace("be", "was", $phrase);

// echo substr($phrase, 6, 8);

// echo 10 % 3;

// $num = 10;

// $num--;

// echo $num;

// echo "<br>";

// $num++;

// echo $num;


// echo abs(-100);


// echo pow(5, 2);

// echo sqrt(144);

// $number1 = 39;
// $number2 = 20;

// // echo max($number1, $number2);
// echo max($number2, $number1);

// echo max(2,10);

// echo round(3.5);

// echo ceil(11.1);


// echo floor(3.9);
// echo floor(3.4);




?>

