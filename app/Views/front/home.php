<?php
require_once 'layouts/header.php';
?>

<main >


<section class="contenu">
    
    <article class="avion" id="avion" class="container">
    <h2>Notre avion</h2>

    <h4 id="name-mobile">Le VL3</h4>
    <img src="./app/Public/front/img/lapd_8.jpeg" alt="Le VL3">
    
    
    <div id="texte-avion">
    <h4 id="name-desktop">Le VL3</h4>
<p class="description-avion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti fuga, officiis enim unde dolorem veniam, suscipit asperiores qui facere distinctio delectus sed, aspernatur sunt?</p>

<p class="infos-avion">Nombre de places : <span>2</span></p>
<p class="infos-avion">Vitesse max : <span>300 km/h</span></p>
<p class="infos-avion">Prix de la location : <span>250 €/h</span></p>
</div>
</article>

</section>

<section class="contenu">
<article class="location" id="location">
<div class="location-content">
<h2>Location</h2>
    <p class="conditions-location">L'avion est à louer pour une ou plusieurs journées, pour un minimum d'une heure. La location est autorisée en fonction de votre expérience. </p><br>
    <p class="conditions-location"> Un entretien au préalable est nécessaire. Il peut également vous être demander d'effectuer une session avec un pilote afin de garantir un vol en toute sécurité </p>

</div>
</article>
</section>

    <div id="contact">

    <h2>Contact</h2>

    <p class="renseignements">Pour plus de renseignements, vous pouvez nous contacter via le formulaire de contact ci-dessous ou par téléphone au <br><a href="tel:+33238325260" class="black">02 38 32 52 60</a>.</p>


    <form action="index.php?action=contactPost" method="post" id="contact-form" onsubmit="return caseIsChecked()">
        <input type="text" name="lastname" id="lastname" placeholder="Nom*" required>
        <input type="text" name="firstname" id="firstname" placeholder="Prénom*" required>
        <input type="email" name="email" id="email" placeholder="E-mail*" required>
        <input type="tel" name="phone" id="phone" placeholder="Téléphone">
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Votre message*" required></textarea>
        <p id="champ-obligatoire">
            *Ce champ est obligatoire
        </p>


        <div id="utilisation-donnees">
            <input type="checkbox" name="validation" id="validation">
        <label for="validation">En cochant cette case vous acceptez l'utilisation de vos données.*</label>
        <p id="alerte-accept-data"></p>
        </div>

        <button type="submit" class="bouton-orange" id="btn-envoi">Envoyer</button>

    </form>

</div>
</main>

<?php
require_once 'layouts/footer.php';
?>