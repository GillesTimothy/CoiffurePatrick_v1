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