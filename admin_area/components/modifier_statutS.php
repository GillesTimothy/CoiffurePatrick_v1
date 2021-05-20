<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<?php 

if(isset($_GET['modifier_statutS'])){
    $s_id = $_GET['modifier_statutS'];
    $get_services = "select * from services where idService='$s_id'";
    $run_services = mysqli_query($con,$get_services);
    $row_services = mysqli_fetch_array($run_services);
    $s_statut = $row_services['statut'];

    if($s_statut == 'Disponible'){
        $update_service = "update services set statut='Indisponible' where idService='$s_id'";
        $run_service = mysqli_query($con,$update_service);
        if($run_service){
             echo "<script>window.open('index.php?voir_service','_self')</script>"; 
        } 
    }
    elseif($s_statut == 'Indisponible'){
        $update_service = "update services set statut='Disponible' where idService='$s_id'";
        $run_service = mysqli_query($con,$update_service);
        if($run_service){
             echo "<script>window.open('index.php?voir_service','_self')</script>"; 
        } 
    }
    
}

?>

<?php } ?>
