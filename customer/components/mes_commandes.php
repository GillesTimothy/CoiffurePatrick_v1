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
    <form method="post">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th> </th>
                    <th> Numero Commande </th>
                    <th> Montant </th>
                    <th> Date Réservation </th>
                    <th> Statut </th>
                    <th></th>
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
                            <td>
                                <input type='checkbox' name='remove[]' value='$numero'>
                            </td>
                            </tr>
                        ";
                    $a++;
                }
            ?>
            
            </tbody> 
            
        </table>
        
        <div class="pull-right">
            <button type="submit" name="update" value="Rafraichir" class="btn btn-default">
                <i class="fa fa-refresh"></i> Supprimer
            </button>
                <a href="commande.php" class="btn btn-primary">
                    Confirmer la reception de la commande <i class="fa fa-chevron-right"></i>
                </a>
        </div> 
    </form>

    <?php

    function updateCommande(){
                global $db;
                if(isset($_POST['update'])){
                    foreach($_POST['remove'] as $remove_id){
                        $delete_commande = "delete from commande where numero='$remove_id'";
                        $run_delete = mysqli_query($db, $delete_commande);
                        $delete_info_commande = "delete from contenu_commande where numeroCommande ='$remove_id'";
                        $run_info_commande = mysqli_query($db, $delete_info_commande);
                        if($run_delete AND $run_info_commande){
                            echo "<script>window.open('moncompte.php?mes_commandes', '_self')</script>";
                        }

                    }
                }
            }
            echo @$up_commande = updateCommande();
    ?>


</div>    