<?php 

    //Text are string data type 
    $name= "I'm Md Shahe Imran";
    $vehical= "Bike";
    $email= "developerimran@gmail.com";
    //Text are string data type 

    //Number is integer data type
    $age=21;
    $user=2;
    $quantity=100;
    //Number is integer data type

    //This are flot
    $gpa = 4.00;
    $price = 99.99;
    $tax = 9.5;
    //This are flot

    //This are booleans
    $employed = true;
    $online = false;
    $for_sale = true;
    //This are booleans

    
    




    echo "Hello {$name} <br>";
    echo "I love {$vehical} <br>";
    echo " You e-mail is {$email} <br> ";
    echo "You are {$age} year old <br>";
    echo "There are {$user} is online <br>";
    echo "You would like to buy {$quantity} eggs <br>";
    echo "You CGPA is {$gpa} <br>";
    echo "your Pizza is \${$price} <br>";
    echo "The sales tax rat is {$tax}% <br>";


    $total =null;
    $total = $quantity * $price;
    echo "You've ordered {$quantity} x {$vehical} <br>";
    echo "Your total is \${$total} <br>";
    
 
?>