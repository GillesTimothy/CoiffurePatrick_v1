<?php
    include("functions/functions.php");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffure Patrick</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>

    <?php include 'includes/topbar_moncompte.php'; ?>

    <?php include 'includes/navbar_moncompte.php'; ?>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>Mon Compte</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'includes/sidebar_moncompte.php'; ?>
            
            </div>

            <div  class="col-md-9">
                <div class="box">
                    <?php if(isset($_GET['mes_commandes'])) {
                        include("components/mes_commandes.php");
                    } ?>

                    <?php if(isset($_GET['mes_rdv'])) {
                        include("components/mes_rdv.php");
                    } ?>

                    <?php if(isset($_GET['modif_info'])) {
                        include("components/modif_info.php");
                    } ?>

                    <?php if(isset($_GET['mes_informations'])) {
                        include("components/mes_informations.php");
                    } ?>

                    <?php if(isset($_GET['change_mdp'])) {
                        include("components/change_mdp.php");
                    } ?>

                    <?php if(isset($_GET['supp_compte'])) {
                        include("components/supp_compte.php");
                    } ?>
                </div>
            </div>
        </div>
    </div>

    

    <?php include 'includes/footer_moncompte.php'; ?>

 </body>
 </html>   