<?php require_once './app/Views/front/layouts/header.php'; ?>

<div id="contenuDashboard">
    <div class="container">
<table>
<thead>
    <tr>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Mail</td>
        <td>Objet</td>
        <td>Message</td>
        <td></td>
    </tr>
</thead>

<tbody>
    <?php foreach ($allMails as $allMail){ ?>
    <tr>
        <td><?= htmlspecialchars($allMail['lastname']); ?></td>
        <td><?= htmlspecialchars($allMail['firstname']); ?></td>
        <td><?= htmlspecialchars($allMail['email']); ?></td>
        <td><?= htmlspecialchars($allMail['phone']); ?></td>
        <td><?= htmlspecialchars($allMail['content']); ?></td>
        <td><a href="indexAdmin.php?action=deleteMail&id=<?= $allMail['id']; ?>">Delete</a></td>
    </tr>
    
    <?php } ?>
</tbody>
</table>

<a class="bouton-noir" id="retour-dashboard" href="indexAdmin.php?action=dashboard">Retour</a>

</div>
</div>




<?php require_once './app/Views/front/layouts/footer.php'; ?>