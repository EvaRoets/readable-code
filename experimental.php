<?php

$pizzas = [
    ["name" => "marguerita", "price" => 5],
    ["name" => "golden", "price" => 100],
    ["name" => "calzone", "price" => 10],
];

$customers = [
    ["name" => koen, "address" => "a yacht in Antwerp"],
    ["name" => manuele, "address" => "somewhere in Belgium"],
    ["name" => students, "address" => "BeCode office"],
];

function takeOrder($pizzas, $customers)
{ //register who orders which products
    $pizzaPrices = array_keys("pizzas");
    $pizzaNames = [];
    foreach ($pizzaPrices as $pizzaPrice) {
        $pizzaNames[] = $pizzas[$pizzaPrice]["name"];
    }

    if (!empty($pizzaNames[$pizza])) {
        $pizzaName = $pizzaNames[$pizza];
    } else {
        $pizzaName = "unknown";
    }
}

function checkOutOrder(takeOrder){ //calculate total price ordered products
    $confirmationOrder = "";
    $totalPrice = calculateCosts($pizzas);

    echo "Creating new order... <br>";
    $confirmationOrder = "You ordered" . implode(", ", $pizzaNames);
    $confirmationOrder = "The order should be sent to " . $custName . ". <br>The address:" . $custAddress . ".<br>";
    $confirmationOrder = "The bill is €" . $totalPrice . ".<br>";
    $confirmationOrder = "Order finished.<br><br>";
    echo $confirmationOrder;
}

function sendOrder()
{
    $custAddresses = array_keys("customers");
    $custNames = [];
    foreach ($custAddresses as $custAddress) {
        $custNames[] = $customers[$custAddress]["name"];
    }

    if (!empty($custAddresses[$customer])) {
        $custAddress = $custAddresses[$customer];
    } else {
        $custAddress = "unknown";
    }
}

function total_price($price)
{
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

function pizzaOrderTotal()
{
    takeOrder('calzone', 'koen');
    takeOrder('marguerita', 'manuele');
    takeOrder('golden', 'students');
}

pizzaOrderTotal();



//fix indentation
//check clear, logical naming
//delete redundant code (1)
//check naming with context
//check valid naming
//check consistent naming (snake_case vs camelCase)
//todo check unnecessary nesting (by adding guard clauses, inverting conditional logic, or leveraging return)
//function checkOutOrder(){}; //calculate total price ordered products
//function sendOrder (){}; // send total order to customer
//todo delete redundant code (2)