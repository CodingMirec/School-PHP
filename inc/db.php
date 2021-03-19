<?php
function db_conn()
{
    $dbhost = 'localhost';
    $dbuser = 'c17sykora';
    $dbpass = '8bqX@aKL7';
    $db = 'c17sykora';

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Pripojenie zlyhalo: %s\n" . $conn->error);

    return $conn;
}

function db_close($conn)
{
    $conn->close();
}
