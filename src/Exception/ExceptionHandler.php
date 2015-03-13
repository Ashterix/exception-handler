<?php
/**
 * Created by Alex Maystrenko <ashterix69@gmail.com>.
 * Date: 13.03.2015
 * Time: 12:16
 */

namespace Exception;


use Exception\Interfaces\ExceptionInterface;

class ExceptionHandler implements ExceptionInterface {

    private $handlers = [];

    public function __construct($type = null)
    {
        if (empty($type)) {
            echo $type;
            $type = self::E_TYPE_LOG;
        }

        if ($type & self::E_TYPE_LOG) {
            $this->handlers[self::E_TYPE_LOG] = 'logHandler';
        }
        if ($type & self::E_TYPE_WRITE) {
            $this->handlers[self::E_TYPE_WRITE] = 'writeHandler';
        }

        $this->registerExceptionHandler();
    }

    /**
     * Log exception message to log file
     *
     * @param \Exception $exception
     */
    public function logHandler(\Exception  $exception)
    {
        $file = fopen("logfile.log", "a+");
        fwrite($file, $exception->getMessage() . "\n");
        fclose($file);
    }

    /**
     * Write exception message
     *
     * @param \Exception $exception
     */
    public function writeHandler(\Exception  $exception)
    {
        print $exception->getMessage();
    }

    /**
     * Run exception handlers
     *
     * @param \Exception $exception
     */
    public function handlersStack(\Exception $exception)
    {
        foreach ($this->handlers as $handler) {
            $this->{$handler}($exception);
        }
    }

    /**
     * Register exception handlers
     */
    protected function registerExceptionHandler()
    {
        set_exception_handler(array($this, 'handlersStack'));
    }
}