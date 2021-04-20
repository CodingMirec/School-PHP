<?php

if (isset($_POST['submit'])) {
    $chyba = false;
    $chybovaHlaska = '';

    $firstName = 'nevyplnil';
    if (isset($_POST['firstName']) && $_POST['firstName'] != '') {
        $firstName = $_POST['firstName'];
    } else {
        $chyba = true;
        $chybovaHlaska .= 'chyba Meno <br>';
    }

    $lastName = 'nevyplnil';
    if (isset($_POST['lastName']) && $_POST['lastName'] != '') {
        $lastName = $_POST['lastName'];
    } else {
        $lastName = 'nevyplnil';
    }

    $email = 'nevyplnil';
    if (isset($_POST['email']) && $_POST['email'] != '') {
        $email = $_POST['email'];
    } else {
        $chyba = true;
        $chybovaHlaska .= 'chyba mail <br>';
    }

    $password = 'nevyplnil';
    if (isset($_POST['password']) && $_POST['password'] != '') {
        $password = $_POST['password'];
    } else {
        $chyba = true;
        $chybovaHlaska .= 'chyba heslo <br>';
    }

    $repeatPassword = 'nevyplnil';
    if (isset($_POST['repeatPassword']) && $_POST['repeatPassword'] != '') {
        $repeatPassword = $_POST['repeatPassword'];
    } else {
        $chyba = true;
        $chybovaHlaska .= 'hesla sa nezhoduju <br>';
    }


    if (!$chyba) {
        echo $firstName;
        echo '<br>';
        echo $lastName;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $password;
        echo '<br>';
        echo $repeatPassword;
        echo '<br>';
    } else {
        echo 'chyby:';
        echo '<br>';
        echo $chybovaHlaska;
    }
} else {
    echo 'chyba';
}
