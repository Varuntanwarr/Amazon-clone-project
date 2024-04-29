<?php
session_start();

$dbhost="localhost";
 $dbusername="root";
 $dbPassword="";
 $dbName="users";
 $con=mysqli_connect($dbhost,$dbusername,$dbPassword,$dbName);
$userprofile=$_SESSION["email"];

$result=mysqli_query($con,"SELECT*FROM  `customers`  WHERE U_EMAIL='$userprofile'");

$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>
        Amazon
    </title>
    <link rel="stylesheet" href="style.css"/>
    
    

</head>
<body>
    <header>
    <div class="navbar">
        
      <div class=" logo ">
    <img src="https://www.thesun.co.uk/wp-content/uploads/2022/02/Amazon-Logo-1024x426-1.png" height="50px" width="100px"/>
      </div>
      
    <div class="nav_address border">
        <p class="add_one">Deliver to</p>
        
             <div class="icon">
                    <i class="fa-sharp fa-solid fa-location-dot" style="color: #ffffff;"></i>
                    <p class="add_two">India</p>
               </div>
    </div> 
               <div class="all">
                <select class="option">
                  <option value="All">All</option>
                  <option value="Arts&Crafts">Arts&Crafts</option>
                  <option value="Baby">Baby</option>
                  <option value="Automotive">Automotive</option>
                  <option value="Beauty&CARE">Beauty&Care</option>
                  <option value="BOOKS">BOOKS</option>
                  <option value="Computers">Computers</option>
                  <option value="Digital Music">Digital Music</option>
                </select>
                <input placeholder="Search Amazon" class="search_bar"/>
                <div class="search_icon">
                  <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #00040a;margin-top:20px; margin-left: 10px;"></i>
                </div>
               </div>
               <div style="margin-left:45px;" class="language border">
                <div class="flag">
                  <img src="data:image/png;base64,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 " height="20px" width="30px"/>
                </div>
                <select class="lang">
                  <option value="En">En</option>
                  <option value="English-En">English-En</option>
                  <option value="Espanol-Es">Espanol-Es</option>
                  <option value="Deutsch-Ds">Deutsch-Ds</option>
                  
                
                </select>
               </div>
            
              <div  class="sign_in">
                <span  style="font-size:20px;" class="hello">Hello,<?php echo $row['U_NAME']?></span>
      
      
        <a style="color:white;text-decoration:none;font-size:20px; margin:20px;" href="logout.php">Logout</a>        
              
</div>
              
              <div style="" class="ro border">
                <p class="return">Returns</p>
                <p class="order">&Orders</p>
              </div> 
              <div  style="margin-left:55px;" class="cart border">
                <i class="fa-solid fa-cart-shopping fa-2xl" style="color:#e78804; margin-top:30px;"></i>

             <p class="ct">Cart</p> 
              </div>
    </div>
    <div class="panel">
      <div class="menu border">
        
      <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
        <p class="menu_al">All</p>
      </div>
      <div class="info">
        <p class="border" style="margin-left:15px">Today's Deals</p>
        <p class="border" style="margin-left:20px">Customer Service</p>
        <p class="border" style="margin-left:20px">Registry</p>
        <p class="border" style="margin-left:20px">Gift Cards</p>
        <p class="border" style="margin-left:20px">Sell</p>
        
      </div>
    </div>
    
    </header>
    <div class="hero_section">
       <div class="hero_mesg">
        <p>You are on amazon.com. You can also shop on Amazon India for millions of products with fast local delivery.<a href="https://www.amazon.in/"> Click here to go to amazon.in</a> </p>

      </div>
    </div>
    <div class="shop_section">
        <div class="box1 box">
          
          <h2 class="shop_head">Shop Activity trackers And Watches</h2>
        <div class="box1_img" style="background-image:url('https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/September/DashboardCards/Fuji_Dash_SmartWatch_1X._SY304_CB639922137_.jpg');">
      </div>
      <p class="shop_cont">Shop gifts</p>
      
    </div>
        <div class="box1 box">
          <h2 class="shop_head">Celebrate the Women in your life</h2>
          <div class="box1_img" style="background-image:url('https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2024/IntlWomensDay/Fuji_Womens_day_Dash_card_1x_EN._SY304_CB582974978_.jpg');">
        </div>
        <p class="shop_cont">Shop gifts</p>
        
        </div>
        <div class="box1 box">
          <h2 class="shop_head">Deals In PCs</h2>
          <div class="box1_img" style="background-image:url('https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/EBF23/Fuji_Desktop_Single_image_EBF_1x_v1._SY304_CB573698005_.jpg');">
        </div>
        <p class="shop_cont">Shop gifts</p>
        
        </div>
        <div class="box1 box">       <h2 class="shop_head">Fill Your Easter basket With Joy</h2>
          <div class="box1_img" style="background-image:url('https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2024/Easter/Fuji_Easter_Dash_card_1x_EN._SY304_CB581341381_.jpg');">
        </div>
        <p class="shop_cont">Shop gifts</p>
        </div>
    </div>

    <div class="shop_section">
      <div class="box1 box">
        
        <h2 class="shop_head">Creating Business Solutions</h2>
      <div class="box1_img" style="background-image:url('https://images-na.ssl-images-amazon.com/images/G/01/us-manual-merchandising/RBS-in-house-Graphics/cc_359_laptop_us_v1._SY304_CB576754001_.jpg');">
    </div>
    <p class="shop_cont">See more software products</p>
    
  </div>
      <div class="box1 box">
        <h2 class="shop_head">Laptops for every need</h2>
        <div class="box1_img" style="background-image:url('https://images-na.ssl-images-amazon.com/images/G/01/us-manual-merchandising/XCM_CUTTLE_1622894_3373440_379x304_1X_en_size1_US._SY304_CB597469214_.jpg');">
      </div>
      <p class="shop_cont">Find your laptop here</p>
      
      </div>
      <div class="box1 box">
        <h2 class="shop_head">Under Rs.699|Combo Packs</h2>
        <div class="box1_img" style="background-image:url('https://images-eu.ssl-images-amazon.com/images/G/31/Symbol/2024/GW_Feb/12th/Combo_low_res_2_1_1_1._SY304_CB582679688_.jpg');">
      </div>
      <p class="shop_cont">See all offers</p>
      
      </div>
      <div class="box1 box">       <h2 class="shop_head">Personal Care Under $25</h2>
        <div class="box1_img" style="background-image:url('https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/EBF23/Fuji_Desktop_Single_image_EBF_1x_v10._SY304_CB573698005_.jpg');">
      </div>
      <p class="shop_cont">See more</p>
      </div>
  </div>
  <div class="long_panel">
  
    <div class="all_images">
    
    <div class="boxes_one" ><h2>Best Sellers in Books</h2>
    <img src="https://m.media-amazon.com/images/I/61gzQGQ48mL._AC_SY200_.jpg" height="200px" width="150px"/>
  <img src="https://m.media-amazon.com/images/I/71OOiKyiHaL._AC_SY200_.jpg" class="img_one" height="200px" width="150px" />
