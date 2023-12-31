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

    echo "<br> _________3__________";
    $x = 5;
    $y = 7;
    $z = 10;

    $average = ($x + $y + $z) / 3;

    echo "<br> Average is" . number_format($average, 2, ',', ' ');

    echo "<br> _________4__________";
    $countries = array(
        'Nigeria' => 'Abuja',
        'Canada' => 'Toronto',
        'Israel' => 'Tel Aviv'
    );

    foreach($countries as $country => $capital) {
        echo "<br> The capital of $country is $capital";
    }

    echo "<br> _________5__________";
    $cm = 150;
    $cmToInch = $cm * 0.39;

    echo "<br> $cm centimeters is $cmToInch inches";

    echo "<br> _________6__________";
    $expenses = array(40, 70, 20, 80, 75, 20);
    $totalAmount = 0;
    $amountOfExpenses = 0;

    foreach($expenses as $expense) {
        $totalAmount += $expense;
        $amountOfExpenses = $amountOfExpenses + 1;
    }

    echo "<br>My $amountOfExpenses biggest expenses were $totalAmount";

    // Control structures
    $age = 40;

    echo "<br>";
    if($age < 20) {
        echo "Sorry you are too young";
    } elseif($age > 50) {
        echo 'Sorry, you are too old to party';
    } else {
        echo "You are old enough to go out";
    }

    echo "<br>";
    $role = 'Staff';
    switch ($role) {
        case 'Visitor':
            echo 'Welcome Visitor';
            break;
        case 'Admin':
            echo 'Welcome Admin';
            break;
        case 'Superadmin':
            echo 'Welcome Superadmin';
            break;
        case 'Boss':
            echo 'Welcome Boss';
            break;
        default:
            echo 'What are you doing here';
    }

    // for loop
    for ($x = 0; $x < 10; $x++) {
        echo "The number is $x <br>";
    }

    $deposit = 1000;
    $interest = 0.05;
    $revenue = $deposit + ($deposit * $interest);
    for($i = 1; $i < 5; $i++) {
        $revenue = $revenue + ($revenue * $interest);
    }
    echo $revenue;

    // foreach
    $names = array("John", "Michael", "David");
    $person = array('Name' => 'Chiji', 'Age' => 36, 'Gender' => 'Male');

    foreach($names as $name) {
        echo "<br>$name";
    }

    foreach($person as $key => $value) {
        echo "<br>$key is $value";
    }

    // Exercise 2
    echo "<br>_____________Exercise___________";
    echo "<br>_____________1___________<br>";

    $first_value = 10;
    $second_value = 15;

    if($first_value > $second_value) {
        echo "Highest value is $first_value and lowest value is $second_value";
    } else {
        echo "lowest value is $first_value and highest value is $second_value";

    }

    echo "<br>_____________2___________<br>";
    $user_choice = 3;
    switch($user_choice) {
        case 1:
            echo "Spades";
            break;
        case 2:
            echo 'Hearts';
            break;
        case 3:
            echo 'Diamonds';
            break;
        case 4:
            echo 'Clubs';
            break;
        default: 
            echo 'Forgeritt';
    }
    ?>
</body>
</html>