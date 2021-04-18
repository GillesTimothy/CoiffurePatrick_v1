<center>
    <h1> Mes Informations </h1>
    <p class="lead"> </p>
    <p class="text-muted">
    Vos informations ne sont visible uniquement par vous et votre coiffeur dans le cadre d'une prise de rendez-vous, ou d'une commande sur notre boutique. Ces informations peuvent être modifié à tout moment et supprimer si vous le souhaitez.
    </p>
</center>

<br>


<form action="" enctype="multipart/form-data">
    <div class="form-group">
        <label> Nom : </label>
        <input type="text" disabled="disabled" name="c_name" class="form-control" value="<?php echo $_SESSION['utilisateur_nom']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Prenom : </label>
        <input type="text" disabled="disabled" name="c_name" class="form-control" value="<?php echo $_SESSION['utilisateur_prenom']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Email : </label>
        <input type="text" disabled="disabled" name="c_name" class="form-control" value="<?php echo $_SESSION['utilisateur_email']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Adresse : </label>
        <input type="text" disabled="disabled" name="c_name" class="form-control" value="<?php echo $_SESSION['utilisateur_adresse']; ?>" require></input>
    </div>
    <div class="form-group">
        <label> Telephone : </label>
        <input type="text" disabled="disabled" name="c_name" class="form-control" value="<?php echo $_SESSION['utilisateur_telephone']; ?>" require></input>
    </div>
    
</form>