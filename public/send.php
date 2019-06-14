
<?php
    $success = false;

    $to   = "sanna-f@hotmail.com";  // Recipient of the form
    $from = "sanna-f@hotmail.com";  // Default sender
    $msg  = "";                     // Empty string to build a email message

    if ($_GET) {
        foreach ($_GET as $key => $value) {
            $msg .= "\t"."$key: $value"."\r\n";
            if($key == "E-post") {
                $from = $value;
            }
        }
    } elseif ($_POST) {
         foreach ($_POST as $key => $value) {
            $msg .= "\t"."$key: $value"."\r\n";
            if ($key == "E-post") {
                $from = $value;
            }
         }
    }

    if ($msg) {
        $msg = "Dette blei sendt inn:"."\r\n"."\r\n" . $msg;

        if (
            mail($to, "Inquiry from customer", $msg, "From: $from") &&
            mail($from, "Thank you for your inquiry", $msg, "From: sanna-f@hotmail.com") //Comment out to send me to myself
        ) {
            $success = true;
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
	top:0;
	left: 0;
	right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  margin: auto;
  text-align: center;
  position: absolute;
  background-color: #ebebec;
  font-family: 'Lato', 'Open sans', sans-serif;
}
h2{
  font-size: 20px;
}
p{
  font-size: 18px;
  color: black;
}

img{
  width: 20%;
}

@media screen and (min-width: 700px){
  .successForm{
    width: 60%;
  	height: 50%;
  }
  h2{
    font-size: 25px;
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
  <img src="img/logo_black-01.png">
  <div>
      <?= ($success)?"Success":"Failure"?>
  </div>
</div>

</body>
</html>
