<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p7e1</title>
</head>

<body>
    <?php
    echo 'Votre User Agent : '. $_SERVER['HTTP_USER_AGENT'] . '<br>';
    echo 'Votre IP : ' . $_SERVER['REMOTE_ADDR'] . '<br>';
    echo 'Le nom du serveur : ' . $_SERVER['SERVER_NAME'] . '<br>';;
    ?>

</body>

</html>