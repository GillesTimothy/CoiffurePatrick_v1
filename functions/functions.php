<?php

$db = mysqli_connect("localhost","root","","testcoiffurepatrick");


function getRealIpUser(){
    switch(true){            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];            
            default : return $_SERVER['REMOTE_ADDR'];            
    }   
}


function add_panier() {
    global $db;

    if(isset($_GET['add_panier'])){

        $ip_add = getRealIpUser();
        $produit_id = $_GET['add_panier'];
        $produit_quantite = $_POST['produit_quantite'];
        $check_produit = "select * from panier where ip_add = '$ip_add' AND produitId = '$produit_id'";

        $run_check = mysqli_query($db, $check_produit);
        if(mysqli_num_rows($run_check)>0){
            echo '<p style="color: red;"> Le produit a déjà été ajouté au panier ! </p>';
        } 
        else {
        $query = "insert into panier (produitId, ip_add, quantite) values ($produit_id, '$ip_add', $produit_quantite)";
        $run_query = mysqli_query($db, $query);
        if($run_query) {
            echo '<script>alert("produit bien ajouter au panier")</script>';
            echo '<script>window.open("boutique.php","_self")</script>';
        }
        else {
            echo 'fuck you ca marche pas l"ajout a la BDD';
        }
        }
    }
}

/*
*   Cette fonction permet d'afficher le nombre d'objet présent dans le panier.
*/
function items(){
    global $db;
    $ip_add = getRealIpUser();
    $get_items = "select * from panier where ip_add = '$ip_add'";
    $run_items = mysqli_query($db, $get_items);
    $count_items = mysqli_num_rows($run_items);
    echo $count_items;
}


/*
*   Cette fonction permet d'afficher le prix total des articles présent dans le panier.
*/
function prixTotal(){
    global $db;
    $ip_add = getRealIpUser();
    $total = 0;
    $get_panier = "select * from panier where ip_add = '$ip_add'";
    $run_panier = mysqli_query($db, $get_panier);
    while($record = mysqli_fetch_array($run_panier)) {
        $pro_id = $record['produitId'];
        $pro_quantite = $record['quantite'];
        $get_prix = "select * from produits where idProduit = '$pro_id'";
        $run_prix = mysqli_query($db, $get_prix);
        while($row_prix = mysqli_fetch_array($run_prix)){
            $sous_total = $row_prix['prix'] * $pro_quantite;
            $total += $sous_total; 
        }
    } 
    echo $total;
    
}


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


function getpCatPro() {

    global $db;
    if(isset($_GET['pCat_id'])){
        $produitCat_id = $_GET['pCat_id'];
        $get_pCategorie = "select * from categorie_produit where idCategorie = $produitCat_id";
        $run_pCategorie = mysqli_query($db,$get_pCategorie);
        $row_pCategorie = mysqli_fetch_array($run_pCategorie);
           
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

function getCatPro() {

    global $db;
    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];
        $get_categorie = "select * from categorie where idCat = $cat_id";
        $run_categorie = mysqli_query($db,$get_categorie);
        $row_categorie = mysqli_fetch_array($run_categorie);
           
        $get_products = "select * from produits where categorieId = '$cat_id'";
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