|<?php
//*Mail form by Mo Bahjat*/
$to = "jose_taquia@hotmail.com"; /* <----add your e-mail*/
$Subject = "Email from my website TAQUIA GUTIERREZ";/*what subject you want to receive your email;*/

//Don't touch this please //
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = "<b> comment </b>  " . $_POST['comment']. "<br>" . " <b>Name</b> ". $name . "<br>" .  " <b> E-mail <b/> ". $email . "<br>" . " <b>Phone</b> " . "<br>" . $phone;


// this is the headers//
$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email"; 

//the mail Function
mail($to, $Subject, $comment, $headers);
//this message will show up when you hit Submit button//
echo "¡Su mensaje ha sido enviado correctamente!. Le agradecemos $name por su mensaje.¡Estaremos en contacto pronto!";
//echo "<a href='https://www.taquiagutierrez.com' target='_blank'> Dele click al enlace para regresar a nuestra página </a>"; 
?>


