<?php

function ajouter($image, $nom, $prix, $annee, $kilo, $boite, $carburant)
{
if(require("connexion.php"))
{
 $req = $access->prepare("INSERT INTO produit (image, nom, prix, annee, kilometre, boite, carburant) VALUES ('$image', '$nom', '$prix', '$annee', '$kilo', '$boite', '$carburant')");

 $req->execute(array($image, $nom, $prix, $annee, $kilo, $boite, $carburant));

 $req->closeCursor();
}
}

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produit ORDER BY prix DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}



function supprimer($nom)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("DELETE FROM produit WHERE nom=?");
        $req->execute(array($nom));

        $req->closeCursor();

    }
}



function autodelete()
{
    if(require("connexion.php"))
    {
        $time = date('Y/m/d' , strtotime('-7 days'));

        $req = $access->prepare("DELETE FROM nouveauarrivage WHERE b_time<=?");
        $req->execute(array($time));

        $req->closeCursor();

    }
}

function Test()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM nouveauarrivage ORDER BY prix DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function afficherestimation()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM estimation ORDER BY nom DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

?>





