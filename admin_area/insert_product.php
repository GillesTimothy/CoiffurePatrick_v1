<?php
    include ("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coiffure Patrick Dashboard</title>
    <link rel="icon" href="images/" type="image/x-icon" />

    <link rel="stylesheet" href="css/bootstrap-337.min.css"> 
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Insertion Produits
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insertion Produits
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Libellé du Produit </label>
                            <div class="col-md-6">
                                <input name="product_title" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Catégorie du Produit </label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option>Sélectionner une catégorie pour le produit </option>
                                    <?php
                                        $get_p_cat = "select * from categorie_produit";
                                        $run_p_cat = mysqli_query($con, $get_p_cat);

                                        while ($row_p_cat = mysqli_fetch_array($run_p_cat)) {
                                            $p_cat_id = $row_p_cat['idCategorie'];
                                            $p_cat_libelle = $row_p_cat['libelle'];

                                            echo "
                                                <option value='$p_cat_id'> $p_cat_libelle </option>
                                            ";                                      
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Catégorie Globale </label>
                            <div class="col-md-6">
                                <select name="cat" class="form-control">
                                    <option>Sélectionner une 2ème catégorie pour le produit </option>
                                    <?php
                                        $get_cat = "select * from categorie";
                                        $run_cat = mysqli_query($con, $get_cat);

                                        while ($row_cat = mysqli_fetch_array($run_cat)) {
                                            $cat_id = $row_cat['idCat'];
                                            $cat_libelle = $row_cat['libelle'];

                                            echo "
                                                <option value='$cat_id'> $cat_libelle </option>
                                            ";                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Produit Image 1 </label> 
                            <div class="col-md-6">
                                <input name="product_img1" type="file" class="form-control" required>
                            </div>
                       
                        </div>
                   
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Produit Image 2 </label> 
                            <div class="col-md-6">
                                <input name="product_img2" type="file" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Produit Image 3 </label> 
                            <div class="col-md-6">
                                <input name="product_img3" type="file" class="form-control form-height-custom" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Prix du Produit </label>
                            <div class="col-md-6">
                                <input name="product_prix" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Produit Descripton </label>
                            <div class="col-md-6">
                                <textarea name="product_desc" id="" cols="19" rows="6" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">  </label>
                            <div class="col-md-6">
                                <input name="submit" type="submit" class="btn btn-primary form-control" value="Ajouter le Produit" required>
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

if(isset($_POST['submit'])){
    
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
    
    $insert_product = "insert into produits (pCategorieId, categorieId, date, libelle, produitImage1, produitImage2, produitImage3, prix, description) values ('$product_cat','$cat', NOW(), '$product_title', '$product_img1', '$product_img2', '$product_img3', '$product_price', '$product_desc')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Le produit a été ajouté avec succès !')</script>";
        echo "<script>window.open('insert_product.php','_seft')</script>";
        
    }
    
}

?>