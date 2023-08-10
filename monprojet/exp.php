<?php

if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "wiemmesaafi@gmail.com";
    $subject = "Nouveau message de formulaire de contact";
    $body = "Nom: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    if(mail($to, $subject, $body, $headers)) {
        echo "Votre message a bien été envoyé";
    } else {
        echo "Une erreur s'est produite, veuillez réessayer plus tard";
    }
}
?>



