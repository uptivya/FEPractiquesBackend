<?php
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulari exercici avansat</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        h1{
            margin: 100px 0 50px;
            border-bottom: 5px solid fuchsia;
            display: inline-block;
            line-height:1.5em;
        }
        #botoEnviar{
            margin-top: 50px;
        }
        .josep{
            border: 1px solid green;
        }
        .form-control.is-valid, .was-validated .form-control:valid, .form-control.is-invalid, .was-validated .form-control:invalid {
            padding-right: calc(1.5em + 1.75rem);
            background-position: right calc(.375em + 1.1875rem) center;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Formulari d'inscripció</h1>
        <form method="POST" action="resultatfitxa.php" id="formulariFitxa"  enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nom">Nom: </label>
                    <input type="text" class="form-control" name="nom" id="nom">
                    <div class="text-resposta"></div>
                </div>
                <div class="form-group col-md-4">
                    <label for="primerCognom">Primer cognom: </label>
                    <input type="text" class="form-control" name="primerCognom" id="primerCognom">
                    <div class="text-resposta"></div>
                </div>
                <div class="form-group col-md-4">
                    <label for="segonCognom">Segon cognom: </label>
                    <input type="text" class="form-control" name="segonCognom" id="segonCognom">
                    <div class="text-resposta"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="adresa">Adreça: </label>
                <input id="adresa" onFocus="geolocate()" type="text" class="form-control" name="adresa">
                <div class="text-resposta"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="telefon">Telèfon: </label>
                    <input type="text" class="form-control" name="telefon" id="telefon">
                    <div class="text-resposta"></div>
                </div>
                <div class="form-group col-md-5">
                    <label for="email">Correu electrònic: </label>
                    <input type="email" class="form-control" name="email" id="email">
                    <div class="text-resposta"></div>
                </div>
                <div class="form-group col-md-2">
                    <label for="edat">Edat: </label>
                    <input type="number" class="form-control" name="edat" id="edat">
                    <div class="text-resposta"></div>
                </div>
            </div>
            <div class="form-group">
                <label>Disciplina esportiva: </label>
                <select name="disciplina" class="form-control" id="disciplina">
                    <option selected disabled value="0">Escull una opció</option>
                    <option value="1">Atletisme</option>
                    <option value="2">Natació</option>
                    <option value="3">Patinatge sobre rodes</option>
                    <option value="4">Patinatge sobre gel</option>
                    <option value="5">Escalada</option>  
                </select>    
                <div class="text-resposta"></div>
            </div>
            <div class="form-group">
                <label for="fotografia"><strong>Fotografia</strong></label>
                <input type="file" class="form-control-file" name="fotografia" id="fotografia">
                <div class="text-resposta"></div>
            </div>
            
            <input type="button" value="Envia la informació" class="btn btn-outline-warning" id="botoEnviar">
        </form>
    </div>
    
    <script>
        $(function(){
            $("#botoEnviar").click(function(){
                
                var i = 0;
                var j = 0;

                var comprovarCaracters = '!#$%&"()*+,-./0123456789:;=?@[\]^_`{|}~';

                var hasErrors = 0;
                var caractersEspecials = [];
                var sibling = "";


                var formulari = $("#formulariFitxa");
                var nom = $("#nom");
                var primerCognom = $("#primerCognom");
                var segonCognom = $("#segonCognom");
                var adresa = $("#adresa");
                var telefon = $("#telefon");
                var email = $("#email");
                var edat = $("#edat");
                var disciplina = $("#disciplina");
                var fotografia = $("#fotografia");
                
                var textErrors = [
                    "Aquest camp és obligatori",
                    "Escriu almenys 3 caràcters.",
                    "Aquest camp no pot contenir números ni caràcters especials",
                    "Escriu una edat correcta",
                    "Escriu un número de telèfon correcte",
                    "Escriu un correu electrònic vàlid",
                    "Revisa que la biografia no contingui text de prova. Exemples: foo bar baz lorem ipsum dolor sit amet.",
                    "El camp 'Biografia' és obligatori."
                ]

                //Comprovar que textos no tenen números
                var textos = [nom,primerCognom,segonCognom];

                for(i = 0; i < textos.length; i++){
                    var camp = textos[i]
                    for(j = 0; j < camp.val().length; j++){
                        if (comprovarCaracters.indexOf(camp.val().charAt(j),0)!=-1){
                            caractersEspecials[i] = 1;
                        }else{
                            caractersEspecials[i] = 0;
                        }
                    }
                }

                //Validacio Nom i Cognoms
                for(i = 0; i < textos.length; i++){
                    var camp = textos[i]
                    sibling = camp.siblings(".text-resposta");
                    if(camp.val().length <= 2 || caractersEspecials[i] != 0){
                        hasErrors = 1;
                        respostaMalament(sibling, camp);
                        if(camp.val().length <= 0){
                            sibling.text(textErrors[0]);
                        }else if(camp.val().length < 3){
                            sibling.text(textErrors[1])
                        }else{
                            sibling.text(textErrors[2]);
                        }   
                    }else{
                        respostaBe(sibling, camp);
                        sibling.text("");
                    }
                }

                //Validació Adreça
                sibling = adresa.siblings(".text-resposta");
                if(adresa.val().length == 0){
                    hasErrors = 1;
                    sibling.text(textErrors[0])
                    respostaMalament(sibling, adresa);
                }else{
                    sibling.text("")
                    respostaBe(sibling, adresa);
                }

                //Validació Telèfon
                sibling = telefon.siblings(".text-resposta");
                if(telefon.val().length <= 0 || isNaN(parseInt(telefon.val()))){
                    hasErrors = 1;
                    if(telefon.val().length == 0){
                        sibling.text(textErrors[0]);
                    }else{
                        sibling.text(textErrors[4]);
                    }
                    respostaMalament(sibling, telefon);
                }else{
                    sibling.text("");
                    respostaBe(sibling, telefon);
                }

                //Validació Correu
                sibling = email.siblings(".text-resposta");
                if(email.val().length < 8 || email.val().indexOf("@") < 3 || email.val().lastIndexOf(".") < email.val().indexOf("@") || email.val().substring(email.val().indexOf("@"),email.val().lastIndexOf(".")).length <= 3 || email.val().length < (email.val().lastIndexOf(".")+3)){
                    hasErrors = 1;
                    if(email.val().length == 0){
                        sibling.text(textErrors[0]);    
                    }else{
                        sibling.text(textErrors[4]);
                    }
                    respostaMalament(sibling, email);
                }else{
                    sibling.text("")
                    respostaBe(sibling, email);
                }

                //Validació Edat
                sibling = edat.siblings(".text-resposta");
                if(edat.val().length <= 0 || isNaN(parseInt(edat.val())) || edat.val() < 3 || edat.val() > 122){
                    hasErrors = 1;
                    if(edat.val().length == 0){
                        sibling.text(textErrors[0]);
                    }else{
                        sibling.text(textErrors[3]);
                    }
                    respostaMalament(sibling, edat);
                }else{
                    sibling.text("");
                    respostaBe(sibling, edat);
                }

                //Validació Disciplina
                sibling = disciplina.siblings(".text-resposta");
                if(disciplina.val() == null){
                    hasErrors = 1;
                    sibling.text("Escull una disciplina.");
                    respostaMalament(sibling, disciplina);
                }else{
                    sibling.text("");
                    respostaBe(sibling, disciplina);
                }

                //Validació Imatge{
                sibling = fotografia.siblings(".text-resposta")
                if(fotografia.val().length == 0){
                    hasErrors = 1;
                    sibling.text("Escull una fotografia.");
                    respostaMalament(sibling, fotografia);
                }else{
                    sibling.text("");
                    respostaBe(sibling, fotografia);
                }
                

                if(hasErrors == 0){
                    formulari.submit();
                }
            })

            //Pintar etiquetes bé o malament
            function respostaBe(resposta, quadre){
                resposta.removeClass("invalid-feedback");
                quadre.addClass("is-valid");
                quadre.removeClass("is-invalid");
            }
            function respostaMalament(resposta, quadre){
                resposta.addClass("invalid-feedback");
                quadre.addClass("is-invalid");
                quadre.removeClass("is-valid");
            }
        });
    </script>
</body>
</html>
