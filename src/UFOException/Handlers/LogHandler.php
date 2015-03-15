<?php
/**
 * exception-handler 
 * @version: 1.0.0
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


use UFOException\Interfaces\Handlers;
use UFOException\Traits\HandlerConstruct;

class LogHandler implements Handlers {

    use HandlerConstruct;

    public function processing()
    {
        $file = fopen($this->config->getLogFileName(), "a+");
        fwrite($file, $this->exception->getMessage() . "\n");
        fclose($file);
    }
}