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
#var_dump($hotels);

#Loop in my array with foeach
/* foreach ($hotels as $hotel) {
    echo $hotel["name"] . " - " . $hotel["description"] . " | " . $hotel["parking"] . " - " . $hotel["vote"] . " - " . $hotel["distance_to_center"] . "<br>";
} */



#BONUS
#Empty array
$hotels_printed = [];

#Variable with "select value"
$need_a_park = "$_GET[yes_no]";
#Let's see it
#var_dump($need_a_park);

#If my select value is 1(Yes)
if ($need_a_park == 1) {
    #Loop in my hotels array 
    foreach ($hotels as $hotel) {
        #If the hotel has a park 
        if ($hotel["parking"]) {
            #push it in $hotels_printed
            array_push($hotels_printed, $hotel);
        }
    }
    #If my select value is 2(No) or None, my $hotels_printed had the same value of $hotels
} else {
    $hotels_printed = $hotels;
}
#var_dump($hotels_printed);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <!-- Form with select input-->
        <form class="input-group my-3" method="get">
            <button class="btn btn-outline-secondary" type="submit">Send</button>
            <select class="form-select" name="yes_no">
                <option selected>
                    Is parking important to you?</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
            </select>
        </form>

        <!--Table with my hotels-->
        <table class="table table-primary mt-auto border border-1">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Average Vote</th>
                    <th scope="col">Center distance</th>
                </tr>
            </thead>
            <tbody>
                <!--Loop with foreach-->
                <?php foreach ($hotels_printed as $key => $hotel): ?>
                    <tr>
                        <td scope="row"><?php echo $hotel["name"] ?></td>
                        <td><?php echo $hotel["description"] ?></td>

                        <!--If my boolean is true i print Yes, if not No-->
                        <td><?php if ($hotel["parking"]) {
                            echo "Yes";
                        } else {
                            echo "No";
                        }
                        ; ?></td>

                        <td><?php echo $hotel["vote"] ?></td>

                        <!--I use number_format function to also show decimal places-->
                        <td><?php echo number_format($hotel["distance_to_center"], 2) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>