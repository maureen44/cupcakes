<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cupcake Fundraiser</title>
</head>
<body>

<?php
$cupcakeFlavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon","carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");
?>
<div class="container" id="main">
    <h1 class="display-5">Cupcake Fundraiser</h1>
<div class="container">
    <form id="cupcake form" method="post">
        <fieldset class="form-group">
            <div class="form-group">
                <label for="yourName">Your name:</label>
                <input type="text" class="form-control" id="yourName" name="yourName" placeholder="Please input your name">
                <!--<span class="err" id="err-yname">
                    Please enter your name
                </span>-->
            </div>
            <?php
            foreach ($cupcakeFlavors as $flavor => $cupcake) {
                echo "<input class='form-check-inline' type='checkbox' name='cupcakes' value='$flavor'=>$cupcake</input>"."<br>";
            }
            ?>
            <br>
            <button id="submit" type="submit" class="btn btn-success">
                Order
            </button>
        </fieldset>
    </form>
</div>
</div>

</body>
</html>
