<?php
  $variables = [
      'name' => 'testing',
      'username' => '',
      'password' => '',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>