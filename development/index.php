<?php

require __DIR__ . '/../vendor/autoload.php';

use AlexanderGladkov\StringProcessing\StringProcessor;

$stringProcessor = new StringProcessor();
echo $stringProcessor->getLength('string');