<?php
/**
 * Author: ISOMAIN
 * Created: 28.01.2021
 * Product name: PhpStorm
 */

use Posts\Posts;

require_once "vendor/autoload.php";


function clientCode(Posts $creator)
{
    $creator->dispatch("Hello world!");
}


echo "Testing ConcreteCreator1: <br>";
clientCode(new \Posts\PlanePost('Moscow', 'Volgograd', 1));
echo '<br><br>';

echo "Testing ConcreteCreator2: <br>";
clientCode(new \Posts\TrainPost('Moscow', 'Volgograd', 1));
echo '<br><br>';

echo "Testing ConcreteCreator3: <br>";
clientCode(new \Posts\TruckPost('Moscow', 'Volgograd', 1));