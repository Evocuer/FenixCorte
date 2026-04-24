<?php
if(isset($_POST['email'])) {
 
    // Edita las líneas siguientes con tu dirección de correo y asunto
 
    $email_to = "Fenixcorte@gmail.com";
 
    $email_subject = "Contacto de $Correo";   
 
    function died($error) {
 
        // si hay algún error, el formulario puede desplegar su mensaje de aviso
 
        echo "Lo sentimos, hay un error en sus datos y el formulario no puede ser enviado. ";
 
        echo "Detalle de los errores.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Porfavor corrije los errores e inténtelo de nuevo.<br /><br />";
        die();
    }
 
    // Se valida que los campos del formulairo estén llenos
 
    if(!isset($_POST['Correo']) ||
 
        !isset($_POST['Mensaje'])) {
 
        died('Lo sentimos pero parece haber un problema con los datos enviados.');       
 
    }
 //Valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
 
    $email_from = $_POST['Correo']; // requerido
 
    $telephone = $_POST['Telefono']; // no requerido 
 
    $message = $_POST['Mensaje']; // requerido
 
    $error_message = "Error";
 
//Verificar que la dirección de correo sea válida 
 
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
 
  }
 
//Validadacion de cadenas de texto
 
  if(strlen($message) < 2) {
 
    $error_message .= 'El formato del texto no es válido.<br />';
 
  }
 
  if(strlen($error_message) < 0) {
 
    died($error_message);
 
  }
 
//Plantilla de mensaje
 
    $email_message = "Contenido del Mensaje.\n\n";
 
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Teléfono: ".clean_string($telephone)."\n";
 
    $email_message .= "Mensaje: ".clean_string($message)."\n";
 
 
//Encabezados
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
<!-- Mensaje de Éxito-->
 
<script>
     window.location.href='index.html';
</script>
 
<?php 
}
?>