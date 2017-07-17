<?php

    $myFriendsFavoriteColors = [
        'Suzy' => 'Blue',
        'James' => 'Green',
        'Jamal' => 'Yellow',
        'Brandee' => 'Purple'
        ];

    foreach ($myFriendsFavoriteColors as $name => $color){
        echo "My friend " . $name . " likes " . $color;
        echo '<br>';
    }

    echo $myFriendsFavoriteColors ['Suzy'];
    echo $myFriendsFavoriteColors ['James'];
    echo $myFriendsFavoriteColors ['Jamal'];
    echo $myFriendsFavoriteColors ['Brandee'];

