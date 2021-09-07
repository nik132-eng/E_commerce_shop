<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV</title>

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
                        <img src="images\tv1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">MI</h5>
                            <p class="card-text">$ 1000 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button" type="submit">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="MI">
                                <input type="hidden" name="Price" value="1000">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/tv2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">LG</h5>
                            <p class="card-text">$ 2008 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="LG">
                                <input type="hidden" name="Price" value="2008">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/tv3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">ONIDA</h5>
                            <p class="card-text">$ 1790 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="ONIDA">
                                <input type="hidden" name="Price" value="1790">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/tv4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">K-Mart</h5>
                            <p class="card-text">$ 888.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="k-mart">
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
                        <img src="images/tv5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">PANASONIC</h5>
                            <p class="card-text">$ 3930<span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="panasonic">
                                <input type="hidden" name="Price" value="3930">
                            </div>
                        </div>
                    </div>
            </div>
            <!-- 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/tv6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">T L C</h5>
                            <p class="card-text">$ 6900 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="TLC">
                                <input type="hidden" name="Price" value="6900">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/tv7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">SONY</h5>
                            <p class="card-text">$ 9890 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="sony">
                                <input type="hidden" name="Price" value="9890">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/tv8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">SMART TV</h6>
                            <h5 class="card-title">SAMSANG</h5>
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
                                <input type="hidden" name="Item_name" value="samsang">
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