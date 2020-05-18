<html>
 <head>
  <title>Hello, World!/title>
 </head>
 <body>
   <?php 
    echo '<p>Hello, World! I am coming to you from ' .$_ENV["HOSTNAME"] . '</p>';
    echo '<p>I am running PHP version ' . phpversion() . '</p>';
    echo '<p>TEXT = ' .$_ENV["TEXT"] . '</p>';
    echo '<p>PASSWORD = ' .$_ENV["PASSWORD"] . '</p>';
    echo '<p>';
    if (file_exists('/my_secret/file_secret')) {
      echo "/my_secret/file_secret contains: ";
      echo nl2br(file_get_contents( "/my_secret/file_secret" )); 
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
 </body>
</html>
