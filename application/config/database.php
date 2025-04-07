<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

// Koneksi pertama (untuk simpan data)
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'com-digitalization-public-division-sqlserver.database.windows.net',
    'username' => 'dlsecurity',
    'password' => 'Standar123',
    'database' => 'digitalization-db-security-administration-dl',
    'dbdriver' => 'pdo',
    'subdriver' => 'dblib',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => TRUE, // Azure SQL support encryption
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE,
);

// Koneksi kedua (untuk select data)
$db['second_db'] = array(
    'dsn'      => '',
    'hostname' => 'com-danliris-sqlserver.database.windows.net',
    'username' => 'selectView',
    'password' => 'Danliris1234.',
    'database' => 'com-danliris-db-hr-attendance',
    'dbdriver' => 'pdo',
    'subdriver' => 'dblib',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => TRUE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE,
);

