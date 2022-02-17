<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="style.css">
    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

        <div class = "container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo3.png" alt="" width="70px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="">Product</a></li> -->
                        <!-- <li><a href=""></a></li> -->
                        <li><a href="">Contact</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </nav>
                <div class="navbar">
                    <nav>
                        <!-- button on nav bar -->
                        <a href=""><img src="images/search_logo.png" alt="" width="30px"></a>&nbsp;&nbsp;
                        <a href="account.php"><img src="images/account_logo.png" alt="" width="30px"></a>&nbsp;&nbsp;
                        <a href="cart2.php"><img src="images/logo_cart_new.png" width="30px" height="30px" alt=""></a>
                    </nav>
                    
                </div>
                <!-- images/cart.png -->
            </div>
        </div>
        <h1 class="title">Account </h1>
        
    <div class="account-page">
      <div class="small-container">   
            <div class="row">
                
                <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm">
                        <input type="text" placeholder="Username">
                        <input type="passward" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="#">Forgot password</a>
                        <br>
                        <hr>
                            <br>
                            <p>Login By</p>
                            <br>
                            <a href="#" class="fa fa-facebook"></a>
                                <a href="https://www.facebook.com/">Facebook</a> </li>
                            <a href="https://www.google.com/" class="fa fa-twitter"> </a>   <a href="https://www.twitter.com">  Google</a> 
                            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>   <a href="https://www.instagram.com">   Instagram</a> 
                        

                    </form>
                    <form id="RegForm">
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email">
                        <input type="passward" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                        <hr>

                        <p>Register By</p>
                        <br>
                        <a href="#" class="fa fa-facebook"></a>
                            <a href="https://www.facebook.com/">Facebook</a>
                        <a href="https://www.google.com/" class="fa fa-twitter"> </a>   <a href="https://www.twitter.com">Google</a> 
                        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>   <a href="https://www.instagram.com">Instagram</a> 
                    </form>
                </div>
                </div>   
            </div>
        </div>
    </div>
    
   

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer_col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for ios and Android mobile phones.</p>
                    <div class="app-logo">
                        <a href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_content=Oct0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-in-1003227-med-hasem-py-Evergreen-Oct0121-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700065205026376_creativeid_535350509651_device_c&gclid=EAIaIQobChMI5sjduYvo9AIVyJlmAh3-6QvQEAAYASAAEgK2CfD_BwE&gclsrc=aw.ds"><img src="images/play-store.png" alt=""></a> 
                        <a href="https://www.apple.com/in/app-store/"></a><img src="images/app-store.png" alt=""></a>
                    </div>
                </div>
                <div class="footer_col-2">
                    <img src="images/logo3_white.png" alt="" width="70px">

                    <p>Our Purpose Is To Provide with Benefits Of latest products <br> to the Masses Easily And Hasslefree </p>
                </div>
                <div class="footer_col-3">
                    <h3>Usefull Links</h3>
                    <ul>
                        <li>coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer_col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/">Facebook</a> </li>
                        <li><a href="https://www.twitter.com/">Twitter</a> </li>
                        <li><a href="https://www.instagram.com/">Instagram</a> </li>
                        <li><a href="https://www.youtube.com/">Youtube</a> </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020  </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- js for toggle account form -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register(){
           RegForm.style.transform="translateX(0px)"; 
           LoginForm.style.transform="translateX(0px)"; 
           Indicator.style.transform="translateX(100px)"; 
        }
        function login(){
           RegForm.style.transform="translateX(300px)"; 
           LoginForm.style.transform="translateX(300px)"; 
           Indicator.style.transform="translateX(0px)"; 
        }
    </script>

</body>
</html>
