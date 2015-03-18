<?php
/**
 * exception-handler 
 *
 * @file: FacadeException.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Class - FacadeException
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 14.03.2015
 * Time: 0:11
 */

namespace UFOException;

use UFOException\Core\BaseException;
use UFOException\Core\BaseHandler;
use UFOException\Interfaces\ExceptionInterface;
use UFOException\Interfaces\Handlers;
use UFOException\Interfaces\TypesExceptionHandlers;

class FacadeException extends BaseException implements TypesExceptionHandlers, ExceptionInterface {

    /**
     * @var FacadeExceptionConfig
     */
    public $config;

    public function __construct()
    {
        $this->config = new FacadeExceptionConfig();
    }

    /**
     * @var array All handlers
     */
    protected $handlers = [
        self::E_TYPE_LOG    => "LogHandler",
        self::E_TYPE_WRITE  => "WriteHandler",
        self::E_TYPE_EMAIL  => "EmailHandler",
        self::E_TYPE_HTML   => "HtmlHandler",
    ];

    /**
     * @var array Handlers appropriate bit mask
     */
    protected $handlersStack = [];

    /**
     * @description Get formatted exception message for anything
     *
     * @param \Exception $e
     *
     * @return string
     */
    public function getExceptionMessage(\Exception $e)
    {
        $baseHandler = new BaseHandler($e, $this->config);
        $this->handlersStack($e);
        return $baseHandler->exceptionMessage();
    }

    /**
     * @description Run exception handlers
     *
     * @param \Exception $exception
     */
    public function handlersStack(\Exception $exception)
    {
        foreach ($this->handlersStack as $handler) {
            $handler = "UFOException\\Handlers\\" . $handler;

            if (!class_exists($handler)) {
                continue;
            }

            /**
             * @var $hand Handlers;
             */
            $hand = new $handler($exception, $this->config);
            $hand->processing();
            unset($hand);
        }
    }

    /**
     * @description register handler stack from base class
     */
    public function registerHandler()
    {
        foreach ($this->handlers as $type => $method) {
            if ($this->config->getTypeHandler() & $type) {
                $this->handlersStack[$type] = $method;
            }
        }
        $this->registerExceptionHandler([$this, "handlersStack"]);
    }

}