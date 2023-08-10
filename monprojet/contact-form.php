<?php

if(isset($_POST['submit'])) {

 
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);


  if(empty($name) || empty($email) || empty($message)) {
    echo "Tous les champs sont requis.";
    exit();
  }


  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'email n'est pas valide.";
    exit();
  }


  $to = "wiemmesaafi@gmail.com";
  $subject = "Nouveau message de $name";
  $body = "Nom: $name\nEmail: $email\n\n$message";

  if(mail($to, $subject, $body)) {
    echo "Le message a bien été envoyé.";
  } else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
  }

}
