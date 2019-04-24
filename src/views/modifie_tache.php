<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>tâche</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!--    <link href="/assets/styles/css/bootstrap.css" rel="stylesheet">
    -->

    <style>
        body {
            padding-top: 3.5rem;
        }
    </style>.

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>tâche</title>

        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <!--    <link href="/assets/styles/css/bootstrap.css" rel="stylesheet">
        -->

        <style>
            body {
                padding-top: 3.5rem;
            }
        </style>.


        <?php
        include_once'include/header.php ';
        $CRUD_tch = new CRUD_Tache();$res=$CRUD_tch->RecupDonnees($_POST['idt']);
        ?>


        <?php
        include_once 'include/head.php ' ?>


    </head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
    <a class="navbar-brand" href="#">Modifier Tache </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item page-scroll">
                <a class="nav-link" href="http://localhost:8000/p1/index.php?page=home">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item page-scroll">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item page-scroll">
                <a class="nav-link" href="http://localhost:8000/p1/index.php?page=Deconnecter">logout</a>
            </li>
        </ul>

    </div>
</nav>
<br><br>


<center>
    <center>
        <a href="http://localhost:8000/p1/index.php?page=home" class="btn btn-secondary btn-sm" tabindex="-1" role="button"
           aria-disabled="true">Listes des taches <?php $_POST['idt'] ?></a>

    </center>


    <hr color="black">
    <center>

        <fieldset class="field">

            <form method="POST" name="formulaire" action="http://localhost:8000/p1/index.php?page=modifieract"
                  enctype="multipart/form-data" onsubmit="return valider();">
                <input type="text" name="id" style="display: none" value="<?= $res['idtache']?>">
                <center>
                    <table class="table">
                        <tr>
                            <td colspan="2"><p>Titre</p>
                                <reqiured><input type="text" name="titre" placeholder="nom de tache" id="nom"
                                                 class="form-control"  value="<?= $res['titre']?>" ></reqiured>
                            </td>
                        </tr>
                        <br><br><br>
                        <tr>
                            <td colspan="2"><p>Date</p>
                                <input class="dt" type="date" name="date" class="form-control" value="<?= $res['datet']?>">
                                <!--<img src="assets/images/cl.png" width="50px">-->
                            </td>
                        </tr>
                        <tr>
                            <td><p>Priorité</p>
                                <select name="priot">
                                    <option value="<?=$res['priot']?>"><?php switch ($res['priot']){
                                            case 'R' : echo 'urgent';
                                                break;
                                            case 'O' :echo 'pas urgent';
                                                break;
                                            case 'G' : echo 'normal';                }

                                        ?>
                                    </option>
                                    <option value="R">urgent</option>
                                    <option value="O">pas urgent</option>
                                    <option value="G">normal</option>
                                </select></td>
                            <td><p>Pièce jointe</p>
                                <input type="file" name="fichier">
                                <input type="hidden" name="MAX_FILE_SIZE" value="2048"/></td>
                        </tr>
                        <tr>
                            <td>


                                <!--<input class="half left cf" name="sub"  type="submit" value="Ajouter" id="input-submit">-->
                                <!--<input type="submit" class="half left cf" value="Ajouter" id="input-submit" name="sub">
                                <input class="half right cf" type="reset" value="Annuler" id="input-reset">-->
                                <input   class="btn btn-secondary btn-sm" type="submit" value="modifier" name="sub" id="btnSubmit">
                            </td>
                            <td> <input class="btn btn-secondary btn-sm " type="reset" value="Annuler"></td>




                            </td>
                        </tr>
                    </table>

                </center>
            </form>

        </fieldset>

    </center>
    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> http://www.sbc.tn</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!--<script type="text/javascript" src="/assets/js/jquery.js"></script>-->
    <!--<script type="text/javascript" src="/assets/js/bootbox.min.js"></script>
    --><!--<script type="text/javascript/javascript" src="/assets/js/script.js"></script>-->
    <!--<script src="http://localhost/assets/js/bootstrap.js"></script>
    <script src="http://localhost/assets/js/jquery.js"></script>
    <script src="http://localhost/assets/js/script.js"></script>-->
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>
