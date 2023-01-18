<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData () {
    $json = file_get_contents('../data/user.json');
    $obj = json_decode($json);

    if(isset($_GET['page']) && $_GET['page'] == "bio") {
        echo '<br>';
        echo "<p>Nom : " . $obj->name . "<br>";
        echo "<p>Prénom : " . $obj->first_name . "<br>";
        echo "<p>Occupation : " . $obj->occupation . "<br><br>";

        echo'<p> Experiences <br>';
        foreach ($obj->experiences as $value){
            print_r($value->year . " : " . $value->company . "<br>");
        }
    }
}
