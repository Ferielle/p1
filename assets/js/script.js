function valider() {
    if (document.formulaire.titre.value == "") {
        alert("Veuillez entrer nom de tache !");
        valid = false;
        return valid;
    }

    else if (document.formulaire.date.value == "") {
        alert('choisir une date ');
        valid = false;
       return valid;
    }
    if (document.formulaire.priot.value == "-1") {
        alert(' Veuillez choisir  la periorité de votre tache');
        valid = false;
        return valid;
}

    $(document).ready(function () {
        var theHREF;

        $(".confirmModalLink").click(function(e) {
            e.preventDefault();
            theHREF = $(this).attr("href");
            $("#modal").modal("show");
        });

        $("#modalN").click(function(e) {
            $("#modal").modal("hide");
        });

        $("#modalO").click(function(e) {
            window.location.href = theHREF;
        });



    });

    function tache(x) {

        var xmlhttp = new XMLHttpRequest();
        var str = x.idtache;
        x.disabled = true;
        document.getElementById('check' + x.id).setAttribute('class', 'disabled');
        xmlhttp.open("GET", "tac.php?idtache=" + str, true);
        xmlhttp.send();


    }





}


















/*
function Validate() {


    var titre = document.forms['vform']['titre'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
    var titre_error = document.getElementById('titre_error');
// SETTING ALL EVENT LISTENERS
    titre.addEventListener('blur', nameVerify, true);


    // validate username
    if (titre.value == "") {
        titre.style.border = "1px solid red";
        document.getElementById('titre_div').style.color = "red";
        titre_error.textContent = "Username is required";
        titre.focus();
        return false;
    }
    // validate username
    if (titre.value.length < 3) {
        titre.style.border = "1px solid red";
        document.getElementById('titre_div').style.color = "red";
        titre_error.textContent = " titre must be at least 3 characters";
        titre.focus();
        return false;
    }*/

//validation de formuliare 

/*

    if($(couleur).val()=="0"){
        $(form).before("<div class='alert alert-danger'> indiquer couleur</div>");
        return false;
    }//couleur

    

    if($(language).is(':checked')==false){
        $(form).before("<div class='alert alert-danger'> check plz</div>");
        return false;
    }//longuage
       
    if($("input:radio:checked").length=='0'){
            $(form).before("<div class='alert alert-danger'> check sexe</div>");
     return false;
    }
*/
    //if($().is('checked')){
       // $(form).before("<div class='alert alert-danger'> choisir sexe </div>");
        //return false;
    
    




//alert('je suis la');

/*$.ajax({
    url:'fiche.php';
    type:''; 
   datatype:'';
   data:{};
   succes:function(res
}

)//*/

//});