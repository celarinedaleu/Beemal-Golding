<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Vous pouvez ajouter ici votre logique de traitement des données, par exemple, l'envoi par e-mail, l'enregistrement en base de données, etc.

    // Exemple d'envoi d'e-mail de démonstration
    $to = "celarineda@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact de $name";
    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";

    // Envoi de l'e-mail
    mail($to, $subject, $body);

    // Redirection après l'envoi du formulaire
    header("Location: index.html"); // Remplacez confirmation.html par la page de confirmation souhaitée
    exit;
}
?>
