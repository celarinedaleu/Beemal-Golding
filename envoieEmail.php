<?php
if(isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Destinataire de l'email
    $to = 'votre@email.com';

    // Sujet de l'email
    $subject = 'Nouveau message de formulaire de contact';

    // Message de l'email
    $message = '
        <html>
        <head>
        <title>Message de formulaire de contact</title>
        </head>
        <body>
        <h2>Vous avez reçu un nouveau message de formulaire de contact</h2>
        <p><strong>Nom:</strong> '.$nom.'</p>
        <p><strong>Email:</strong> '.$email.'</p>
        <p><strong>Message:</strong> '.$message.'</p>
        </body>
        </html>
        ';

    // En-têtes de l'email
    $headers = "From: $nom <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Envoi de l'email
    $send = mail($to, $subject, $message, $headers);

    // Message de confirmation d'envoi
    if($send) {
        echo 'Votre message a bien été envoyé.';
    } else {
        echo 'Erreur lors de l\'envoi du message. Veuillez réessayer plus tard.';
    }
}
?>
