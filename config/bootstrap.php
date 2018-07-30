<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;
use Cake\Datasource\ConnectionManager;

try {
    Configure::config('default', new PhpConfig(__DIR__ . '/'));
    Configure::load('plugin', 'default');
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}

ConnectionManager::setConfig('datadog', [
    'className' => 'Cake\Database\Connection',
    'driver' => 'Cake\Database\Driver\Sqlite',
    'database' => TMP . 'datadog.sqlite',
    'encoding' => 'utf8',
    'cacheMetadata' => true,
    'quoteIdentifiers' => false,
]);