<?php
$connect=mysqli_connect(
    'localhost',
    'root',
    'root',
    'php_school'
    );
    // to see if able to connect  save connection in here
    if (!$connect) 
  {
    echo 'Connection Failed: ' . mysqli_connect_errno();
    exit;
  }

// no need to close php if it's pure php