<?php
session_start();
$con= mysqli_connect("localhost","root","","testcoiffurepatrick");
include("functions/functions.php");

if(isset($_SESSION['utilisateur_prenom'])){
    if($_SESSION['utilisateur_statut'] == 'Actif'){
        $ip_add = getRealIpUser();
        $get_panier = "select * from panier where ip_add = '$ip_add'";
        $run_panier = mysqli_query($con, $get_panier);
        $count = mysqli_num_rows($run_panier);
        $total_panier = 0;
        while($row_panier = mysqli_fetch_array($run_panier)){
            $pro_id = $row_panier['produitId'];
            $pro_quantite = $row_panier['quantite'];
            $get_produit = "select * from produits where idProduit = '$pro_id' ";
            $run_produit = mysqli_query($con, $get_produit);
            while($row_produit = mysqli_fetch_array($run_produit)){
                $produit_prix = $row_produit['prix'];
                $sous_total = $row_produit['prix']*$pro_quantite;
                $total_panier += $sous_total;
            }
        }
        $c_utilisateur_id = $_SESSION['utilisateur_ID'];
        $c_statut = "attente d acceptation";
        $c_numero = mt_rand();
        $c_total = $total_panier;

        if($count != 0){ 
            $insert_commande = "insert into commande (utilisateurId, numero, prixTotal, statut, date) values ('$c_utilisateur_id', '$c_numero', '$c_total', '$c_statut', NOW())";
            $run_commande = mysqli_query($db, $insert_commande);

            $contenu_numero_commande = $c_numero;
            $get_panier = "select * from panier where ip_add = '$ip_add'";
            $run_panier = mysqli_query($con, $get_panier);
            while($row_panier = mysqli_fetch_array($run_panier)){
                $pro_id = $row_panier['produitId'];
                $pro_quantite = $row_panier['quantite'];
                $get_produit = "select * from produits where idProduit = '$pro_id' ";
                $run_produit = mysqli_query($con, $get_produit);
                while($row_produit = mysqli_fetch_array($run_produit)){
                    $stock = $row_produit['stock'];
                    $produit_prix = $row_produit['prix'];
                    $sous_total = $row_produit['prix']*$pro_quantite; 
                    $stock_article = $stock - $pro_quantite;
                }
                if($stock_article >= 1 ){
                    $insert_contenu_commande = "insert into contenu_commande (numeroCommande, idArticle, sousTotal, quantite) values ('$contenu_numero_commande', '$pro_id', '$sous_total', '$pro_quantite')";
                    $run_contenu_commande = mysqli_query($db, $insert_contenu_commande); 
                    $modif_stock_article =  "update produits set stock='$stock_article' where idProduit='$pro_id'";
                    $run_modif_stock_article = mysqli_query($con,$modif_stock_article);
                    if($run_modif_stock_article){
                        echo '<script>alert("ok stock.");</script>';
                    }  
                }
                else{
                    echo '<script>alert("stock aticle insufisant !");</script>';
                    $pro_quantite = $stock;
                    echo '<script>alert("la quantit?? a ??t?? adapt?? ?? nos stock !");</script>';
                    $insert_contenu_commande = "insert into contenu_commande (numeroCommande, idArticle, sousTotal, quantite) values ('$contenu_numero_commande', '$pro_id', '$sous_total', '$pro_quantite')";
                    $run_contenu_commande = mysqli_query($db, $insert_contenu_commande); 
                    
                    $modif_stock_article =  "update produits set stock=0 where idProduit='$pro_id'";
                    $run_modif_stock_article = mysqli_query($con,$modif_stock_article);

                    $modif_statut_article =  "update produits set statut='Bientot Disponible' where idProduit='$pro_id'";
                    $run_modif_statut_article = mysqli_query($con,$modif_statut_article);
                }
            }

            if($run_commande) {
                
                echo '<script>alert("commande enregistrer.");</script>';
                $vide_panier = "DELETE FROM panier where ip_add = '$ip_add'";
                $run_vide_panier = mysqli_query($db, $vide_panier);
                echo '<script>window.open("boutique.php","_self")</script>';
            }

            else {
                echo 'erreur insertion bdd';
            }
        
        }

        else {
            echo '<script>alert("Votre panier est vide.")</script>';
            echo '<script>window.open("boutique.php","_self")</script>';
        }
    }
    elseif($_SESSION['utilisateur_statut'] == 'En attente') { 
        echo '<script>alert("Votre compte est en attente de validation.")</script>';
        echo '<script>window.open("index.php","_self")</script>';
    }
    elseif($_SESSION['utilisateur_statut'] == 'Bloque') { 
        echo '<script>alert("Votre compte est bloqu?? !")</script>';
        echo '<script>window.open("index.php","_self")</script>';
    }

}

else {
    echo '<script>alert("Merci de vous connecter pour passer commande sur notre site.")</script>';
    echo '<script>window.open("connexion.php","_self")</script>';
}

?>
