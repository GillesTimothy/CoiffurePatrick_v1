<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / Catégorie
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Catégories de Produits
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Libellé de la catégorie </th>
                                <th> Modifier </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=0;
                                $get_cat_p = "select * from categorie_produit";
                                $run_cat_p = mysqli_query($con,$get_cat_p);
                                while($row_cat_p=mysqli_fetch_array($run_cat_p)){
                                    $cat_p_id = $row_cat_p['idCategorie'];
                                    $cat_p_libelle = $row_cat_p['libelle'];
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $cat_p_libelle; ?> </td>
                                <td> 
                                     <a href="index.php?modifier_p_cat=<?php echo $cat_p_id; ?>">
                                        <i class="fa fa-pencil"></i> Modifier
                                     </a> 
                                </td>
                                <td> 
                                     <a href="index.php?supprimer_p_cat=<?php echo $cat_p_id; ?>">
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

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Catégories Globale
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Libellé de la catégorie globale</th>
                                <th> Modifier </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=0;
                                $get_cat = "select * from categorie";
                                $run_cat = mysqli_query($con,$get_cat);
                                while($row_cat=mysqli_fetch_array($run_cat)){
                                    $cat_id = $row_cat['idCat'];
                                    $cat_libelle = $row_cat['libelle'];
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $cat_libelle; ?> </td>
                                <td> 
                                     <a href="index.php?modifier_cat=<?php echo $cat_id; ?>">
                                        <i class="fa fa-pencil"></i> Modifier
                                     </a> 
                                </td>
                                <td> 
                                     <a href="index.php?supprimer_cat=<?php echo $cat_id; ?>">
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