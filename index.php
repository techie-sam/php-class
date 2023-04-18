<?php 

    //echo("Hello world ");

    //variables
    // $myName = "Kunle";
    // $myName = 'Sola';
    // echo($myName);

    //constants
    // define("PI", 3.142);
    // echo(PI)

    //Arithmetic operator
    // echo(2+2);
    // $myAge = 70;
    // $myAge++;
    // echo($myAge);
    // $myName = 'sola';
    // echo("$myName is my name, and age is {$myAge}");

    // $isAllowed = false;
    // echo($isAllowed)

    //conditionl statememts
//     $gender = 'male';
//     if ($gender == "male"){
//         echo("Na man you be");
//     }else if($gender =='female'){
//         echo("Gender that gave apple to adam");
//     }else{
//         echo('I know you not');
//     }

//     function sayHello($name){
//         echo($name);
//     }
//     sayHello("name");

//     $myName ="Kunle";
// $allStudents = ["1", "2", "3"]
    // for ($i=0; $i < 50; $i++) { 
    //     echo("<h1>$i</h1>");
    // }

    //Indexed Array
    // $allColors = ['bla blu', 'blu blu', 'bulaba'];
    // // echo($allColors);
    // $allColors = array('bla blu', 'blu blu', 'bulaba');

    // //pushing into array
    // $allColors[] = "blue light";
    // $allColors[0] = "light blue";
    // array_push($allColors, 'light blue');

    // //pop from array
    // array_pop($allColors);

    // echo(count($allColors));
    // print_r($allColors);


    //Associative array
    // $student = [
    //     "firstname" => "Sola",
    //     "lastname" => "Sade",
    //     "email" => "solasade@gmail.com",
    //     "password" => "fish"
    // ];
    // print_r($student["firstname"])


    // Mixed array (multidimensional)
    $allStudents = [
        [
            "firstname" => "Elon",
            "lastname" => "Musk",
            "email" => "elonmusk@gmail.com",
            "password" => "fish"
        ],
        [
            "firstname" => "Jeff",
            "lastname" => "Bezoz",
            "email" => "jeffbezoz@gmail.com",
            "password" => "fish"
        ]
        ];

    // print_r($allStudents[1]["firstname"]);

    // for ($i=0; $i < count($allStudents); $i++) { 
    //     echo("<h1>{$allStudents[$i]["lastname"]}</h1>");
    // };


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     include("Navbar.php");
    //  include("goods.php");
    // $allStudents = [
    //     [
    //         "firstname" => "Elon",
    //         "lastname" => "Musk",
    //         "email" => "elonmusk@gmail.com",
    //         "password" => "fish"
    //     ],
    //     [
    //         "firstname" => "Jeff",
    //         "lastname" => "Bezoz",
    //         "email" => "jeffbezoz@gmail.com",
    //         "password" => "fish"
    //     ]
    //     ];

    
    include("Footer.php")?>


</body>
</html>