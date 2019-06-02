<?php


    $bdd = $GLOBALS['bdd'];

    //On récupere les emails de la bdd en comaprant par rapport a la valeur rentrer par l'utilisateur
    $req = $bdd->createBDD()->prepare('SELECT email FROM membre WHERE email = ?');
    $req->execute(array(
        $_POST['email']
    ));

    $email = $req->fetch(PDO::FETCH_ASSOC)['email']; //Si aucun utilisateur existe $req sera égal à false

    $req->closeCursor();

    if(!$email)
    {
        $req = $bdd->createBDD()->prepare('INSERT INTO membre(name,prename,email,password,phoneNumber,status,creationDate) VALUES(?,?,?,?,?,?,Now())');
        $req->execute(array(
            $_POST['name'],
            $_POST['prename'],
            $_POST['email'],
            sha1($_POST['password']),//mot de passe en sha1
            $_POST['phoneNumber'],
            $_POST['status']
        ));



        $req->closeCursor();
        $_POST =array();//On vide le POST
    }else{
        echo '<h4 style="position: absolute; margin-top: 50%; margin-left: 40%; color: red;">err inscription</h4>';
    }