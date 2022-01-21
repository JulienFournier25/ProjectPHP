<?php
$formErrors = [];

$regex = [
    'name' => '#^([A-Z]{1}){1}([a-z-_.]+){1}$#',
];
/**
 * la fonction count sert à compter le nombre d'élément dans un tableaux
 * ici elle à savoir si le formulaire à été envoyer
 */
if (count($_POST) > 0) {
    if (!empty($_POST['lastname'])) {
        if (preg_match($regex['name'],$_POST['lastname'])) {
            $lastname = strip_tags($_POST['lastname']);
        } else {
            $formErrors['lastname'] = 'Veuillez vérifier votre nom de famille.';
        }
    } else {
        $formErrors['lastname'] = 'Veuillez saisir un nom de famille.';
    }
    if (!empty($_POST['firstname'])) {
        if (preg_match($regex['name'],$_POST['firstname'])) {
            $firstname = strip_tags($_POST['firstname']);
        } else {
            $formErrors['firstname'] = 'Veuillez vérifier votre prénom.';
        }
    } else {
        $formErrors['firstname'] = 'Veuillez saisir un prénom.';
    }
    if($_POST['typeOfVisitor']=='exposant'){
        if (!empty($_POST['exponentsName'])) {
            if (preg_match($regex['name'],$_POST['exponentsName'])) {
                $exponentsName = strip_tags($_POST['exponentsName']);
            } else {
                $formErrors['exponentsName'] = 'Veuillez vérifier votre nom d\'exposant.';
            }
        } else {
            $formErrors['exponentsName'] = 'Veuillez saisir un nom d\'exposant.';
        }
    }
    
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)) {
            $email = $_POST['email'];
        } else {
            $formErrors['email'] = 'Veuillez vérifier votre adresse email.';
        }
    } else {
        $formErrors['email'] = 'Veuillez saisir une adresse mail.';
    }
    if (!empty($_POST['subject'])) {
        $subject = strip_tags($_POST['subject']);
    } else {
        $formErrors['subject'] = 'Veuillez saisir un sujet de mail.';
    }
    if (!empty($_POST['message'])) {
        $message = strip_tags($_POST['message']);
    } else {
        $formErrors['message'] = 'Veuillez saisir un message.';
    }
    if(empty($formErrors)){
        $destinataires = 'julien.fournier2508@gmail.com';
        $sujet = $subject;
        if($_POST['typeOfVisitor']=='exposant'){
            if (!empty($_POST['exponentsName'])) {
                $exponentsNameMail="\n".'Son nom d\'exposant est '.$exponentsName;
            } 
        }

        $content='L\'envoyeur est '.$firstname.' '.$lastname."\n".'L\'envoyeur est un '.$_POST['typeOfVisitor'].$exponentsNameMail."\n".$message;
        mail($destinataires,$sujet,$content);
    }
}

