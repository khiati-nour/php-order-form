

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Title</title>
</head>
<body>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$totalValue = 0;
$productsCake = [
    ['name' => 'Apple Cake', 'img' => 'apple.jpg','description' => 'sdfdsds','price' => 2.5,],
    [ 'name' => 'Carrot Cake','img' => 'carrot.jpg', 'description' => 'sdfdsds','price' => 3],
    [ 'name' => 'Cherry Cake','img' => 'cherry.jpg','description' => 'sdfdsds', 'price' => 1.75],
    ['name' => 'Choco Cake','img' => 'choco.jpg','description' => 'sdfdsds', 'price' => 2.5],
    ['name' => 'Lemon Cake','img' => 'lemon.jpg','description' => 'sdfdsds', 'price' => 3],
    ['name' => 'Orange Cake','img' => 'orange.jpg','description' => 'sdfdsds', 'price' => 2],
    ['name' => 'Plum Cake','img' => 'plum.jpg','description' => 'sdfdsds', 'price' => 1.5],
    ['name' => 'Strawberries Cake','img'=>'strawberries.jpg' , 'description' => 'sdfdsds','price' => 2.5],
    ['name' => 'Blueberries Cake','img' => 'blueberries.jpg','description' => 'sdfdsds', 'price' => 3],
];
$totalAmount = [];
if (isset($_POST["submit0"])) {
    $totalAmount = '2.5';
}
if (isset($_POST["submit1"])){
    $totalAmount = '3';
}
if (isset($_POST["submit2"])){
    $totalAmount = '1.75';
}
if (isset($_POST["submit3"])){
    $totalAmount = '2.5';
}
if (isset($_POST["submit4"])){
    $totalAmount = '3';
}

$totalValue = array_sum($totalAmount);


?>
<div class="card mb-3">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"><?php echo $productsCake[0]['description'];?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[0]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[0]['name'];?></h5>
            <p class="card-text"> <?php echo $productsCake[0]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[0]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit0"><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[1]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[1]['name'];?></h5>
            <p class="card-text"><?php echo $productsCake[1]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[1]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit1"  ><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[2]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[2]['name'];?></h5>
            <p class="card-text"><?php echo $productsCake[2]['description'];?>.</p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[2]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit2"  ><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
</div>
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[3]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[3]['name'];?></h5>
            <p class="card-text" name = 'description'> <?php echo $productsCake[3]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[3]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit3"  ><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[4]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[4]['name'];?></h5>
            <p class="card-text"><?php echo $productsCake[4]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[4]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit4"  ><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[5]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[5]['name'];?></h5>
            <p class="card-text"><?php echo $productsCake[5]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[5]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit5"  ><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
</div>
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[6]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[6]['name'];?></h5>
            <p class="card-text"><?php echo $productsCake[6]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[6]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit6"  ><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[7]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[7]['name'];?></h5>
            <p class="card-text"><?php echo $productsCake[7]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[7]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit7"  ><i class="fa fa-cart-plus" style="font-size:30px;"></i> </button>
            </form>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="<?php echo $productsCake[8]['img'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productsCake[8]['name'];?></h5>
            <p class="card-text"> <?php echo $productsCake[8]['description'];?></p>
            <p class="card-text"><small class="text-muted"><?php echo "price".":".$productsCake[8]['price']."€";?></small></p>
            <form  method="post">
            <button type="submit" value="Submit" name="submit8"  >ok</button>
            </form>
        </div>
    </div>
</div>
<input type="text" name="dinar" value="<?php echo $totalValue; ?>"/><br><br>
<button type="submit" value="Submit" name="submit2" onclick="window.location='index.php'" >Next </button>
</body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>