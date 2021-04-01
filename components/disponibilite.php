<div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="rdv.php?form_rdv">Rendez-Vous</a>
                    </li>
                    <li>Disponibilité</li>
                </ul>
            </div>
            <div class="col-md-3">

            <?php include 'components/sidebar_rdv.php'; ?>
            
            </div>

            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                        <h2>Nos Disponibilités</h2>
                        <p class="text-muted">
                        Selectionner le rendez-vous que vous désirer.
                        </p>
                        </center>
                        <form action="rdv.php" method="post">    
                                    
                                    <input type="radio" id="rdv1" name="rdv" value="vendredi 13 avril 2021 - 13h24" checked>
                                    <label for="rdv1">vendredi 13 avril 2021 - 13h24</label>
                                    <br>
                                
                                    <input type="radio" id="rdv2" name="rdv" >
                                    <label for="rdv2">vendredi 13 avril 2021 - 14h24</label>
                                    <br>
                                
                                    <input type="radio" id="rdv3" name="rdv" >
                                    <label for="rdv3">samedi 14 avril 2021 - 13h24</label>
                                    <br>
                                
                                </div>
                                <div class=text-center>
                                    <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-calendar"></i> Prendre Rendez-Vous </button>
                                </div>
                                
                        </form>
                    </div>
                </div>
            </div>
        
        </div>
</div>

