<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Shopping</title>
    <link rel="shortcut icon" href="images/icon.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="wrapper">

        <nav id="sidebar">

            <div class="sidebar-header">
                <h3></i></h3>
            </div>
            <ul class="lisst-unstyled components">

                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-tshirt"></i></i>&nbsp;&nbsp;&nbsp;Cloths</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="catagory/Men.php"><i class="fas fa-male"></i> &nbsp;&nbsp;&nbsp;Male</a>
                        </li>
                        <li>
                            <a href="catagory/Women.php"><i class="fas fa-female"></i>&nbsp;&nbsp;&nbsp;Female</a>
                        </li>
                        <li>
                            <a href="catagory/kids.php"><i class="fas fa-baby"></i>&nbsp;&nbsp;&nbsp;Kids</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-mobile-alt"></i>&nbsp;&nbsp;&nbsp;Electronics</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="catagory/laptop.php">Laptop</a>
                        </li>
                        <li>
                            <a href="catagory/mobile.php">Mobile</a>
                        </li>
                        <li>
                            <a href="catagory/tv.php">TV</a>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="#courses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;Courses </a>
                    <ul class="collapse list-unstyled" id="courses">
                        <li>
                            <a href="catagory/engineering.php">Engineering</a>
                        </li>
                        <li>
                            <a href="catagory/business.php">Business</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="catagory/contact.php"><i class="fas fa-id-badge"></i></i>&nbsp;&nbsp;&nbsp;Contact us</a>
                </li>

            </ul>
        </nav>


        <div id="content">

            <video id="videoBG" poster="poster.JPG" autoplay muted loop>
                <source src="images/Ecommerce promotion.mp4" type="video/mp4">
            </video>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn  btn-info"
                        style="padding: 8px 50px 8px 50px;">
                        <i class="fas fa-bars"></i>
                        <span>Menu</span>
                    </button>

                    <div class="header_menu">
                        <a href="">help</a>
                        <a href="">FAQ's</a>
                    </div>
                </div>
            </nav>


            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <div class="heading">
                <hr>
                <h2>Nikunj's Shop</h2>
                <hr>
            </div>



        </div>


    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>


</body>

</html>