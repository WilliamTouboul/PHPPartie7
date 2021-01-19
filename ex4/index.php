<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P7E4</title>
</head>

<body>
<!-- Faire une page HTML permettant de donner à l'utilisateur :
son User Agent
son adresse ip
le nom du serveur -->

    <?php session_start();

    echo 'Bonjour ' . htmlspecialchars($_COOKIE["pseudoEx3"]) . '! <br> Votre mot de passe est : ' . htmlspecialchars($_COOKIE["passwordEx3"]);
    ?>


</body>

</html>