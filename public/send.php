
<?php
    $success = false; // "Assume the worst"
    //var_dump($_GET); // Sjekk om du fikk noe via GET (kommenter disse ut i prod)
    //var_dump($_POST); // TSjekk om du fikk noe via POST

    $to   = "sanna-f@hotmail.com";  // Mottaker av skjema data
    $from = "sanna-f@hotmail.com";  // Default avsender (endres hvis et av form-feltene har nøkkelen email, se under)
    $msg  = "";                 // Tom streng til å bygge en e-post-melding

    if ($_GET) { // Sjekk om noe ble sendt via GET (method="get" i skjema)
        foreach ($_GET as $key => $value) { // GET er en array (liste), så vi går igjennom vha en for-løkke (foreach), som går igjennom alle nøkkel/verdi-par og skriver de ut, med en tabulator i starten av linjen og et linjeskift på slutten (et skjema felt per linje):
            $msg .= "\t"."$key: $value"."\r\n";
            if($key == "E-post") { // Hvis nøkkelen på et av feltene i skjema er "email", endre default sender til verdien av dette feltet (som vi har validert som en gyldig epost-adresse)
                $from = $value;
            }
        }
    } elseif ($_POST) { // Hvis det IKKE ble sendt noe med GET, sjekk POST (method="post" i skjemaet). Hvis dette er tilfelle bygger vi meldingen med innholdet fra $_POST som også er en array (tilsvarende som over)
         foreach ($_POST as $key => $value) {
            $msg .= "\t"."$key: $value"."\r\n";
            if ($key == "E-post") {
                $from = $value;
            }
         }
    }

    if ($msg) { // Sjekk at vi har puttet noe inn i $msg (enten via post eller get)
        $msg = "Dette blei sendt inn:"."\r\n"."\r\n" . $msg; // Legger til litt ekstre
        // Sender to mailer: EN til skjemamottaker ($to) og en tilbake til den som fyller ut skjema ($from). PS! Hvis $from IKKE blir oppdatert så sendes den til default-avsender. Har "hardkodet" avsender på kvitteringen.
        if (
            mail($to, "Henvendelse fra kunde", $msg, "From: $from") &&
            mail($from, "Takk for din henvendelse", $msg, "From: sanna-f@hotmail.com") //kommenter ut for å kun sende til meg sjølv
        ) {
        /*
        For å teste dette på en Mac med MAMP så:
        - Sjekk i Terminal App at sendmail is set up with 'which sendmail', og se om den svarer med '/usr/sbin/sendmail'
        - Sjekk MAMP sin phpInfo side og se om sendmail_path = "/usr/sbin/sendmail -t -i" (eller "sendmail -t -i").
        Dette SKAL være i orden fom. MAMP 4.4+
        PS! Hvis det er noe rot med dette, så kan du få "suksess" under uten at det faktisk sendes ut en mail.
         */
            $success = true;
            # Success bare hvis begge mailene ble sendt!
        }
    }


?>



<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="utf-8">

    <title><?= ($success)?"Success":"Failure"?></title>
    <meta http-equiv="refresh" content="3;url=index.html">
</head>
<style scoped>

body{
  background-color: black;
}

.successForm{
  background-color: #ebebec;
  width: 100%;
	height: 100%;
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}

p{
  font-size: 18px;
  color: black;
  text-align: center;
  font-family: 'Lato', 'Open sans', sans-serif;
}

@media screen and (min-width: 700px){
  .successForm{
    width: 60%;
  	height: 40%;
  }
  p{
    font-size: 22px;
  }
}

</style>
<body>

<div class="successForm">
  <h2><strong>Thank you so much for your request!</strong></h2>
  <p>I will get to you as soon as possible<br>Whish you a nice day!</p>
  <img src="logo_black-01.png">
<?= ($success)?"Success":"Failure"?>
</div>

</body>
</html>
