<!DOCTYPE html>
<html>
<head>
  <title>email</title>
</head>

<body>
      <?php
          //$to = $_GET['em'];
          //Recuperando info do formulario
          $GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

          //Variaveis Locais
          $Nome = $GetPost['Nome'];
          $Email = $GetPost['Email'];
          //var_dump($Nome);

          //Incluir Classe PHPMailer
          //include_once('PHPMailer/src/PHPMailer.php');
          //include_once('PHPMailer/src/SMTP.php');

          use PHPMailer\PHPMailer\PHPMailer;
          use PHPMailer\PHPMailer\Exception;

          require 'PHPMailer/src/Exception.php';
          require 'PHPMailer/src/PHPMailer.php';
          require 'PHPMailer/src/SMTP.php';

          $mail = new PHPMailer();

          $msj="Voce fede";


          $mail->IsSMTP(); // enable SMTP
          $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
          //authentication SMTP enabled
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
          $mail->Host = "smtp.gmail.com";
          //indico el puerto que usa Gmail 465 or 587
          $mail->Port = 465;
          $mail->Username = "dolinho208@gmail.com";
          $mail->Password = "bolinho123";

          $mail->SetFrom("dolinho208@gmail.com","Dolinho");
          $mail->AddReplyTo("dolinho208@gmail.com","Dolinho");
          $mail->Subject = "Teste";
          $mail->MsgHTML($msj);
          $mail->AddAddress($Email);

       if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo;
       } else {
          echo "Message has been sent";
       }



      ?>


</body>

</html>
