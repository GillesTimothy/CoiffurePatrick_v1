<div id="navbar" class="navbar navbar-default fixed">
        <div class="container">
            <div class="navbar-header">
                <a href="../index.php" class="navbar-brand home">
                <img src="images/125X55.png" alt="logo" class="hidden-xs">
                    <img src="images/83X33.png" alt="logo mobile" class="visible-xs">
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-user"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li>
                            <a href="../index.php">Accueil</a>
                        </li>
                        <li>
                            <a href="../rdv.php?form_rdv">Rendez-Vous</a>
                        </li>
                        <li>
                            <a href="../boutique.php">Boutique</a>
                        </li>
                        <li class="active">
                            <a href="moncompte.php?mes_informations">Mon Compte</a>
                        </li>
                    </ul>
                </div>

                <a href="../panier.php" id="btn-primary" class="btn navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> - Mon Panier </span>
                </a>

                <div class="navbar-collapse collapse right">
                    <button class="btn navbar-btn" id="btn-primary" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-user"></i>
                    </button>
                </div>
                
                <div class="collapse clearfix" id="search">
                    <form method="get" action="results.php" class="navbar-form">
                        <div class="input-group">

                            <a href="../deconnexion.php" id="btn-primary" class="btn navbar-btn right">
                            <i class="fa fa-sign-out"></i>
                            <span>Deconnexion</span>
                            </a>

                            <a href="moncompte.php?mes_rdv" id="btn-primary" class="btn navbar-btn right">
                            <i class="fa fa-user"></i>
                            <span>Mes Rendez-vous</span>
                            </a>

                            <a href="moncompte.php?mes_commandes" id="btn-primary" class="btn navbar-btn right">
                            <i class="fa fa-user"></i>
                            <span>Mes commandes</span>
                            </a>

                            <a href="moncompte.php?mes_informations" id="btn-primary" class="btn navbar-btn right">
                            <i class="fa fa-user"></i>
                            <span>Mon Profil</span>
                            </a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>