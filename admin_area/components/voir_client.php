<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Voir Clients
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Clients
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nom Prenom </th>
                                <th> E-Mail </th>
                                <th> Adresse </th>
                                <th> Téléphone </th>
                                <th> Statut </th>
                                <th> Voir Commande </th>
                                <th> Voir Rendez-vous </th>
                                <th> Supprimer </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=0;
                                $get_u = "select * from utilisateur where statut='Actif'";
                                $run_u = mysqli_query($con,$get_u);
                                while($row_u=mysqli_fetch_array($run_u)){
                                    $u_id = $row_u['idUtilisateur'];
                                    $u_name = $row_u['nom'];
                                    $u_prenom = $row_u['prenom'];
                                    $u_email = $row_u['email'];
                                    $u_address = $row_u['adresse'];
                                    $u_contact = $row_u['telephone'];
                                    $u_statut = $row_u['statut'];
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $u_name . ' ' . $u_prenom ?> </td>
                                <td> <?php echo $u_email; ?> </td>
                                <td> <?php echo $u_address ?> </td>
                                <td> <?php echo $u_contact ?> </td>
                                <td> <?php echo $u_statut ?> </td>
                                <td> 
                                     <a href="index.php?voir_commande_client=<?php echo $u_id; ?>">
                                        <i class="fa fa-fw fa-book"></i> Commandes
                                     </a> 
                                </td>
                                <td> 
                                     <a href="index.php?voir_rdv_client=<?php echo $u_id; ?>">
                                        <i class="fa fa-fw fa-calendar"></i> rendez-vous
                                     </a> 
                                </td>
                                <td> 
                                     <a href="index.php?supprimer_client=<?php echo $u_id; ?>">
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
                   <i class="fa fa-tags"></i>  Voir Utilisateur en attente
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nom Prenom </th>
                                <th> E-Mail </th>
                                <th> Adresse </th>
                                <th> Téléphone </th>
                                <th> Statut </th>
                                <th> Accepter </th>
                                <th> Supprimer </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=0;
                                $get_u = "select * from utilisateur where statut='En attente'";
                                $run_u = mysqli_query($con,$get_u);
                                while($row_u=mysqli_fetch_array($run_u)){
                                    $u_id = $row_u['idUtilisateur'];
                                    $u_name = $row_u['nom'];
                                    $u_prenom = $row_u['prenom'];
                                    $u_email = $row_u['email'];
                                    $u_address = $row_u['adresse'];
                                    $u_contact = $row_u['telephone'];
                                    $u_statut = $row_u['statut'];
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $u_name . ' ' . $u_prenom ?> </td>
                                <td> <?php echo $u_email; ?> </td>
                                <td> <?php echo $u_address ?> </td>
                                <td> <?php echo $u_contact ?> </td>
                                <td> <?php echo $u_statut ?> </td>
                                <td> 
                                     <a href="index.php?modifier_statutC=<?php echo $u_id; ?>">
                                        <i class="fa fa-check-circle"></i> Accepter
                                     </a> 
                                </td>
                                <td> 
                                     <a href="index.php?supprimer_client=<?php echo $u_id; ?>">
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
        <div class="panel panel-danger">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Utilisateur bloqué !
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nom Prenom </th>
                                <th> E-Mail </th>
                                <th> Adresse </th>
                                <th> Téléphone </th>
                                <th> Statut </th>
                                <th> Accepter </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=0;
                                $get_u = "select * from utilisateur where statut='Bloque'";
                                $run_u = mysqli_query($con,$get_u);
                                while($row_u=mysqli_fetch_array($run_u)){
                                    $u_id = $row_u['idUtilisateur'];
                                    $u_name = $row_u['nom'];
                                    $u_prenom = $row_u['prenom'];
                                    $u_email = $row_u['email'];
                                    $u_address = $row_u['adresse'];
                                    $u_contact = $row_u['telephone'];
                                    $u_statut = $row_u['statut'];
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $u_name . ' ' . $u_prenom ?> </td>
                                <td> <?php echo $u_email; ?> </td>
                                <td> <?php echo $u_address ?> </td>
                                <td> <?php echo $u_contact ?> </td>
                                <td> <?php echo $u_statut ?> </td>
                                <td> 
                                     <a href="index.php?modifier_statutC=<?php echo $u_id; ?>">
                                        <i class="fa fa-check-circle"></i> Accepter
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