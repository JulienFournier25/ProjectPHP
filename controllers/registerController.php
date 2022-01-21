<?php
$formErrors = [];
$regex = [
    'name' => '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/',
    'phoneNumber' => '/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}$/'
];
$durationArray = ['1', '2'];
$exponentTypeArray = ['Vente de vin', 'Vente de verre'];


/* vérif. lastName */

if (count($_POST) > 0) { /* vérif si form envoyé / count permet de voir combien il y a de valeur dans son $_POST */
    if (!empty($_POST['lastname'])) {
        if (preg_match($regex['name'], $_POST['lastname'])) {
            $lastname = strip_tags($_POST['lastname']);
        } else {
            $formErrors['lastname'] = 'Veuillez vérifier votre nom de famille.';
        }
    } else {
        $formErrors['lastname'] = 'Veuillez saisir un nom de famille.';
    }
    if (!empty($_POST['firstname'])) {
        if (preg_match($regex['name'], $_POST['firstname'])) {
            $firstname = strip_tags($_POST['firstname']);
        } else {
            $formErrors['firstname'] = 'Veuillez vérifier votre prénom.';
        }
    } else {
        $formErrors['firstname'] = 'Veuillez saisir un prénom.';
    }
    /* vérif. email */

    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($_POST['email']);
        } else {
            $formErrors['email'] = 'L\'adresse mail est incorrecte';
        }
    } else {
        $formErrors['email'] = 'L\'adresse mail est obligatoire';
    }

    /* vérif. phone */

    if (!empty($_POST['phone'])) {  /* vérif si les champs sont non vide */
        if (preg_match($regex['phoneNumber'], $_POST['phone'])) {  /* vérif si le champ rempli correspond à ce qu'on attend */
            $phone = strip_tags(($_POST['phone']));  /* empêche l'insertion des balises */
        } else {
            $formErrors['phone'] = 'Le numéro de téléphone n\'est pas correct';
        }
    } else {
        $formErrors['phone'] = 'Le numéro de téléphone est obligatoire';
    }

    /* vérif. typeOfVisitor */

    if (!empty($_POST['typeOfVisitor'])) {
        $typeOfVisitor = $_POST['typeOfVisitor'];
    } else {
        $formErrors['typeOfVisitor'] = 'Veuillez séléctionner un type de participation';
    }

    /* vérif. durée */

    if (!empty($_POST['duration'])) {
        $duration = strip_tags(($_POST['duration']));
    } else {
        $formErrors['duration'] = 'La durée est obligatoire';
    }

    /* vérif. exposant type */
    if (!empty($_POST['typeOfVisitor'])) {
        if ($_POST['typeOfVisitor'] == 'exposant') {
            if (!empty($_POST['exponentType'])) {
                $exponentType = strip_tags(($_POST['exponentType']));
            } else {
                $formErrors['exponentType'] = 'Le type d\'exposant est obligatoire';
            }
            if (!empty($_POST['exponentsName'])) {
                if (preg_match($regex['name'],$_POST['exponentsName'])) {
                    $exponentsName = strip_tags($_POST['exponentsName']);
                } else {
                    $formErrors['exponentsName'] = 'Veuillez vérifier votre nom d\'exposant.';
                }
            } else {
                $formErrors['exponentsName'] = 'Veuillez saisir un nom d\'exposant.';
            }
            if ($_FILES['exponentsImage']['error'] == 0) {
                
                $fileInfos = pathinfo($_FILES['exponentsImage']['name']);
                $photoExtension = strtolower($fileInfos['extension']);
                
                $authorizedMimeTypes = [
                    'png' => 'image/png',
                    'jpg' => 'image/jpeg',
                    'jpeg' => 'image/jpeg',
                    'gif' => 'image/gif'
                ];
                
                if (array_key_exists($photoExtension, $authorizedMimeTypes) && mime_content_type($_FILES['exponentsImage']['tmp_name']) == $authorizedMimeTypes[$photoExtension]) {
                    
                    if (move_uploaded_file($_FILES['exponentsImage']['tmp_name'], 'uploads/' . $_FILES['exponentsImage']['name'])) {
                        chmod('uploads/' . $_FILES['exponentsImage']['name'], 0644);
                        $photo = 'uploads/' . $_FILES['exponentsImage']['name'];
                    } else {
                        $formErrors['exponentsImage'] = 'Une erreur est survenue';
                    }
                } else {
                    $formErrors['exponentsImage'] = 'La photo n\'est pas au bon format';
                }
            } else {
                $formErrors['exponentsImage'] = 'La photo est obligatoire';
            }
        }
    }
    if(empty($formErrors)){
        $destinataires = $email;
        $sujet = 'Inscription';
        $content='Merci et bienvenue '.$firstname.' '.$lastname.'.'."\n".'Vous avez bien été inscrit.';
        mail($destinataires,$sujet,$content);
    }
}
