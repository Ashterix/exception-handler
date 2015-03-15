<?php
/**
 * exception-handler 
 * @version: 1.0.0
 *
 * @file: WriteHandler.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Class - WriteHandler
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 14.03.2015
 * Time: 3:04
 */

namespace UFOException\Handlers;


use UFOException\Interfaces\Handlers;
use UFOException\Traits\HandlerConstruct;

class WriteHandler implements Handlers{

    use HandlerConstruct;

    public function processing()
    {
        print self::EXCEPTION_HEADLINE . " : " . $this->exception->getMessage();
    }

}