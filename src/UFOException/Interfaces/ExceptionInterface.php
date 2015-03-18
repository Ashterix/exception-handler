<?php
/**
 * exception-handler
 *
 * @file: ExceptionInterface.php
 * @author Ashterix <ashterix69@gmail.com>
 *
 *
 * Created by JetBrains PhpStorm.
 * Date: 13.03.2015
 * Time: 16:25
 */

namespace UFOException\Interfaces;


interface ExceptionInterface {

    public function handlersStack(\Exception $exception);

    public function registerHandler();

}