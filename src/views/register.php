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

        <h2><span class="fontawesome-lock"></span>Enregistrer un utilisateur</h2>

        <form action="http://localhost:8000/p1/index.php?page=Inscrivez-vous" method="POST">

            <fieldset>

                <p><label for="username">Addresse electronique</label></p>
                <p><input type="email" id="email" placeholder="mail@address.com" name="email"></p>

                <p><label for="Nom d'utilisateur">Nom d'utilisateur</label></p>
                <p><input type="text" id="login" placeholder="Login" name="login"></p>

                <p><label for="password">Mot de passe</label></p>
                <p><input type="password" id="password" placeholder="Mot de passe" name="password"></p>


                <p><input type="submit" value="S'inscrire" name="sbmit"></p>
<p>
    Vous possédez déjà un compte ?  <a href="http://localhost:8000/p1/index.php?page=Connectez-vous" >Identifiez-vous</a>S\'inscrire
        </form>

    </div> <!-- end login -->

</div>

</body>



</body>

</html>
