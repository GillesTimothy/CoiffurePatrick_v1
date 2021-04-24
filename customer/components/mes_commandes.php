<?php
    $db = mysqli_connect("localhost","root","","testcoiffurepatrick");
?>
<center>
    <h1> Mes Commandes </h1>
    <p class="lead"> </p>
    <p class="text-muted">
    Si vous avez la moindre question concernant les commandes, merci de nous contacter via le lien suivant : <a href="../contact.php"> contact </a>
    </p>
</center>

<br>



<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th> </th>
                <th> Numero Commande </th>
                <th> Montant </th>
                <th> Date Réservation </th>
                <th> Statut </th>
            </tr>
        </thead>
        <tbody>

        <?php
            $get_commande = "select * from commande order by 1 ASC";
            $run_commande = mysqli_query($db, $get_commande);
            $a =1;
            while($row_commande = mysqli_fetch_array($run_commande)) {

                $commandeId = $row_commande['commandeId'];
                $utilisateurId = $row_commande['utilisateurId'];
                $numero = $row_commande['numero'];
                $prixTotal = $row_commande['prixTotal'];
                $statut = $row_commande['statut'];
                $date = $row_commande['date'];

                echo "

                        <tr>
                        <th> # $a </th>
                        <td><a href='moncompte.php?info_commande=$numero'>$numero</td>
                        <td> $prixTotal  € </td>
                        <td> $date </td>
                        <td> $statut </td>
                        </tr>
                    ";

                $a++;
            }
        ?>
            
            
        </tbody>    
    </table>
</div>    