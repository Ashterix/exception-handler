<?php

use UFOException\FacadeException;
use UFOException\Interfaces\TypesExceptionHandlers;


require_once('/vendor/autoload.php');


function testException($q = 1) {
    if ($q == 1) {
        throw new Exception('My exception message');
    }
    echo $q;
}

$myException = new FacadeException();
$myException->config
    ->setTypeHandler(TypesExceptionHandlers::E_TYPE_WRITE | TypesExceptionHandlers::E_TYPE_LOG)
    ->setLogFileName("tmp/qwe/asd/logfile.log");
$myException->registerHandler();


try {
    testException(1);
} catch (\Exception $e) {
    $myException->getExceptionMessage($e);
}

echo PHP_EOL . " The script continues to run " . PHP_EOL;

throw new Exception('My exception message2');