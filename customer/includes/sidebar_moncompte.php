<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <center>
            <img src="customer_images/profil_picture.jpg" alt="profil picture">
        </center>
        <br>
        <h3 align="center" class="panel-title">Timothy Gilles</h3>
    </div>
    
    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
            <li id="<?php if(isset($_GET['mes_informations'])){ echo "active"; } ?>">
                <a href="moncompte.php?mes_informations">
                <i class="fa fa-info-circle"></i> Mes informations</a>
            </li>
            <li id="<?php if(isset($_GET['mes_commandes'])){ echo "active"; } ?>">
                <a href="moncompte.php?mes_commandes">
                <i class="fa fa-list"></i> Mes Commandes</a>
            </li>
            <li id="<?php if(isset($_GET['mes_rdv'])){ echo "active"; } ?>">
                <a href="moncompte.php?mes_rdv">
                <i class="fa fa-calendar"></i> Mes Rendez-Vous</a>
            </li>
        </ul>
    </div>
</div>

<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        
    </div>
    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
            <li id="<?php if(isset($_GET['modif_info'])){ echo "active"; } ?>">
                <a href="moncompte.php?modif_info">
                <i class="fa fa-exchange"></i> Modifier mes Informations</a>
            </li>
            <li id="<?php if(isset($_GET['change_mdp'])){ echo "active"; } ?>">
                <a href="moncompte.php?change_mdp">
                <i class="fa fa-lock"></i> Changer votre MDP</a>
            </li>
            <li>
                <a href="components/deconnexion.php">
                <i class="fa fa-sign-out"></i> Deconnexion</a>
            </li>
            </ul>
    </div>
</div>

<div class="panel panel-default sidebar-menu">

    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
            <li id="<?php if(isset($_GET['supp_compte'])){ echo "active"; } ?>">
                <a href="moncompte.php?supp_compte">
                <i class="fa fa-trash"></i> Supprimer Mon Compte</a>
            </li>
        </ul>
    </div>
</div>