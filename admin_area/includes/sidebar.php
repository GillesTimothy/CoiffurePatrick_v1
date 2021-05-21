<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

            <span class="sr-only">Toggle Navigation</span>           
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>           
        </button>      
        <a href="index.php?dashboard" class="navbar-brand">Dashboard Coiffeur</a>
            
    </div> 
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                        
                        <i class="fa fa-fw fa-tag"></i> Produits
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="products" class="collapse">
                    <li>
                        <a href="index.php?ajout_produit">ajouter produit</a>
                    </li>
                    <li>
                        <a href="index.php?voir_produit">voir produits  <span class="badge"><?php echo $count_products; ?></span></a>
                        
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#services">
                        
                        <i class="fa fa-fw fa-edit"></i> Services
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="services" class="collapse">
                    <li>
                        <a href="index.php?ajout_service">ajouter service</a>
                    </li>
                    <li>
                        <a href="index.php?voir_service">voir services <span class="badge"><?php echo $count_services; ?></span></a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                        
                        <i class="fa fa-fw fa-book"></i> Catégories
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="cat" class="collapse">
                    <li>
                        <a href="index.php?ajout_p_cat"> ajouter catégorie produits </a>
                    </li>
                    <li>
                        <a href="index.php?ajout_cat">ajouter catégorie</a>
                    </li>
                    <li>
                        <a href="index.php?voir_cat">voir catégories <span class="badge"><?php echo $count_categorie_produit; ?></span>   <span class="badge"><?php echo $count_categorie; ?></span></a>
                    </li>
                </ul>

            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#slides">
                        
                        <i class="fa fa-fw fa-gear"></i>Images
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="slides" class="collapse">
                    <li>
                        <a href="index.php?ajout_slide">ajouter slide </a>
                    </li>
                    <li>
                        <a href="index.php?voir_slide">voir slides <span class="badge"><?php echo $count_slide; ?></span></a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="index.php?voir_client">
                    <i class="fa fa-fw fa-users"></i>Clients  <span class="badge"><?php echo $count_utilisateur; ?></span>
                </a>
            </li>
            
            <li>
                <a href="index.php?voir_commande">
                    <i class="fa fa-fw fa-book"></i>Commandes  <span class="badge"><?php echo $count_commande; ?></span>
                </a>
            </li>
            
            <li>
                <a href="index.php?voir_rdv">
                    <i class="fa fa-fw fa-money"></i>Rendez-vous 
                </a>
            </li>

            <li>
                <a href="index.php?voir_disponibilite">
                    <i class="fa fa-fw fa-calendar"></i>Disponibilités  
                </a>
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                        
                        <i class="fa fa-fw fa-users"></i>Utilisateurs
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                <ul id="users" class="collapse">
                    <li>
                        <a href="index.php?ajout_utilisateur">ajouter utilisateur</a>
                    </li>
                    <li>
                        <a href="index.php?voir_utilisateur">voir utilisateurs  <span class="badge"><?php echo $count_admin; ?></span></a>
                    </li>
                    <li>
                        <a href="index.php?utilisateur_option">option</a>
                    </li>
                </ul>
                
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#fournisseur">
                        
                        <i class="fa fa-truck"></i> Fournisseurs
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                <ul id="fournisseur" class="collapse">
                    <li>
                        <a href="index.php?arrivage_produit">arrivage produits</a>
                    </li>
                    <li>
                        <a href="index.php?voir_stock">stock critique</a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i>Déconnexion
                </a>
            </li>

            <li class=sess-info>
                <p>
                    <i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['admin_email']; ?>
                </p>
            </li>
            
        </ul>
    </div>
    
</nav>

<?php } ?>