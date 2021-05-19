<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / Produit
                
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
               
                   <i class="fa fa-tags"></i>  Produits
                
               </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Libellé du produit </th>
                                <th> Image</th>
                                <th> Prix du produit </th>
                                <th> Catégorie Produit </th>
                                <th> Catégorie </th>
                                <th> Date Insertion </th>
                                <th> Vendu </th>
                                <th> Statut </th>
                                <th> Stock </th>
                                <th> Modifier </th>
                                <th> Disponibilité </th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                                $get_pro = "select * from produits";
                                $run_pro = mysqli_query($con,$get_pro);
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    $pro_id = $row_pro['idProduit'];
                                    $pro_libelle = $row_pro['libelle'];
                                    $pro_img1 = $row_pro['produitImage1'];
                                    $pro_prix = $row_pro['prix'];
                                    $pro_categorie_id = $row_pro['pCategorieId'];
                                    $categorie_id = $row_pro['categorieId'];
                                    $pro_date = $row_pro['date'];
                                    $pro_statut = $row_pro['statut'];
                                    $pro_stock = $row_pro['stock'];  
                                    $i++;
                            
                            ?>
                            
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $pro_libelle; ?> </td>
                                <td> <img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td> € <?php echo $pro_prix; ?> </td>
                                <td> 
                                    <?php 
                                        $get_p_cat = "select libelle from categorie_produit where idCategorie='$pro_categorie_id'";
                                        $run_p_cat = mysqli_query($con,$get_p_cat);
                                        $row_p_cat = mysqli_fetch_array($run_p_cat);
                                        $p_cat = $row_p_cat['libelle'];
                                        echo $p_cat;
                                    ?> 
                                </td>
                                <td> 
                                    <?php 
                                        $get_cat = "select libelle from categorie where idCat='$categorie_id'";
                                        $run_cat = mysqli_query($con,$get_cat);
                                        $row_cat = mysqli_fetch_array($run_cat);
                                        $cat = $row_cat['libelle'];
                                        echo $cat;
                                    ?> 
                                </td>
                                <td> <?php echo $pro_date ?> </td>
                                <td> 
                                    <?php 
                                        $get_vendu = "select * from contenu_commande where idArticle='$pro_id'";
                                        $run_vendu = mysqli_query($con,$get_vendu);
                                        $count = mysqli_num_rows($run_vendu);
                                        echo $count;
                                     ?> 
                                </td>
                                <td> <?php echo $pro_statut ?> </td>
                                <td> <?php echo $pro_stock ?> </td>
                                <td> 
                                     <a href="index.php?modifier_produit=<?php echo $pro_id; ?>">
                                        <i class="fa fa-pencil"></i> Modifier
                                     </a> 
                                </td>
                                <td>
                                    <a href="index.php?modifier_statutP2=<?php echo $pro_id; ?>">
                                        <i class="fa fa-chevron-up"></i> Disponible
                                    </a> 
                                    <br>
                                    <a href="index.php?modifier_statutP3=<?php echo $pro_id; ?>">
                                        <i class="fa fa-minus"></i> Unique
                                    </a> 
                                    <br>
                                    <a href="index.php?modifier_statutP=<?php echo $pro_id; ?>">
                                        <i class="fa fa-chevron-down"></i> Indisponible
                                    </a>
                                </td>
                                <td> 
                                     <a href="index.php?supprimer_produit=<?php echo $pro_id; ?>">
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