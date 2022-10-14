<?php
require_once 'layouts/header.php';
?>

<main class="container">


<section class="contenu">
<h2>Notre avion</h2>

<article class="avion" id="avion">

<h4>Le VL3</h4>
<img src="./app/Public/front/img/lapd_8.jpeg" alt="Le VL3">


<p class="description-avion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deleniti fuga, officiis enim unde dolorem veniam, suscipit asperiores qui facere distinctio delectus sed, aspernatur sunt?</p>

<p class="infos-avion">Nombre de places : <span>2</span></p>
<p class="infos-avion">Vitesse max : <span>300 km/h</span></p>
<p class="infos-avion">Prix de la location : <span>150 €/h</span></p>
</article>

</section>

<section class="contenu">
<article class="location" id="location">
<div class="location-content">
<h2>Location</h2>
    <p class="conditions-location">L'avion est à louer en fonction de votre expérience ainsi que de votre formation. Un entretien au préalable est nécessaire afin de garantir un vol en toute sécurité. </p> <br>
<p class="conditions-location">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore adipisci pariatur quo eligendi sequi, aliquam molestiae illo ad qui? Quia commodi tenetur cupiditate dolorem animi esse veritatis voluptatibus? Placeat, doloremque dolore dolorem qui ipsum asperiores eveniet facere assumenda iusto repellat?</p>

</div>
</article>
</section>

    <div id="contact">

    <h2>Contact</h2>

    <p class="renseignements">Pour plus de renseignements, vous pouvez nous contacter via le formulaire de contact ci-dessous ou par téléphone au <a href="tel:+33238325260">02 38 32 52 60</a>.</p>


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
        </div>

        <button type="submit" class="bouton-orange" id="btn-envoi">Envoyer</button>

    </form>

</div>
</main>

<?php
require_once 'layouts/footer.php';
?>