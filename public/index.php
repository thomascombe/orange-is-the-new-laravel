<?php

use App\Kernel;
use App\Request;

require __DIR__.'/../vendor/autoload.php';

$kernel = new Kernel();

$response = $kernel->handle(new Request());

echo $response->getContent();
