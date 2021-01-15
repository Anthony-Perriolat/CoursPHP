<?php
$metaTitle = "Contact";
$metadescription = "Ce-ci est une page Contact";
$erreur = array("vide" => "<span style='color: red'>champs obligatoire</span>", "mail" => "<span style='color: red'>champs incorrect</span>", "commentaire" => "<span style='color: red'>champs 5 car minimum</span>" )
?>
<!DOCTYPE html>
<html lang="fr">
<body>
    <div id="arrow"><a href="https://www.facebook.com/"><img src="../image/arrow.png" alt="haut de page" title="retour au haut de page"></a>
    </div>

    <main id="page_hobbie">
        <p class="mail_bouton">
            <a href="mailto:pro.aperriolat@gmail.com">Cliquez ici pour me contacter directement par mail</a>
        </p>
        <form action="" method="POST">
            <fieldset>
                <p>

                    <?php
                    if (isset($_POST['subform']) && empty($sendname)) {
                        echo $erreur['vide'];
                    }
                    echo '<label for="nom">Votre nom :</label>
                        <input type="text" name="nom">';

                    if (isset($_POST['subform']) && empty($sendsurname)) {
                        echo $erreur['vide'];
                    }
                    echo '<label for="prenom">Votre Prenom :</label>
                        <input type="text" name="prenom">';

                    if (isset($_POST['subform']) && (!filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL))) {
                            echo $erreur['mail'];
                        }

                    echo '<label for="e-mail">Votre e-mail :</label>
                        <input type="text" name="email">';

                    if (isset($_POST['subform']) && empty($sendsex)) {
                        echo $erreur['vide'];
                    }
                    echo '<br><br>
                        <label for="sexe">Vous etes un(e)</label>
                        <select name="sexe" id="sexe" >
                            <option value="" selected></option>
                            <option value="Homme">M.</option>
                            <option value="Femme">Mme</option>
                        </select>';
                    if (isset($_POST['subform']) && empty($sendrequest)) {
                        echo $erreur['vide'];
                    }
                    echo ' <br><br>
                         Type de demande :
                        <label for="emplois">Proposition d’emploi</label>
                        <input type="radio" name="demande" id="emplois" value="emplois"  >
                        <label for="info">Demande d’information</label>
                        <input type="radio" name="demande" id="info" value="info">
                        <label for="presta">Prestations</label>
                        <input type="radio" name="demande" id="presta" value="presta">';

                    if (isset($_POST['subform']) && empty($sendrequest)) {
                        echo $erreur['vide'];
                    }
                    elseif (filter_input(INPUT_POST,"commentaire",FILTER_SANITIZE_STRING, $min_range=5)) {
                        echo $erreur['commentaire'];
                    }
                    echo ' <br><br>
                        <label for="commentaire">Qu\'avait vous pensez de cette experience de mon <strong>CV en ligne</strong></label>
                        <br>
                        <textarea name="commentaire" id="commentaire" placeholder="Laissez vos commentaires ici. :)" ></textarea>
                        <br>';
                     ?>
                </p>

                <p>
                   <!-- //selecteur -->
                    
                
                </p>
                
                <button type="submit" name="subform">Envoyer</button>
            </fieldset>
        </form>
    </main>

</body>
</html>
