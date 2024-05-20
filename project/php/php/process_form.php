<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Jednoduchá validace a odeslání emailu
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "vas_email@example.com";
        $subject = "Nová zpráva z kontaktního formuláře";
        $body = "Jméno: $name\nEmail: $email\nZpráva:\n$message";

        if (mail($to, $subject, $body)) {
            echo "Zpráva byla úspěšně odeslána.";
        } else {
            echo "Něco se pokazilo, zkuste to znovu.";
        }
    } else {
        echo "Vyplňte všechna pole.";
    }
} else {
    echo "Neplatný požadavek.";
}
?>
