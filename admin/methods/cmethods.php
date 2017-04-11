<?php

/*
 * Name:  All common methods
 * Date: 03 23 2017
 * Author: Manzar Noman
 * Methods: Generate Unique String,
 *
 */

function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function sendPasswordInEmail($arrayObj){

  $to = $arrayObj['email']; // note the comma

// Subject
  $subject = 'Congratulation! Your UN-Employee Registertion is done successfully.';

// Message
  $message = '
  <html>
  <head>
    <title>New Un-Employe Credentials</title>
  </head>
  <body>
    <p>Here are your login information!</p>
    <table>
      <tr>
        <th>Username</th><th>Password</th>
      </tr>
      <tr>
        <td>'.$arrayObj['email'].'</td><td>'.$arrayObj['password'].'</td>
      </tr>
    </table>
  </body>
  </html>
  ';

// To send HTML mail, the Content-type header must be set
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
//$headers[] = 'To: '.$arrayObj['firstName'].' '.$arrayObj['lastName'].' '.$arrayObj['email'].'';
  $headers[] = 'From: HR Department <hr@undp.com>';
//$headers[] = 'Cc: birthdayarchive@example.com';
//$headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
  mail($to, $subject, $message, implode("\r\n", $headers));
}

function sendmessages(){

  if(isset($_SESSION["message"]))
    {?>
  <div class="container">
    <div id="myalert"  class="alert alert-success" role="alert" collapse>
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong> your account has been created !</strong>
    </div>
  </div>
  <?php  unset($_SESSION["message"]);

}elseif (isset($_SESSION["error"])) {?>

<div class="container">
 <div id="myalert"  class="alert alert-danger" role="alert" collapse>
  <a href="#" class="close" data-dismiss="alert">&times;</a>
  <strong>Email or Password is invalid</strong>
</div>
</div>
<?php  unset($_SESSION["error"]);
}elseif (isset($_SESSION["deactivate"])) { ?>
 
 <div class="container">
 <div id="myalert"  class="alert alert-success" role="alert" collapse>
  <a href="#" class="close" data-dismiss="alert">&times;</a>
  <strong>Account has been deactivated</strong>
</div>
</div>

<?php unset($_SESSION["deactivate"]);
} 
}

?>


