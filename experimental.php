<?php

$pizzaNames = [
    ["pizzaName" => "marguerita", "price" => 5],
    ["pizzaName" => "golden", "price" => 100],
    ["pizzaName" => "calzone", "price" => 10],
];

$customers = [
    ["customer" => koen, "address" => "a yacht in Antwerp"],
    ["customer" => manuele, "address" => "somewhere in Belgium"],
    ["customer" => students, "address" => "BeCode office"],
];

function takeOrder($pizzaName, $customer)
{ //register who orders which products
    $pizzaPrices = array_keys("pizzas");
    $pizzas = [];
    foreach ($pizzaPrices as $pizzaPrice) {
        $pizzas[] = $pizzaNames[$pizzaPrice]["pizzaName"];
    }

    if (!empty($pizzaNames[$pizza])) {
        $pizzaName = $pizzaNames[$pizza];

    } else {
        $pizzaName = "unknown";
    }
}

function checkOutOrder($price){ //calculate total price ordered products
    $confirmationOrder = "";
    $totalPrice = calculatePrice($pizzaNames);

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

function calculatePrice($price)
{
}


function pizzaOrderTotal()
{
    takeOrder('calzone', 'koen');
    takeOrder('marguerita', 'manuele');
    takeOrder('golden', 'students');
}

pizzaOrderTotal();
