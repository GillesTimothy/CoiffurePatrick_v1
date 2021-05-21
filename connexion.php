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
                    <li>Connexion</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'components/sidebar_connexion.php'; ?>
            
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                        <h2>Connexion à votre compte</h2>
                        </center>

                        <?php 
                        
                            if(isset($_POST['connexion'])){
                                

                                try {
                                    $bdd = new PDO('mysql:host=localhost;dbname=testcoiffurepatrick;charset=utf8', 'root', '');
                                }
                                catch(Exception $e){
                                    die('ERREUR : ' . $e->getMessage());
                                }

                                $req=$bdd->query("SELECT * FROM utilisateur WHERE email = '" . $_POST['u_email'] . "'");
                                if($req->rowCount() != 0){
                                $row = $req->fetch();
                                $isPasswordCorrect = password_verify($_POST['u_mdp'], $row['mdp']);
                                //Verifie si le password correspond bien à celui de la db
                                if($isPasswordCorrect){
                                    $_SESSION['utilisateur_ID'] = $row['idUtilisateur'];   
                                    $_SESSION['utilisateur_email'] = $row['email'];   
                                    $_SESSION['utilisateur_prenom'] = $row['prenom'];
                                    $_SESSION['utilisateur_nom'] = $row['nom'];
                                    $_SESSION['utilisateur_telephone'] = $row['telephone'];
                                    $_SESSION['utilisateur_adresse'] = $row['adresse'];
                                    $_SESSION['utilisateur_statut'] = $row['statut'];
                                    echo '<script>window.open("index.php","_self")</script>';
                                }
                                else{
                                    echo'Mot de passe incorrect ! ';
                                }
                                }
                                //Si pseudo incorrect et pas trouvé dans la requête
                                else{
                                    echo 'Email incorrecte ! ';
                                }
                            }
                        ?>
                        
                        
                        
                        
                        <form action="connexion.php" method="post">
                            <div class="form-group">
                                    <label>Email</label>
                                <input type="text" class="form-control" name="u_email" required></input>
                            </div>
                            <div class="form-group">
                                <label>Mot de Passe</label>
                                <input type="password" class="form-control" name="u_mdp" required></input>
                            </div>
                            
                            <div class=text-center>
                                <button type="submit" name="connexion" class="btn btn-primary">
                                <i class="fa fa-sign-in"></i> Connexion</button>
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