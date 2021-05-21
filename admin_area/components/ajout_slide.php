<?php
    include ("includes/db.php");

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {
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
                    <i class="fa fa-dashboard"></i> Dashboard / Insertion Slides
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insertion Slides
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Nom de la slide </label>
                            <div class="col-md-6">
                                <input name="slide_title" type="text" class="form-control" required>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Slide Image </label> 
                            <div class="col-md-6">
                                <input name="slide_img" type="file" class="form-control" required>
                            </div>
                       
                        </div>
                   
                        

                        <div class="form-group">
                            <label class="col-md-3 control-label">  </label>
                            <div class="col-md-6">
                                <input name="submit" type="submit" class="btn btn-primary form-control" value="Ajouter l' Image" required>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-info fa-fw"></i> Informations Complémentaires
                    </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Taille Images Slides</label> 
                            <div class="col-md-6">
                                <input type="text" disabled="disabled" class="form-control" value=" 1200 x 534 px" require></input>
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
    
    $slide_title = $_POST['slide_title'];
    
    $slide_img = $_FILES['slide_img']['name'];
    
    $temp_name1 = $_FILES['slide_img']['tmp_name'];
    
    move_uploaded_file($temp_name1,"slides_images/$slide_img");

    $insert_slide = "insert into carousel (slide_nom, slide_image) values ('$slide_title', '$slide_img')";
    
    $run_slide = mysqli_query($con,$insert_slide);
    
    if($run_slide){
        
        echo "<script>alert('L image a été ajouté avec succès !')</script>";
        echo "<script>window.open('index.php?voir_slide','_seft')</script>";
        
    }
    
}

?>

<?php } ?>