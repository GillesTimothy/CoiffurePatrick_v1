<?php
   $con = mysqli_connect("localhost","root","","testcoiffurepatrick");
?>
<div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4>Pages</h4>
                    <ul>
                        <li><a href="rdv.php?form_rdv">Rendez-vous</a></li>
                        <li><a href="boutique.php">Boutique</a></li>
                        <li><a href="customer/moncompte.php?mes_informations">Mon Compte</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <hr>
                    <h4>Section Utilisateur</h4>
                    <ul>
                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                    </ul>
                    <hr class="hidden-md hidden-lg hidden-sm">
                    
                </div>

                <div class="col-sm-6 col-md-3">
                    <h4>Top Produits Catégories</h4>
                    <ul>
                        
                        <?php 
                            $get_productCat = "select * from  categorie_produit";
                            $run_productCat = mysqli_query($con,$get_productCat);
                            while($row_productCat = mysqli_fetch_array($run_productCat)) {

                                $produitCat_id = $row_productCat['idCategorie'];
                                $produitCat_libelle = $row_productCat['libelle'];
                                
                        
                                echo "
                                    <li>
                                        <a href='boutique.php/pCat_id=$produitCat_id'>
                                            $produitCat_libelle
                                        </a>
                                    </li>
                                ";    
                        
                            }
                        ?>

                    </ul>
                    <hr>
                    <h4>Rendez-Vous</h4>
                    <ul>
                        <li><a href="rdv.php">Prendre Rendez-Vous</a></li>
                    </ul>
                    <hr class="hidden-md hidden-lg">    
                </div>

                <div class="col-sm-6 col-md-3">
                    <h4>Retrouvez-nous</h4>
                    <p>
                        <strong>Coiffure Patrick.</strong>
                        <br/>1300 Wavre
                        <br/>Venelle du bois de Villers, 7
                        <br/>Belgique
                        <br/>010 24 61 66
                    </p>
                    <a href="contact.php">Page de Contact</a>
                    <hr class="hidden-md hidden-lg">    
                </div>

                <div class="col-sm-6 col-md-3">
                    <h4>Nouveauté</h4>
                    <p class="text-muted">
                        Ne ratez pas nos dernière nouveauté !
                    </p>
                    
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email">
                            <span class="input-group-btn">
                                <input type="submit" value="newsletter" class="btn btn-default">
                            </span>
                        </div>
                    </form>

                    <hr>
                    <h4>Rester Connecté</h4>
                    <p class="social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-envelope"></a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="container">
            <div class=col-md-6>
                <p class="pull-left">&copy; 2021 Coiffure Patrick - All Right Reserve</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right">Thème par  <a href="https://www.linkedin.com/in/timothy-gilles-6b5225185/">Timothy Gilles </a><i class="fa fa-linkedin"></i></p>
            </div>
        </div>
    </div>