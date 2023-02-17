<?php


if(isset($_POST['id']) )
{
    $id = htmlspecialchars($_POST['id']);
    if(require("../config/connexion.php"))
    {


                        $delete = $access->prepare('DELETE FROM produit WHERE id=?'); 
                        $delete->execute(array($id));
                        $delete = $access->prepare('DELETE FROM nouveauarrivage WHERE id=?'); 
                        $delete->execute(array($id));
                    }
                } header('Location: index.php');
