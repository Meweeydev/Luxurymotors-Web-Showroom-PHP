<?php

require("config/commande.php");

if(isset($_POST['nom']) && isset($_POST['annee']) && isset($_POST['killometrage']) && isset($_POST['boite']) && isset($_POST['carburant']) && isset($_POST['prix']) && isset($_POST['image']) && isset($_POST['image2']) && isset($_POST['image3']) && isset($_POST['image4']) && isset($_POST['marque']) && isset($_POST['couleur']) ) 
{
    $nom = htmlspecialchars($_POST['nom']);
    $annee = htmlspecialchars($_POST['annee']);
    $killometrage = htmlspecialchars($_POST['killometrage']);
    $boite = htmlspecialchars($_POST['boite']);
    $carburant = htmlspecialchars($_POST['carburant']);
    $prix = htmlspecialchars($_POST['prix']);
    $image = htmlspecialchars($_POST['image']);
    $image2 = htmlspecialchars($_POST['image2']);
    $image3 = htmlspecialchars($_POST['image3']);
    $image4 = htmlspecialchars($_POST['image4']);
    $marque = htmlspecialchars($_POST['marque']);
    $couleur = htmlspecialchars($_POST['couleur']);

    if(require("config/connexion.php"))
    {


                        $insert = $access->prepare('INSERT INTO estimation(nom, annee, kilometre, boite, carburant, prix, image,image2, image3, image4, marque, couleur) VALUES(:nom, :annee, :kilometre, :boite, :carburant, :prix, :image, :image2, :image3, :image4, :marque, :couleur)'); 
                        $insert->execute(array(
                            'nom' => $nom,
                            'annee' => $annee,
                            'kilometre' => $killometrage,
                            'boite' => $boite,
                            'carburant' => $carburant,
                            'prix' => $prix,
                            'image' => $image,
                            'image2' => $image2,
                            'image3' => $image3,
                            'image4' => $image4,
                            'marque' => $marque,
                            'couleur' => $couleur,


                          
                        )
                        
               
                      
                    );
                  
                    }
                } header('Location: ventevehicules.php');
