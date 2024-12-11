<?php
require 'enviarcorreo.php'; 

$emailSender = new EmailSender(
    'felixitobambaren14@gmail.com',
    'Asunto del correo de prueba',
    'plantilla/plantilla.html', 
    ['nombre' => 'Felix'] 
);
$emailSender->sendEmail();