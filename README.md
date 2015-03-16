Exception handler
===========
Flexible exception handler for PHP.


Requirement
-----------

- PHP >= 5.4
- "ashterix/log-to-file": "dev-master"

Installation
------------

Via [Composer][]:

    require "ashterix/exception-handler": "dev-master"

Features
--------
This class has a number of exception handlers:
- A simple inscription;
- Write to a file;
- Sending messages to email;
- Elimination of Custom html page;
- Plans to add SMS sending and http pusher.

Class allows you to combine different handlers, by comparing the input parameter with a bitmask.
Therefore, in the input parameter of the method ->setTypeHandler() recommended to use the predefined constants
TypesExceptionHandlers::E_TYPE_...

####Predefined types of handlers
```php
TypesExceptionHandlers::E_TYPE_WRITE;   // write to console or browser
TypesExceptionHandlers::E_TYPE_LOG;     // write to log file
TypesExceptionHandlers::E_TYPE_EMAIL;   // send message to email
TypesExceptionHandlers::E_TYPE_HTML;    // print custom html page
```

Usage
-----

```php

use UFOException\FacadeException;
use UFOException\Interfaces\TypesExceptionHandlers;

$myException = new FacadeException();

// Set configs
$myException->config
    ->setTypeHandler(TypesExceptionHandlers::E_TYPE_WRITE | TypesExceptionHandlers::E_TYPE_LOG)
    ->setLogFileName("tmp/logs/logfile.log");

// Register new exception handler
$myException->registerHandler();


// ...
// do something
// ...


throw new Exception('My exception message');
```


License
-------

This library is available under the [MIT license](LICENSE).


[Composer]: http://getcomposer.org/







