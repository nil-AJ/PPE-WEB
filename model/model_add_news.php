<?php
 $bdd = $GLOBALS['bdd'];


 //Ajout de la categories
 if(isset($_POST['category_news']))
 {

     $req = $bdd->createBDD()->prepare('SELECT idCategory, categoryName FROM category WHERE categoryName = ?');
     $req->execute(array(
         $_POST['category_news']
     ));
     $CategoryId = $req->fetch(PDO::FETCH_ASSOC)['idCategory'];
     $req->closeCursor();


   if($CategoryId == '' || $CategoryId == null)
   {
       //Insertion de la categorie sielle n'existe pas
       $req = $bdd->createBDD()->prepare('INSERT INTO category(categoryName,categoryAdder,categoryDescription) VALUES(?,?,?)');
       $req->execute(array(
           $_POST['category_news'],
           $_SESSION['user_info']['name'],
           ''
       ));
       $req->closeCursor(); 


       $req = $bdd->createBDD()->prepare('SELECT idCategory, categoryName FROM category WHERE categoryName = ?');
       $req->execute(array(
           $_POST['category_news']
       ));
       $CategoryId = $req->fetch(PDO::FETCH_ASSOC)['idCategory'];
       $req->closeCursor();

   }

     
 }

//Insertion de la news
if(isset($_POST['image_name']))
$req = $bdd->createBDD()->prepare('INSERT INTO media(title,content,category,dateStart) VALUES(?,?,?,Now())');
$req->execute(array(
   $_POST['title_news'],
   $_POST['content_news'],
   $CategoryId
));
$req->closeCursor();
