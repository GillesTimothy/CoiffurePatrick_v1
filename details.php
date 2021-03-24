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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>

    <?php include 'includes/topbar.php'; ?>

    <?php include 'includes/navbar_boutique.php'; ?>

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
                                        <img src="admin_area/product_images/produit1a.jpg" alt="slide 1">
                                    </div>
                                    <div class="item">
                                        <img src="admin_area/product_images/produit1b.jpg" alt="slide 2">
                                    </div> 
                                    <div class="item">
                                        <img src="admin_area/product_images/produit1c.jpg" alt="slide 2">
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
                            <h1 class="text-center">Coiffure Patrick fruit 1</h1>
                            <form action="details.php" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Quantité</label>
                                    <div class="col-md-7">
                                        <select name="product_qty" id="" class="form-control">
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
                                        
                                        <div class="alert alert-success" role="alert">Disponible</div>
                                        <!--<div class="alert alert-info" role="alert">Stock Limité</div>
                                        <div class="alert alert-warning" role="alert">Disponible en Commande</div>
                                        <div class="alert alert-danger" role="alert">Indisponible</div>-->
                                    
                                    </div>  
                                </div>
                                <p class="price">30 € 00</p>
                                <p class="text-center button"><button class="btn btn-primary i fa fa-shopping-cart">Ajouter à mon panier</button></p> 
                            </form>         
                        </div>

                        <div class="row" id="thumbs">
                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/product_images/produit2.jpg" alt="produit2" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/product_images/produit3.jpg" alt="produit2" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/product_images/produit1.jpg" alt="produit2" class="img-responsive">
                                </a>
                            </div>
                        </div>

                    </div> 
                </div>
    
                <div class="box" id="details">
                    <h4>Détails Produit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores itaque minima nisi doloribus ex reprehenderit expedita eligendi dicta hic quos illum, distinctio architecto saepe, deserunt animi pariatur placeat consequatur non?</p>
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