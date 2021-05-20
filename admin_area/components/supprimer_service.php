<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {

?>

<?php 

    if(isset($_GET['supprimer_service'])){
        
        $delete_id = $_GET['supprimer_service'];
        
        $delete_service = "delete from services where idService='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_service);
        
        if($run_delete){
            
            echo "<script>alert('Le service a bien été supprimé !')</script>";
            
            echo "<script>window.open('index.php?voir_service','_self')</script>";
            
        }
        echo "<script>alert('erreur de suppression !')</script>";
        
    }

?>

<?php } ?>