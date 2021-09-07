<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Wear</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container mb-5 mt-5">
        <div class="row">
            <!-- 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images\w1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Scurt</h6>
                            <h5 class="card-title">ZARA</h5>
                            <p class="card-text">$ 108.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button" type="submit">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="scurt">
                                <input type="hidden" name="Price" value="108.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/w2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Suit </h6>
                            <h5 class="card-title">R Brand</h5>
                            <p class="card-text">$ 199.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="suit">
                                <input type="hidden" name="Price" value="199.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/w3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Frok</h6>
                            <h5 class="card-title">MERI</h5>
                            <p class="card-text">$ 679.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="frok">
                                <input type="hidden" name="Price" value="679.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/w4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">jacket</h6>
                            <h5 class="card-title">Live's</h5>
                            <p class="card-text">$ 888.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="jacket">
                                <input type="hidden" name="Price" value="888.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 5 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/w5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">T-Shirt & jeans</h6>
                            <h5 class="card-title">loks</h5>
                            <p class="card-text">$ 393.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="T-shirt & jacket">
                                <input type="hidden" name="Price" value="393.9">
                            </div>
                        </div>
                    </div>
            </div>
            <!-- 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/w6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Froke</h6>
                            <h5 class="card-title">limbuda</h5>
                            <p class="card-text">$ 79.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="Froke">
                                <input type="hidden" name="Price" value="79.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/W7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">jacket & sweater</h6>
                            <h5 class="card-title">China</h5>
                            <p class="card-text">$ 389.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="jacket">
                                <input type="hidden" name="Price" value="389.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/w8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Shirt</h6>
                            <h5 class="card-title">MOLLI</h5>
                            <p class="card-text">$ 999.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary ">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="suit">
                                <input type="hidden" name="Price" value="999.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
                crossorigin="anonymous"></script>
</body>

</html>
<?php include("footer.php"); ?>