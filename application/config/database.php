<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'      => '',
    'hostname' => '',
    'username' => 'dlsecurity',
    'password' => 'Standar123',
    'database' => '',
    'dbdriver' => 'odbc',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
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
        "odbc_dsn" => "mssql_odbc_1"
    ),
);

$db['db_employee'] = array(
    'dsn'      => '',
    'hostname' => '',
    'username' => 'selectView',
    'password' => 'Danliris1234.',
    'database' => '',
    'dbdriver' => 'odbc',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
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
        "odbc_dsn" => "mssql_odbc_2" 
    ),
);
?>
