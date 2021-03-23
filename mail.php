<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="Feladó: $name \n Üzenet: $message \n Telefon: $phone";
$recipient = "solteszgabb@gmail.com";
$subject = "Megkeresés a stelliumconsulting.hu oldalról";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Hoppá, valami hiba történt!");
echo "Köszönöm!";
?>