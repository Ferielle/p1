
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>tâche</title>
    <?php
    include_once'include/header.php';
    ?>


    <?php
    include_once'include/head.php '?>
</head>
<body>

<center><h1> Modifier tache</h1></center>
<center>     <button ><a href="http://localhost:8000/p1/index.php?page=home">liste des taches</button></center></a>


<hr color="black">
<center>
    <fieldset class="field">
        <form name="F1" method="GET" action="http://localhost:8000/p1/index.php?page=modifier" enctype="multipart/form-data" >

            <center><table>
                    <tr>
                        <td colspan="2"> <p>Titre</p>
                            <input type="text" name="titre">
                        </td>
                    </tr><br><br><br>
                    <tr> <td colspan="2"> <p>Date</p>
                            <input class="dt" type="date" name="date">
                            <!--<img src="assets/images/cl.png" width="50px">-->
                        </td>
                    </tr>
                    <tr> <td> <p>Priorité</p>
                            <select name="priot">
                                <option value="R">urgent</option>
                                <option value="O">pas urgent</option>
                                <option value="G">normal</option>
                            </select></td>
                        <td><p>Pièce jointe</p>
                            <input type="file" name="fichier">
                        </td></tr>
                    <tr>
                        <td colspan="2">
                            <input name="sub" class="half left cf" type="submit" value="Valider" id="input-submit">
                            <input class="half right cf" type="reset" value="Annuler" id="input-reset" <a href="http://localhost:8000/p1/index.php?page=home">>
                        </td></tr></table>

                }
            </center>

        </form>
    </fieldset>
</center>



</body>
</html>