<?php
/**
 * exception-handler 
 * @version: 1.0.0
 *
 * @file: HandlerConstruct.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Trait - HandlerConstruct
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 14.03.2015
 * Time: 3:24
 */

namespace UFOException\Traits;


use UFOException\FacadeExceptionConfig;

trait HandlerConstruct {

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

}