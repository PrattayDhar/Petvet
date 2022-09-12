<?php
session_start();
$database_name = "login_register";
$con = mysqli_connect("localhost", "root", "", $database_name);

if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="Cart.php"</script>';
        } else {
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="Cart.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div id="carouselExampleControls" class="carousel slide container " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="d1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="d2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="d4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h2>Pet Products</h2>
    <div class="container" style="width: 65%">

        <?php
        $query = "SELECT * FROM product ORDER BY id ASC ";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

        ?>
                <div class="col-md-3">

                    <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                        <div class="product">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                            <h3 class="text"><?php echo $row["pname"]; ?></h3>
                            <h4 class="text"><?php echo $row["price"]; ?>৳</h4>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <button type="submit" name="add" style="margin-top: 5px;" class="btn">Add to Cart <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span></button>
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr class="fs-4">
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>

                <?php
                if (!empty($_SESSION["cart"])) {
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                ?>
                        <tr class="fs-5">
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["product_price"]; ?>৳</td>
                            <td>
                                <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?>৳</td>
                            <td class="remove"><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger remove">Remove Item</span></a></td>

                        </tr>
                    <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <th align="right"><?php echo number_format($total, 2); ?>৳</th>
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <button type="submit" class="btn buy">Buy Now <span><i class="fa-solid fa-money-bill"></i></span></button>
            <a href="http://localhost/Lab-Project/welcome.php" class="btn buy">Go back</a>


        </div>

    </div>
    <footer class="pt-5">


        <div class="bg-black">

            <div class="text-center text-white pt-5 pb-3">
                <div>
                    <span>Pet Vet World</span><br>
                    35, Kafrul, Dhaka<br>
                    +880-1899999999<br>
                    <span>Copyright © Pet Vet World </span><br>
                    <span>Developed By HP</span>
                </div>
            </div>

        </div>
        </div>

        </div>


        <script src="https://kit.fontawesome.com/9a5a4db17b.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</body>

</html>