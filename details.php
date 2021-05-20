<?php
    $active="Boutique";
    include("includes/db.php");
    include("functions/functions.php");
    $con = mysqli_connect("localhost","root","","testcoiffurepatrick");
?>

<?php 
            
    if(isset($_GET['pro_id'])){
        $produit_id = $_GET['pro_id'];
        $get_produit = "select * from produits where idProduit = '$produit_id' ";
        $run_produit = mysqli_query($con, $get_produit);
        $row_produit = mysqli_fetch_array($run_produit);
        $produitCat_id = $row_produit['pCategorieId'];
        $produit_libelle = $row_produit['libelle'];
        $produit_prix = $row_produit['prix'];
        $produit_desc = $row_produit['description'];
        $produit_img1 = $row_produit['produitImage1'];
        $produit_img2 = $row_produit['produitImage2'];
        $produit_img3 = $row_produit['produitImage3'];

        $produit_statut = $row_produit['statut'];

        $get_pCategorie = "select * from categorie_produit where idCategorie = '$produitCat_id'";
        $run_pCategorie = mysqli_query($con,$get_pCategorie);
        $row_pCategorie = mysqli_fetch_array($run_pCategorie);
        $pCategorie_libelle = $row_pCategorie['libelle'];
    }    
    else if(isset($_GET['add_panier'])){
        $produit_id = $_GET['add_panier'];
        $get_produit = "select * from produits where idProduit = '$produit_id' ";
        $run_produit = mysqli_query($con, $get_produit);
        $row_produit = mysqli_fetch_array($run_produit);
        $produitCat_id = $row_produit['pCategorieId'];
        $produit_libelle = $row_produit['libelle'];
        $produit_prix = $row_produit['prix'];
        $produit_desc = $row_produit['description'];
        $produit_img1 = $row_produit['produitImage1'];
        $produit_img2 = $row_produit['produitImage2'];
        $produit_img3 = $row_produit['produitImage3'];

        $produit_statut = $row_produit['statut'];

        $get_pCategorie = "select * from categorie_produit where idCategorie = '$produitCat_id'";
        $run_pCategorie = mysqli_query($con,$get_pCategorie);
        $row_pCategorie = mysqli_fetch_array($run_pCategorie);
        $pCategorie_libelle = $row_pCategorie['libelle'];
    }              
            
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
                    <li><a href="boutique.php">Boutique</a></li>
                    <li>Détails</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'components/sidebar.php'; ?>
            
            </div>

            <div class="col-md-9">
                <div id="productMain" class="row">
                    <div class=col-sm-7>
                        <div id="mainImage">
                            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                                <ol class="carousel-indicators">

                                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="admin_area/product_images/<?php echo $produit_img1; ?>" alt="slide 1">
                                    </div>
                                    <div class="item">
                                        <img src="admin_area/product_images/<?php echo $produit_img2; ?>" alt="slide 2">
                                    </div> 
                                    <div class="item">
                                        <img src="admin_area/product_images/<?php echo $produit_img3; ?>" alt="slide 2">
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Précédent</span>
                                </a>
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Suivant</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="box">
                            <h1 class="text-center"><?php echo $produit_libelle; ?></h1>
                            <?php add_panier() ?>
                            <form action="details.php?add_panier=<?php echo $produit_id; ?> " class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Quantité</label>
                                    <div class="col-md-7">
                                        <select name="produit_quantite" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>  
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Statut</label>
                                    <div class="col-md-7">
                                        <?php 
                                        
                                        if($produit_statut == 'Disponible') {
                                            echo "<div class='alert alert-success' role='alert'>$produit_statut</div>";
                                        }
                                        elseif($produit_statut == 'Indisponible') {
                                            echo "<div class='alert alert-danger' role='alert'>$produit_statut</div>";
                                        }
                                        elseif($produit_statut == 'Unique') {
                                            echo "<div class='alert alert-warning' role='alert'>$produit_statut</div>";
                                        }
                                        elseif($produit_statut == 'Bientot Disponible') {
                                            echo "<div class='alert alert-info' role='alert'>$produit_statut</div>";
                                        }
                                        ?>
                                    
                                    </div>  
                                </div>
                                <p class="price"><?php echo $produit_prix; ?> € </p>
                                <?php 
                                        
                                    if($produit_statut == 'Disponible') {
                                        echo "<p class='text-center button'><button name='submit' type='submit' class='btn btn-primary i fa fa-shopping-cart'> Ajouter à mon panier</button></p> ";
                                    }
                                    if($produit_statut == 'Unique') {
                                        echo "<p class='text-center button'><button name='submit' type='submit' class='btn btn-primary i fa fa-shopping-cart'> Ajouter à mon panier</button></p> ";
                                    }
                                        
                                ?>

                            </form>         
                        </div>

                        <div class="row" id="thumbs">
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $produit_img1; ?>" alt="produit1 a" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $produit_img2; ?>" alt="produit1 b" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $produit_img3; ?>" alt="produit11 c" class="img-responsive">
                                </a>
                            </div>
                        </div>

                    </div> 
                </div>
    
                <div class="box" id="details">
                    <h4>Détails Produit</h4>
                    <p><?php echo $produit_desc; ?></p>
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li>caractéristique 1</li>
                        <li>caractéristique 2</li>
                        <li>caractéristique 3</li>
                        <li>caractéristique 4</li>
                    </ul>  
                </div>    
            </div>

        </div>
    </div>
 
    <?php include 'includes/footer.php'; ?>

</body>
</html>