<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {

?>

<?php 

    if(isset($_GET['supprimer_slide'])){
        
        $delete_id = $_GET['supprimer_slide'];
        
        $delete_slide = "delete from carousel where id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>alert('L image a bien été supprimé !')</script>";
            
            echo "<script>window.open('index.php?voir_slide','_self')</script>";
            
        }
        echo "<script>alert('erreur de suppression !')</script>";
        
    }

?>

<?php } ?>