<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<?php 

if(isset($_GET['modifier_statutC'])){
    $u_id = $_GET['modifier_statutC'];
    $get_utilisateur = "select * from utilisateur where idUtilisateur='$u_id'";
    $run_utilisateur = mysqli_query($con,$get_utilisateur);
    $row_utilisateur = mysqli_fetch_array($run_utilisateur);
    $u_statut = $row_utilisateur['statut'];

    if($u_statut == 'En attente'){
        $update_statut = "update utilisateur set statut='Actif' where idUtilisateur='$u_id'";
        $run_statut = mysqli_query($con,$update_statut);
        if($run_statut){
             echo "<script>window.open('index.php?voir_client','_self')</script>"; 
        } 
    }
    elseif($u_statut == 'Bloque'){
        $update_statut = "update utilisateur set statut='Actif' where idUtilisateur='$u_id'";
        $run_statut = mysqli_query($con,$update_statut);
        if($run_statut){
             echo "<script>window.open('index.php?voir_client','_self')</script>"; 
        } 
    }
}

?>

<?php } ?>