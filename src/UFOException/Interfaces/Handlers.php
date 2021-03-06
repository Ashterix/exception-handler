<?php
/**
 * exception-handler 
 *
 * @file: Handlers.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Interface - Handlers
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 14.03.2015
 * Time: 3:01
 */

namespace UFOException\Interfaces;


interface Handlers {

    const EXCEPTION_HEADLINE = "Caught an exception";

    /**
     * @description Running exception handling
     *
     * @return mixed
     */
    public function processing();

}