<body>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>p7e5</title>
    </head>

    <body>
    <!-- Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3. -->
        <?php
        session_start();
        if (isset($_POST['buttonSubmit'])) {
            $username = $_POST['pseudo'];
            $userPW = $_POST['password'];
            setcookie("pseudoEx3", $username, time() + 3600, '/');
            setcookie("passwordEx3", $userPW, time() + 3600, '/');
            echo 'Cookie enregistré';
        } else {
        ?>
            <h1>Modification Cookie : </h1>
            <form action="index.php" method="POST">

                <label for="pseudo">Pseudo : </label>
                <input type="text" name="pseudo" id="pseudo">

                <label for="password">MdP : </label>
                <input type="password" name="password" id="password">

                <input type="submit" value="GO" id="buttonSubmit" name="buttonSubmit">

            </form>
        <?php } ?>

    </body>

    </html>
</body>

</html>