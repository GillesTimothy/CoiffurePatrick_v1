<?php 
    
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else {
?> 

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>Dashboard
            </li>
        </ol>
    </div>
</div>

<div class="row">
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_commande; ?> </div>
                        <div> Commandes </div>
                    </div>
                </div>
            </div>
            
            <a href="index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left">
                        Voir Détails 
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 7 </div>
                        <div> Rendez-Vous </div>
                    </div>
                </div>
            </div>
            
            <a href="index.php?view_customers">
                <div class="panel-footer">
                    <span class="pull-left">
                        Voir Détails 
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> X </div>
                        <div> Disponibilités </div>
                    </div>
                </div>
            </div>
            
            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                    <span class="pull-left">
                        Mettre A Jour Disponibilités 
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_utilisateur; ?> </div>
                        <div> Clients </div>
                    </div>
                </div>
            </div>
            
            <a href="index.php?view_orders">
                <div class="panel-footer">
                    <span class="pull-left">
                        Voir Détails 
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-shopping-cart fa-fw"></i> Nouvelles Commandes
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th> Client </th>
                                <th> Numéro Commande</th>
                                <th> Montant</th>
                                <th> Date Réservation</th>
                                <th> Statut</th>
                                <th> </th>                             
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            
                                $i = 0;
                                $get_commande = "select * from commande order by 1 DESC LIMIT 0,4";
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
                                <td> ACCEPTER </td>
                            <?php
                                }
                            
                            ?>   
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?view_orders">
                        Voir commandes <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Produits
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <a href="index.php?insert_product">
                            <div class="panel-footer">
                                <span class="pull-left">
                                    Ajouter produit 
                                </span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i> 
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="index.php?view_orders">
                            Voir Produits <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Catégories
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <a href="index.php?view_customers">
                            <div class="panel-footer">
                                <span class="pull-left">
                                    Ajouter catégorie 
                                </span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i> 
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="index.php?view_orders">
                            Voir Catégories <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-green">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-calendar fa-fw"></i> Prochains Rendez-vous
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>  </th>
                                <th> Client : </th>
                                <th> Date : </th>
                                <th> Heure Début : </th>
                                <th> Heure Fin : </th>
                                <th> Type : </th>
                                <th> Statut : </th>
                                <th>  </th>   
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> pelanggan@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                                <th> Valider </th>   
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td> pelanggan@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                                <th> Valider </th>

                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td> pelanggan@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                                <th> Valider </th>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td> pelanggan@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                                <th> Valider </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?view_orders">
                        Voir Rendez-Vous <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="panel panel-green">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Services
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <a href="index.php?view_customers">
                            <div class="panel-footer">
                                <span class="pull-left">
                                    Ajouter service 
                                </span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i> 
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="index.php?view_orders">
                            Voir Services <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
        </div>
    </div>

</div>


<?php } ?>