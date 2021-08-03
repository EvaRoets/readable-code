<?php

$pizza = [
    ["name" => "marguerita", "price" => 5],
    ["name" => "golden", "price" => 100],
    ["name" => "calzone", "price" => 10],
    ["name" => "hawai", "price" => exception],
];

$customer = [
    ["name" => koen, "address" => "a yacht in Antwerp"],
    ["name" => manuele, "address" => "somewhere in Belgium"],
    ["name" => students, "address" => "BeCode office"],
];

function takeOrder($pizza, $customer){ //register who orders which products



    $toPrint = '';
    $toPrint .= $pizza;
    $price = calculateCosts($pizza);
    echo 'Creating new order... <br>';

//    $address = '';
//    if ($customer == 'koen') {
//        $address = 'a yacht in Antwerp';
//    } elseif ($customer == 'manuele') {
//        $address = 'somewhere in Belgium';
//    } elseif ($customer == 'students') {
//        $address = 'BeCode office';
//    }

    $toPrint .= 'Pizza should be sent to ' . $customer . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo "Order finished.<br><br>";
}

function total_price($price){
    return $price;
}

//function test($pizza){
//    echo "Test: type is {$pizza}. <br>";
//}

//function calculateCosts($pizza){
//    $cost = '';
//    if ($pizza == 'marguerita') {
//        $cost = 5;
//    } else {
//        if ($pizza == 'golden') {
//            $cost = 100;
//        }
//        if ($pizza == 'calzone') {
//            $cost = 10;
//        }
//        if ($pizza == 'hawai') {
//            throw new Exception('Computer says no'); // add catch/finally
//        }
//    }
//    return $cost;
//}

function pizzaOrderTotal(){
    takeOrder('calzone', 'koen');
    takeOrder('marguerita', 'manuele');
    takeOrder('golden', 'students');
}

pizzaOrderTotal();



//fix indentation
//check clear, logical naming
//delete redundant code (1)
//todo check naming with context
//check valid naming
//check consistent naming (snake_case vs camelCase)
//todo check unnecessary nesting (by adding guard clauses, inverting conditional logic, or leveraging return)
//function takeOrder(){}; //register who orders which products
//function checkOutOrder(){}; //calculate total price ordered products
//function sendOrder (){}; // send total order to customer
//todo delete redundant code (2)