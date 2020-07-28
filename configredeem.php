<?php

define('HOSTR', 'localhost');
define('USERR', 'root');
define('PASSR', '');
define('NAMER', 'odalfgsm3b');

/**
 * $dbconnect : koneksi kedatabase
 */
$dbconnect = new mysqli(HOSTR, USERR, PASSR, NAMER);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
