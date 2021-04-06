<?php
    $active='';
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
                    <li>Mon Panier</a></li>
                    
                </ul>
            </div>

            <div id="panier" class="col-md-9">
                <div class="box">
                    <form action="panier.php" method="post" enctype="multipart/form-data">
                        <h1>Mon Panier</h1>
                        <p class="text-muted">Vous avez actuellement 4 objects dans votre panier</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="col-md-4" colspan="2">Produit</th>
                                        <th>Quantité</th>
                                        <th>Prix Unitaire</th>
                                        <th>Taille</th>
                                        <th colspan="1">Supprimer</th>
                                        <th colspan="2">Sous-Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/produit1.jpg" alt="produit 1">
                                        </td>
                                        <td>
                                            <a href="#">Coiffure Patrick fruit 1</a>
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                        <td>
                                            /
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/produit2.jpg" alt="produit 2">
                                        </td>
                                        <td>
                                            <a href="#">Coiffure Patrick fruit 2</a>
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                        <td>
                                            /
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/produit3.jpg" alt="produit 2">
                                        </td>
                                        <td>
                                            <a href="#">Coiffure Patrick fruit 3</a>
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                        <td>
                                            /
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/produit4.jpg" alt="produit 2">
                                        </td>
                                        <td>
                                            <a href="#">Coiffure Patrick fruit 4</a>
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                        <td>
                                            /
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            30 € 00
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">90 € 00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="boutique.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continuer le shopping !
                                </a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" name="update" value="Rafraichir" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Rafraichir
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Confirmer la commande <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <div id="order-summary" class="box">
                    <div class="box header">
                        <h3>Information Complémentaire</h3>
                    </div>
                    <p class="text-muted">
                        La TVA es comprise pour chacun de nos produits.
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
 
    <?php include 'includes/footer.php'; ?>

</body>
</html>    