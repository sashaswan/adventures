<?php

$recepient = "ask@adventures.com.ua";
$sitename = "Adventures Mail";


$email = trim($_POST["email"]);
$message = "new-mail: $email";

$pagetitle = "New User \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>