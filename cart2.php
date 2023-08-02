<?php
error_reporting(0);
$error=false;
$subtotal=0;
$showerror = "";
$conn = mysqli_connect("localhost", "root", "", "addtocart");

if (mysqli_connect_error()) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}
if(isset($_GET['delete'])){
    $sno=$_GET['delete'];
    $sql = "DELETE FROM `productlist` WHERE `productlist`.`sno` = $sno ";
    $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
  if($_POST['addtocart'] != 0){
    
    $image =$_POST['addtocartimage'];
    $price=$_POST['addtocartprice'];
    $size=$_POST['productsize'];
    $name=$_POST['addtocartname'];
/*
 echo $size;
 echo $price;
 echo $image;*/
 
       
if($size!="Select"){
    $sql = "INSERT INTO `productlist` ( `productimage`, `productname`, `productsize`, `productprice`) VALUES ('$image', '$name', '$size', '$price');";
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


        

    <!-- cart section -->
    <h1 class="title">Cart</h1>
    <div class="cart_page">
        
        <table width="100%" class="table">
                <tr>
                    <th>PRODUCT</th>
                    <th>Size</th>
                    <!-- <th>UNIT PRICE</th> -->
                    <th>TOTAL</th>
                </tr>


                <?php
                $sql = "SELECT * FROM `productlist`";
                $result = mysqli_query($conn, $sql);
          
                // Find the number of records returned
                $num = mysqli_num_rows($result);
                //echo $num;
                if ($num > 0) {
                  // $row = mysqli_fetch_assoc($result);
                 // $sno = 1;
                // $subtotal=0;
                // $po="";
                  while ($row = mysqli_fetch_assoc($result)) {
                     // $x="";
                    $x=($row['productprice']); 
                    $p=(int)$x;
                    $subtotal=$subtotal+$p;
                     
                   
                  
                echo '
                <tr>
                    <td>
                      <div class="cart_info">
                        <img src='.$row['productimage'].' alt="" width="200px">
                        <div>
                            <p>'.$row['productname'].'</p>
                           
                            <br>
                            <button class="remove btn" id=' . $row['sno'] . '>Remove</button>
                            
                        </div>
                      </div>

                    </td>
                    <td> <p>'.$row['productsize'].'</p></td>
                    <td> <p>Rs.'.$row['productprice'].'</p></td>
                </tr>';
               
       
                }
                 }
    ?>
    </table>
    <?php
    $tax=($subtotal*2)/100;
    $total=$tax+$subtotal;
    echo '
        <div class="total_price">
        <table>
            <tr>  
                <td>Subtotal</td> 
                <td>Rs.'.$subtotal.'</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rs.'.$tax.'</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Rs.'.$total.'</td>
            </tr>  
        </table>
        
        </div>';
        ?>
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
    <script>
        deletes = document.getElementsByClassName('remove');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("remove ");
          //  snodelete.value = e.target.id;
        value1=e.target.id;
             if (confirm("Are you sure you want to delete this item!")) {
               console.log("yes");
               window.location = `/projectshop/cart2.php?delete=${value1}`;
               // TODO: Create a form and use post request to submit a form
             } else {
               console.log("no");
             }
          
             console.log(e.target.id);
        })
    })
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