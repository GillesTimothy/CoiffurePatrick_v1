<?php

$db = mysqli_connect("localhost","root","","testcoiffurepatrick");

function getProduct() {
    global $db;

    $get_products = "select * from produits order by 1 DESC LIMIT 0,4";

    $run_products = mysqli_query($db, $get_products);

    while($row_products = mysqli_fetch_array($run_products)) {

        $produit_id = $row_products['idProduit'];
        $produit_libelle = $row_products['libelle'];
        $produit_prix = $row_products['prix'];
        $produit_img1 = $row_products['produitImage1'];

        echo "
            <div class='col-md-4 col-sm-6 single'>
                <div class='product'>
                    <a href='details.php?pro_id=$produit_id'>
                        <img class='img-responsive' src='admin_area/product_images/$produit_img1'>
                    </a>
                    <div class='text'>
                        <h3>
                            <a href='details.php?pro_id=$produit_id'> $produit_libelle </a>
                        </h3>
                        <p class='price'> $produit_prix € </p>
                        <p class='button'>
                            <a class='btn btn-default' href='details.php?pro_id=$produit_id'> Voir Détails </a>
                            <a class='btn btn-primary' href='details.php?pro_id=$produit_id'>
                                <i class='fa fa-shopping-card'></i> Ajouter au Panier
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        ";    

    }

}

?>