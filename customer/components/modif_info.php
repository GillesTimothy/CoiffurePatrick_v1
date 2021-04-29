<?php
    $db = mysqli_connect("localhost","root","","testcoiffurepatrick");
?>
<center>
    <h1> Modifier Mes Informations </h1>
    <p class="lead"> </p>
    <p class="text-muted">
    Si vous avez la moindre question concernant la modification de vos données personnelles, merci de nous contacter via le lien suivant : <a href="../contact.php"> contact </a>
    </p>
</center>

<br>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> Nom : </label>
        <input type="text" name="c_name" disabled="disabled" class="form-control" value="<?php echo $_SESSION['utilisateur_nom']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Prenom : </label>
        <input type="text" name="c_name2" disabled="disabled" class="form-control" value="<?php echo $_SESSION['utilisateur_prenom']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Email : </label>
        <input type="text" name="c_email" class="form-control" value="<?php echo $_SESSION['utilisateur_email']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Adresse : </label>
        <input type="text" name="c_adresse" class="form-control" value="<?php echo $_SESSION['utilisateur_adresse']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Telephone : </label>
        <input type="text" name="c_tel" class="form-control" value="<?php echo $_SESSION['utilisateur_telephone']; ?>" require></input>
    </div>
    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-edit"></i> Mettre à jour
        </button>
    </div>
</form>

<?php 
if(isset($_POST['update'])){
    $c_utilisateur_id = $_SESSION['utilisateur_ID'];
    
    $c_email = $_POST['c_email'];
    $c_adresse = $_POST['c_adresse'];
    $c_tel = $_POST['c_tel'];

    $update_utilisateur = "UPDATE utilisateur SET email = '$c_email', telephone = '$c_tel', adresse = '$c_adresse' where idUtilisateur = $c_utilisateur_id;";
    $run_update_utilisateur = mysqli_query($db, $update_utilisateur);
        if($run_update_utilisateur) {
                                    
            echo '<script>alert("données personnelles mise à jour !");</script>';
            session_destroy();
            echo  "<script>window.open('../connexion.php', '_self')</script>";
                                    
        }
}
?>