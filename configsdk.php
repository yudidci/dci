<?php

define('HOSTSDK', 'localhost');
define('USERSDK', 'root');
define('PASSSDK', '');
define('NAMESDK', 'odalfgsm3b');

/**
 * $dbconnect : koneksi kedatabase
 */
$dbconnect = new mysqli(HOSTSDK, USERSDK, PASSSDK, NAMESDK);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
