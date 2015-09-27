<?php $this->titre = "Mon Blog"; ?>


    <article>
        <header>
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr/>
