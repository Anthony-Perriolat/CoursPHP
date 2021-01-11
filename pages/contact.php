<?php
$metaTitle = "Contact";
$metadescription = "Ce-ci est une page Contact";
?>
<!DOCTYPE html>
<html lang="fr">
<body>
    <div id="arrow"><a href="https://www.facebook.com/"><img src="image/arrow.png" alt="haut de page" title="retour au haut de page"></a>
    </div>

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

</body>
</html>
