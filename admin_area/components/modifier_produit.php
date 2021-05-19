<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['modifier_produit'])){
        
        $edit_id = $_GET['modifier_produit'];
        $get_p = "select * from produits where idProduit='$edit_id'";
        $run_edit = mysqli_query($con,$get_p);
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['idProduit'];
        $p_title = $row_edit['libelle'];
        $p_cat = $row_edit['pCategorieId'];
        $cat = $row_edit['categorieId'];
        $p_image1 = $row_edit['produitImage1'];
        $p_image2 = $row_edit['produitImage2'];
        $p_image3 = $row_edit['produitImage3'];
        $p_price = $row_edit['prix'];
        $p_desc = $row_edit['description'];
        
    }
        
        $get_p_cat = "select * from categorie_produit where idCategorie='$p_cat'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['libelle'];
        
        $get_cat = "select * from categorie where idCat='$cat'";
        $run_cat = mysqli_query($con,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['libelle'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Modification Produit </title>
</head>
<body>
    
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Modification Produit
            </li>
        </ol>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
           <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-money fa-fw"></i> Modification Produit 
               </h3>
           </div>
           <div class="panel-body">
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Libellé du Produit </label> 
                      
                      <div class="col-md-6">
                          <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Catégorie du Produit </label> 
                      <div class="col-md-6">
                          <select name="product_cat" class="form-control">
                              <option value="<?php echo $p_cat; ?>"> <?php echo $p_cat_title; ?> </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from categorie_produit";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['idCategorie'];
                                  $p_cat_title = $row_p_cats['libelle'];
                                  
                                  echo "<option value='$p_cat_id'> $p_cat_title </option>";
                              }
                              
                              ?>
                              
                          </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Catégorie Globale </label> 
                      <div class="col-md-6">
                          <select name="cat" class="form-control">
                              <option value="<?php echo $cat; ?>"> <?php echo $cat_title; ?> </option>
                              
                              <?php 
                              
                              $get_cat = "select * from categorie";
                              $run_cat = mysqli_query($con,$get_cat);
                              
                              while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                  $cat_id = $row_cat['idCat'];
                                  $cat_title = $row_cat['libelle'];
                                  
                                  echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Produit Image 1 </label> 
                      <div class="col-md-6">
                          <input name="product_img1" type="file" class="form-control" required>
                          <br>
                          <img width="70" height="70" src="product_images/<?php echo $p_image1; ?>" alt="<?php echo $p_image1; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Produit Image 2 </label> 
                      <div class="col-md-6">
                          <input name="product_img2" type="file" class="form-control">
                          <br>
                          <img width="70" height="70" src="product_images/<?php echo $p_image2; ?>" alt="<?php echo $p_image2; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Produit Image 3 </label> 
                      <div class="col-md-6">
                          <input name="product_img3" type="file" class="form-control form-height-custom">
                          <br>
                          <img width="70" height="70" src="product_images/<?php echo $p_image3; ?>" alt="<?php echo $p_image3; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Prix du Produit </label> 
                      <div class="col-md-6">
                          <input name="product_prix" type="text" class="form-control" required value="<?php echo $p_price; ?>">
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Produit Descripton </label> 
                      <div class="col-md-6">
                          <textarea name="product_desc" cols="19" rows="6" class="form-control">
                              <?php echo $p_desc; ?>
                          </textarea>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"></label> 
                      <div class="col-md-6">
                          <input name="update" value="Modifier le Produit" type="submit" class="btn btn-primary form-control">
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
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_prix'];
    $product_desc = $_POST['product_desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $update_product = "update produits set pCategorieId='$product_cat',categorieId='$cat',date=NOW(),libelle='$product_title',produitImage1='$product_img1',produitImage2='$product_img2',produitImage3='$product_img3',description='$product_desc',prix='$product_price' where idProduit='$p_id'";

    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
       echo "<script>alert('Votre produit a bien été mis à jour !')</script>"; 
       echo "<script>window.open('index.php?voir_produit','_self')</script>"; 
    } 
}

?>

<?php } ?>