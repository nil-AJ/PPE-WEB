<?php

    $bdd = $GLOBALS['bdd'];
    
    $req = $bdd->createBDD()->prepare('SELECT * FROM membre WHERE email = ? AND password = ?');
    $req->execute(array(
        $_POST['email'],
        sha1($_POST['password'])
    ));
    
    $rep = $req->fetch();

    if($rep)
    {
        $_SESSION['user_info'] = array(
            'verification'=>true,
            'idMembre'=>$rep['idMembre'],
            'name'=>$rep['name'],
            'prename'=>$rep['prename'],
            'email'=>$rep['email'],
            'phoneNumber'=>$rep['phoneNumber'],
            'status'=>$rep['status']);
        header('Location: .?section=administration_index');
        
    }else{
        $_SESSION['user_info']= array(
            "verification"=>false
        );
    }

    $req->closeCursor();

?>