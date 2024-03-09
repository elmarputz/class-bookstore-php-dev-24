<?php
declare(strict_types=1);

error_reporting(E_ALL);

$default_view = 'welcome';

/**
 * very simple class autoloader
 */
spl_autoload_register(function ($class) {
    $filename = __DIR__ . '/../lib/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($filename))
        include($filename);

});

/* DataManager DI */
$mode = 'mock';
switch ($mode) {
    case 'mock' : 
        $class = 'mock';
        break; 
    case 'pdo' : 
        $class = 'mysqlpdo'; 
        break; 
}
require_once(__DIR__ . '/../lib/Data/DataManager_' . $class . '.php'); 
