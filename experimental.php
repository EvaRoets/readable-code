<?php

// customer = for who
function pizzaOrder($pizzaType, $customer){
    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calculateCosts($type); //delete $type because redundant

    $address = 'unknown';
    if ($customer == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($customer == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($customer == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .= ' pizza should be sent to ' . $customer . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo "Order finished.<br><br>";
}

function total_price($price){
    return $price;
}

//function test($pizzaType){
//    echo "Test: type is {$pizzaType}. <br>";
//}

function calculateCosts($pizzaType){
    $cost = 'unknown';

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else {
        if ($pizzaType == 'golden') {
            $cost = 100;
        }
        if ($pizzaType == 'calzone') {
            $cost = 10;
        }
        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }
    }
    return $cost;
}

function pizzaOrderTotal(){
    $test = 0;
    pizzaOrder('calzone', 'koen');
    pizzaOrder('marguerita', 'manuele');
    pizzaOrder('golden', 'students');
}

function make_Allhappy($do_it){
    if ($do_it) {
        pizzaOrderTotal();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);

//fix indentation
//todo check clear, logical naming
//todo delete redundant code (1)
//todo check naming with context
//todo check valid naming
//todo check consistent naming (snake_case vs camelCase)
//todo check unnecessary nesting (by adding guard clauses, inverting conditional logic, or leveraging return)
//todo delete redundant code (2)