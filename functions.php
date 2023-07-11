<?php

#Functions - Block of code that can be repeatedly called

/*
Camel Case - myFunction()
Lower Case(snack case) - my_function()
Pascal Case - MyFunction()
*/

// Create Simple Function
function simpleFunction(){
    echo 'Hello World';
}

// Run simple function
simpleFunction();
// Function with param
function sayHello($name){
echo "Hello $name";
}

sayHello('Binod');

//Return value
function addNumbers($num1, $num2){
    echo $num1+$num2;
}

echo addNumbers(2,3);

//By reference

$myNum=10;

function addFive($num){
    $num+=5;
}

function addTen(&$num){
    $num+=10;
}

addFive($myNum);

echo "Value: $myNumber<br>";

addTen($myNum);

echo "Value: $myNum<br>";

?>