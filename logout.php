<?php



session_start();
session_destroy();
 echo "session destroyed"; 
 header('Location: index.php');


?>