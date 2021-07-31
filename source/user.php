<?php 


// if (isset($_POST['submit_variables'])) {
//     echo ucwords(strtolower($_POST['firstname'])) . " " . $_POST['lastname'];
//     echo "<br>";
//     echo $_POST['email'];
//     // header( "refresh:5;url=index.php" );
//     echo "<script>console.log('BABBA BIZ GELMISTIK')</script>";
//     header("refresh:3;url=/php-essentials-traning/");
// }


// $people = array("Alice", "Bob", "Catherine", "Osman", "Recep");

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


// $numbers = array(5, 3, 7);
// $sum = 0;

// foreach ($numbers as $number) {
//     # code...
//     $sum = $sum + $number;
// }

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



//  ********************** Sat Jul 31 5:14 PM **********************


// $friends = array("Kevin","Recep","Osman","Michele", "Oscar");

// echo $friends[4];

// $friends[4] = "Mahmut";

// echo $friends[4];

// $grades = array("Osman" => "A+","Recep" => "C+","Zeynep" => "D-","Hayko" => "FF");

// $grades["Osman"] = "F";

// echo $grades["Osman"];


// echo count($grades);

function cal() {

    echo "OSMAN BANA BAK";
}


// echo cal();




// cal();


function sayHi() {
    echo "Hello User";
}

// sayHi();


function sayMyName($name) {

    return "Hello " . $name;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// echo sayMyName("RECEP");

function cube($num) {
    
    echo $num * $num * $num;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// echo cube(3);

// cube(3);

// $grade  = "B";


// switch($grade) {
//     case "A":
//         echo "BASARILISIN";
//         break;
//     case "B":
//         echo "OSMANNN";
//         break;
//     default:
//         echo "NONE";

// }

// $index = 1;


/*



*/


// while ($index <= 99) {

//     echo $index;
//     echo "<br>";
//     echo "<br>";
//     $index++;

// }



// class Book {
//     var $title;     //baslik
//     var $author;    // yazar
//     var $pages; // sayfa

//     // function __construct($name) {
//     //     echo "<br>New Book created $name <br>";
//     // }

//     function __construct($aTitle, $aAuthor, $aPages) {
//         $this->title = $aTitle;
//         $this->author = $aAuthor;
//         $this->pages = $aPages;

//     }

// }


// $book1 = new Book("OSMAN HIKAYELERI");

// $book1->title = "OSMANIN HIKAYELERI";
// $book1->author = "OSMAN KILLIBACAK";
// $book1->pages = 400;


// echo $book1->author;

echo "<br>";
echo "<br>";
echo "<br>";

// echo $book1->title;


// class {
//     var title = 0;
//     var author = "";
// }


// console.log(book.title)



// $book2 = new Book("Mike");

// $book2->title = "OSMAN YALIKAVAKTA";
// $book2->author = "OSMAN KILLIBACAK";
// $book2->pages = 8000;



// $book3 = new Book("OSMAN YAZ MACERALARI", "OSMAN KARABACAK", 400);

// echo $book3->title;
// class Student {
//     var $name;
//     var $major;
//     var $gpa;

//     function __construct($name,$major,$gpa) {
//         $this->name = $name;
//         $this->major = $major;
//         $this->gpa = $gpa;
//     }

//     function hasHonors() {
//         if($this->gpa >= 3.5) {
//             return "true";
//         }
//         return "false";
//     }

// }


// $student1 = new Student("Jim", "Business", 2.8);
// $student2 = new Student("Osman", "Journalism", 3.8);



// echo $student1->hasHonors();
// echo $student2->hasHonors();


// class Movie {
//     private $title;
//     private $rating;

//     function __construct($title, $rating) {
//         $this->title = $title;
//         $this->rating = $rating;
        
//     }

//     function getTitle() {
//         return $this->title;
//     }

//     function setRating($rating) {

//         if ($rating == "G" || $rating = "PG" || $rating == "PG-13") {
            
//             $this->rating = $rating;
//         }

//     }
//     function getRating() {
//         return $this->rating;
//     }
// }


// $avengers = new Movie("Avengers", "PG-13");


// // $avengers->title = "MAHMUT";

// // echo $avengers->title;


// echo $avengers->getTitle();
// $avengers->setRating("R");

// echo "<br>";
// echo "<br>";

// echo $avengers->getRating();


// class Chef {
//     function makeChicken() {
//         echo "The chef makes chicken<br>";
//     }

//     function makeSalad() {
//         echo "The chef makes salad <br>";
//     }

//     function makeSpecialDish(){
//         echo "The chef makes special dish";
//     }

// }


// $chef1 = new Chef();
// $chef1->makeChicken();

// class ItalianChef extends Chef{

//     function makePasta() {
//         echo "The chef makes pasta";
//     }
// }

// $chef2 = new ItalianChef() ;

// $chef2->makeSalad();


// $chef2->makePasta();


?>

