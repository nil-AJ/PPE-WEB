<?php include 'view/navbar-foot/navadm.php';?>

if(isset($_POST['name'])
&& isset($_POST['prename'])
&& isset($_POST['password'])
&& isset($_POST['email'])
&& isset($_POST['status'])
&& isset($_POST['class']) )

<br>
<br><br><br>
<br><br><br>
<div class="container">
    <div class="row justify-content-center align-content-center">


<form class="">
    <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Prename</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter prename">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">status</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter status">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">class</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter class">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Prename</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
</div>
<br>
<br><br><br>
<br><br><br>