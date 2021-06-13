<?php

use App\Entity\Employeur;

require __DIR__ . '/../base.php';
?>
<body>
<h1>Home</h1>
<div class = "container" >
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="font-size:13px">
                <th> id </th>
                <th> Nom </th>
                <th> Prenom </th>
                <th> date de naissance </th>
                <th> Adresse </th>
                <th> E-mail </th>
                <th> Cin</th>
                <th> Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (isset($employeurs)) {
                foreach ($employeurs as $employeur) {
                    // var_dump($employeur);
                    echo '<tr style="font-size:15px">';
                    echo "<td>" . $employeur->getID() . "</td>";
                    echo "<td>" . $employeur->getNom() . "</td>";
                    echo "<td> " . $employeur->getPrenom() . "</td>";
                    echo "<td> " . $employeur->getDateDeNaissance() . "</td>";
                    echo "<td> " . $employeur->getAdresse() . "</td>";
                    echo "<td> " . $employeur->getEmail() . "</td>";
                    echo "<td> " . $employeur->getCin() . "</td>";
                    echo "<td> <a href='/employeur/".$employeur->getID()."' >Show</a></td>";
                    echo '</tr>';
                    

                }
            }
            ?>
        </tbody>
    </table>
</div>
</body>

</html>