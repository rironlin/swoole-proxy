<?php
/**
 * Created by PhpStorm.
 * User: Krasen
 * Date: 16/7/18
 * Time: 15:02
 * Email: jhasheng@hotmail.com
 */


require_once __DIR__ . '/../vendor/autoload.php';

if (extension_loaded('swoole') && ini_get('swoole.use_namespace')) {
    $ss = new \SS\SwooleServer();
    $ss->start();
} else {
    exit('swoole not loaded' . PHP_EOL);
}
