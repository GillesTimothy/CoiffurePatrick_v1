<?php
    $db = mysqli_connect("localhost","root","","testcoiffurepatrick");
?>

<center>
    <h1> Information Commande </h1>
    <p class="lead"> </p>
    <p class="text-muted">
        Information supplémentaire concernant la commande n° <?php if(isset($_GET['info_commande'])){ $numero = $_GET['info_commande'];echo '<b>' . $numero . '</b>'; }?>  .
    </p>
</center>

<br>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th> Article </th>
                <th>  </th>
                <th> Quantite </th>
                <th> Sous Total </th>
            </tr>
        </thead>
        <tbody>

        <?php
        
            if(isset($_GET['info_commande'])){
                $numero = $_GET['info_commande'];
                $get_info_commande = "select * from contenu_commande where numeroCommande = '$numero' order by 1 ASC";
                $run_info_commande = mysqli_query($db, $get_info_commande);
                $b =1;
                while($row_info_commande = mysqli_fetch_array($run_info_commande)) {
    
                    $articleId = $row_info_commande['idArticle'];
                    $quantite = $row_info_commande['quantite'];
                    $sousTotal = $row_info_commande['sousTotal'];
                    $get_produit = "select * from produits where idProduit = '$articleId' ";
                    $run_produit = mysqli_query($db, $get_produit);
                    while($row_produit = mysqli_fetch_array($run_produit)){
                        $produit_libelle = $row_produit['libelle'];
                        $produit_img1 = $row_produit['produitImage1'];    
                        echo "
    
                            <tr>
                            <th> # $b </th>
                            <td>
                                <a href='../details.php?pro_id=$articleId'>
                                    <img class='img-responsive' style='width: 50px; float: left; padding: none;' src='../admin_area/product_images/$produit_img1' alt='produit 1'>
                                </a>
                                </td>
                                <td>
                                <a href='../details.php?pro_id=$articleId'> $produit_libelle</a>
                            </td>
                            <td> $quantite </td>
                            <td> $sousTotal € </td>
                            </tr>
                        ";
                    }
                    $b++;
                }
            }

        ?>
        </tbody>    
    </table>
    <div class="pull-left">
        <a href="moncompte.php?mes_commandes" class="btn btn-default">
            <i class="fa fa-chevron-left"></i> retour
        </a>
    </div>
</div>    