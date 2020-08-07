<?php
  $variables = [
      'name' => 'testing',
      'username' => 'raharjayudi@gmail.com',
      'password' => '22raharja',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>