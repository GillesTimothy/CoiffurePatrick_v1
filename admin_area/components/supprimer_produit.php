<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {

?>

<?php 

    if(isset($_GET['supprimer_produit'])){
        
        $delete_id = $_GET['supprimer_produit'];
        
        $delete_pro = "delete from produits where idProduit='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Le produit a bien été supprimé !')</script>";
            
            echo "<script>window.open('index.php?voir_produit','_self')</script>";
            
        }
        echo "<script>alert('erreur de suppression !')</script>";
        
    }

?>

<?php } ?>