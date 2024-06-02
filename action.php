<?php
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
            header("Location: data.php");
            exit();
        } 
        else {
            echo json_encode(array("error" => "Missing form data"));
        }
    }

    function readData($filename) {
        $data = [];
        if (file_exists($filename)) {
            $file = fopen($filename, 'r');
            $currentFavoriteAnimal = null;
            while (($line = fgets($file)) !== false) {
                $line = trim($line);
                if (strpos($line, 'Favorite Animal:') !== false) {
                    $currentFavoriteAnimal = trim(substr($line, strlen('Favorite Animal:')));
                    if ($currentFavoriteAnimal !== '') {
                        if (!isset($data[$currentFavoriteAnimal])) {
                            $data[$currentFavoriteAnimal] = 0;
                        }
                        $data[$currentFavoriteAnimal]++;
                    }
                }
            }
            fclose($file);
        }
        return $data;
    }
    
    $action = isset($_GET['action']) ? $_GET['action'] : '';
    
    switch ($action) {
        case 'saveFormData':
            saveFormData();
            break;

        case 'readData':
            $filename = 'data.txt';
            $data = readData($filename);
            echo json_encode($data);
            break;
    
        default:
            echo json_encode(array("error" => "Invalid action"));
            break;
    }
?>