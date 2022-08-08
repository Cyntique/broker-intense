<?php
if(isset($_POST['ContactoEnviar']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['patente'])){
    
    // Submitted form data
    $name   = $_POST['name'];
    $apellido  = $_POST['apellido'];
    $dni = $_POST['dni'];
    $cp = $_POST['cp'];
    $email = $_POST['email'];
    $patente = $_POST['patente'];
    $gnc = $_POST['gnc'];
    $comercial = $_POST['comercial'];
    $alarma = $_POST['alarma'];
    
    /*
     * Send email to admin
     */
    $to     = 'info@netcy.ar';
    $subject= 'Solicitud de cotización';
    
    $htmlContent = '<html>
    <h4>¡Te solicitan una nueva cotización! A continuación los datos ingresados</h4>
    <table cellspacing="0" style="width: 300px; height: 200px;">
        <tr>
            <th>Nombre:</th><td>'.$name.'</td>
        </tr>
        <tr style="background-color: #e0e0e0;">
            <th>Apellido:</th><td>'.$apellido.'</td>
        </tr>
        <tr>
            <th>DNI:</th><td>'.$dni.'</td>
        </tr>
        <tr>
            <th>Código Postal:</th><td>'.$cp.'</td>
         </tr>
         <tr>
            <th>Email:</th><td>'.$email.'</td>
         </tr>
         <tr>
            <th>Código Postal:</th><td>'.$cp.'</td>
         </tr>
         <tr>
            <th>Patente:</th><td>'.$patente.'</td>
         </tr>
         <tr>
            <th>Equipo GNC:</th><td>'.$gnc.'</td>
        </tr>
        <tr>
            <th>Uso comercial:</th><td>'.$comercial.'</td>
        </tr>
        <tr>
            <th>¿Posee Alarma?:</th><td>'.$alarma.'</td>
        </tr>
    </table>
    </html>';
    
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "rn";
    $headers .= "Content-type: text/html; charset=\"UTF-8\"\r\nContent-Transfer-Encoding: 8bit\r\n";
    
    // Additional headers
    $headers .= 'From: CodexWorld<sender@example.com>' . "rn";
    
    // Send email
    if(mail($to,$subject,$htmlContent,$headers)){
        $status = 'ok';
    }else{
        $status = 'err';
    }
    
    // Output status
    echo $status;die;
}