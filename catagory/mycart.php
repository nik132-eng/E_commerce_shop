<?php 

include("header.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border bg-light my-5 display-6 fw-bold">
                MY CART
            </div>
            <div class="col-lg-9">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total=0;
                        if(isset($_SESSION['cart'])){

                        foreach($_SESSION['cart'] as $key => $value){
                            $total=$total+$value['Price'];
                            $sr=$key+1;
                            echo"
                            <tr>
                                <td>$sr</td>
                                <td>$value[Item_name]</td>
                                <td>$value[Price]</td>
                                <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
                                <td>
                                    <form action='manage_cart.php' method='post'>
                                        <button class='btn btn-sm btn-outline-danger' name='Remove_item'>REMOVE</button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                    </form>
                                </td>
                            
                                </tr>    
                            ";
                        }
                    }
                 ?>


                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">

                    <h4>Total : </h4>
                    <h5 class="text-right"><?php echo $total; ?></h5>
                    <br>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label text-2x" for="flexRadioDefault1">
                                Cash On delivery
                            </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block">Make Purchase</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include("footer.php"); ?>