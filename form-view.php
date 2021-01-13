<?php // This files is mostly containing things for your view / html ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <style>
        .error {color: #FF0000;}
    </style>
    <title>Your fancy store</title>
</head>
<body>

<section class ="parallax">
    <div class = "parallax-inner">
<div class="container" id = "container">
    <div class="wrapper" id = "wrapper">
    <h1>Place your order</h1>
    <?php // Navigation for when you need it ?>
    <?php /*
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
    */ ?>
    <form method="post">

        <div class="form-row" id ="mail">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" class="form-control" value="<?php  echo htmlspecialchars($values[0]);?>"/>
                <span class="error">* <?php echo $emailErr?></span>
            </div>
            <div></div>
        </div>

        <fieldset id = "fieldset">
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label>
                    <input type="text" name="street" id="street" value= "<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[1]);} else{ echo ($streetSession);};?>" class="form-control" />
                    <span class="error">* <?php echo $streetErr?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label>
                    <input type="text" id="streetnumber" name="streetnumber" value = "<?php if(isset ($_POST['submit'])){echo htmlspecialchars($values[2]);} else{ echo ($numberSession);};?>" class="form-control" />
                    <span class="error">* <?php echo $streetnumberErr?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" value =  "<?php if(isset ($_POST['submit'])){echo htmlspecialchars($values[3]);} else{ echo ($citySession);};?>" class="form-control" />
                    <span class="error">* <?php echo $cityErr;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" id="zipcode" name="zipcode" value="<?php if(isset ($_POST['submit'])){echo htmlspecialchars($values[4]);} else{ echo ($zipcodeSession);};?>" class="form-control"  />
                    <span class="error">* <?php echo $zipcodeErr;?></span>
                </div>
            </div>
        </fieldset>
        <span class="error">* <?php echo $deliveryErr;?></span>
        <fieldset id= "fieldset">

            <legend>Delivery Options</legend>



                <label><input type="checkbox" value="1" name="standard"/> Standard Delivery - free </label>
                <label><input type="checkbox" value="1" name="fast"/> Fast Delivery +  5 € </label>




        </fieldset>

        <span class="error">* <?php echo $checkErr;?></span>
        <fieldset id= "fieldset">

            <legend>Products</legend>

            <?php foreach ($products as $i => $product): ?>

                <label class="checkbox-inline">
					<?php // <?p= is equal to <?php echo ?>
                    <img class="card-img-top" src="<?php echo $product -> get_img();;?>" alt="Card image cap">
                    <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product -> get_name(); ?> -
                    &euro; <?= $product -> get_price()?>


                    </label checkbox-inline>


            <?php endforeach; ?>
        </fieldset>


        <button type="submit" value="Submit" name="submit" class="btn btn-primary">Order!</button>
    </form>
    </div>
    <div class = "confirm" id=" confirm" >

        <p> your order is : </p>
        <?php for ($i =0 ; $i <= count($SelectedProducts); $i++){

            echo $SelectedProducts[$i]."</br>";
        } ?>
        <p>  Will be Shipped To :<strong><?php echo " ".$street." ".$streetnumber."   ".$city."   ".$zipcode;?></strong></p>
    </div>

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ."    ". "+"."    "." Delivrey Free"."    ". "€"."    " .$delivrey."</br>";
                                                echo "Total:"."€"."    " . $total."</br>";
                                                echo "You Will Receive Your Order at :"."   ". $date ;



                                    ?></strong> .</footer>
</div>
    </div>
</section>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>