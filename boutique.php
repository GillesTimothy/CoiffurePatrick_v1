<?php

    $active='Boutique';  //variable pour navbar 
    include("includes/db.php");
    include("functions/functions.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffure Patrick</title>

    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>

    <?php include 'includes/topbar.php'; ?>

    <?php include 'includes/navbar.php'; ?>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>Boutique</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'components/sidebar.php'; ?>
            
            </div>

            <div class="col-md-9">
                <div class="box">
                    <h1>Boutique</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minima id, perspiciatis ipsum earum ex expedita aperiam rem saepe necessitatibus officia incidunt autem pariatur officiis facere harum voluptates ducimus assumenda?</p>                    
                </div>
                <div class="row">

                    <?php 
                        if(!isset($_GET['pCat_id'])){
                            if(!isset($_GET['cat_id'])){

                                    $nbr_article = 6;

                                    if(isset($_GET['page'])){

                                        $page = $_GET['page'];

                                    }else {
                                            $page=1;
                                        }

                                    $start_from = ($page - 1) * $nbr_article;
                                    $get_products = "select * from produits order by 1 DESC LIMIT $start_from,$nbr_article";
                                    $run_products = mysqli_query($db, $get_products);
                                    while($row_products = mysqli_fetch_array($run_products)) {

                                        $produit_id = $row_products['idProduit'];
                                        $produit_libelle = $row_products['libelle'];
                                        $produit_prix = $row_products['prix'];
                                        $produit_img1 = $row_products['produitImage1'];
                                        echo "
                                            <div class='col-md-4 col-sm-4 center-reponsive'>
                                                <div class='product'>
                                                    <a href='details.php?pro_id=$produit_id'>
                                                        <img class='img-responsive' src='admin_area/product_images/$produit_img1'>
                                                    </a>
                                                    <div class='text'>
                                                        <h3>
                                                            <a href='details.php?pro_id=$produit_id'>$produit_libelle</a>   
                                                        </h3>
                                                        <p class='price'>$produit_prix €</p>
                                                        <p class='button'>
                                                            <a href='details.php?pro_id=$produit_id' class='btn btn-default'>Voir Détails</a>
                                                            <a href='details.php?pro_id=$produit_id' class='btn btn-primary'>
                                                                <i class='fa fa-shopping-cart'> Ajouter au panier</i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                                        
                                    }
    
                    ?>

                </div>

                <center>
                    <ul class="pagination">

                        <?php 
                            $query = "select * from produits";
                            $result= mysqli_query($con,$query);
                            $total_record = mysqli_num_rows($result);
                            $total_pages = ceil($total_record / $nbr_article);

                                echo "

                                    <li><a href='boutique.php?page=1'><span>&laquo</span></a></li>
                                
                                ";
                                for($i=1; $i<=$total_pages; $i++){
                                    echo "

                                        <li><a href='boutique.php?page=".$i."'>".$i."</a></li>

                                    ";
                                };
                                echo "

                                    <li><a href='boutique.php?page=$total_pages'><span>&raquo</span></a></li>
                                
                                ";
                            }
                        }    
                        
                        ?>

                    </ul>
                </center>
                
                <?php
                    getpCatPro();
                    getCatPro();
                ?>
                
            </div>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

 </body>
 </html>   
