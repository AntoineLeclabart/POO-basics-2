<?php

require_once 'truck.php';

$truck = new Truck('green', 4,'fuel','2 tons');
echo $truck->loadLevel();
echo PHP_EOL;
echo $truck->forward();
echo PHP_EOL;
echo $truck->brake()
?>