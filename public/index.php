<?php
use Slim\Http\Request;
use Slim\Http\Response;

// echo "aa";
require '../bootstrap/app.php';
// echo 1;
require '../bootstrap/container.php';
// echo 2;
require '../routes/web.php';
// echo 3;

$app->run();