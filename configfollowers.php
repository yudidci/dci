<?php

define('HOSTF', 'localhost');
define('USERF', 'root');
define('PASSF', '');
define('NAMEF', 'odalfgsm3b');

/**
 * $dbconnect : koneksi kedatabase
 */
$dbconnect = new mysqli(HOSTF, USERF, PASSF, NAMEF);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
