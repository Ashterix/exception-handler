<?php
/**
 * exception-handler 
 *
 * @file: FacadeExceptionConfig.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Class - FacadeExceptionConfig
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 14.03.2015
 * Time: 3:58
 */

namespace UFOException;


class FacadeExceptionConfig {

    private $typeHandler = 1;
    private $logFileName = 'log_file.log';

    /**
     * @description Set type handler
     *
     * @param $typeHandler
     * @return $this
     */
    public function setTypeHandler($typeHandler)
    {
        $this->typeHandler = $typeHandler;
        return $this;
    }

    /**
     * @description Set filename for log file
     *
     * @param $logFileName
     * @return $this
     */
    public function setLogFileName($logFileName)
    {
        $this->logFileName = $logFileName;
        return $this;
    }


    /**
     * @description Get handler type
     *
     * @return int
     */
    public function getTypeHandler()
    {
        return $this->typeHandler;
    }

    /**
     * @description Get log filename
     *
     * @return string
     */
    public function getLogFileName()
    {
        return $this->logFileName;
    }

}