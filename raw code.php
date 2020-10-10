<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php first class</title>
</head>
<body>
<?php
   /* $username = "Asif Ur Rahman";
    $password = 123456;
    $name = "asif ur rahman";
    echo var_dump($username );
    echo "<br>";
    echo strlen($name);
    echo "<br>";
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";

    if($username=="Asif Ur Rahman")
    {
        if($password==123456){
            echo "Welcome ". $username;
        }
        else{
            echo "wrong Password";
        }
    }

    else{
        echo "wrong username";
    } */
    
   /* $car = "Toyota";
    switch ($car) {
        case 'Toyota':
            echo "WOw! I Love This " . $car;
            break;
        case 'Toyota':
            echo "WOw! I Love This " . $car;
            break;
        case 'Toyota':
            echo "WOw! I Love This " . $car;
            break;
                    
        default:
        echo "Nothing match " . $car;
            break;
    }*/


    /*for ($i=0; $i <=10 ; $i++) { 
        echo "the serical is : " .$i . "<br/>";
    }
    echo "<br>";

    $a =27;
    for ($b=0; $b <=10 ; $b++) { 
        echo  $a."*".$b."   =   ". $a*$b . "<br/>";
    }*/


/*  $a =27;
    $b=0;
    do { 
        echo  $a."*".$b."   =   ". $a*$b . "<br/>";
        $b++;
    }while( $b <=10);
*/

    /*$a =127;
    $b=0;

    while( $b <=10){ 
        echo  $a."*".$b."   =   ". $a*$b . "<br/>";
        $b++;
    }*/

    $a = array("asif", "tamanna", "suhaib");
    foreach ($a as $name ) {
       echo $name . "<br/>";
    }

  


?>
</body>
</html>