<img src="https://m.media-amazon.com/images/I/61kn1TYxOUL._AC_SY200_.jpg" class="img_one" height="200px" width="150px" />
</div>
    <div class="boxes">
      <img src="https://m.media-amazon.com/images/I/51n99-GSJ8L._AC_SY200_.jpg" height="200px" width="150px"/>
    </div>
    <div class="boxes">
      <img src="https://m.media-amazon.com/images/I/616Oq2CUMXL._AC_SY200_.jpg"  height="200px" width="150px"/>
    </div>
    <div class="boxes">
      <img src="https://m.media-amazon.com/images/I/81JL3vN6voL._AC_SY200_.jpg" height="200px" width="150px"/>
    </div>
    <div class="boxes">
      <img src="https://m.media-amazon.com/images/I/61DE-pMQksL._AC_SY200_.jpg" height="200px" width="150px"/>
    </div>
    <div class="boxes">
      <img src="https://m.media-amazon.com/images/I/61noO5MEc1L._AC_SY200_.jpg" height="200px" width="150px"/>
    </div>
</div>
  </div>
  <div class="form">
   <form action="signin.php" >
      <hr style="color:grey;margin:60px;size: 2px;">
      <p class="p_one">See personalized recommendations</p>
      <input type="submit" value="sign in" ><br>
      <p style="font-size: 0.7rem;">New Customers?<a href="form.php"style="font-size: 0.75rem;color:blue;">Starts here.</a></p>
      <hr style="color:grey;margin:30px;size: 2px;">
  </form>
  </div>
  <footer>
    <div class="panel_one">
Back to Top
    </div>
    <div class="panel_two">
      <ul>
        <p>Get to Know Us</p>
        <a>About Us</a>
         <a>Careers</a>
          <a>Press Releases</a>
           <a>Amazon Science</a>
      </ul>
      <ul>
        <p>Connect With Us</p>
        <a>Facebook</a>
         <a>Twitter</a>
          <a>Instagram</a>
           
      </ul>
      <ul>
        <p>Make Money With Us</p>
        <a>Sell on Amazon</a>
         <a>Sell Under Amazon Accelerator</a>
          <a>Protect and Build Your Brand</a>
           <a>Amazon Global Selling</a>
           <a>Become an Affiliate</a>
           <a>Fulfilment by Amazon</a>
           <a>Advertise Your Products</a>
           <a>Amazon Pay on Merchants
          </a>
      </ul>
      <ul>
        <p>Let Us Help You</p>
        <a>COVID-19 and Amazon</a>
         <a>Your Account</a>
          <a>Returns Centre</a>
           <a>100% Purchase Protection</a>
           <a>Amazon App Download
            </a>
           <a>Help</a>
      </ul>
    </div>
    <div class="panel_three">
<div class="logo_two">
  <img src="https://www.thesun.co.uk/wp-content/uploads/2022/02/Amazon-Logo-1024x426-1.png" height="40px" width="100px"/>
</div>
</div>

<div class="countary">
  
    <a>    Australia    </a>
    <a> Brazil
    </a>
    <a> China
    </a>
  
    <a>  Germany                       </a>
    <a>     Canada                    </a>
    <a>       Netherlands        </a>
    <a> Japan                        </a>
    <a>       Maxico                  </a>
    <a> Poland</a>
    <a>Singapore</a>
    <a>Span</a>
    <a>Turkey</a>
    <a>United States</a>
    <a>United Kingdom</a>
</div>
<div class="panel_four">
  <a>Conditions of Use & Sale
  </a>
  <a>Privacy Notice
  </a>
  <a>Interest-Based Ads</a>
</div>
<div class="panel_five">
  <p>© 1996-2024, Amazon.com, Inc. or its affiliates</p>
</div>
  </footer>
</body>
</html>