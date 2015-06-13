<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-320x460.png" />
<title>fooRental.com</title>
<link rel="stylesheet" href="css/framework7.css">
<link rel="stylesheet" href="style.css">
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
</head>
<body id="mobile_wrap">



    
    

         
                        
                        
    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-right panel-cover">
              <nav class="list-nav">
                <ul>
                  <li class="home-icon"><a href="index.php" class="close-panel">Home</a></li>
                  <li class="about-icon"><a href="about.html" class="close-panel">My Account</a></li>
                  <li class="search-icon"><a href="find.php" class="close-panel">Find and Rent!</a></li>
                  <li class="photos-icon"><a href="add.php" class="close-panel">Rent Your Stuff</a></li>
                  <li class="cart-icon"><a href="buy.php" class="close-panel">Buy Good Stuff</a></li>
                  <li class="blog-icon"><a href="#" onclick="window.location = 'whatsapp://send?text=Hi&abid=10'"  class="close-panel">Messaging</a></li>
                  <li class="logout-icon"><a href="contact.html" class="close-panel">Logout</a></li>
                </ul>
                
                
              </nav>  
    </div>



    <div class="views">

      <div class="view view-main">

        <div class="navbar">
          <div class="navbar-inner">
            <div class="left sliding"><div class="logo_title">fooRental.com</div></div>
            <div class="right menu_open_icon"><a href="#" data-panel="left" class="link icon-only open-panel"></a></div>
          </div>
        </div>

        
          <!-- start -->
          
        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page homepage">
            <div class="page-content">

                  <!-- Slider -->
                  <div class="swiper-container swiper-init" data-effect="coverflow" data-pagination=".swiper-pagination">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide">
                        
                    
                          <span><br>fooRental.com</span>
                          <span class="subtitle">Need something? <br> Save Money, Earn extra cash!</span>
                          
                          <a href="find.php" class="swiper_read_more">swipe to see more</a>                      </div>
                      <div class="swiper-slide">
                          <span>I NEED HELP!</span>
                          <span class="subtitle">Rent something now!</span>
                          
                          
                          <a href="find.php" class="swiper_read_more">Start Searching</a>                      </div>
                      <div class="swiper-slide">
                          <span>I WANNA MAKE <br>SOME CASH!</span>
                          <span class="subtitle">Advertize your stuff.</span>
                          <a href="add.php" class="swiper_read_more">Create Inventory</a>                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
          </div>
        </div>
          <!-- footer --> 
        
        
        <!-- Bottom Toolbar-->
        <div class="toolbar">
              <div class="toolbar-inner">
              <ul class="toolbar_icons icons_4row">
              <li><a href="find.php"><img src="images/icons/white/search.png" alt="" title="" /></a></li>
              <li><a href="add.php"><img src="images/icons/white/photos.png" alt="" title="" /></a></li>
              <li><a href="buy.php" rel="external" data-ajax="false"><img src="images/icons/white/cart.png" alt="" title="" /></a></li>
              <li><a href="#" onclick="window.location = 'whatsapp://send?text=Hi&abid=10'" ><img src="images/icons/white/blog.png" alt="" title="" /></a></li>
              </ul>
              </div>  
        </div>
        

      </div>
    </div>
    
    <!-- About Popup -->
    <div class="popup popup-login">
    <div class="content-block">
      <h4>Login</h4>
                  <input type="hidden" id="Lat" name="Description" value="3.0661236000000005"  >
            <input type="hidden" id="Long" name="Description" value="101.60513209999999"  >
                
                
            <div class="loginform">
            <form id="LoginForm" method="post">
            <label>Username:</label>
            <input type="text" name="Username" value="" class="form_input required" />
            <label>Password:</label>
            <input type="password" name="Password" value="" class="form_input required" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="Login" />
            </form>
            </div>
      <div class="close_popup_button_gray"><a href="#" class="close-popup">Close</a></div>
    </div>
    </div>
    <!-- Services Popup -->
    <div class="popup popup-social">
    <div class="content-block">
      <h4>Social Share</h4>
      <p>Share icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
      <li><a href="#"><img src="images/icons/white/twitter.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/facebook.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/googleplus.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/dribbble.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/linkedin.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/pinterest.png" alt="" title="" /></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup">Close</a></div>
    </div>
    </div>
    
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/framework7.min.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/email.js"></script>



                
   <script>
                                var $ = jQuery;
 $(function() {

        var Geo={};

        if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(success, error);
        }

        //Get the latitude and the longitude;
        function success(position) {
            Geo.lat = position.coords.latitude;
            Geo.lng = position.coords.longitude;
            populateHeader(Geo.lat, Geo.lng);
        }

        function error(){
            console.log("Geocoder failed");
        }

        function populateHeader(lat, lng){
         $('#Lat').val(lat);
        $('#Long').val(lng);
          // alert(lat);
        }

    });

    
    
                   function copylatlong() {
                    //code
                   
                          document.getElementById("latadd").value = document.getElementById("Lat").value;
                          document.getElementById("longadd").value = document.getElementById("Long").value;
                          //return false;
                   }
                    
       </script>
                            

                            

  </body>
</html>