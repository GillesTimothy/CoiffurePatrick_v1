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
                        <a href="index.php?insert_cat"> ajouter catégorie produits </a>
                    </li>
                    <li>
                        <a href="index.php?view_cats"> voir catégories produits  <span class="badge"><?php echo $count_categorie_produit; ?></span></a>
                    </li>
                    <li>
                        <a href="index.php?insert_p_cat">ajouter catégorie</a>
                    </li>
                    <li>
                        <a href="index.php?view_p_cats">voir catégories  <span class="badge"><?php echo $count_categorie; ?></span></a>
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
                        <a href="index.php?insert_slide">ajouter slide </a>
                    </li>
                    <li>
                        <a href="index.php?view_slides">voir slides </a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="index.php?view_customers">
                    <i class="fa fa-fw fa-users"></i>Clients  <span class="badge"><?php echo $count_utilisateur; ?></span>
                </a>
            </li>
            
            <li>
                <a href="index.php?view_orders">
                    <i class="fa fa-fw fa-book"></i>Commandes  <span class="badge"><?php echo $count_commande; ?></span>
                </a>
            </li>
            
            <li>
                <a href="index.php?view_rdv">
                    <i class="fa fa-fw fa-money"></i>Rendez-vous 
                </a>
            </li>

            <li>
                <a href="index.php?view_dispo">
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
                        <a href="index.php?insert_user">ajouter utilisateur</a>
                    </li>
                    <li>
                        <a href="index.php?view_users">voir utilisateurs  <span class="badge"><?php echo $count_admin; ?></span></a>
                    </li>
                    <li>
                        <a href="index.php?user_profile">option</a>
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
                        <a href="index.php?arrivage">arrivage produits</a>
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