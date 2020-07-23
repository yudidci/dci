<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'odalfgsm3b');

/**
 * $dbconnect : koneksi kedatabase
 */
$dbconnect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
