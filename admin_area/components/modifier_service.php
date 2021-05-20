<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['modifier_service'])){
        
        $edit_id = $_GET['modifier_service'];
        $get_s = "select * from services where idService='$edit_id'";
        $run_edit = mysqli_query($con,$get_s);
        $row_edit = mysqli_fetch_array($run_edit);
        
        $s_id = $row_edit['idService'];
        $s_libelle = $row_edit['libelle'];
        $s_duree = $row_edit['duree'];
        $s_desc = $row_edit['description'];   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Modification Service </title>
</head>
<body>
    
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Modification Service
            </li>
        </ol>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
           <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-money fa-fw"></i> Modification Service 
               </h3>
           </div>
           <div class="panel-body">
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Libellé du Service </label> 
                      
                      <div class="col-md-6">
                          <input name="s_libelle" type="text" class="form-control" required value="<?php echo $s_libelle; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Duree du Service </label> 
                      <div class="col-md-6">
                          <input name="s_duree" type="time" class="form-control" required value="<?php echo $s_duree; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Service Descripton </label> 
                      <div class="col-md-6">
                          <textarea name="s_desc" cols="19" rows="6" class="form-control">
                              <?php echo $s_desc; ?>
                          </textarea>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"></label> 
                      <div class="col-md-6">
                          <input name="update" value="Modifier le Service" type="submit" class="btn btn-primary form-control">
                      </div>
                   </div>
               </form>
           </div>
        </div>
    </div>
</div>
    
</body>
</html>

<?php 

if(isset($_POST['update'])){
    
    $service_title = $_POST['s_libelle'];
    $service_duree = $_POST['s_duree'];
    $service_desc = $_POST['s_desc'];
    
    $update_service = "update services set libelle='$service_title',duree='$service_duree',description='$service_desc' where idService='$s_id'";

    $run_service = mysqli_query($con,$update_service);
    
    if($run_service){
       echo "<script>alert('Votre service a bien été mis à jour !')</script>"; 
       echo "<script>window.open('index.php?voir_service','_self')</script>"; 
    } 
}

?>

<?php } ?>