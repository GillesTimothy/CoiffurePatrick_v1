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

function getCats() {

    global $db;
    $get_cat = "select * from  categorie";
    $run_cat = mysqli_query($db,$get_cat);
    while($row_cat = mysqli_fetch_array($run_cat)) {

        $cat_id = $row_cat['idCat'];
        $cat_libelle = $row_cat['libelle'];       
        echo "
            <li>
                <a href='boutique.php/cat_id=$cat_id'>
                    $cat_libelle
                </a>
            </li>
        ";                                    
    }
}


function getCatPro() {

    global $db;
    if(isset($_GET['pCat_id'])){
        $produitCat_id = $_GET['pCat_id'];
        $get_pCategorie = "select * from categorie_produit where idCategorie = $produitCat_id";
        $run_pCategorie = mysqli_query($db,$get_pCategorie);
        $row_pCategorie = mysqli_fetch_array($run_pCategorie);

        $pCategorie_libelle = $row_pCategorie['libelle'];
           
        $get_products = "select * from produits where pCategorieId = '$produitCat_id'";
        $run_products = mysqli_query($db,$get_products);
        $count = mysqli_num_rows($run_products);
        if($count == 0){
            echo "<div>
                <h1> Pas de produit présent dans cette catégorie .</h1>
            </div>";
        } else {
            echo "
                <div>
                </div>
            ";
        }

        while($row_products=mysqli_fetch_array($run_products)){
            $produit_id = $row_products['idProduit'];
            $produit_libelle = $row_products['libelle'];
            $produit_prix = $row_products['prix'];
            $produit_img1 = $row_products['produitImage1'];

            echo "
            <div class='col-md-4 col-sm-4 single'>
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
}




?>