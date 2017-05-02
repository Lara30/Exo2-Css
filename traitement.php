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
// on est obligé de créer un paramètre données qui va nous
// permettre de renvoyer aux valeurs que l'on a besoin
      function securisation($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = strip_tags($donnees);
        return $donnees;
      }
      $nom = securisation($_POST["nom"]);
      $mail = securisation($_POST["mail"]);
      $message = securisation($_POST["message"]);
      echo strtolower ("Votre nom est :".$nom. "<br/>");
      echo strtolower ("Votre mail est :".$mail. "<br/>");
      echo strtolower ("Votre message est :".$message);

      ?>

        <!--minuscule ou majuscule et faire la vérif php des caractères spéciaux   -->
      <!-- <?php
      // echo $_POST["nom"];
      ?>
      <!--avec post on cache les infos qui passent dans les url, cependant rien n'empêche
    un utilisateur de mettre de l'html dans notre formulaire donc ce n'est pas assez
  il faut davantage sécuriser les infos que peut noter l'utilisateur  -->

      <?php
      // echo htmlspecialchars ($_POST["nom"]);
      ?>
      <!--htmlspecialchars sert à éviter le script dans les champs ils ne seront
       pas interprétés
    la fonction strip_tags permet de supprimer tout code html présent dans une
    chaine de caractère.
      <?php
      // echo $_POST["mail"];
      ?>
      <?php
      // echo $_POST["message"];
      ?> -->
<!--il faut prendre les id mis dans le html pour les reprendre dans le
php et ainsi les renvoyer au php par la valeur qu'on leur a donné  -->
<!--la fonction trim permet d'éviter des espaces dans les champs l'utilisateur
ne perturbera pas
le code avec les espaces, ceux-ci n'apparaîtront pas
la fonction stripslashes elle permet d'éviter les antislashs il n'y aura pas d'erreur dans
le code
on peut ici créer une fonction maison qui se chargera d'étoffer tout cela -->

  </body>
</html>
