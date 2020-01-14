<?php
/***
 * Maureen Kariuki
 * 01/13/2020
 * http://mkariuki.greenriverdev.com/328/cupcakes/
 *
 * A program that enables a Cupcake Fundraiser to make money
 * through the sale of cupcakes.
 */

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
            foreach ($cupcakeFlavors as $cupcake => $flavor) {
                echo "<input class='form-check-inline' type='checkbox' name='cupcake_name[]' id='cupcake_name' value='$cupcake'=>$flavor</input>"."<br>";
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
<div class="container">
    <?
    $name = $_POST['yourName'];
    $cupcake_names = isset($_POST['cupcake_name']);
    $count = 0;
    if (isset($_POST['submit'])) {
        $name = $_POST['yourName'];
        $cupcake_names = isset($_POST['cupcake_name']);
        $count = 0;
    }
        $isValid = true;
        //Validating name
        if (!empty($_POST['yourName'])) {
            $name = $_POST['yourName'];
        } else {
            echo '<p>Please enter your name.</p>';
            $isValid = false;
        }

        //validating that atleast one chack box is checked
        if (!empty($_POST['cupcake_name'])) {
            $cupcake_names = $_POST['cupcake_name'];
        } else {
            echo '<p>Please pick cupcakes.</p>';
            $isValid = false;
        }
        echo "Thank you, " . $name . ", for your order!";
        echo "<br>";
        echo "Order Summary:";
        echo "<br>";
        foreach ($cupcake_names as $cupcake) {
            if (array_key_exists("$cupcake", $cupcakeFlavors)) {
                echo "<li>" . $cupcakeFlavors["$cupcake"] . "</li>";
                $count++;
            } else {
                echo "<p>Please make a selection</p>";
                $isValid = false;
            }
        }
        if ($isValid) {
            echo "<h4>Order Total: $" . money_format('%.2n', $count * 3.50) . "</h4>";

        }

    ?>

</div>

</body>
</html>
