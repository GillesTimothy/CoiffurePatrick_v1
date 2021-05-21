<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

if(isset($_GET['terminer_commande'])){
    $c_id = $_GET['terminer_commande'];
    $update_statut = "update commande set statut='Terminee' where commandeId='$c_id'";
    $run_statut = mysqli_query($con,$update_statut);
    if($run_statut){
        echo "<script>window.open('index.php?voir_commande','_self')</script>"; 
    } 
    
}

?>

<?php } ?>