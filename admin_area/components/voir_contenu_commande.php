<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
if(isset($_GET['voir_contenu_commande'])){
    $c_numero = $_GET['voir_contenu_commande'];

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Voir Contenu Commande
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  Voir Contenu Commande <?php echo $c_numero ?>
               </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No° </th>
                                <th> Libellé du produit </th>
                                <th> Image </th>
                                <th> Quantité </th>
                                <th> Sous-Total </th>
                                <th> Statut </th>
                                <th> Modifier </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                            
                            $i = 0;
                            $get_info_commande = "select * from contenu_commande where numeroCommande = '$c_numero'";
                            $run_info_commande = mysqli_query($con, $get_info_commande);
                            $b =1;
                            while($row_info_commande = mysqli_fetch_array($run_info_commande)) {
                
                                $articleId = $row_info_commande['idArticle'];
                                $quantite = $row_info_commande['quantite'];
                                $sousTotal = $row_info_commande['sousTotal'];
                                
                                $get_produit = "select * from produits where idProduit = '$articleId' ";
                                $run_produit = mysqli_query($con, $get_produit);
                                while($row_produit = mysqli_fetch_array($run_produit)){
                                    $produit_libelle = $row_produit['libelle'];
                                    $produit_img1 = $row_produit['produitImage1'];    
                
                                
                            
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $produit_libelle; ?></td>
                            <td> <img src="product_images/<?php echo $produit_img1; ?>" width="60" height="60"></td>
                            <td> <?php echo $quantite; ?> </td>
                            <td> <?php echo $sousTotal; ?> </td>
                            <td> OK </td>
                            <td> 
                                <a href="index.php?voir_contenu_commande=<?php echo $c_numero; ?>">
                                    <i class="fa fa-trash-o"></i> Modifier
                                </a> 
                            </td>
                        </tr>
                            
                        <?php
                            $i++;
                            }
                        } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }} ?>