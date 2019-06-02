<?php

    if(!empty($_FILES['userfile']) && $_FILES['userfile']!= ' ' && !empty($_POST['evenement']) && $_POST['evenement']!= ' ')
    {
        include 'model/class/Pictures.class.php';

        //Upload de l'image
        $image = $_FILES['userfile'];
        $pic = new Pictures($image['tmp_name']);

        if(isset($_POST['image_name']))
        {
            $picname='';
        }elseif ($_POST['image_name']== null || $_POST['image_name']== '' ) {
            $picname='';
        }else {
            $picname = $_POST['image_name'];
        }
        $link = 'public/media/'.$_POST['evenement'].'/';
        $pic->uploadPicture($image,$picname,$link);




        $bdd = $GLOBALS['bdd'];


          //Ajout de la categories
          if(isset($_POST['category']))
          {
  
              $req = $bdd->createBDD()->prepare('SELECT idCategory, categoryName FROM category WHERE categoryName = ?');
              $req->execute(array(
                  $_POST['category']
              ));
              $CategoryId = $req->fetch(PDO::FETCH_ASSOC)['idCategory'];
              $req->closeCursor();
  
  
            if($CategoryId == '' || $CategoryId == null)
            {
                //Insertion de l'album
                $req = $bdd->createBDD()->prepare('INSERT INTO category(categoryName,categoryAdder,categoryDescription) VALUES(?,?,?)');
                $req->execute(array(
                    $_POST['category'],
                    $_SESSION['user_info']['name'],
                    ''
                ));
                $req->closeCursor(); 


                $req = $bdd->createBDD()->prepare('SELECT idCategory, categoryName FROM category WHERE categoryName = ?');
                $req->execute(array(
                    $_POST['category']
                ));
                $CategoryId = $req->fetch(PDO::FETCH_ASSOC)['idCategory'];
                $req->closeCursor();

            }
  
              
          }

        //Insertion de l'image
        if(isset($_POST['image_name']))
        {
            $picname=basename($_FILES['userfile']['name']);
        }elseif ($_POST['image_name']== null || $_POST['image_name']== '' ) {
            $picname=basename($_FILES['userfile']['name']);
        }
        $req = $bdd->createBDD()->prepare('INSERT INTO media(title,evenement,link,descriptionPicture,uploadDate) VALUES(?,?,?,?,Now())');
        $req->execute(array(
            $picname,
            $_POST['evenement'],
            $link.$picname,
            ''
        ));
        $req->closeCursor();


    }else{

        throw new Exception(203);
    }