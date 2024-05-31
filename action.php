<?php
    function getDataPoints() {
    $dataPoints = array( 
        array("y" => 3373.64, "label" => "Germany" ),
        array("y" => 2435.94, "label" => "France" ),
        array("y" => 1842.55, "label" => "China" ),
        array("y" => 1828.55, "label" => "Russia" ),
        array("y" => 1039.99, "label" => "Switzerland" ),
        array("y" => 765.215, "label" => "Japan" ),
        array("y" => 612.453, "label" => "Netherlands" )
    );
    echo json_encode($dataPoints, JSON_NUMERIC_CHECK);
    }

    function saveFormData() {
    $file = "data.txt";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $bird = $_POST["bird"];
    $anim = $_POST["anim"];
    $rept = $_POST["rept"];
    $amph = $_POST["amph"];
    $arth = $_POST["arth"];
    $moll = $_POST["moll"];
    $other = $_POST["other"];
    $mamm = $_POST["mamm"];
    $fish = $_POST["fish"];

    if (isset($name, $email, $age, $bird, $anim, $rept, $amph, $arth, $moll, $other, $mamm, $fish)) {
        $fp = fopen($file, "a+");
        $txt = "Name: " . $name . "\nEmail: " . $email . "\nAge: " . $age . "\nFavorite Animal: " . $anim . "\nFavorite Bird: " . $bird . "\nFavorite Mammal: " . $mamm . "\nFavorite Reptile: " . $rept . "\nFavorite Amphibian: " . $amph . "\nFavorite Arthropod: " . $arth . "\nFavorite Mollusk: " . $moll . "\nFavorite Fish: " . $fish . "\nFavorite Animal Unlisted: " . $other . "\n\n";
        fwrite($fp, $txt);
        fclose($fp);
        header("Location: index.php");
        exit();
    } 
    else {
        echo json_encode(array("error" => "Missing form data"));
    }
    }

    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {
    case 'getDataPoints':
        getDataPoints();
        break;

    case 'saveFormData':
        saveFormData();
        break;
    
    case 'readPop':
        readPop();
        break;

    default:
        echo json_encode(array("error" => "Invalid action"));
        break;
    }
?>