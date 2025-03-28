<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

// Koneksi pertama (untuk simpan data)
$db['default'] = array(
    'dsn'      => 'odbc:mssql_odbc_1', 
    'hostname' => '',
    'username' => 'dlsecurity',
    'password' => 'Standar123',
    'database' => '',
    'dbdriver' => 'odbc',
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
    'options' => array(
        "TrustServerCertificate" => TRUE,
    ),
    'autoinit' => TRUE,
);

// Koneksi kedua (untuk select data)
$db['second_db'] = array(
    'dsn'      => 'odbc:mssql_odbc_2', 
    'hostname' => '',
    'username' => 'selectView',
    'password' => 'Danliris1234.',
    'database' => '',
    'dbdriver' => 'odbc',
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
    'options' => array(
        "TrustServerCertificate" => TRUE,
    ),
    'autoinit' => TRUE,
);
