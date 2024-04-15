<?php

# My array
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

# Let's see my array
var_dump($hotels);

#Loop in my array with foeach
/* foreach ($hotels as $hotel) {
    echo $hotel["name"] . " - " . $hotel["description"] . " | " . $hotel["parking"] . " - " . $hotel["vote"] . " - " . $hotel["distance_to_center"] . "<br>";
} */


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
</head>

<body>
    <div class="container">
        <div><?php foreach ($hotels as $hotel) {
            echo $hotel["name"] . " - " . $hotel["description"] . " | " . $hotel["parking"] . " - " . $hotel["vote"] . " - " . $hotel["distance_to_center"] . "<br>";
        } ?></div>
    </div>

</body>

</html>