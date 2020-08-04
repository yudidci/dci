<?php

define('DB_HOSTRD', 'localhost');
define('DB_USERRD', 'root');
define('DB_PASSRD', '');
define('DB_NAMERD', 'odalfgsm3b');

/**
 * $dbconnect : koneksi kedatabase
 */
$dbconnect = new mysqli(DB_HOSTRD, DB_USERRD, DB_PASSRD, DB_NAMERD);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
