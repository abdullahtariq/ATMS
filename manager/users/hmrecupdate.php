<?php
echo $_POST['user_id'];


$final=getUpdatequery('users',$_POST,$_POST['user_id']);
$_SESSION["direct"]=$_POST['direct'] ;

  echo '<script type="text/javascript">
             window.location = "index.php?act=hmu";
        </script>';
?>