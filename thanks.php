<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

<?php

    echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de “" . $_POST['subject'] . "”.

    Un de nos conseillers vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande : " 
    
    . $_POST['user_message'] . "";


?>

</body>

</html>
