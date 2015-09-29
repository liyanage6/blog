<?php $this->titre = "Mon Blog"; ?>


    <article>
        <header>
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>

    <hr/>

    <header>
        <h2 id="titreReponses">Réponses à <?= $billet['titre'] ?></h2>
    </header>
    <?php foreach ($com as $commentaire): ?>
        <p class="titreAuteur"><?= $commentaire['auteur'] ?> dit :</p>
        <p><?= $commentaire['contenu'] ?></p>
    <?php endforeach; ?>
    <hr/>

    <form method="post" action="index.php?action=commenter">
        <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo"
               required /><br />
        <textarea id="txtCommentaire" name="contenu" rows="4"
                  placeholder="Votre commentaire" required></textarea><br />
        <input type="hidden" name="id" value="<?= $billet['id_billet'] ?>" />
        <input type="submit" value="Commenter" />
    </form>


