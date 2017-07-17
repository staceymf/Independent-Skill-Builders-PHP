<?php

    function fullName($theFullName)
    {
        $statement = 'Hey, '. $theFullName;
        echo "<br>";

        return $statement;
    }

    fullName("Stacey Fenton"); //will print to screen "Hey, Stacey Fenton"
    $greetGuy = fullName("Malcolm X"); //changes the value of theFullName to Malcolm X and assigns it to greetGuy
    echo $greetGuy; //will now print to screen "Hey, Malcolm X"