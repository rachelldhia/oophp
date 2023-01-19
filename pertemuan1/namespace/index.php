<?php

require __DIR__.'/RequestInterface.php';
require __DIR__.'/Http/Request.php';
require __DIR__.'/Api/Request.php';
// use http\Request;
$request = new http\Request();
$request->handle();
echo PHP_EOL;

// use api\Request;
$request = new api\Request();
$request->handle();

?>