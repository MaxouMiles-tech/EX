<!--------------------------------------------------------------------------------------------------------------------->
<!--contact-->
<!--------------------------------------------------------------------------------------------------------------------->
<!--    formulaire de contact-->
<form action="contact.php" method="post" name="verifcontact" id="verifcontact">
    <div>
        <label for="nom"></label>
        <input type="text" id="nom" name="nom" placeholder="Nom et Prénom"
               value="<?php if (isset($_POST['nom'])) {
                   echo $_POST['nom'];
               } ?>"/>
    </div>
    <p id="errorNom"></p>

    <div>
        <label for="mail"></label>
        <input type="text" id="mail" name="mail" placeholder="Abc@example.com"
               value="<?php if (isset($_POST['mail'])) {
                   echo $_POST['mail'];
               } ?>"/>
    </div>
    <p id="errorMail"></p>

    <div>
        <label for="message"></label>
        <textarea placeholder="Envoyez moi votre message :)" rows="5" cols="40"
                  id="message" name="message">
                        <?php if (isset($_POST['message'])) {
                            echo $_POST['message'];
                        } ?>
                        </textarea>
    </div>
    <p id="errorMessage"></p>

    <div>
        <button type="submit" value="Envoyer" name="contactform" id="envoyer">Envoyer</button>
    </div>
</form>
