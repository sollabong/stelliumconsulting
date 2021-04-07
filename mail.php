<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="Feladó: $name \n Üzenet: $message \n Telefon: $phone";
$recipient = "fanni1virag@gmail.com";
$subject = "Megkeresés a stelliumconsulting.hu oldalról";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Hoppá, valami hiba történt!");
echo "<script>alert('Köszönöm, hamarosan válaszolok');</script>";
echo "<script type='text/javascript'>window.location.href='index.html'</script>";
?>