<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

//tab for data transfer
$dataInfo = [];

//control of data
$error = false;

if(!empty($_POST)) {
    //récupération des données du formulaire
    $get_name       = isset($_POST["name"])     ? filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS)     : null;
    $get_mail       = isset($_POST["email"])    ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS)    : null;
    $get_message    = isset($_POST["message"])  ? filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS)  : null; 
    $get_subject    = isset($_POST["subject"])  ? filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS)  : null; 
    $get_language   = isset($_POST["lang"])     ? filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_SPECIAL_CHARS)     : null; 
} else {    
    $error = true;
}

if(empty($get_name) || empty($get_mail) || empty($get_message) || empty($get_subject) || !filter_var($get_mail, FILTER_VALIDATE_EMAIL)) {
    $error = true;
}

//in cas of no error => PhpMailer
if(!$error) {
   
    $mail = new PHPMailer();
    $mail->IsSMTP();
    
    $mail->Host = '';    //Adresse IP ou DNS du serveur SMTP
    $mail->Port = ;      //Port TCP du serveur SMTP
    $mail->SMTPAuth = true; //Utiliser l'identification
    $mail->CharSet = 'UTF-8';

    
    $mail->SMTPSecure = '';     //Protocole de sécurisation des échanges avec le SMTP
    $mail->Username   =  '';    //Adresse email à utiliser
    $mail->Password   =  '';    //Mot de passe de l'adresse email à utiliser
    $mail->SetFrom('');        //même adresse que Username (When you're using SMTP from email services, they usually only allows you to send e-mails from your own address, not from any address)

    $mail->AddAddress('');     //destinataire
    $mail->addReplyTo($get_mail, $get_name); //la réponse va être envoyé vers le "vrai" user

    $mail->FromName = 'Contact Portfolio';   //nom pour setFrom

    $mail->Subject    =  'E-Mail from: '.$get_name.' - Subject: '.$get_subject;     //Le sujet du mail
    $mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
    $mail->Body = $get_message;
    $mail->AltBody = $get_message; 	           //Texte brut
    $mail->IsHTML(false);                      //Préciser qu'il faut utiliser le texte brut


    if (!$mail->send()) {
        $dataInfo['errorCode'] = "1";
        switch ($get_language) {
            case "en": 
                $dataInfo['message'] = 'Message not send! Please try to contact me directly via "alain_niessen@hotmail.com"';
                break;
            case "fr": 
                $dataInfo['message'] =  'Message pas envoyé! S\'il vous plaît contactez moi directement via "alain_niessen@hotmail.com"';
                break;
            case "de":
                $dataInfo['message'] = 'Nachricht nicht gesendet! Bitte kontaktieren Sie mich direkt via "alain_niessen@hotmail.com"';
                break;
        }          
    } else{
        $dataInfo['errorCode'] = "0";
        switch ($get_language) {            
            case "en": 
                $dataInfo['message'] = 'Message send! I\'ll reply ASAP';
                break;
            case "fr": 
                $dataInfo['message'] = 'Message envoyé! Je répondrai au plus vite';
                break;
            case "de":
                $dataInfo['message'] =  'Nachricht gesendet! Ich werde so schnell wie möglich antworten';
                break;
        }        
    }
}

echo json_encode($dataInfo);


?>