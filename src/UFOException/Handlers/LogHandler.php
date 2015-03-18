<?php
/**
 * exception-handler 
 *
 * @file: LogHandler.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Class - LogHandler
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 14.03.2015
 * Time: 3:49
 */

namespace UFOException\Handlers;


use LogToFile\Logger;
use UFOException\Core\BaseHandler;
use UFOException\Interfaces\Handlers;

class LogHandler extends BaseHandler implements Handlers {

    /**
     * {@inheritDoc}
     */
    public function processing()
    {
        $exceptionLog = new Logger($this->config->getLogFileName());
        $exceptionLog->writeStandard($this->exceptionMessage(), self::EXCEPTION_HEADLINE);

    }
}