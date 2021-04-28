<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL & ~E_NOTICE);
require 'classProducts.php';
$streetSession = $numberSession = $citySession = $zipcodeSession =  "";
if (isset($_POST['street'])) {
    $street = $_POST['street'];
}
if (isset($_POST['streetnumber'])) {
    $streetnumber = $_POST['streetnumber'];
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}
if (isset($_POST['zipcode'])) {
    $zipcode = $_POST['zipcode'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['checkbox'])) {
    $checkbox = $_POST['checkbox'];
}
$SelectedProducts = array();
$amount = array();


$totalValue = 0;
$date = "";
$total = 0;

/*$products = [
    ['name' => 'Apple Cake', 'img' => 'apple.jpg', 'description' => 'sdfdsds', 'price' => 2.5,],
    ['name' => 'Carrot Cake', 'img' => 'carrot.jpg', 'description' => 'sdfdsds', 'price' => 3],
    ['name' => 'Cherry Cake', 'img' => 'cherry.jpg', 'description' => 'sdfdsds', 'price' => 1.75],
    ['name' => 'Chocolate Cake', 'img' => 'choco.jpg', 'description' => 'sdfdsds', 'price' => 2.5],
    ['name' => 'Lemon Cake', 'img' => 'lemon.jpg', 'description' => 'sdfdsds', 'price' => 3],
    ['name' => 'Orange Cake', 'img' => 'orange.jpg', 'description' => 'sdfdsds', 'price' => 2],
    ['name' => 'Plum Cake', 'img' => 'plum.jpg', 'description' => 'sdfdsds', 'price' => 1.5],
    ['name' => 'Strawberries Cake', 'img' => 'strawberries.jpg', 'description' => 'sdfdsds', 'price' => 2.5],
    ['name' => 'Blueberries Cake', 'img' => 'blueberries.jpg', 'description' => 'sdfdsds', 'price' => 3],
    ['name' => 'Caramel Cake', 'img' => 'caramel.jpg', 'description' => 'sdfdsds', 'price' => 2]
];*/
$products =[

    new products ('Apple Cake', 'apple.jpg','2.5'),
    new products ('Carrot Cake', 'carrot.jpg','3'),
    new products ('Cherry Cake', 'cherry.jpg','1.75'),
    new products ('Chocolate Cake', 'choco.jpg','2.5'),
    new products ('Lemon Cake', 'lemon.jpg','3'),
    new products ('Orange Cake', 'orange.jpg','2'),
    new products ('Plum Cake', 'plum.jpg','1.5'),
    new products ('Strawberries Cake', 'strawberries.jpg','2.5'),
    new products ('Blueberries Cake', 'blueberries.jpg','3'),
    new products ('Caramel Cake', 'caramel.jpg','2'),

];

// We are going to use session variables so we need to enable sessions
session_start();

if (isset ($_POST['submit'])) {
    if ($_POST['street'] != "" && $_POST['streetnumber'] != "" && $_POST['city'] != "" && $_POST['zipcode'] != "") {// that will start the session
        $_SESSION['street'] = $_POST['street'];
        $_SESSION['streetnumber'] = $_POST['streetnumber'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['zipcode'] = $_POST['zipcode'];
    }
}
if (!isset($_POST['$streetSession'])) {

    $streetSession = $_SESSION['street'];
} else {

}
if (!isset($_POST['$numberSession'])) {
    $numberSession = $_SESSION['streetnumber'];
} else {

}
if (!isset($_POST['$citySession'])) {
    $citySession = $_SESSION['city'];
} else {

}
if (!isset($_POST['$zipcodeSession'])) {
    $zipcodeSession = $_SESSION['zipcode'];
} else {

}


//$streetSession = $_SESSION['street'];
//$numberSession = $_SESSION['streetnumber'];
//$citySession = $_SESSION['city'];
//$zipcodeSession = $_SESSION['zipcode'];
// Use this function when you need to need an overview of these variables
function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

function validate_zipcode($Zipcode)
{
    if (preg_match('/^[0-9]{4}$/', $Zipcode)) {
        return true;
    } else {
        return false;
    }
}

function validate_email($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        return true;

    } else {
        return false;
    }
}


//for ($i =0 ; $i <= count($SelectedProducts); $i++){
//
//    echo $SelectedProducts[$i]."</br>";
//}


?>

    <style type="text/css">.confirm {
            display: none;
        }</style>
<?php
$emailErr = $streetErr = $streetnumberErr = $cityErr = $zipcodeErr = $checkErr = $deliveryErr = "";
$prevEmail = $prevStreet = $prevStreetNum = $prevCity = $prevZipCode = "";

/*$prevStreet = $prevStreetNum = $prevCity = $prevZipCode = $prevEmail = "";*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $values = [$email,
        $street,
        $streetnumber,
        $city,
        $zipcode];
    if (empty($_POST["street"]) || empty($_POST["streetnumber"]) || empty($_POST["city"]) ||
        empty($_POST["zipcode"]) || empty($_POST["email"]) || empty($_POST["products"]) ||
        (!validate_email($email)) || (!validate_zipcode($zipcode) || (empty($_POST["standard"]) && empty($_POST["fast"])))) {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";


        } else if (!validate_email($email)) {
            $emailErr = "Invalid email format";
            $prevStreetNum = $streetnumber;
            $prevStreet = $street;
        }
        if (empty($_POST["street"])) {
            $streetErr = "Street is required";
        } else {
            echo "hghjgjh";
        }
        if (empty($_POST["streetnumber"])) {
            $streetnumberErr = "Street Number is required";
        } else {
            echo "hghjgjh";
        }
        if (empty($_POST["city"])) {
            $cityErr = "City Number is required";
        } else {
            echo "hghjgjh";
        }
        if (empty($_POST["products"])) {
            $checkErr = "choose at least one product";
        } else {


        }
        if (empty($_POST["zipcode"])) {
            $zipcodeErr = "Zip Code is required";
        } else if (!validate_zipcode($zipcode)) {

            $zipcodeErr = "Invalid Format";
        }
        if (empty($_POST["standard"]) && empty($_POST["fast"])) {
            $deliveryErr = "Please Choose a Delivery Option";
        }


        /*else if (!validate_email($email)){
          $emailErr = "Invalid email format";

        }*/
    } else {

        ?>
        <style type="text/css">.wrapper {
                display: none;
            }</style>
        <style type="text/css">.confirm {
                display: block;
            }</style>
        <?php


    }
   if (is_array($products) || is_object($products)) {
        foreach ($_POST['products'] as  $i => $product) {
            /*$SelectedProducts[] = $products[$i]['name'];
            $amount[] = $products[$i]['price'];*/


            $SelectedProducts[] = $products[$i] -> get_name();
            /*$amount[] =$products[$i] -> price;*/
            $amount[] =$products[$i] -> get_price();


        }

        var_dump($SelectedProducts);
        var_dump($amount);
    }
    if (isset ($_POST['standard'])) {
        $totalValue = array_sum($amount);
        $delivrey = 0;
        $total = $totalValue + $delivrey;
        $date = date('h:i A', time() + 7200);
    } else {
        $delivrey = 5;
        $totalValue = array_sum($amount);
        $total = $totalValue + $delivrey;
        $date = date('h:i A', time() + 3600);
    }
}



require 'form-view.php';
