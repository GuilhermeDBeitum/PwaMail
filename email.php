
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['msg'];

$to = 'xpointersite@outlook.com'; 
$subject = mb_encode_mimeheader('CLIENTE DO SITE'); 

$headers .= "$From design@guilhermedouglas.com \r\n"; 		

$headers .= "$nome \r\n";
$headers .= "$tel \r\n";
$headers .= "$email \r\n";


if ($nome == "" || $tel == "" || $msg == "" || $email == "" ){

 echo "<script>alert('$nome : Nenhum campo pode ficar em branco.');</script>";

    echo "<script>history.go(-1);</script>";
    
 }else{
     (mail($to, $subject, $msg, $headers)); 
echo "<script>alert('{$nome} : E-MAIL ENVIADO COM SUCESSO! Em breve responderemos ao seu e-mail. Seu webmaster lhe agradece... OBRIGADO!');document.location='index.php';</script>";

}


?>
