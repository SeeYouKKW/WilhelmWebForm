<?php
$empfaenger = "daniel.djahangir@googlemail.com";
$betreff = "Die Mail-Funktion";
$from = "From: Vorname Nachname <absender@domain.de>";
$text = "Hier lernt Ihr, wie man mit PHP Mails verschickt";

mail($empfaenger, $betreff, $text, $from);
?>
