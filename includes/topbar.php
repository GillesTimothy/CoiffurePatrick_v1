<?php 
    session_start();  
?>
<div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="index.php" class="btn btn-success btn-sm">
                    <?php
                        if(!isset($_SESSION['utilisateur_prenom'])){
                            echo 'COIFFURE PATRICK';
                        }
                        else {
                            echo  " Bonjour " . $_SESSION['utilisateur_prenom'];
                        }
                    ?>
                </a>
                <a href="panier.php">Panier : <?php items(); ?>  -  Prix Total : <?php prixTotal(); ?>€  </a>
                <a href="customer/moncompte.php?mes_rdv">|  Rendez-Vous : 0</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <?php
                            if(!isset($_SESSION['utilisateur_prenom'])){
                                echo "<li>
                                        <a href='inscription.php'>Inscription</a>
                                        </li>
                                        <li>
                                            <a href='connexion.php'>Connexion</a> 
                                        </li>"
                                ;
                            }
                            else {
                                echo  "<li>
                                            <a href='deconnexion.php'>Deconnexion</a> 
                                        </li>"
                                ;
                            }
                        ?>
                    
                    <li>
                        <a href="contact.php">Contactez-nous</a>
                        <a href="contact.php"><i class="fa fa-info-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>