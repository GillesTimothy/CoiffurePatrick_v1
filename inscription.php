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
                    <li>Inscription</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'components/sidebar_contact.php'; ?>
            
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                        <h2>Enregistrer un nouveau compte</h2>
                        </center>
                        <form action="inscription.php" method="post">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="i_nom" required></input>
                            </div>
                            <div class="form-group">
                                <label>Prenom</label>
                                <input type="text" class="form-control" name="i_prenom" required></input>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="i_email" required></input>
                            </div>
                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" class="form-control" name="i_adresse" required></input>
                            </div>
                            <div class="form-group">
                                <label>Numéro de téléphone</label>
                                <input type="text" class="form-control" name="i_telephone" required></input>
                            </div>
                            <div class="form-group">
                                <label>Mot de Passe</label>
                                <input type="password" class="form-control" name="i_mdp" required></input>
                            </div>
                            <div class="form-group">
                                <label>Confirmation mot de passe</label>
                                <input type="password" class="form-control" name="i_mdp_confirm" required></input>
                            </div>
                            
                            <div class=text-center>
                                <button type="submit" name="inscription" class="btn btn-primary">
                                <i class="fa fa-user-plus"></i> Inscription</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

 </body>
 </html>  

 <?php
 
    if(isset($_POST['inscription'])){
        $i_nom = $_POST['i_nom'];
        $i_prenom = $_POST['i_prenom'];
        $i_email = $_POST['i_email'];
        $i_adresse = $_POST['i_adresse'];
        $i_telephone = $_POST['i_telephone'];
        $i_mdp = $_POST['i_mdp'];
        $i_mdp_confirm = $_POST['i_mdp_confirm'];
        $ip_add = getRealIpUser();

        $insert_utilisateur = "insert into utilisateur (nom, prenom, email, telephone, mdp, adresse, ip_add) values ('$i_nom', '$i_prenom', '$i_email', '$i_telephone', '$i_mdp', '$i_adresse', '$ip_add')";

        $run_utilisateur = mysqli_query($con, $insert_utilisateur);

        
    }    

 ?>