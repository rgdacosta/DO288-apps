<?php 
  print "Hello, World!. I am running on host " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  print "This app was built with php " . PHP_VERSION . "\n";
  print "TEXT = " .$_ENV["TEXT"] ."\n" ;
echo '<p>PASSWORD = ' .$_ENV["PASSWORD"] . '</p>';
echo '<p>';
if (file_exists('/my_secret/id_rsa')) {
echo "/my_secret/id_rsa contains: ";
echo nl2br(file_get_contents( "/my_secret/id_rsa" )); 
} else {
echo "No secrets found!";
}
echo '</p>';
echo '<p>';
if (file_exists('/my_mount/my_file')) {
echo "file contains: ";
echo nl2br(file_get_contents( "/my_mount/my_file" )); 
} else {
echo "No other files found!";
}
echo '</p>';
?>
