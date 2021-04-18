<center>
    <h1> Suppression De Mon Compte </h1>
    <p class="lead"> </p>
    <p class="text-muted">La suppression d'un compte utilisateur entraine la perte des données pour l'utilisateur de ses rendez-vous ainsi que de ses commandes.
    </p>
    <p class="text-muted">Les rendez-vous et commande en cours ou futures seront des lors annulées!
    </p>
   
    

<br>

<h3> Etes-vous sur de vouloir supprimer votre compte ?</h2>

    <form action="" method="post">
        <input type="submit" name="yes" value="OUI, supprimer mon compte." class="btn btn-danger"></input>
        <input type="submit" name="no" value="NON, ne pas supprimer mon compte." class="btn btn-success"></input>
    </form>
</center>

<?php

if(isset($_POST['yes'])){
    $supp_compte = $_SESSION['utilisateur_email'];
    $suppression = "DELETE FROM utilisateur where email = '$supp_compte'";
    $run_suppression = mysqli_query($db, $suppression);
    if($run_suppression) {
        echo '<script>alert("compte supprimer !")</script>';
        session_destroy();            
        echo '<script>window.open("../index.php","_self")</script>';
        
    }
    else {
        echo 'erreur ! ';
    }
}
if(isset($_POST['no'])){
    echo '<script>window.open("moncompte.php?mes_informations","_self")</script>';
}

?>