<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <!-- <link type="text/css" rel="stylesheet" href="formulaire.css"/> -->
        <title>Formulaire PHP</title>
    </head>
    <body>
<h1> Formulaire</h1>
<!--form=définit un formulaire;
input=définit un champ de données pour l'utilisateur;
label=définit une légende pour un élément input;
textarea=définit un champ de texte long;
fieldeset=permet de regrouper les éléments d'un formulaire en différentes parties-->
<form method="POST" action="traitement.php">
    <label for="nom">Your Name</label>
<br><br/>
    <input type="text" id="nom" name="nom" autocomplete="on" required>
<br><br/>

    <label for="mail"><p>Your Email </p></label><br>
    <input type="email" id="mail" name="mail" autofocus required>
<br><br/>
    <label for="message"><p>Enter your message here: </p></label>
<br><br/>
    <textarea id="message" name="message"></textarea>

    <input type="submit" value="Send Message"required/>
<!-- pour des chiffres ce sera au niveau du input type= qu'il
faut changer comme la date afin que cela affiche la date, et suivre après avec
l'id et le name pour que cela renvoie au fichier php -->
</form>
  </body>
</html>
