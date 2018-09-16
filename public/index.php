<?php
/**
 * @author: zmh
 * @date: 2018-08-13
 */
error_reporting(E_ALL);
if (!is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
    die('Please install composer first!');
}
require_once $autoloadFile;
define("DS", DIRECTORY_SEPARATOR);
(new \Framework\Container())->run(dirname(__DIR__));

