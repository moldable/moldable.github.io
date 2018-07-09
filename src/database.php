<?php

use Javanile\Moldable\Database;

$db = new Database([
    'host'     => 'mysql',
    'dbname'   => 'database',
    'username' => 'root',
    'password' => 'root',
    'prefix'   => 'prefix_',
]);
