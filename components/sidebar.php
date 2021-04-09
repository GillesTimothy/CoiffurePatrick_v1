<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Catégories de Produit</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            <?php 
                $get_productCat = "select * from  categorie_produit";
                    $run_productCat = mysqli_query($con,$get_productCat);
                    while($row_productCat = mysqli_fetch_array($run_productCat)) {

                        $produitCat_id = $row_productCat['idCategorie'];
                        $produitCat_libelle = $row_productCat['libelle'];
                        echo "
                            <li>
                                <a href='boutique.php/pCat_id=$produitCat_id'>
                                    $produitCat_libelle
                                </a>
                            </li>
                        ";    
                            
                    }
                ?>
        </ul>

    </div>
</div>
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Catégories</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            <?php 
                    $get_cat = "select * from  categorie";
                        $run_cat = mysqli_query($con,$get_cat);
                        while($row_cat = mysqli_fetch_array($run_cat)) {

                            $cat_id = $row_cat['idCat'];
                            $cat_libelle = $row_cat['libelle'];       
                            echo "
                                <li>
                                    <a href='boutique.php/cat_id=$cat_id'>
                                        $cat_libelle
                                    </a>
                                </li>
                            ";    
                                
                        }
                    ?>
        </ul>

    </div>
</div>
