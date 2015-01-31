

  <?php



  if (isset($_POST['check1'])) {

 include "succes.html";


	$imie = htmlspecialchars(trim($_POST['imie']));
    $telefon =  htmlspecialchars(trim($_POST['telefon']));
    $mail = htmlspecialchars(trim($_POST['mail']));
    $from = "mogiela.pl"; // sender
    $subject = "Nowy kontakt ze strony mogiela.pl";
    $message = "Nowy kontakt!\n

    Imie i nazwisko: $imie\n
    Telefon: $telefon \n
    Adres e-mail: $mail\n
    \n\n
    ";
    $to = "kredyty@mogiela.pl";

    // send mail
    mail($to,$subject,$message,"From: $from\n");
} else {

 include "error.html";
}


?>
