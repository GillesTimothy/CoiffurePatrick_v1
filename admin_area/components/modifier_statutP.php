<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<?php 

if(isset($_GET['modifier_statutP'])){
    $p_id = $_GET['modifier_statutP'];
    $update_product = "update produits set statut='Indisponible' where idProduit='$p_id'";
    $run_product = mysqli_query($con,$update_product);
        if($run_product){
            echo "<script>window.open('index.php?voir_produit','_self')</script>"; 
        } 
}

if(isset($_GET['modifier_statutP2'])){
    
    $p_id = $_GET['modifier_statutP2'];
    $update_product = "update produits set statut='Disponible' where idProduit='$p_id'";
    $run_product = mysqli_query($con,$update_product);
        if($run_product){
            echo "<script>window.open('index.php?voir_produit','_self')</script>"; 
        } 
}

if(isset($_GET['modifier_statutP3'])){
    
    $p_id = $_GET['modifier_statutP3'];
    $update_product = "update produits set statut='Unique' where idProduit='$p_id'";
    $run_product = mysqli_query($con,$update_product);
        if($run_product){
            echo "<script>window.open('index.php?voir_produit','_self')</script>"; 
        } 
}

?>

<?php } ?>
