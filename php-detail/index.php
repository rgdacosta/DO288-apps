<?php
  print "Hello, World!. I am running on host " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  echo "<br/><br/>";
  print "This app was built with php " . PHP_VERSION . "\n";
  echo "<br/><br/>";
  print "The value of the variable MY_STRING is " .$_ENV["MY_STRING"] . "\n";
  echo "<br/><br/>";
  print "The value of the variable MY_PASSWORD = " .$_ENV["MY_PASSWORD"] . "\n";
  echo "<br/><br/>";

  if (file_exists('/my_secret/id_rsa')) {
    echo "/my_secret/id_rsa contains: ";
    echo "<br/><br/>";
    echo nl2br(file_get_contents( "/my_secret/id_rsa" ));
   } else {
    echo "Nothing was found at /my_secret/id_rsa.";
    }

  echo "<br/><br/>";

  if (file_exists('/my_mount/id_rsa.pub')) {
    echo "file contains: ";
    echo "<br/><br/>";
    echo nl2br(file_get_contents( "/my_mount/id_rsa.pub" ));
   } else {
    echo "Nothing was found at /my_mount/id_rsa.pub";
    }
?>
