<?php

use Viettqt\JetDB\DB;
use Viettqt\JetDB\Config;

DB::addConnection('main', [
    'host' => 'db',
    'port' => '3306',
    'database' => 'quiz_api',
    'username' => 'root',
    'password' => '1',
    'charset' => Config::UTF8MB4,
    'collation' => Config::UTF8MB4_UNICODE_CI,
    'fetch' => Config::FETCH_CLASS
]);