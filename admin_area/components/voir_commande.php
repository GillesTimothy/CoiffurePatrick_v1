<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Voir Commandes
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Commandes en Attente d'Acceptation
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No°</th>
                                <th> Client </th>
                                <th> Numéro Commande</th>
                                <th> Montant</th>
                                <th> Date Réservation</th>
                                <th> Statut</th>
                                <th> Contenu </th> 
                                <th> Accepter </th>    
                                <th> Supprimer </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                            
                            $i = 0;
                            $get_commande = "select * from commande where statut='attente d acceptation'";
                            $run_commande = mysqli_query($con,$get_commande);
                            while($row_commande = mysqli_fetch_array($run_commande)){
                                $commande_id = $row_commande['commandeId'];
                                $utilisateur_id = $row_commande['utilisateurId'];
                                $numero_commande = $row_commande['numero'];
                                $prixTotal = $row_commande['prixTotal'];
                                $date_commande = $row_commande['date'];
                                $statut_commande = $row_commande['statut'];                                    
                                $i++;

                        ?>
                        <tr>
                            <td><?php echo $commande_id; ?></td>
                            <td>
                                <?php 
                                    
                                    $get_utilisateur = "select * from utilisateur where idUtilisateur='$utilisateur_id'";
                                    $run_utilisateur = mysqli_query($con,$get_utilisateur);
                                    $row_utilisateur = mysqli_fetch_array($run_utilisateur);
                                    $utilisateur_nom = $row_utilisateur['nom'];
                                    $utilisateur_prenom = $row_utilisateur['prenom'];
                                    echo $utilisateur_nom . ' ' . $utilisateur_prenom;
                                ?>
                            </td>
                            <td> <?php echo $numero_commande; ?> </td>
                            <td> <?php echo $prixTotal; ?> </td>
                            <td> <?php echo $date_commande; ?> </td>
                            <td> <?php echo $statut_commande; ?> </td>
                            <td> 
                                <a href="index.php?voir_contenu_commande=<?php echo $numero_commande; ?>">
                                    <i class="fa fa-trash-o"></i> Contenu
                                </a> 
                            </td>
                            <td> 
                                <a href="index.php?accepter_commande=<?php echo $commande_id; ?>">
                                    <i class="fa fa-trash-o"></i> Accepter
                                </a> 
                            </td>
                            <td> 
                                <a href="index.php?supprimer_commande=<?php echo $commande_id; ?>">
                                    <i class="fa fa-trash-o"></i> Supprimer
                                </a> 
                            </td>
                        </tr>
                            
                        <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-warning">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Commandes en Cours
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No°</th>
                                <th> Client </th>
                                <th> Numéro Commande</th>
                                <th> Montant</th>
                                <th> Date Réservation</th>
                                <th> Statut</th>
                                <th> Contenu </th>     
                                <th> Disponible </th>
                                <th> Supprimer </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                            
                            $i = 0;
                            $get_commande = "select * from commande where statut='en Cours'";
                            $run_commande = mysqli_query($con,$get_commande);
                            while($row_commande = mysqli_fetch_array($run_commande)){
                                $commande_id = $row_commande['commandeId'];
                                $utilisateur_id = $row_commande['utilisateurId'];
                                $numero_commande = $row_commande['numero'];
                                $prixTotal = $row_commande['prixTotal'];
                                $date_commande = $row_commande['date'];
                                $statut_commande = $row_commande['statut'];                                    
                                $i++;

                        ?>
                        <tr>
                            <td><?php echo $commande_id; ?></td>
                            <td>
                                <?php 
                                    
                                    $get_utilisateur = "select * from utilisateur where idUtilisateur='$utilisateur_id'";
                                    $run_utilisateur = mysqli_query($con,$get_utilisateur);
                                    $row_utilisateur = mysqli_fetch_array($run_utilisateur);
                                    $utilisateur_nom = $row_utilisateur['nom'];
                                    $utilisateur_prenom = $row_utilisateur['prenom'];
                                    echo $utilisateur_nom . ' ' . $utilisateur_prenom;
                                ?>
                            </td>
                            <td> <?php echo $numero_commande; ?> </td>
                            <td> <?php echo $prixTotal; ?> </td>
                            <td> <?php echo $date_commande; ?> </td>
                            <td> <?php echo $statut_commande; ?> </td>
                            <td> 
                                <a href="index.php?voir_contenu_commande=<?php echo $numero_commande; ?>">
                                    <i class="fa fa-trash-o"></i> Contenu
                                </a> 
                            </td>
                            <td> 
                                <a href="index.php?disponible_commande=<?php echo $commande_id; ?>">
                                    <i class="fa fa-trash-o"></i> Disponible
                                </a> 
                            </td>
                            <td> 
                                <a href="index.php?supprimer_commande=<?php echo $commande_id; ?>">
                                    <i class="fa fa-trash-o"></i> Supprimer
                                </a> 
                            </td>
                        </tr>
                            
                        <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Commandes Disponible
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No°</th>
                                <th> Client </th>
                                <th> Numéro Commande</th>
                                <th> Montant</th>
                                <th> Date Réservation</th>
                                <th> Statut</th>
                                <th> Contenu </th>  
                                <th> Terminer </th>   
                                <th> Supprimer </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                            
                            $i = 0;
                            $get_commande = "select * from commande where statut='Disponible'";
                            $run_commande = mysqli_query($con,$get_commande);
                            while($row_commande = mysqli_fetch_array($run_commande)){
                                $commande_id = $row_commande['commandeId'];
                                $utilisateur_id = $row_commande['utilisateurId'];
                                $numero_commande = $row_commande['numero'];
                                $prixTotal = $row_commande['prixTotal'];
                                $date_commande = $row_commande['date'];
                                $statut_commande = $row_commande['statut'];                                    
                                $i++;

                        ?>
                        <tr>
                            <td><?php echo $commande_id; ?></td>
                            <td>
                                <?php 
                                    
                                    $get_utilisateur = "select * from utilisateur where idUtilisateur='$utilisateur_id'";
                                    $run_utilisateur = mysqli_query($con,$get_utilisateur);
                                    $row_utilisateur = mysqli_fetch_array($run_utilisateur);
                                    $utilisateur_nom = $row_utilisateur['nom'];
                                    $utilisateur_prenom = $row_utilisateur['prenom'];
                                    echo $utilisateur_nom . ' ' . $utilisateur_prenom;
                                ?>
                            </td>
                            <td> <?php echo $numero_commande; ?> </td>
                            <td> <?php echo $prixTotal; ?> </td>
                            <td> <?php echo $date_commande; ?> </td>
                            <td> <?php echo $statut_commande; ?> </td>
                            <td> 
                                <a href="index.php?voir_contenu_commande=<?php echo $numero_commande; ?>">
                                    <i class="fa fa-trash-o"></i> Contenu
                                </a> 
                            </td>
                            <td> 
                                <a href="index.php?terminer_commande=<?php echo $commande_id; ?>">
                                    <i class="fa fa-trash-o"></i> Terminer
                                </a> 
                            </td>
                            <td> 
                                <a href="index.php?supprimer_commande=<?php echo $commande_id; ?>">
                                    <i class="fa fa-trash-o"></i> Supprimer
                                </a> 
                            </td>
                        </tr>
                            
                        <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Commandes Terminées
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No°</th>
                                <th> Client </th>
                                <th> Numéro Commande</th>
                                <th> Montant</th>
                                <th> Date Réservation</th>
                                <th> Statut</th>  
                                <th> Contenu </th>   
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                            
                            $i = 0;
                            $get_commande = "select * from commande where statut='Terminee'";
                            $run_commande = mysqli_query($con,$get_commande);
                            while($row_commande = mysqli_fetch_array($run_commande)){
                                $commande_id = $row_commande['commandeId'];
                                $utilisateur_id = $row_commande['utilisateurId'];
                                $numero_commande = $row_commande['numero'];
                                $prixTotal = $row_commande['prixTotal'];
                                $date_commande = $row_commande['date'];
                                $statut_commande = $row_commande['statut'];                                    
                                $i++;

                        ?>
                        <tr>
                            <td><?php echo $commande_id; ?></td>
                            <td>
                                <?php 
                                    
                                    $get_utilisateur = "select * from utilisateur where idUtilisateur='$utilisateur_id'";
                                    $run_utilisateur = mysqli_query($con,$get_utilisateur);
                                    $row_utilisateur = mysqli_fetch_array($run_utilisateur);
                                    $utilisateur_nom = $row_utilisateur['nom'];
                                    $utilisateur_prenom = $row_utilisateur['prenom'];
                                    echo $utilisateur_nom . ' ' . $utilisateur_prenom;
                                ?>
                            </td>
                            <td> <?php echo $numero_commande; ?> </td>
                            <td> <?php echo $prixTotal; ?> </td>
                            <td> <?php echo $date_commande; ?> </td>
                            <td> <?php echo $statut_commande; ?> </td>
                            <td> 
                                <a href="index.php?voir_contenu_commande=<?php echo $numero_commande; ?>">
                                    <i class="fa fa-trash-o"></i> Contenu
                                </a> 
                            </td>
                        </tr>
                            
                        <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-danger">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Commandes Annuluées
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No°</th>
                                <th> Client </th>
                                <th> Numéro Commande</th>
                                <th> Montant</th>
                                <th> Date Réservation</th>
                                <th> Statut</th>     
                                <th> Contenu </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                            
                            $i = 0;
                            $get_commande = "select * from commande where statut='annulee'";
                            $run_commande = mysqli_query($con,$get_commande);
                            while($row_commande = mysqli_fetch_array($run_commande)){
                                $commande_id = $row_commande['commandeId'];
                                $utilisateur_id = $row_commande['utilisateurId'];
                                $numero_commande = $row_commande['numero'];
                                $prixTotal = $row_commande['prixTotal'];
                                $date_commande = $row_commande['date'];
                                $statut_commande = $row_commande['statut'];                                    
                                $i++;

                        ?>
                        <tr>
                            <td><?php echo $commande_id; ?></td>
                            <td>
                                <?php 
                                    
                                    $get_utilisateur = "select * from utilisateur where idUtilisateur='$utilisateur_id'";
                                    $run_utilisateur = mysqli_query($con,$get_utilisateur);
                                    $row_utilisateur = mysqli_fetch_array($run_utilisateur);
                                    $utilisateur_nom = $row_utilisateur['nom'];
                                    $utilisateur_prenom = $row_utilisateur['prenom'];
                                    echo $utilisateur_nom . ' ' . $utilisateur_prenom;
                                ?>
                            </td>
                            <td> <?php echo $numero_commande; ?> </td>
                            <td> <?php echo $prixTotal; ?> </td>
                            <td> <?php echo $date_commande; ?> </td>
                            <td> <?php echo $statut_commande; ?> </td>
                            <td> 
                                <a href="index.php?voir_contenu_commande=<?php echo $numero_commande; ?>">
                                    <i class="fa fa-trash-o"></i> Contenu
                                </a> 
                            </td>
                        </tr>
                            
                        <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>