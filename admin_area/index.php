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

                if(isset($_GET['insert_product'])){
                    include("components/insert_product.php");
                }

            ?>
            
            </div>
        </div>
    </div>

</body>
</html>

<?php } ?>