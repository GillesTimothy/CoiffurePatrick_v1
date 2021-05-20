<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / Services
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
               
                   <i class="fa fa-tags"></i>  Services
                
               </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Libellé du service </th>
                                <th> durée du service</th>
                                <th> description du service </th>
                                <th> statut du service </th>
                                <th> utilisation du service </th>
                                <th> changement statut </th>
                                <th> Modifier </th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                                $get_service = "select * from services";
                                $run_service = mysqli_query($con,$get_service);
                                while($row_service=mysqli_fetch_array($run_service)){
                                    $service_id = $row_service['idService'];
                                    $service_libelle = $row_service['libelle'];
                                    $service_duree = $row_service['duree'];
                                    $service_description = $row_service['description'];
                                    $service_statut = $row_service['statut'];
                                    $i++;
                            
                            ?>
                            
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $service_libelle; ?> </td>
                                <td> <?php echo $service_duree ?> </td>
                                <td> <?php echo $service_description ?> </td>
                                <td> <?php echo $service_statut ?> </td>
                                <td> 
                                    <?php 
                                        //$get_vendu = "select SUM(quantite) from contenu_rdv where idService='$service_id'";
                                        //$run_vendu = mysqli_query($con,$get_vendu);
                                        //$row_vendu = mysqli_fetch_array($run_vendu);
                                        //echo $row_vendu[0];
                                     ?> 
                                </td>
                                <td> 
                                     <a href="index.php?modifier_statutS=<?php echo $service_id; ?>">
                                        <i class="fa fa-upload"></i> Statut
                                     </a> 
                                </td>
                                <td> 
                                     <a href="index.php?modifier_service=<?php echo $service_id; ?>">
                                        <i class="fa fa-pencil"></i> Modifier
                                     </a> 
                                </td>
                                <td> 
                                     <a href="index.php?supprimer_service=<?php echo $service_id; ?>">
                                        <i class="fa fa-trash-o"></i>
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