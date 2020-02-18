<?php

require '../vendor/autoload.php';

use  App\Model\MyDbQuery;

$link = DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'mydb1'
]);

$table1 = new MyDbQuery('table1', $link);

var_dump($table1->get());

echo '1234';