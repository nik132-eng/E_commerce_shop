<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business</title>

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
                        <img src="images\ma1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">management</h6>
                            <h5 class="card-title">Convencing skill</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button" type="submit">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="convencing skill">
                                <input type="hidden" name="Price" value="9.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/ma2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">meeting</h6>
                            <h5 class="card-title">How to meet</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="How to meet">
                                <input type="hidden" name="Price" value="9.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/ma3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Presentaion skill</h6>
                            <h5 class="card-title">How to present</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="presentaion">
                                <input type="hidden" name="Price" value="9.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/ma4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Management skill</h6>
                            <h5 class="card-title">How to manage all the tasks</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="management">
                                <input type="hidden" name="Price" value="9.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 5 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/ma5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">explanation skill</h6>
                            <h5 class="card-title">how to explain</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
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
                                <input type="hidden" name="Item_name" value="explanation">
                                <input type="hidden" name="Price" value="9.9">
                            </div>
                        </div>
                    </div>
            </div>
            <!-- 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/ma6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">time management skill</h6>
                            <h5 class="card-title">Time management</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="time management">
                                <input type="hidden" name="Price" value="9.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/ma7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">approaching skill</h6>
                            <h5 class="card-title">How to apporach</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="approaching">
                                <input type="hidden" name="Price" value="9.9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card product-item">
                        <img src="images/ma8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">solving problems</h6>
                            <h5 class="card-title">how to solv problems</h5>
                            <p class="card-text">$ 9.9 <span class="float-end rating-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span></p>
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="#" role="button">Add to cart </a> -->
                                <button type="submit" name="Add_to_cart" class="btn  btn-outline-primary ">Add to
                                    cart</button>
                                <input type="hidden" name="Item_name" value="problem solving">
                                <input type="hidden" name="Price" value="9.9">
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