<?php
    
    $active='Accueil';  //variable pour navbar 
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
    <link rel="icon" href="images/" type="image/x-icon" />

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
    
    <?php include 'components/carousel.php'; ?>    

    <?php include 'components/introducing_box.php'; ?>

    <?php include 'components/service_storefront.php'; ?>

    <?php include 'components/rdv_storefront.php'; ?>

    <?php include 'components/product_storefront.php'; ?>
    
    <?php include 'components/open_hour.php'; ?>

    <?php include 'includes/footer.php'; ?>

    <a href="#" class="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
    

</body>
</html>