<?php
error_reporting(0);    // inbuilt fn
$error=false;          // var
$showerror = "";       // str
$conn = mysqli_connect("localhost", "root", "", "addtocart");    // inbuilt function

if (mysqli_connect_error()) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
  if($_POST['addtocart'] != 0){
        $image =$_POST['addtocartimage'];   // $image is the data added in the cart, which is taken from (addtocartimage )
        $price=$_POST['addtocartprice'];
        $size=$_POST['productsize'];
        $name=$_POST['addtocartname'];
        /*
        echo $size;
        echo $price;
        echo $image;*/
 
       
        if($size != "Select"){ 
            $sql = "INSERT INTO `productlist` ( `productimage`, `productname`, `productsize`, `productprice`) VALUES ('$image', '$name', '$size', '$price');"; // value is inserted into the table
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $insert = true;
            }
        }
        else {
            $error=true;
            $showerror="Please select your size";
            //     echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
        }
    }
    else{
        echo "no";
        echo '<script>
        console.log("helloe");
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    
    <!--bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
    
    <!-- Carousel -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

    <!-- rating icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <div class = "container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo3.png" alt="" width="70px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="">Product</a></li> -->
                        <li><a href="">Contact</a></li>
                        <li><a href="#my-footer">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#555;" hover:color:#ff523b>
                              More...
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="cart2.html">Your Orders</a></li>
                              <li><a class="dropdown-item" href="#">Return Policies</a></li>
                              <li><a class="dropdown-item" href="#">Wishlist</a></li>
                              <li><a class="dropdown-item" href="#">About</a></li>
                            </ul>
                          </li> 
                        
                    </ul>
                </nav>
                <div class="navbar">
                    <form class="d-flex" >
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        
                      </form>
                    <nav>
                        <!-- button on nav bar -->
                        <a href=""><img src="images/search_logo.png" alt="" width="30px"></a>&nbsp;&nbsp;
                        <img src="images/account_logo.png" alt="" width="30px" class="accountimage">
                        <a href="cart2.php"><img src="images/logo_cart_new.png" width="30px" height="30px" alt=""></a>
                    </nav>
                    
                </div>
                <!-- images/cart.png -->
            </div>
            <?php
    if ($error) {
      echo '
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
 <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</symbol>
<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
 <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</symbol>
<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
 <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      <strong>' . $showerror . '</strong>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

  </div>';
    }
    ?>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                        <div class="col-2">
                            <h1>Give Yourself <br> A New Style!</h1>
                            <p>Success isn't always about greatness. It's about consistency. Constant<br>hard word gains success. Greatness will come.</p>
                            <a href="" class="btn">Explore Now &#8594 </a>
                        </div>
                        
                        <div class="col-3">
                            <img src="images/Daco_4138135.png" alt="">
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-2">
                          <h1> Experience!!!! The world of latest technology</h1>
                          <p>It's still magic even if you know <br> How its done!!!</p>
                          <a href="" class="btn">Explore Now &#8594 </a>
                      </div>
                      
                      <div class="col-3">
                          <img src="images/banner_02.png" alt="">
                      </div>
                  </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-2">
                          <h1>Time To Wear<br>Smart Watches</h1>
                          <p>Always Stay ahead of Time <br> Track your SpO2, Heartrate and Calories <br> Anytime!!! Anywhere!!!</p>
                          <a href="" class="btn">Explore Now &#8594 </a>
                      </div>
                      
                      <div class="col-3">
                          <img src="images/exclusive.png" alt="">
                      </div>
                  </div>
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

        </div>
    </div>
    <br>
    
    
            <!-- featured categories -->
            <h5 class="title" style="padding-top: 50px;" >Featured Products</h5>
        
          <!-- **** featured products part2 -->
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style=" margin-left: 125px; padding-top: 50px; background-color: rgb(235, 229, 220);">
            <div class="carousel-inner" style="padding-left:150px; ">
              <div class="carousel-item active">
                <div class="row">
                    <div class="col-2">
                        <h1>IPHONE XS MAX</h1>
                        <p>Camera Like An Eye<br> Bazelless Display <br> Powered by Fastest Processor in the market <br> A12 Bionic Chip</p>
                        <a href="" class="btn">Buy Now &#8594 </a>
                    </div>
                    
                    <div class="col-3">
                        <img src="images/collection_01.png" alt="First slide" padding height="500px">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                    <div class="col-2">
                      <h1>BEATS Head Phones</h1>
                      <p>With EXTRA BASS <br> Active Noise Cancellation Mode !!</p>
                      <a href="" class="btn">Buy Now &#8594 </a>
                    </div>
                  
                    <div class="col-3">
                      <img src="images/collection_02.png" alt="First slide" height="500px">
                    </div>
                    </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-2">
                      <h1>NIKE SHOES</h1>
                      <p>Walk With TREND <br> Light Weighted!!! <br> Strong Sole </p>
                      <a href="" class="btn">Buy Now &#8594 </a>
                  </div>
                  
                  <div class="col-3">
                      <img src="images/nikeshoes.png" alt="First slide" height="500px">
                  </div>
              </div>
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
        <br>
 
    <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
               
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <form action="index.php" method="post">  <!--new added -->
                <input type="hidden" name="addtocart" id="addtocart" class="addtocart">   <!-- id to js(down) then if/else in php(up) -->

                    <div class="row">
                        <div class="col-3">
                        <input type="hidden" name="addtocartimage" id="addtocartimage" class="addtocartimage">  <!--new added -->
                            <img src="" alt="" width="240px" height="400px" class="productimage" id="productimage"  >
                        </div>
                        <div class="productinfo col-3" >
                            <div class="product_body"style="padding: 10px">
                            <input type="hidden" name="addtocartname" id="addtocartname" class="addtocartname">  <!--new added -->
                            <h1 width="100%" class="productname" id="productname"></h1>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <small class="productpriceWithout"><s></s></small>
                            <input type="hidden" name="addtocartprice" id="addtocartprice"    
                                    class="addtocartprice"> <!--new added -->
                            <p class="productprice" id="productprice" name="productprice"></p>  <!--new added id-->
                            <p>Sizes: </p>
                                <select class="navdropdown"  style="color: #555;" id="productsize"
                                 name="productsize">   <!--new added -->
                                    <option > Select</option>
                                    <option> S </option>
                                    <option> M </option>
                                    <option > L </option>
                                    <option > XL </option>   
                                </select>
                            <a href=""><button type="submit" class="btn" name="add">Add To Cart</button></a>
                            <a href=""><button type="submit" class="btn" name="add">Buy Now</button></a>
                            <ul>
                                <li>60% cotton , 40% polyester</li>                                
                                <li>Plus size available from size S onwards</li> 
                                <li>Fit Type: Regular</li>
                                <li>Care Instructions: Machine Wash</li>
                            </ul>
                        </div>
                     </div> <!-- row end -->
                </form>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog None">
        <div class="modal-content">
            <div class="modal-header" width >
               
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                        <div class="row-10">
                            <div class="col-2" >
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
                                        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                        <a href="https://www.facebook.com/">Facebook</a> </li>
                                        <a href="https://www.twitter.com/" class="fa fa-twitter"> </a> <a
                                            href="https://www.twitter.com"> Twitter</a>
                                        <a href="https://www.instagram.com/" class="fa fa-instagram"></a> <a
                                            href="https://www.instagram.com"> Instagram</a>
                                    </form>
                                    <form id="RegForm">
                                        <input type="text"  placeholder="Username">
                                        <input type="email" placeholder="Email">
                                        <input type="age" placeholder="Age">
                                        <input type="passward" placeholder="Password">
                                        <button type="submit" class="btn">Register</button>
                                        <hr>

                                        <p>Register By</p>
                                        <br>
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="https://www.facebook.com/">Facebook</a>
                                        <a href="https://www.twitter.com/" class="fa fa-twitter"> </a> <a
                                            href="https://www.twitter.com">Twitter</a>
                                        <a href="https://www.instagram.com/" class="fa fa-instagram"></a> <a
                                            href="https://www.instagram.com">Instagram</a>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
    <!-- latest products -->
    <div class="small-container">
        <h5 class="title">Latest Products</h5>
        <div class="row">
            <div class="col-4">
                  <img src="images/product-1.jpg" alt="" class="show" id="images/product-1.jpg">
                  <h4>Puma T-Shirt</h4>
                  <div class="rating">
                    <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star-half-o"></i>
                  </div>
                  <small>M.R.P: <s>Rs.2500</s></small>
                  <p>Rs.2000</p>
                  <a href=""><button type="submit" class="btn">Add To Cart</button></a>   
            </div>
            <div class="col-4">
              <img src="images/product-2.jpg" alt=""  class="show" id="images/product-2.jpg">
              <h4>HRX Shoes</h4>
              <div class="rating">
                  <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star-half-o"></i>
              </div>
              <small>M.R.P: <s>Rs.3000</s></small>
              <p>Rs.1999</p>
              <a href=""><button type="submit" class="btn">Add To Cart</button></a>
              
            </div>
            <div class="col-4">
            <img src="images/product-3.jpg" alt=""  class="show" id="images/product-3.jpg">
            <h4>HRX Track pants</h4>
            <div class="rating">
              <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star-half-o"></i>
          </div>
          <small>M.R.P: <s>Rs.2000</s></small>
          <p>Rs.1800</p>
          <a href=""><button type="submit" class="btn">Add To Cart</button></a>
          
    </div>
    <div class="col-4">
      <img src="images/product-4.jpg" alt=""  class="show" id="images/product-4.jpg">
      <h4>Puma Polo T-Shirt</h4>
      <div class="rating">
          <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star-half-o"></i>
      </div><small>M.R.P: <s>Rs.3000</s></small>
      <p>Rs.2500</p>
      <a href=""><button type="submit" class="btn">Add To Cart</button></a>
      
</div>
        </div>
        <div class="row">
            <div class="col-4">
                  <img src="images/product-5.jpg" alt="" class="show" id="images/product-5.jpg">
                  <h4>Nike Shoes</h4>
                  <div class="rating">
                      <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star-half-o"></i>
                  </div>
                  <small>M.R.P: <s>Rs.5000</s></small>
                  <p>Rs.3500</p>
                  <a href=""><button type="submit" class="btn">Add To Cart</button></a>
                  
            </div>
            <div class="col-4">
              <img src="images/product-6.jpg" alt="" class="show" id="images/product-6.jpg">
              <h4>Puma T-Shirt</h4>
              <div class="rating">
                  <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star-half-o"></i>
              </div>
              <small>M.R.P: <s>Rs.2500</s></small>
              <p>Rs.2000</p>
              <a href=""><button type="submit" class="btn">Add To Cart</button></a>
              
            </div>
            <div class="col-4">
            <img src="images/product-7.jpg" alt="" class="show" id="images/product-7.jpg">
            <h4>HRX Socks</h4>
            <div class="rating">
              <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star-half-o"></i>
          </div>
          <small>M.R.P: <s>Rs.700</s></small>
          <p>Rs.499</p>
          <a href=""><button type="submit" class="btn">Add To Cart</button></a>
          
    </div>
    <div class="col-4">
      <img src="images/product-8.jpg" alt="" class="show" id="images/product-8.jpg">
      <h4>Fossil Watch</h4>
      <div class="rating">
          <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star-half-o"></i>
      </div>
      <small>M.R.P: <s>Rs.6000</s></small>
      <p>Rs.3999</p>
      <a href=""><button type="submit" class="btn">Add To Cart</button></a>
      
</div>
        </div>
        <div class="row">
            <div class="col-4">
                  <img src="images/product-9.jpg" alt="" class="show" id="images/product-9.jpg">
                  <h4>Roadster Watch</h4>
                  <div class="rating">
                      <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star" ></i>
                       <i class="fa fa-star-half-o"></i>
                  </div>
                  <p>Rs.1999</p>
                  <a href=""><button type="submit" class="btn">Add To Cart</button></a>
                  
            </div>
            <div class="col-4">
              <img src="images/product-10.jpg" alt="" class="show" id="images/product-10.jpg">
              <h4>HRX Shoes</h4>
              <div class="rating">
                  <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star" ></i>
                   <i class="fa fa-star-half-o"></i>
              </div>
              <small>M.R.P: <s>Rs.3000</s></small>
              <p>Rs.2500</p>
              <a href=""><button type="submit" class="btn">Add To Cart</button></a>
              
            </div>
            <div class="col-4">
            <img src="images/product-11.jpg" alt="" class="show" id="images/product-11.jpg">
            <h4>Roadster Shoes</h4>
            <div class="rating">
              <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star-half-o"></i>
          </div>
          <small>M.R.P: <s>Rs.2000</s></small>
          <p>Rs.1299</p>
          <a href=""><button type="submit" class="btn">Add To Cart</button></a>
          
    </div>
    <div class="col-4">
      <img src="images/product-12.jpg" alt="" class="show" id="images/product-12.jpg">
      <h4>Nike Trackpants</h4>
      <div class="rating">
          <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star" ></i>
           <i class="fa fa-star-half-o"></i>
      </div>
      <small>M.R.P: <s>Rs.2500</s></small>
      <p>Rs.1499</p>
      <a href=""><button type="submit" class="btn">Add To Cart</button></a>
      
</div>
        </div>
    </div>
    
  
    <!-- footer -->
    <div class="footer" id="my-footer">
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
                    <a href="index.html"><img src="images/logo3_white.png" alt="" width="70px"></a>

                    <p>Our Purpose Is To Provide with accessability Of latest tech to the Masses Easily Hasslefree </p>
                </div>
                <div class="footer_col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer_col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#" class="fa fa-facebook"></a>
                            <a href="https://www.facebook.com/">Facebook</a> </li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"> </a>   <a href="https://www.twitter.com">  Twitter</a> </li>
                        <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a>   <a href="https://www.instagram.com">   Instagram</a> </li>
                        <li><a href="https://www.youtube.com/" class="fa fa-youtube">  </a>   <a href="https://www.youtube.com">   Youtube</a> </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020  </p>
        </div>
    </div>
    <script>
        edits = document.getElementsByClassName('show');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("show ", e.target.parentNode);
                div = e.target.parentNode;
             
               image=e.target.id;
                tittle = div.getElementsByTagName("h4")[0].innerHTML;
                description = div.getElementsByTagName("p")[0].innerHTML;
                descriptionWithout = div.getElementsByTagName("small")[0].innerHTML;
                
                console.log(image,tittle, description);
             document.getElementsByClassName('productname')[0].innerHTML=tittle;
             document.getElementsByClassName('productprice')[0].innerHTML=description;
             document.getElementsByClassName('productpriceWithout')[0].innerHTML=descriptionWithout;
             document.getElementsByClassName('productimage')[0].src=image;
             document.getElementsByClassName('addtocart')[0].value = 1;    // new added 
             document.getElementsByClassName('addtocartprice')[0].value = description;
             document.getElementsByClassName('addtocartname')[0].value = tittle;
             document.getElementsByClassName('addtocartimage')[0].value = image;


              $('#exampleModal').modal('toggle');
            //   modalToggle.toggle();
            console.log('I am image ');
            })
        })
        // new added 
    addtocart = document.getElementsByClassName('btn');   
    Array.from(addtocart).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("btn ", e.target.parentNode);
            div = e.target.parentNode;

            image = div.getElementsByTagName("img")[0].src;
            tittle = div.getElementsByTagName("h4")[0].innerHTML;
            description = div.getElementsByTagName("p")[0].innerHTML;

            console.log(image, tittle, description);
            document.getElementsByClassName('productname')[0].innerHTML = tittle;
            document.getElementsByClassName('productprice')[0].innerHTML = description;
            document.getElementsByClassName('productimage')[0].src = image;
            document.getElementsByClassName('addtocart')[0].value = 1;    // new added
            document.getElementsByClassName('addtocartprice')[0].value = description;
            document.getElementsByClassName('addtocartname')[0].value = tittle;
            document.getElementsByClassName('addtocartimage')[0].value = image;

            $('#exampleModal').modal('toggle');
            //   modalToggle.toggle();
            console.log('I am outsider ');
        })
    })
    </script>
        
        
    <script>
    logins = document.querySelector('.accountimage');
    logins.addEventListener('click', () => {
    //signin.value = 1;
       $('#accountModal').modal('toggle');
    });
    </script>

    <script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register() {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function login() {
        RegForm.style.transform = "translateX(470px)";
        LoginForm.style.transform = "translateX(470px)";
        Indicator.style.transform = "translateX(0px)";
    }
    </script>

       </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


</body>
</html>
