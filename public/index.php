<?php

require_once '../vendor/autoload.php';

use App\Controllers\HomeController as Home;
use Pvt\DB\Database as DB;

$home = new Home();

$database = new DB();

var_dump($database->getConn());

echo $home->index();

