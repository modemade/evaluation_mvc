<?php

include '../utils/connects.php';
include '../models/model_article.php';
include '../view/view_article.php';

if(isset($_POST['nom_article']) AND isset($_POST['prix_article'])  AND 
            $_POST['nom_article'] !='' AND $_POST['prix_article'] !=''){
            $nom =$_POST['nom_article'];
            $prix =$_POST['prix_article'];
            echo "$nom<br>";
            echo "$prix";
            addArticle($bdd, $nom, $prix) ;
            echo "$nom à été ajouté en  BDD";
        }
        else{
            echo 'Veuillez compléter les champs du formulaire';
        }
?>