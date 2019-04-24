<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">

    <link rel="stylesheet" href="assets/styles/css/log.css"/>



</head>

<body>

<body class="align">

<div class="grid">

    <div id="login">

        <h2><span class="fontawesome-lock">Identifiez-vous</span></h2>

        <form action="http://localhost:8000/p1/index.php?page=Connectez-vous" method="POST">

            <fieldset>



                <p><label for="Nom d'utilisateur ">Nom d'utilisateur</label></p>
                <p><input type="text" id="login" placeholder="login" name="login"></p>

                <p><label for="Mot de passe">Mot de passe</label></p>
                <p><input type="password" id="password" placeholder="password" name="password"></p>

                <p><input type="submit" value="Entrer" name="subb"></p>

                 Nouveau client ? <a href="http://localhost:8000/p1/index.php?page=Inscrivez-vous">S'inscrire</a>

            </fieldset>

        </form>

    </div> <!-- end login -->

</div>

</body>



</body>

</html>
