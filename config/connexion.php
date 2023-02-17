<?php 
    try

    {
        $access = new PDO('mysql:host=localhost:3306;dbname=luxurymotors;charset=utf8', 'root', '');
    } catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }

    ?>