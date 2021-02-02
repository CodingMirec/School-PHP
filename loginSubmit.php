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

    $address = 'nevyplnil';
    if (isset($_POST['address']) && $_POST['address'] != '') {
        $address = $_POST['address'];
    } else {
        $address = 'nevyplnil';
    }

    if (!$chyba) {
        echo $firstName;
        echo '<br>';
        echo $lastName;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $address;
        echo '<br>';
    } else {
        echo 'chyby:';
        echo '<br>';
        echo $chybovaHlaska;
    }
} else {
    echo 'chyba';
}
