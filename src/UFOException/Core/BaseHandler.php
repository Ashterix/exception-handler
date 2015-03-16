<?php
/**
 * exception-handler
 * @version: 1.0.0
 *
 * @file: BaseHandler.php
 * @author Ashterix <ashterix69@gmail.com>
 *
 * Class - BaseException
 * @description
 *
 * Created by JetBrains PhpStorm.
 * Date: 16.03.2015
 * Time: 12:10
 */
namespace UFOException\Core;


use UFOException\FacadeExceptionConfig;

class BaseHandler {

    /**
     * @var \Exception
     */
    protected $exception;

    /**
     * @var FacadeExceptionConfig;
     */
    protected $config;

    /**
     * @param \Exception $exception
     * @param FacadeExceptionConfig $config
     */
    public function __construct(\Exception $exception, FacadeExceptionConfig $config)
    {
        $this->exception = $exception;
        $this->config = $config;
    }

    /**
     * @description Build message
     *
     * @return string
     */
    protected function exceptionMessage()
    {
        $msg = '';
        if ($this->exception->getCode()) {
            $msg .= "Exception code: " . $this->exception->getCode() . PHP_EOL;
        }
        $msg .= $this->exception->getMessage() . PHP_EOL;
        $msg .= "At file: " . $this->exception->getFile();
        $msg .= ": " . $this->exception->getLine() . PHP_EOL;
        $msg .= "Trace: ". PHP_EOL . $this->exception->getTraceAsString();
        return $msg;
    }

}