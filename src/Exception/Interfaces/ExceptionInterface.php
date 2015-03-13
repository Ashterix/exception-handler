<?php
/**
 * Created by Alex Maystrenko <ashterix69@gmail.com>.
 * Date: 13.03.2015
 * Time: 16:25
 */

namespace Exception\Interfaces;


interface ExceptionInterface {

    const E_TYPE_LOG    = 1;
    const E_TYPE_WRITE  = 2;
    const E_TYPE_EMAIL  = 4;
    const E_TYPE_HTML   = 8;

}