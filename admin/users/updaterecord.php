<?php
$final=getUpdatequery('users',$_POST,$_POST['id']);
echo '<script type="text/javascript">
            window.location = "index.php?act=mguv&id='.$_POST['id'].'";
       </script>';
?>




