<?php

use UFOException\FacadeException;
use UFOException\Interfaces\TypesExceptionHandlers;

require_once('../vendor/autoload.php');


$myException = new FacadeException();
$myException->config
    ->setTypeHandler(TypesExceptionHandlers::E_TYPE_WRITE | TypesExceptionHandlers::E_TYPE_LOG)
    ->setLogFileName("tmp/qwe/asd/logfile.log");
$myException->registerHandler();



throw new Exception('My exception message');