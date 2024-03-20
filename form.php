<?php

$company = $_POST['company'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];

$err = 0;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $msg = "Formato e-Mail non valido.";
    $err = 1;
}


if (!preg_match('/^[a-zA-Z]+$/i', $fullname)) {
    $msg = "Il campo Fullname può contenere solo lettere.";
    $err = 1;
}

if (!preg_match('/^[0-9]+$/', $phone)) {
    $msg = "Il campo Phone può contenere solo numeri.";
    $err = 1;
}


// Se non ci sono stati errori andiamo avanti
if (!$err) {
    header('Location: index.php?formsent=1');
}

if ($err) {
    header("Location: index.php?err=$msg");
}

//echo $company  .$fullname . $email . $phone . $service;
