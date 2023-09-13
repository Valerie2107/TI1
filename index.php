<?php

if(isset($_GET['p'])){

    switch($_GET['p']){
        case 'form':
            include 'pages/contact.php';
            break;
        case 'cult':
            include 'pages/culture.php';
            break;
        case 'gal':
            include 'pages/galerie.php';
            break;
        case 'geo':
            include 'pages/geographie.php';
            break;
        case 'hist':
            include 'pages/histoire.php';
            break;
        case 'link':
            include 'pages/liens.php';
            break;
        default:
            include_once 'pages/accueil.php';
            break;            
    }
}else{
        include_once 'pages/accueil.php';
    }


