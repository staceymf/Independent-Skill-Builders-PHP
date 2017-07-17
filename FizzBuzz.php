<?php

function fizzBuzz(){
    for ($i = 1; $i <= 1000; $i++){
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "Fizz Buzz";
            echo "<br>";
        } else if ($i % 3 === 0){
            echo "Fizz";
            echo "<br>";
        } else if ($i % 5 === 0){
            echo "Buzz";
            echo "<br>";
        } else {
            echo $i;
            echo "<br>";
        }
    }
}

fizzBuzz();

