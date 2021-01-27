<?php

if (isset($_POST['submit'])) {
    $chyba = false;
    $chybovaHlaska = '';

    $name = 'nevyplnil';
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    $email = 'nevyplnil';
    if (isset($_POST['email']) && $_POST['email'] != '') {
        $email = $_POST['email'];
    } else {
        $chyba = true;
        $chybovaHlaska .= 'chyba mail <br>';
    }

    $subject = 'nevyplnil';
    if (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }

    $message = 'nevyplnil';
    if (isset($_POST['message']) && $_POST['message'] != '') {
        $message = $_POST['message'];
    } else {
        $chyba = true;
        $chybovaHlaska .= 'chyba sprava <br>';
    }

    if (!$chyba) {
        echo $name;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $subject;
        echo '<br>';
        echo $message;
        echo '<br>';

        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';

        // Additional headers
        $headers[] = 'From: Birthday Reminder <birthday@example.com>';

        // Mail it
        mail('deathyst@gmail.com', $name, $subject, $message, implode("\r\n", $headers));
    } else {
        echo 'chyby:';
        echo $chybovaHlaska;
    }
} else {
    echo 'chyba';
}
