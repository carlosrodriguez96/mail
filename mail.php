<?php
/**
* Desarrollado por: Carlos Arturo rodriguez y Jhon Jairo Salazar 
* Tgo. ADSI
*Ficha: 1132133
*/
$destinatario= $_GET['email'];//se captura el valor del email que se envia del formulario
$mensaje= $_GET['mensaje'];//se captura el valor del mensaje que se envía desde el formulario


$html="";//variable que contiene el cuerpo o contenido del mensaje 
$html.="<body>";
$html.="$mensaje";
$html.="<a href='https://esemismo96.000webhostapp.com/mail/recepcion.php?correo=$destinatario'>Para validar su correo, dar clic aqui</a>";
$html.="</body>";




$headers= "MIME-Version: 1.0\r\n";
$headers.= "content-type: text/html; charset=iso-8859-1\r\n";
$headers.= "from: ADSI <webmaster@approckola.com>" . "\r\n";

 echo 'Enviando correo a '.$destinatario;
 /**
* función de que se encarga de enviar el el correo.
*@param     texto       correo de destino
*@param     texto       asunto del mensaje 
*@param     texto       contenido del mensaje 
*@param     texto       cabecera del mensaje 
*/
 mail($destinatario, 'prueba correo', $html , $headers);
?>