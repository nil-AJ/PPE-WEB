<br />

<br />
<br />
<br />
<br />
<br />
<br />
<br />

<form action="" method="POST">
    <label for="title">Titre:</label>
    <input type="text" placeholder="titre" name="title_news">

    <label for="content_news"> Contenu</label>
    <input type="text" placeholder="Contenue" name="content_news">

    <label for="category_news">Categories</label>
    <input list="category" name="category_news" placeholder="Double click pour afficher les categories">
    <datalist id="category">
        <?= dataList(false) ?>
    </datalist>

</form>