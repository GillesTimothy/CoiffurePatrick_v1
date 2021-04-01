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

    <script src="functions/les_dispos.js"></script>
   
</head>
<body>

    <?php include 'includes/topbar.php'; ?>

    <?php include 'includes/navbar_rdv.php'; ?>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>Rendez-Vous</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'components/sidebar_rdv.php'; ?>
            
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                        <h2>Prendre Rendez-Vous</h2>
                        <p class="text-muted">
                            Selection les différents services pour créer votre prestation personnalisée.
                        </p>
                        </center>
                        <form >
                            <div class="form-group">
                                <label>Nom - Prenom</label>
                                <input type="text" class="form-control" name="name" value="Gilles Timothy" disabled="disabled" ></input>
                            </div>
                            <legend>Selection de vos services</legend>
                            <div class="form-group">
                                <input type="checkbox" id="service1" name="service1">
                                    <label for="service1">Shampoing</label>
                                    <br>
                                
                                <input type="checkbox" id="service2" name="service2" >
                                    <label for="service2">Coupe Homme</label>
                                    <br>
                                <input type="checkbox" id="service3" name="service2" >
                                    <label for="service3">Coupe Femme</label>
                                    <br>
                                <input type="checkbox" id="service4" name="service3" >
                                    <label for="service4">Coupe Enfant</label>
                                    <br>
                            </div>
                            <div class="form-group">
                                <label>A partir de :</label>
                                <input type="date" class="form-control" name="name" ></input>
                            </div>
                            <div class="form-group">
                                <label>Commentaire</label>
                                <textarea name="message" class="form-control" rows="5" cols="33"></textarea>
                            </div>
                        </form>
                        <div class=text-right>
                            
                            <a href="rdv.php?disponibilite">
                            <i class="fa fa-calendar"></i> Voir les disponibilites</a>
                            
                        </div>    
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php if(isset($_GET['disponibilite'])) {
        include("components/disponibilite.php");
        }
    ?> 
 

    <?php include 'includes/footer.php'; ?>

 </body>
 </html>   