<center>
    <h1> Modifier Mon Mot De Passe </h1>
    <p class="lead"> </p>
    <p class="text-muted">
    </p>
</center>

<br>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> Ancien mot de passe : </label>
        <input type="text" name="c_name" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label> Nouveau mot de passe : </label>
        <input type="text" name="c_name2" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label> Confirmation  du nouveau mot de passe : </label>
        <input type="text" name="c_email" class="form-control" require></input>
    </div>
    
    <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-edit"></i> Mettre à jour
        </button>
    </div>
</form>

<?php 
if(isset($_POST['submit'])){
    $c_utilisateur_id = $_SESSION['utilisateur_ID'];
    
    $c_1 = $_POST['c_name'];
    $c_2 = $_POST['c_name2'];
    $c_3 = $_POST['c_email'];

    if($c_2 != $c_3){
        echo "<p style='color: red;'>nouveaux mot de passe non identique !<p>";
    }
    else {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=testcoiffurepatrick;charset=utf8', 'root', '');
        }
        catch(Exception $e){
            die('ERREUR : ' . $e->getMessage());
        }

        $req=$bdd->query("SELECT * FROM utilisateur WHERE idUtilisateur = '$c_utilisateur_id'");
        if($req->rowCount() != 0){
            $row = $req->fetch();
            $isPasswordCorrect = password_verify($c_1, $row['mdp']);
            //Verifie si le password correspond bien à celui de la db
            if($isPasswordCorrect){
                $c_mdp = password_hash($c_2, PASSWORD_DEFAULT);
                $update_mdp = "UPDATE utilisateur SET mdp = '$c_mdp' where idUtilisateur = $c_utilisateur_id;";
                $run_update_mdp = mysqli_query($db, $update_mdp);
                if($run_update_mdp) {
                                        
                    echo '<script>alert("mot de passe mis à jour !");</script>';
                    session_destroy();
                    echo  "<script>window.open('../connexion.php', '_self')</script>";
                }                        
            }
            else {
                echo "<p style='color: red;'>mot de passe incorrecte !<p>";
            }
        }
    }
}
?>