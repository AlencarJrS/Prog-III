<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "alencar@alencarjunior.tech";

$to = $_POST['email'];

$subject = "Verificando o correio do PHP";

$message = "O correio do PHP funciona bem";

$headers = "De: ". $from;
echo "teste";
mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";

?>