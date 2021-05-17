<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button>
        
        <a href="index.php?dashboard" class="navbar-brand">Dashboard</a>
        
    </div>
    
    <ul class="nav navbar-right top-nav">
        
        <li class="dropdown">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                <i class="fa fa-user"></i> Coiffeur <b class="caret"></b>
                
            </a>
            
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?user_profile">
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a>
                </li>
                
                <li>
                    <a href="index.php?view_products">
                        
                        <i class="fa fa-fw fa-envelope"></i> Products
                        
                        <span class="badge">7</span>
                        
                    </a>
                </li>
                
                <li>
                    <a href="index.php?view_customers">
                        
                        <i class="fa fa-fw fa-users"></i> Customeres
                        
                        <span class="badge">11</span>
                        
                    </a>
                </li>
                
                <li>
                    <a href="index.php?view_cats">
                        
                        <i class="fa fa-fw fa-gear"></i> Product Categories
                        
                        <span class="badge">4</span>
                        
                    </a>
                </li>
                
                <li class="divider"></li>
                
                <li>
                    <a href="logout.php">
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a>
                </li>
                
            </ul>
            
        </li>
        
    </ul>
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                        
                        <i class="fa fa-fw fa-tag"></i> Produits
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="products" class="collapse">
                    <li>
                        <a href="index.php?insert_product">ajouter produit</a>
                    </li>
                    <li>
                        <a href="index.php?view_products">voir produits</a>
                    </li>
                    <li>
                        <a href="index.php?insert_p_cat">ajouter catégorie</a>
                    </li>
                    <li>
                        <a href="index.php?view_p_cats">voir catégories</a>
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
                        <a href="index.php?insert_product">ajouter service</a>
                    </li>
                    <li>
                        <a href="index.php?view_products">voir services</a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                        
                        <i class="fa fa-fw fa-book"></i> Categories
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="cat" class="collapse">
                    <li>
                        <a href="index.php?insert_cat"> Insert Category </a>
                    </li>
                    <li>
                        <a href="index.php?view_cats"> View Categories </a>
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
                    <i class="fa fa-fw fa-users"></i>Clients
                </a>
            </li>
            
            <li>
                <a href="index.php?view_orders">
                    <i class="fa fa-fw fa-book"></i>Commandes
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
                        <a href="index.php?view_users">voir utilisateurs</a>
                    </li>
                    <li>
                        <a href="index.php?user_profile">option</a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i>Déconnexion
                </a>
            </li>
            
        </ul>
    </div>
    
</nav>