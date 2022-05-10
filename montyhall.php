<?php

function monty_hall($switch = false)
{

    // 1 = car, 0 = goat
    $doors = [0, 0, 1];

    // optional: randomize the order of the doors
    // shuffle($doors);

    // pick a door
    $rand_key = array_rand($doors);
    $my_choice = $doors[$rand_key];

    if ($switch) :
        // switch the choice between 0 and 1
        return 1 - $my_choice;
    else :
        // i'm headstrong, stick with my choice
        return $my_choice;
    endif;
}

function play($n = 10, $switch = false)
{
    $wins = 0;

    // play n times
    for ($i = 0; $i < $n; $i++) {
        $wins += monty_hall($switch);
    }

    // return the winrate
    return $wins / $n;
}

$p = play(10000, True);
echo "Winrate with switching:" . $p;

echo "<br>";

$p = play(10000, False);
echo "Winrate without switching:" . $p;
