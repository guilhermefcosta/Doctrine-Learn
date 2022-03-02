<?php

use Doctrine\DBAL\DriverManager;

return DriverManager::getConnection([
    'dbname' => 'migrations_docs_example',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
]);