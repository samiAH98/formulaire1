<?php
$prenom = $_POST ['firstname'];
$nom = $_POST ['lastname'];
$sujet = $_POST ['sujet'];
$email = $_POST ['courriel'];
$telephone = $_POST ['telephone'];
$message = $_POST ['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    Merci <?= $prenom ?> <?= $nom ?> de nous avoir contacté à propos de <?= $sujet ?>.

Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $telephone ?> dans les plus brefs délais pour traiter votre demande : 

<?= $message ?>
    </p>
</body>
</html>