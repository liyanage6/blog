
<?php $this->titre = "Blog"; ?>

<form method="post" action="index.php?action=ajoutBillet" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
        <label>Titre</label><input id="titre" name="titre" type="text" placeholder="Titre du billet" required /></br>
        <label>Contenu</label><textarea id="txtContenu" name="contenu" rows="4" placeholder="Contenu du billet"
                                        required></textarea></br>
        <input type="submit" value="Ajouter"/>
    </form>

<?php foreach ($billets as $billet): ?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id_billet'] ?>">
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            </a>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>