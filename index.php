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

    echo "<br>";

    // multidimensional arrays
    $schools = array(
        'Durham College' => array('Web Development', 'Digital Illustration', 'Design Process'),
        'Humber College' => array('Workshop', 'Special Topics', 'Database')
    );

    print_r($schools);
    print_r($schools['Durham College']);
    echo($schools['Durham College'][1]);
    
    // Exercise
    $x = 7;
    $y = 4;

    $z = ($x + $y) * 5;

    echo "<br>____________Exercises_________________";
    echo "<br> $x plus $y multiplied by 5 equals $z";

    echo "<br> _________2__________";
    $price = 20;
    $vat = 5;
    $total_price = $price + $vat;

    echo "<br>Price is $price, <br>VAT is $vat, <br>Total price is $total_price";
    ?>
</body>
</html>