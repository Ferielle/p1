<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <meta charset="UTF-8">
    <title>Nouvelle tâche</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<!--    <link rel="stylesheet" href="../../assets/styles/css/bootstrap.min.css" media="screen"/>-->
<!--    <link rel="stylesheet" href="../../assets/styles/css/styles.css" media="screen"/>-->



    <style>
        body {
            padding-top: 3.5rem;


        }
    </style>

    <?php
    include_once'include/header.php ';$CRUD_tch = new CRUD_Tache();
    ?>


    <?php
    include_once'include/head.php '?>

    <script src="../../assets/js/script.js"></script>


</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
    <a class="navbar-brand" href="#">Liste des Taches </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item page-scroll">
                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
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

<header>

    <center>

        <a href="http://localhost:8000/p1/index.php?page=ajout" class="btn btn-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true">Nouvelle tâche</a>


    </center>
    <hr width="100%" color="black">
</header>
<center>




    <?php foreach ($res as $rows)
    {

    ?>
    <table class="table table-striped"$>
        <thead>
        <tr>
            <th scope="col" colspan="6" class="dat"> <?php  echo $rows[2];?></th>
        </tr>
        </thead>
                     <tbody>

        <tr>
            <th scope="row" class="chbx">

                <input type="checkbox" name="chr0" onclick="return tache()"> </th>
            <label for="<?php echo $rows[0]; ?>">

            <td class="tdt"><?php echo $rows[1]; ?></td>
            </label>
                <?php switch ($rows[3]){
                    case 'R' : $src="/p1/assets/images/r.png";
                break;
                    case 'O' : $src="/p1/assets/images/or.png";
                break;
                    case 'G' : $src="/p1/assets/images/gr.png";                }

            ?>
            <form action="http://localhost:8000/p1/index.php?page=modifier" method="post">            <input type="text" name="idt" style="display: none" value="<?= $rows[0]?>">
         <td class="tdf"><button class="btn"><a href="http://localhost:8000/p1/index.php?page=modifier"><img  class="c" src="/p1/assets/images/pnt.png" ></a></button> </td>
         </form>

                     <td class="tdf"><img src=<?php echo $src;?>></td>
                     <td class="tdx"><a href="./assets/upload/<?php echo $rows[4];?>"><img class="x" src="/p1/assets/images/pp.png" widith="3%" height="3%"></a></td>

            <td class="tdf">

                <div class="col-12 col-md-9 order-1">

                    <!-- Button trigger modal -->
                    <button type="button"class="btn btn-secondary btn-sm" id="btn-secondary" data-toggle="modal" data-target="#<?php echo 'm'.$rows[0]?>">
                     Supprimer
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo "m".$rows[0] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">voulez vous supprimer votre tache</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-footer">
                                    <a href="http://localhost:8000/p1/index.php?page=home" class="btn" id="modal">Non</a>
                                    <a href="http://localhost:8000/p1/index.php?page=supprimer&id=<?php echo $rows[0]?>"  class="btn btn-primary" >Oui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin modal-->


            </td>


        </tr>

       <?php }?>
</div>
        </tbody>
    </table>

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
<!--<script src="http://localhost/assets/js/bootstrap.js"></script>
<script src="http://localhost/assets/js/jquery.js"></script>
<script src="http://localhost/assets/js/script.js"></script>
-->
<script type="text/javascript" src="/../../assets/js/deleteRecords.js"></script>
<!--<script type="text/javascript" src="./assets/js/supptache.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="/../../assets/js/bootbox.min.js"></script>
</body>

</html>
