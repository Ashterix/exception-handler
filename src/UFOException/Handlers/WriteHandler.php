<?php
/**
 * exception-handler
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


use UFOException\Core\BaseHandler;
use UFOException\Interfaces\Handlers;

class WriteHandler extends BaseHandler implements Handlers{

    /**
     * {@inheritDoc}
     */
    public function processing()
    {
        print self::EXCEPTION_HEADLINE . ": " . $this->exceptionMessage();
    }

}