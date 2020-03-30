<?php

// Validation formulaire
    
    if ($_POST) {
        
        // Tableau erreur
        $errors = array();

        // Conditions validations
        // Nom
        if (empty($_POST['user_name'])) {
            $errors['name1'] = "Vous devez inscrire un nom";
        }

        // Email
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if (empty($_POST['user_email'])) {
            $errors['email1'] = "Vous devez inscrire une adresse @mail";
        } else {
            $email = test_input($_POST['user_email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $errors['email2'] = "Format email invalide";
            }
        }
        
        // Message
        if (empty($_POST['user_message'])) {
            $errors['message1'] = "Vous devez inscrire un message";
        }

        // Parcours du tableau et conditions
        if (count($errors) == 0) {
            header(include 'includePhp/contact2.php');
            exit();
        } 
    }

?>