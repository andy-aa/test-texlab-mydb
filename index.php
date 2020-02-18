<?php

require 'vendor/autoload.php';

use TexLab\MyDB\DbEntity;
use TexLab\MyDB\MyDbEntity;
use TexLab\MyDB\DB;

//namespace Logger;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Class Logger
 */
//class Logger extends AbstractLogger implements LoggerInterface
//{
//    /**
//     * @inheritdoc
//     */
//    public function log($level, $message, array $context = [])
//    {
//        //тут мы будем логировать
//    }
//}

//$logger = new Logger('general');


$link = DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'mydb1'
]);

$table1 = new MyDbEntity('table1', $link);

var_dump($table1->get());

$table1->add(['id' => 5, 'text' => 'abcdefg']);
$table1->del(['id' => 2]);
$table1->del(['id' => 2]);
$table1->edit(
    ['id' => 4],
    ['text' => 'adfghj']
);

var_dump($table1->get());


//// create a log channel
//$log = new Logger('name');
//$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));
//
//// add records to the log
//$log->warning('Foo');
//$log->error('Bar');