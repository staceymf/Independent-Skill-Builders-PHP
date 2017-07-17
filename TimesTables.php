<?php

    //Let's try printing out one set of times tables
    function nineTimesTable(){
        for ($i = 0; $i <= 12; $i++) {
            echo "9 x " . $i . " = " . 9 * $i;
            echo '<br>';
        }
    }

    nineTimesTable();

    //Now let's try them all!
    function allTimesTable(){
        for ($i = 0; $i <= 12; $i++) {
            echo "Times Tables For The Number " . $i;
            echo '<br>';

            for ($j = 0; $j <=12; $j++){
                echo $i . " x " . $j . " = " . $i * $j;
                echo '<br>';
            }
        }
    }

    allTimesTable();

