<!DOCTYPE html>
<html lang="zxx" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

    <title>Foodita</title>

    <link rel="stylesheet" href="../css/style.css">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</head>

<body>

<div id="orderModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-lg" role="contentinfo">
        <div class="modal-content mx-auto col-5">
            <form class="js-form" id="create-form" action="php/cart.php" method="post">

                <label for="registrAddress" class="sr-only">Name</label>
                <input name="nameUser" type="text" id="nameUser" class="form-control mt-3 mb-3" placeholder="Name" required="">

                <label for="registrAddress" class="sr-only">Address</label>
                <input name="addressUser" type="text" id="addressUser" class="form-control mt-3 mb-3" placeholder="Address" required="">

                <label for="registrEmail" class="sr-only">Email address</label>
                <input name="emailUser" type="email" id="emailUser" class="form-control" placeholder="E-mail address" required="" autofocus="">

                <button class="btn btn-lg btn-primary btn-purchase mt-3 mb-3" type="submit">Order</button>
            </form>
       </div>
    </div>
 </div>

<div class="tm-container">

    <div class="sidebar navbar navbar-expand-md fixed-top">
        <div class="tm-sidebar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>
            <div class="tm-logo navbar-brand mr-auto">
                 <a href="/" ><img src="../img/logo.png"></a>
            </div>
            <div class="tm-main-nav navbar-collapse collapse"  id="Navbar">
                <ul class="nav  navbar-nav mr-auto nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="tm-nav-item ">
                        <a class=" active tm-nav-item-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                    </li>
                    <li class="tm-nav-item ">
                        <a class="tm-nav-item-link" id="pills-menu-tab" data-toggle="pill" href="#pills-menu" role="tab" aria-controls="pills-menu" aria-selected="true">Menu</a>
                    </li>
                    <li class="tm-nav-item ">
                        <a class="tm-nav-item-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="true">Delivery && Payment</a>
                    </li>
                    <li class=" tm-nav-item">
                        <a class="tm-nav-item-link " id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                    </li>
                    <li class=" tm-nav-item">
                        <a class="tm-nav-item-link " id="pills-cart-tab" data-toggle="pill" href="#pills-cart" role="tab" aria-controls="pills-cart" aria-selected="false">Cart</a>
                    </li>
                    <?php
                     if($_COOKIE['user']==''):
                    ?>
                        <li class=" tm-nav-item">
                            <a class="tm-nav-item-link " id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="false">Sign in</a>
                        </li>
                    <?php else: ?>
                         <li class=" tm-nav-item">
                             <a class="tm-nav-item-link " href="../php/exit.php">Sign out</a>
                         </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="tm-main-content">

        <div class="tm-banner ">
            <div class="hello">
                <div>
                    <p >Hello! This is Foodita.</p>
                </div>
                <div  class="tm-banner-text">
                    <span>Just eat and forget everything else.</span>
                </div>
                <div>
                    <a href="#headerWhy"><input type="submit" class="btn btn-primary submit-btn" value="DISCOVER MORE"></a>
                </div>
            </div>
        </div>
        <div class="best">
        <div id="headerWhy">
            <h1>Why do clients choose delivery service FOODITA ?</h1>
        </div>

        <div class="tm-why-box row">
            <div class="card col-12 col-md-3">
                <div class="why-image">
                    <img src="../img/post-1.png" alt="post1">
                </div>
                <div class="post-1">
                    <p>
                        ... Because we are tasty. Who made the order before – come back again and again.
                    </p>
                </div>
            </div>

            <div class="card col-12 col-md-3">
                <div class="why-image">
                    <img src="../img/post-2.png" alt="post2">
                </div>
                <div class="post-2">
                    <p>
                        ... Because we are nourishing. We have a lot of filling in pizza and rolls.
                    </p>
                </div>
            </div>

            <div class="card col-12 col-md-3">
                <div class="why-image">
                    <img src="../img/post-3.png" alt="post2">
                </div>
                <div class="post-3">
                    <p>
                        ... Because we are fast. We understand that you are already hungry and we hurry to you!
                    </p>
                </div>
            </div>
            <div class="card col-12 col-md-3">
                <div class="why-image">
                    <img src="../img/post-4.png" alt="post4">
                </div>
                <div class="post-5">
                    <p>
                        ... Because we appreciate and love our customers the most!
                    </p>
                </div>
            </div>
            <hr>
        </div>
        </div>


        <div class="tm-content-box reviews">
            <h1>Dining Guest Reviews</h1>
            <div class="tm-author">
                <img src="../img/author-image1.jpg" alt="author">
                <p>Jen L.</p>
                <p>July 22, 2020</p>
            </div>
            <div class="tm-description">
                <p>
                    I had dinner with girlfriends. The menu is perfect, something for everyone. Service was awesome
                    and Jason was very accommodating. I will be back definitely!
                </p>
            </div>
            <hr>

            <div class="tm-author">
                <img src="../img/author-image2.jpg" alt="author">
                <p>Dave H.</p>
                <p>May 30, 2020</p>
            </div>
            <div class="tm-description">
                <p>
                    My only (dining) experience was ordering a pizza at 9:15 pm. Tanner answered my telephone
                    call to inquire about the time of service and the pizza options. He took a lot of time
                    discussing details with me and even went over the menu - assuring me that I would have
                    my pizza by the time the kitchen closed at 10 pm. At 9:45 the pizza was delivered PIPING HOT
                    as if I were sitting in a restaurant. It was delicious and exactly what I ordered.
                </p>
            </div>
            <hr>

            <div class="tm-author">
                <img src="../img/author-image3.jpg" alt="author">
                <p>Jessica W.</p>
                <p>April 18, 2020</p>
            </div>
            <div class="tm-description">
                <p>
                    The food was fresh, properly prepared and a great value for the price. We highly recommend it.
                    The breakfast buffet on Sunday was equally as good.
                </p>
            </div>
            <hr>

            <div class="tm-author">
                <img src="../img/author-image4.jpg" alt="author">
                <p>Sara B.</p>
                <p>March 12, 2020</p>
            </div>
            <div class="tm-description">
                <p>
                    The breakfast brunch was great. We ordered at 10:45 pm and everything was still hot and there
                    was plenty of everything. Our delivery man was very friendly and took good care of us.
                </p>
            </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade col-12" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
            <div class="row row-content align-self-center justify-content-center">
                <div class="col-sm-2 col-2">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pizza-disk-tab" data-toggle="pill" href="#v-pills-pizza" role="tab" aria-controls="v-pills-pizza" aria-selected="true">Pizza</a>
                        <a class="nav-link" id="v-pills-sushi-tab" data-toggle="pill" href="#v-pills-sushi" role="tab" aria-controls="v-pills-sushi" aria-selected="false">Sushi</a>
                        <a class="nav-link" id="v-pills-soups-tab" data-toggle="pill" href="#v-pills-soups" role="tab" aria-controls="v-pills-soups" aria-selected="false">Soups</a>
                        <a class="nav-link" id="v-pills-pasta-tab" data-toggle="pill" href="#v-pills-pasta" role="tab" aria-controls="v-pills-pasta" aria-selected="false">Paste</a>
                        <a class="nav-link" id="v-pills-salads-tab" data-toggle="pill" href="#v-pills-salads" role="tab" aria-controls="v-pills-salads" aria-selected="false">Salads</a>
                        <a class="nav-link" id="v-pills-desserts-tab" data-toggle="pill" href="#v-pills-desserts" role="tab" aria-controls="v-pills-desserts" aria-selected="false">Desserts</a>
                        <a class="nav-link" id="v-pills-drinks-tab" data-toggle="pill" href="#v-pills-drinks" role="tab" aria-controls="v-pills-drinks" aria-selected="false">Drinks</a>
                    </div>
                </div>
                <div class="col-sm-8 col-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-pizza" role="tabpanel" aria-labelledby="v-pills-pizza-tab">
                            <div class="container">
                                <div class="row clear-md-3 clear-lg-3 clear-sm-2">
                                     <?php
                                    require_once "php/showMenu.php";
                                    getMenu(pizzas);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-sushi" role="tabpanel" aria-labelledby="v-pills-sushi-tab">
                            <div class="container">
                                <div class="row clear-md-3 clear-lg-3 clear-sm-2">
                                    <?php
                                    require_once "php/showMenu.php";
                                    getMenu(sushi);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-soups" role="tabpanel" aria-labelledby="v-pills-soups-tab">
                            <div class="container">
                                <div class="row clear-md-3 clear-lg-3 clear-sm-2 align-items-stretch">
                                    <?php
                                    require_once "php/showMenu.php";
                                    getMenu(soups);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-pasta" role="tabpanel" aria-labelledby="v-pills-pasta-tab">
                            <div class="container">
                                <div class="row clear-md-3 clear-lg-3 clear-sm-2">
                                    <?php
                                    require_once "php/showMenu.php";
                                    getMenu(paste);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-salads" role="tabpanel" aria-labelledby="v-pills-salads-tab">
                            <div class="container">
                                <div class="row clear-md-3 clear-lg-3 clear-sm-2">
                                    <?php
                                    require_once "php/showMenu.php";
                                    getMenu(salads);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-desserts" role="tabpanel" aria-labelledby="v-pills-desserts-tab">
                            <div class="container">
                                <div class="row clear-md-3 clear-lg-3 clear-sm-2">
                                    <?php
                                    require_once "php/showMenu.php";
                                    getMenu(desserts);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-drinks" role="tabpanel" aria-labelledby="v-pills-drinks-tab">
                            <div class="container">
                                <div class="row clear-md-3 clear-lg-3 clear-sm-2">
                                    <?php
                                    require_once "php/showMenu.php";
                                    getMenu(drinks);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row row-content mt-6">
                <div class="col-12 col-md-4 col-lg-3 offset-1">
                    <h3>Location Information</h3>
                    <h5>Our Address</h5>
                    <address style="font-size: 100%">
                        137-157 Harold St
                        <br>Staten Island, NY 10314
                        <br>USA<br>
                        <i class="fa fa-phone"></i>: +164 6980 6867<br>
                        <i class="fa fa-fax"></i>: +164 6980 6867<br>
                        <i class="fa fa-envelope"></i>:
                        <a href="mailto:confusion@food.net">foodita@food.net</a>
                        <div class="col-12 col-sm-11 offset-sm-1 ml-0 pl-0">
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary" role="button" href="tel:+85212345678">
                                    <i class="fa fa-phone"></i> Call</a>
                                <a class="btn btn-info" role="button" href="skype:+1234567890?call">
                                    <i class="fa fa-skype"></i> Skype</a>
                                <a class="btn btn-success" role="button" href="mailto:foodita@food.net">
                                    <i class="fa fa-envelope-o"></i> Email</a>
                            </div>
                        </div>
                    </address>
                </div>
                <div class="col-12 col-md-5 col-lg-4">
                    <h4>Map of our Location</h4>
                    <div id="map"><p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.2755808722936!2d-74.1280096850993!3d40.60174305229123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDM2JzA2LjMiTiA3NMKwMDcnMzMuMCJX!5e0!3m2!1sru!2sua!4v1588519949812!5m2!1sru!2sua" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p></div>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="../img/man.png">
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
            <div class="row">
                <div class="col-lg-5  col-12" id="payment">
                    <div class="moto">
                        <img src="../img/moto.png">
                    </div>
                </div>
                <div class="motoText col-12 col-lg-6 align-self-center">
                    <p>
                        <b>FREE</b> delivery - <b> $20 and over. </b>
                        <br>Standard delivery - <b> $3.95</b> (for orders under $20).
                        <br>You can also use the <b>"pickup".</b>
                        <br>We work every day from <b> 10:00 to 22:00.</b>
                        <br>If the courier is late, you will receive not only an apology but also a promotional
                        code for free pizza the next time you order!
                    </p>
                </div>
            </div>
            <div class="paymentText tm-content-box mt-3">
                <div class="row justify-content-center">
                    <img src="../img/payment.png">
                    <h2>Payment</h2>
                </div>

                <p>
                    A little about the convenience of payment. We trust our customers, so the calculation happens upon
                    receipt. <b>Cash or card</b> - you choose. Delivery service <b>FOODITA</b> tries to be as modern and loyal to
                    its customers as possible, so you can pay by card. Just indicate at checkout that you want to pay
                    with a courier card. In fact, you will agree, cash is becoming increasingly out of use and we are
                    increasingly paying with our card, even for travel in transport.

                    <br><b>FOODITA</b> is a modern, comfortable, and delicious food delivery service. We cooperate with different
                    manufacturers, combine professionalism and non-standard recipes, and you get delicious and hot food
                    every day. Yes, we work for you <b>every day</b>, just select and place an order! Try our delivery service
                    and you will always choose only us.
                </p>
            </div>

        </div>

        <div class="tab-pane fade" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab">

            <div class="cartHeader">
                <h1>Cart</h1>
            </div>
            <div id="emptyCard" class="col-sm-8 offset-sm-2">
                <img class="col-sm-8 offset-sm-2 img-fluid" src="../img/empty-cart.png" alt="Cart is empty">
            </div>
               <div class="cart-items">

                </div>
            <div id="toPay1" class="toPay offset-sm-2 col-sm-8" style="font-size: 15px; display:none">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-12 d-flex mt-3">
                        <div class="textToPay mr-1"> To Pay: </div>
                        <text class="p-1 cart-total-price" style="background-color:#f7a63d; color: white">41$</text>
                    </div>
                </div>
            </div>

            <div id="toPay2" class="toPay mb-3  offset-sm-2 col-sm-8" style="font-size: 15px; display:none">
                <div class="row justify-content-end">
                    <div class="col-sm-3 col-12 d-flex mt-3">
                         <input id="purchase" type="submit" class="btn btn-primary col-12 sub" value="Оrder">
                     </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
           <div class="d-flex">
                <form class="form-signin col-md-4 offset-md-1 mb-3" action="../php/validation-form/check.php" method="post">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="h3 mb-3 font-weight-normal ">Registration</h1>
                        <label for="registrLogin" class="sr-only">Login</label>
                        <input name="login" type="text" id="registrLogin" class="form-control mt-3 mb-3" placeholder="Login" required="">

                        <label for="registrAddress" class="sr-only">Address</label>
                        <input name="address" type="text" id="registrAddress" class="form-control mt-3 mb-3" placeholder="Address" required="">

                        <label for="registrEmail" class="sr-only">Email address</label>
                        <input name="email" type="email" id="registrEmail" class="form-control" placeholder="E-mail address" required="" autofocus="">

                        <label for="registrPassword" class="sr-only">Password</label>
                        <input name="password" type="password" id="registrPassword" class="form-control mt-3 mb-3" placeholder="Password" required="">

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                    </div>
                </form>
                <form class="form-signin col-md-4 offset-md-2 mb-3" action="../php/validation-form/auth.php" method="post">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="h3 mb-3 font-weight-normal ">Please sign in</h1>

                        <label for="inputLogin" class="sr-only">Login</label>
                        <input name="signLogin" type="text" id="inputLogin" class="form-control" placeholder="Login" required="" autofocus="">

                        <label for="inputPassword" class="sr-only">Password</label>
                        <input name="signPass" type="password" id="inputPassword" class="form-control mt-3 mb-3" placeholder="Password" required="">
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer col-12">
        <div class="row align-self-center justify-content-center">
            <div class="col-sm-12 col-md-5 ">
                <h1>FOODITA</h1>
                <p class="footer-text">
                    You are welcome for breakfast, lunch or dinner in our restaurant.
                </p>
                <p>
                    Copyright © 2019 FOODITA
                </p>
            </div>
            <div class="col-sm-12 col-md-5">
                <h1>Talk to us</h1>
                <p>
                    137-157 Harold St
                Staten Island, NY 10314
                USA
                </p>
                <p> +164 6980 6867</p>
                <p>fooditafun@gmail.com</p>
            </div>
        </div>
    </footer>
</div>
<script src="js/myCart.js" async></script>
 <!-- Подключаем jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

   <!-- Подключаем плагин Popper -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

   <!-- Подключаем Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>
   <script src="https://kit.fontawesome.com/e825e541ab.js" crossorigin="anonymous"></script>
   <script src="https://use.fontawesome.com/019f8401f7.js"></script>


</body>
</html>

