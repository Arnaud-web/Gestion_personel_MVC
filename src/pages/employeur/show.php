<?php
require __DIR__ . '/../base.php';
?>
<h1>Show Employeur</h1>
<?php
if (isset($employeur)) {

    echo '<div>';
    echo "<p> Id : " . $employeur->getID() . "</p>";
    echo "<p> Nom : " . $employeur->getNom() . "</p>";
    echo "<p> Prenom : " . $employeur->getPrenom() . "</p>";
    echo "<p> Date de Naissance :" . $employeur->getDateDeNaissance() . "</p>";
    echo "<p> Adresse : " . $employeur->getAdresse() . "</p>";
    echo "<p> E-mail :" . $employeur->getEmail() . "</p>";
    echo "<p> CIN :" . $employeur->getCin() . "</p>";
    echo '</div>';
    echo '<div><a href = "/employeur">Listes des employeurs</a></div>';
}
?>