<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['modifier_cat'])){
        
        $edit_id = $_GET['modifier_cat'];
        $get_s = "select * from categorie where idCat='$edit_id'";
        $run_edit = mysqli_query($con,$get_s);
        $row_edit = mysqli_fetch_array($run_edit);
        
        $c_id = $row_edit['idCat'];
        $c_libelle = $row_edit['libelle'];  
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Modification Catégorie </title>
</head>
<body>
    
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Modification Catégorie
            </li>
        </ol>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
           <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-money fa-fw"></i> Modification Catégorie
               </h3>
           </div>
           <div class="panel-body">
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Libellé de la catégorie </label> 
                      
                      <div class="col-md-6">
                          <input name="c_libelle" type="text" class="form-control" required value="<?php echo $c_libelle; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"></label> 
                      <div class="col-md-6">
                          <input name="update" value="Modifier la catégorie" type="submit" class="btn btn-primary form-control">
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
    
    $cat_title = $_POST['c_libelle'];
    
    $update_cat = "update categorie set libelle='$cat_title' where idCat='$c_id'";

    $run_cat = mysqli_query($con,$update_cat);
    
    if($run_cat){
       echo "<script>alert('Votre catégorie a bien été mis à jour !')</script>"; 
       echo "<script>window.open('index.php?voir_cat','_self')</script>"; 
    } 
}

?>

<?php } ?>