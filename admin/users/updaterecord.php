<?php
echo $_POST['user_id'];


$final=getUpdatequery('users',$_POST,$_POST['user_id']);

   echo '<script type="text/javascript">
            window.location = "index.php?act=mgu";
       </script>';
?>




