
<form style="margin: 20%" action="" method="POST" enctype="multipart/form-data">

    <label for="userfile">Image à uploader:</label>
    <input type="file" name="userfile" /><br>
    <label for="userfile">Nom de l'image (optionel):</label>
    <input type="text" name="image_name" placeholder=" nom de l'image ... " /><br>

    <!--Generation de la liste des categories par php-->
    <label for="category">Catégories: </label>
    <input list="category" name="category" placeholder="Double click pour afficher les categories">
    <datalist id="category">
        <?= dataList(false) ?>
    </datalist><br>

<!--Idem-->
    <label for="evenement">Nom de l'évenement:</label>
    <input list="evenement" name="evenement" placeholder="Double click pour afficher les evenements">
    <datalist id="evenement">
         <?= dataList(true) ?>
    </datalist><br>

    <button type="submit" class="btn btn-primary ">upload</button>
</form>


