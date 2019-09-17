<?php
session_start(); //creates a session
require_once('db_connect.php');
require_once('query_functions.php');
require_once('functions.php');

$connection = db_connect(); //connection of database

?>