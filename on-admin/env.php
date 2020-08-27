<?php
  $variables = [
      'name' => 'testing',
      'username' => 'devwebbatam@gmail.com',
      'password' => '22helloworld',
      'DBUSER' => '',
      'DBHOST' => '',
      'DBPASS' => '',
      'DBNAME' => '',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>