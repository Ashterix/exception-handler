<?php
/**
 * exception-handler 
 * @version: 1.0.0
 *
 * @file: BaseException.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Class - BaseException
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 13.03.2015
 * Time: 22:02
 */

namespace UFOException\Core;


class BaseException {

    /**
     * @description Register exception handlers
     *
     * @param $method
     */
    protected function registerExceptionHandler($method)
    {
        set_exception_handler($method);
    }

}