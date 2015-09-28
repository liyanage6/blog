<?php $this->titre = "Mon Blog"; ?>


    <article>
        <header>
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>

    <hr/>

    <form method="post" action="index.php?action=commenter">
        <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo"
               required /><br />
        <textarea id="txtCommentaire" name="contenu" rows="4"
                  placeholder="Votre commentaire" required></textarea><br />
        <input type="hidden" name="id" value="<?= $billet['id_billet'] ?>" />
        <input type="submit" value="Commenter" />
    </form>
