<?php
  require "global.php";

  foreach($_POST as $key => $value)
  echo "<li>$key => $value</li>";

  $errors = array();

  if(!array_key_exists('text_newletter', $_POST) || $_POST['text_newletter'] == '' || !filter_var($_POST['text_newletter'], FILTER_VALIDATE_EMAIL)) {
  $errors ['mail'] = "vous n'avez pas renseigné votre email";
  }

  if(empty($errors)){
  $_SESSION['success'] = 1;
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'FROM:no-reply@popschool.fr';
  $to = $mailNewletter;
  $subject = htmlspecialchars($_POST['text_newletter']) .'</i>';

  mail($to, "inscription newsletter", $subject, $headers);
  echo "marche";
}else{
  echo "pas";
}

?>
