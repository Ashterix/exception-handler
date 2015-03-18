<?php
/**
 * exception-handler 
 *
 * @file: TypesExceptionHandlers.php
 * @author Ashterix <ashterix69@gmail.com>
 *  
 * Interface - TypesExceptionHandlers
 * @description 
 *
 * Created by JetBrains PhpStorm.
 * Date: 14.03.2015
 * Time: 0:51
 */

namespace UFOException\Interfaces;


interface TypesExceptionHandlers {

    const E_TYPE_LOG    = 1;
    const E_TYPE_WRITE  = 2;
    const E_TYPE_EMAIL  = 4;
    const E_TYPE_HTML   = 8;

}