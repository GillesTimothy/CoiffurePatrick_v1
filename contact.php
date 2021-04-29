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
                    <li>Contact</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'components/sidebar_contact.php'; ?>
            
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                        <h2>N'Hésitez Pas A Nous Contacter</h2>
                        <p class="text-muted">
                            Si vous avez la moindre question concernant notre boutique, la prise de rendez-vous ou notre salon de coiffure.
                        </p>
                        </center>
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="name" required></input>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required></input>
                            </div>
                            <div class="form-group">
                                <label>Sujet</label>
                                <input type="text" class="form-control" name="subject" required></input>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control" rows="5" cols="33"></textarea>
                            </div>
                            <div class=text-center>
                                <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-file"></i> Envoyer le message </button>
                            </div>
                        </form>

                        <?php

                            if(isset($_POST['submit'])){
                                $sender_name = $_POST['name'];
                                $sender_email = $_POST['email'];
                                $sender_subject = $_POST['subject'];
                                $sender_message = $_POST['message'];

                                $receive_email = "titigilles@live.fr";
                                mail($receive_email,$sender_name,$sender_subject,$sender_message, $sender_email);

                                $email = $_POST['mail'];
                                $subject = "Bienvenue la miff sur le site du coiffeur";
                                $msg = "Merci de nous avoir envoyer un message. Nous vous recontactons le plus vite possible.";
                                $from = "titigilles@live.fr";
                                mail($email,$subject,$msg,$from);
                                echo '<h2>votre message à bien été envoyer</h2>';
                            }

                        ?>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

 </body>
 </html>   