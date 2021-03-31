<center>
    <h1> Modifier Mes Informations </h1>
    <p class="lead"> </p>
    <p class="text-muted">
    Si vous avez la moindre question concernant la modification de vos données personnelles, merci de nous contacter via le lien suivant : <a href="../contact.php"> contact </a>
    </p>
</center>

<br>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> Nom : </label>
        <input type="text" name="c_name" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label> Prenom : </label>
        <input type="text" name="c_name2" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label> Email : </label>
        <input type="text" name="c_email" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label> Adresse : </label>
        <input type="text" name="c_adresse" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label> Telephone : </label>
        <input type="text" name="c_tel" class="form-control" require></input>
    </div>
    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-edit"></i> Mettre à jour
        </button>
    </div>
</form>