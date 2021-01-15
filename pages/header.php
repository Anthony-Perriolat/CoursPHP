<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all and (min-width:1200px)" href="/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="/pages/ecran_1200.css">
    <title><?= $metaTitle ?></title>
    <meta name="description" content="<?= $metadescription ?>">

</head>
<header>
    <div id="baniere">
        <img src="/image/le_campus_numerique_in_the_ALPS.jpg" alt="Centre_de_formation"
             title="Le campus numerique in the ALPS">
        <p id="titre_banniere"><span>Perriolat</span> Anthony</p>

        <nav>
            <ul>
                <li><a href="/index.php">Acceuil</a></li>
                <li><a href="/index.php?page=moncv">Mon Cv</a></li>
                <li><a href="/index.php?page=hobbie">Hobbie</a></li>
                <li><a href="/index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div id="block_1">
        <div class="programmation">
            <h1>Developpeur Analyste</h1>
            <p>
                Etant étudiant de la branche du développement web, je suis à la recherche d'une entreprise
                suseptible de me perfectionner dans un domaine ce domaine que j'affectionne tout particulierement.
                La période de l'alternance commencera en juin 2021 pour une durée d'un an.
                <span>Volontaire, curieux, et adaptif</span> je saurais me placer dans votre entreprise au mieux
                afin de vous
                crée une <span>plus value interessante.</span>
                <br>
                <br>
                Je vous laisse le plaisir de derouler mon cv qui est sous forme web, dans le but de vous montrer les
                premisses de mes competences
            </p>
        </div>

    </div>
</header>