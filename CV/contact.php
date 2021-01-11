<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all and (min-width:1200px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="ecran_1200.css">

    <title>Hobbie</title>
</head>
<body>
    <div id="arrow"><a href="https://www.facebook.com/"><img src="image/arrow.png" alt="haut de page" title="retour au haut de page"></a>
    </div>
    <header>
        <div id="baniere">
            <img src="image/le_campus_numerique_in_the_ALPS.jpg" alt="Centre_de_formation"
                title="Le campus numerique in the ALPS">
            <p id="titre_banniere"><span>Perriolat</span> Anthony</p>

            <nav>
                <ul>
                    <li><a href="moncv.php#block_1">Acceuil</a></li>
                    <li><a href="hobbie.php">Hobbie</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div id="block_1">
            <div class="programmation">
                <h1>Developpeur Analyste</h1>
                <p>
                    Etant <strong>étudiant</strong> de la branche du développement web, je suis à la recherche d'une entreprise
                    suseptible de me perfectionner dans un domaine ce domaine que j'affectionne tout particulierement.
                    La période de l'<em>commencera</em> en juin 2021 pour une durée d'un an.
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
    <main id="page_hobbie">
        <p class="mail_bouton">
            <a href="mailto:pro.aperriolat@gmail.com">Cliquez ici pour me contacter directement par mail</a>
        </p>
        <form action="https://httpbin.org/post" method="POST">
            <fieldset>
                <label for="commentaire">Qu'avait vous pensez de cette experience de <strong>CV en ligne</strong></label>
                <br>
                <textarea name="commentaire" id="commentaire" placeholder="Laissez vos commentaires ici. :)" required></textarea>
                <br>
                <p>
                    Choissiez le mode de contact :
                <label for="e-mail">e-mail</label>
                <input type="checkbox" name="contact_type" value="e-mail" id="e-mail"> 
                <label for="telephone">telephone</label>
                <input type="checkbox" name="contact_type" value="telephone" id="telephone"> 
                <label for="site_web">site web</label>
                <input type="checkbox" name="contact_type" value="site_web" id="site_web"  checked> 
                </p>
                <br>
                <p>
                    Votre tranche d'age :
                <label for="age18-25">18 - 25 ans</label>
                <input type="radio" name="age18-25" id="age18-25"> 
                <label for="age25-50">25+ - 50 ans</label>
                <input type="radio" name="age25-50" id="age25-50" checked/> 
                <label for="age50">50 ans +</label>
                <input type="radio" name="age50" id="age50"> 
                </p>
                <button type="submit">Envoyer</button>
            </fieldset>
        </form>
    </main>
    <footer>
        <p>Mention légal Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae blanditiis eaque unde, optio
            nulla provident!</p>
        <p>Tout droit reserver de je ne sais pas où - Copyright</p>
    </footer>
</body>
</html>