<?php
  $variables = [
      'name' => 'testing',
      'username' => 'devwebbatam@gmail.com',
      'password' => '22helloworld',
      'DBHOST' => 'localhost',
      'DBUSER' => 'root',
      'DBPASS' => '',
      'DBNAME' => 'odalfgsm3b',
      
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>