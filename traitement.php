<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <link type="text/css" rel="stylesheet" href="formulaire.css"/>
        <title>Formulaire PHP</title>
    </head>
    <body>
      <p>Bienvenue,</p>

      <?php
      $nom = $mail = $message ="";
      $nomErreur = $mailErreur = $messageErreur="";

// on est obligé de créer un paramètre données qui va nous
// permettre de renvoyer aux valeurs que l'on a besoin
      function securisation($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = strip_tags($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
      }
// empty=vide
      if (empty($_POST["nom"]))
      {
        $nomErreur = "pas rempli";
      }
      else
        {
        $nom = securisation($_POST["nom"]);
          if (preg_match("/[^A-Za-z]/", $nom))
          {
            $nomErreur = "caractères spéciaux";
            $nom = "";
          }
          elseif (strlen($nom) > 20)
          {
            $nomErreur = "Pas plus de 20 caractères";
            $nom = "";
          }
        }
// la fonction preg_match sert à définir quels champs sont acceptés
// et d'autres interdits
      if (empty($_POST["mail"]))
      {
        $mailErreur ="Vous n'avez pas rempli votre mail";
      }
      else
        {
          $mail = securisation($_POST["mail"]);
            if (filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
              $mailErreur = "Format correct";
            }
            else
            {
              $mailErreur = "Format non adapté";
              $mail ="";
            }
        }

      if (empty($_POST["message"]))
      {
        $messageErreur ="pas rempli";
      }
      else
        {
          $message = securisation($_POST["message"]);
          if (strlen($message) > 20)
          {
            $messageErreur = "trop de caracteres";
            $message = "";
          }
       }
// strlen=nombre de caractères dans une string
      echo strtolower ("Votre nom est :".$nom);echo $nomErreur;
      echo "<br>";
      echo strtolower ("Votre mail est :".$mail);echo $mailErreur;
      echo "<br>";
      echo strtolower ("Votre message est :".$message);echo $messageErreur;
      echo "<br>";
      ?>

      <!--avec post on cache les infos qui passent dans les url, cependant rien n'empêche
    un utilisateur de mettre de l'html dans notre formulaire donc ce n'est pas assez
  il faut davantage sécuriser les infos que peut noter l'utilisateur  -->

  <!--htmlspecialchars sert à éviter le script dans les champs ils ne seront
  pas interprétés
la fonction strip_tags permet de supprimer tout code html présent dans une
chaine de caractère.

il faut prendre les id mis dans le html pour les reprendre dans le -->
<!-- php et ainsi les renvoyer au php par la valeur qu'on leur a donné  -->
<!--la fonction trim permet d'éviter des espaces dans les champs l'utilisateur
ne perturbera pas
le code avec les espaces, ceux-ci n'apparaîtront pas
la fonction stripslashes elle permet d'éviter les antislashs il n'y aura pas d'erreur dans
le code
on peut ici créer une fonction maison qui se chargera d'étoffer tout cela -->

  </body>
</html>
