<?php
if (!empty($_POST)) {
    // the message
    $msg = "Mio Nome: ".$_POST['name']."\n
    Mia Email: ".$_POST['email']."\n
    Messaggio:\n".$_POST['message'];

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("alemarti.2001@gmail.com","Messaggio dal sito personale",$msg);
}
?>
