<?php
    include ("includes/db.php");

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffure Patrick Dashboard</title>
    <link rel="icon" href="images/" type="image/x-icon" />

    <link rel="stylesheet" href="css/bootstrap-337.min.css"> 
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Insertion Catégorie Produits
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insertion Catégorie Produits
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Libellé de la catégorie de produits </label>
                            <div class="col-md-6">
                                <input name="cat_p_libelle" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">  </label>
                            <div class="col-md-6">
                                <input name="submit" type="submit" class="btn btn-primary form-control" value="Ajouter la categorie" required>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-info fa-fw"></i> Informations Complémentaire
                    </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">  </label> 
                            <div class="col-md-6">
                                <input type="text" disabled="disabled" class="form-control" value="  " require></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    
    $cat_p_libelle = $_POST['cat_p_libelle'];

    $insert_cat_p = "insert into categorie_produit (libelle) values ('$cat_p_libelle')";
    
    $run_cat_p = mysqli_query($con,$insert_cat_p);
    
    if($run_cat_p){
        
        echo "<script>alert('La catégorie a été ajouté avec succès !')</script>";
        echo "<script>window.open('index.php?voir_cat','_seft')</script>";
        
    }
    
}

?>

<?php } ?>