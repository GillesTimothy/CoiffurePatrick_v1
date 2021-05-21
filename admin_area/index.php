<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    } else {
        
        $admin_session = $_SESSION['admin_email'];
        $get_admin = "select * from coiffeur";
        $run_admin = mysqli_query($con,$get_admin);
        $count_admin = mysqli_num_rows($run_admin);

        $get_products = "select * from produits";
        $run_products = mysqli_query($con,$get_products);
        $count_products = mysqli_num_rows($run_products);

        $get_utilisateur = "select * from utilisateur";
        $run_utilisateur = mysqli_query($con,$get_utilisateur);
        $count_utilisateur = mysqli_num_rows($run_utilisateur);

        $get_commande = "select * from commande";
        $run_commande = mysqli_query($con,$get_commande);
        $count_commande = mysqli_num_rows($run_commande);

        $get_contenu_commande = "select * from contenu_commande";
        $run_contenu_commande = mysqli_query($con,$get_contenu_commande);
        

        $get_categorie = "select * from categorie";
        $run_categorie = mysqli_query($con,$get_categorie);
        $count_categorie = mysqli_num_rows($run_categorie);

        $get_categorie_produit = "select * from categorie_produit";
        $run_categorie_produit = mysqli_query($con,$get_categorie_produit);
        $count_categorie_produit = mysqli_num_rows($run_categorie_produit);    
        
        $get_services = "select * from services";
        $run_services = mysqli_query($con,$get_services);
        $count_services = mysqli_num_rows($run_services);  

        $get_slide = "select * from carousel";
        $run_slide = mysqli_query($con,$get_slide);
        $count_slide = mysqli_num_rows($run_slide);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffure Patrick Dashboard</title>
    <link rel="icon" href="../images/" type="image/x-icon" />

    
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css/bootstrap-337.min.css">
    <link rel="stylesheet" href="css/css/style.css">
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

    <div id="wrapper">

        <?php include("includes/sidebar.php"); ?>

        <div id="page-wrapper">
            <div class="container-fluid">

            <?php 

                if(isset($_GET['dashboard'])){
                    include("components/dashboard.php");
                }

                /*
                *  PRODUITS !
                */
                if(isset($_GET['ajout_produit'])){
                    include("components/ajout_produit.php");
                }
                if(isset($_GET['voir_produit'])){
                    include("components/voir_produit.php");
                }
                if(isset($_GET['modifier_produit'])){
                    include("components/modifier_produit.php");
                }
                if(isset($_GET['supprimer_produit'])){
                    include("components/supprimer_produit.php");
                }
                if(isset($_GET['modifier_statutP'])){
                    include("components/modifier_statutP.php");
                }
                if(isset($_GET['modifier_statutP2'])){
                    include("components/modifier_statutP.php");
                }
                if(isset($_GET['modifier_statutP3'])){
                    include("components/modifier_statutP.php");
                }

                /*
                *  SERVICES !
                */
                if(isset($_GET['ajout_service'])){
                    include("components/ajout_service.php");
                }
                if(isset($_GET['voir_service'])){
                    include("components/voir_service.php");
                }
                if(isset($_GET['supprimer_service'])){
                    include("components/supprimer_service.php");
                }
                if(isset($_GET['modifier_service'])){
                    include("components/modifier_service.php");
                }
                if(isset($_GET['modifier_statutS'])){
                    include("components/modifier_statutS.php");
                }

                /*
                *  CATEGORIES !
                */
                if(isset($_GET['ajout_p_cat'])){
                    include("components/ajout_p_cat.php");
                }
                if(isset($_GET['ajout_cat'])){
                    include("components/ajout_cat.php");
                }
                if(isset($_GET['voir_cat'])){
                    include("components/voir_cat.php");
                }
                if(isset($_GET['supprimer_p_cat'])){
                    include("components/supprimer_p_cat.php");
                }
                if(isset($_GET['supprimer_cat'])){
                    include("components/supprimer_cat.php");
                }
                if(isset($_GET['modifier_p_cat'])){
                    include("components/modifier_p_cat.php");
                }
                if(isset($_GET['modifier_cat'])){
                    include("components/modifier_cat.php");
                }

                /*
                *  IMAGES !
                */
                if(isset($_GET['ajout_slide'])){
                    include("components/ajout_slide.php");
                }
                if(isset($_GET['voir_slide'])){
                    include("components/voir_slide.php");
                }
                if(isset($_GET['supprimer_slide'])){
                    include("components/supprimer_slide.php");
                }

                /*
                *  CLIENTS !
                */
                if(isset($_GET['voir_client'])){
                    include("components/voir_client.php");
                }
                if(isset($_GET['supprimer_client'])){
                    include("components/supprimer_client.php");
                }
                if(isset($_GET['modifier_statutC'])){
                    include("components/modifier_statutC.php");
                }

                /*
                *  FOURNISSEUR !
                */
                if(isset($_GET['arrivage_produit'])){
                    include("components/arrivage_produit.php");
                }
                


                
                

            ?>
            
            </div>
        </div>
    </div>

</body>
</html>

<?php } ?>