
<form style="margin-top: 30%; margin-bottom: 30%" action="" method="POST">
    <label for="title">Titre:</label>
    <input type="text" placeholder="titre" name="title_news">

    <label for="content_news"> Contenu</label>
    <input type="text" placeholder="Contenue" name="content_news">

    <label for="category_news">Categories</label>
    <input list="category" name="category_news" placeholder="Double click pour afficher les categories">
    <datalist id="category">
        <?= dataList(false) ?>
    </datalist>
    <button type="submit"  name="" class="btn btn-primary pull-right">Envoyer</button>
</form>