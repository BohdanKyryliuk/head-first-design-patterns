<?php

use Diablo\DiabloGame;
use SimUDuck\ImplementationWithStrategy\MiniDuckSimulator;

require './vendor/autoload.php';

(new MiniDuckSimulator())->main();

echo PHP_EOL;
echo PHP_EOL;

(new DiabloGame())->main();