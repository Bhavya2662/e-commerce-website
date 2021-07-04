<?php
session_start();
$status = "";
if (isset($_POST['action']) && $_POST['action'] == "remove") {
    if (!empty($_SESSION["shopping_cart"])) {
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
            if ($_POST["code"] == $key) {
                unset($_SESSION["shopping_cart"][$key]);
                $status = "<div class='box' style='color:red; '>
		Product is removed from your cart!</div>";
            }
            if (empty($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
        }
    }
}

if (isset($_POST['action']) && $_POST['action'] == "change") {
    foreach ($_SESSION["shopping_cart"] as &$value) {
        if ($value['code'] === $_POST["code"]) {
            $value['quantity'] = $_POST["quantity"];
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="cartstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
</head>

<body>

    <header class="section-header">
        <section class="header-main border-bottom" style="background-color: #15E4F5; padding-top: 8px; padding-bottom: 8px;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-4 col-md-4 col-5">
                        <div class="logo" style="text-align: center;"><img src="images/logoi.png" alt="" width="50px" height="50px">Fashion Site</div>

                        </a>
                    </div>
                    <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
                        <form action="#" class="search-wrap">
                            <div class="input-group w-100"> <input type="text" class="form-control search-form" style="width:55%;" placeholder="Search">
                                <div class="input-group-append"> <button class="btn btn-primary search-button" type="submit"> <i class="fa fa-search"></i> </button> </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-sm-8 col-md-4 col-7">
                        <div class="d-flex justify-content-end"><a href="index.php"><img src="images/home.png" alt="" width="30px" height="30px"></a> <span class="vl"></span>

                            <span class="vl"></span> <a class="nav-link nav-user-img" href="logout.php" data-toggle="modal" data-target="#login-modal" data-abc="true"><span class="login">LOGOUT</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <div style="width:100%; margin:50 auto;">

        <h2 style="text-align: center; font-weight:bolder; font-family: Comic Sans MS, Comic Sans, cursive; font-size:40px;">Shopping Cart</h2>



        <div class="cart">
            <?php
            if (isset($_SESSION["shopping_cart"])) {
                $total_price = 0;
            ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>ITEM NAME</td>
                            <td>QUANTITY</td>
                            <td>UNIT PRICE</td>
                            <td>ITEMS TOTAL</td>
                        </tr>
                        <?php
                        foreach ($_SESSION["shopping_cart"] as $product) {
                        ?>
                            <tr>
                                <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
                                <td><?php echo $product["name"]; ?><br />
                                    <form method='post' action=''>
                                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                        <input type='hidden' name='action' value="remove" />
                                        <button type='submit' class='remove'>Remove Item</button>
                                    </form>
                                </td>
                                <td>
                                    <form method='post' action=''>
                                        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                        <input type='hidden' name='action' value="change" />
                                        <select name='quantity' class='quantity' onchange="this.form.submit()">
                                            <option <?php if ($product["quantity"] == 1) echo "selected"; ?> value="1">1</option>
                                            <option <?php if ($product["quantity"] == 2) echo "selected"; ?> value="2">2</option>
                                            <option <?php if ($product["quantity"] == 3) echo "selected"; ?> value="3">3</option>
                                            <option <?php if ($product["quantity"] == 4) echo "selected"; ?> value="4">4</option>
                                            <option <?php if ($product["quantity"] == 5) echo "selected"; ?> value="5">5</option>
                                        </select>
                                    </form>
                                </td>
                                <td><?php echo "Rs" . $product["price"]; ?></td>
                                <td><?php echo "Rs" . $product["price"] * $product["quantity"]; ?></td>
                            </tr>
                        <?php
                            $total_price += ($product["price"] * $product["quantity"]);
                        }
                        ?>
                        <tr>
                            <td colspan="5" align="right">
                                <strong>TOTAL: <?php echo "Rs" . $total_price; ?></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } else {
                echo "<h3 style='margin-top:5rem; text-align:center;'>Your cart is empty!</h3>";
            }
            ?>
        </div>

        <div style="clear:both;"></div>

        <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
        </div>


    </div>


</body>

</html>