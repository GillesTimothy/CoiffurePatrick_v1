<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {

?>

<?php 

    if(isset($_GET['supprimer_cat'])){
        
        $delete_id = $_GET['supprimer_cat'];
        
        $delete_cat = "delete from categorie where idCat='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('La catégorie a bien été supprimé !')</script>";
            
            echo "<script>window.open('index.php?voir_cat','_self')</script>";
            
        }
        echo "<script>alert('erreur de suppression !')</script>";
        
    }

?>

<?php } ?>