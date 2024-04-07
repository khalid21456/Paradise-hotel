<?php    
    $bool = true;
    if(!preg_match("/^[[:alpha:]]+$/",$nom)) {
        echo "<script>";
        echo "alert('nom invalide !')";
        echo "</script>";
        $bool = false;
    }
    if(!preg_match("/^[[:alpha:]]+$/",$prenom)) {
        echo "<script>";
        echo "alert('prenom invalide !')";
        echo "</script>";
        $bool = false;
    }
    if(!preg_match("/^[[:alpha:]]{1,2}[[:digit:]]{5}$/",$cin)) {
        echo "<script>";
        echo "alert('cin invalide !')";
        echo "</script>";
        $bool = false;
    }
    if(!preg_match("/^[[:alnum:]]+(@)[[:alpha:]]{3,5}(.)[[:alpha:]]{2,3}$/",$email)) {
        echo "<script>";
        echo "alert('email invalide !')";
        echo "</script>";
        $bool = false;
    }
    if(!preg_match("/^[0-9]{10}$/",$tele)) {
        echo "<script>";
        echo "alert('numéro de téléphone invalide !')";
        echo "</script>";
        $bool = false;
    }
?>