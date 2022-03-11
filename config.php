<?php
//config file; allows to connect to database
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'bddevents');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$succes = mysqli_connect('127.0.0.1:3306', DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$_SESSION["succes"] = $succes;