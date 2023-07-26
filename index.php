<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $my_name = 'Chiji';
    echo 'Hello wisest';
    echo "Hello $my_name <br>";

    $cars = array('BMW', 'Audi', 'Mercedes');

    echo $cars[1] . '<br>';

    $myCar = array('Ram', 2022, 10.304);
    print_r($myCar);

    $cars2 = array('Ram', 'Chevrolet', 'Lexus');

    $cars = array_merge($cars, $cars2);

    print_r($cars);

    // associative array

    $carsAsso = array('Lexus' => 20.5, 'Mercedes' => 35, 'BMW' => 50.7);

    print_r($carsAsso);

    foreach($carsAsso as $make => $milage) {
        echo("<br> My $make has covered a total distance of $milage");
    }
    ?>
</body>
</html>