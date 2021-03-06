<?php
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

  ob_start();
  session_start();

  require_once('../../models/m_list_foods.php');
  require_once('../../models/m_menus.php');
  require_once('../../models/m_cates.php');
  $menus_cursor =  new M_menus;
  $menus =  $menus_cursor->read_menus();
  $list_foods_cursor  = new M_list_foods;
  
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Restaurant</title>      
        
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Font -->
        
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <!-- CSS
        ================================================== -->
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="public/user/css/font-awesome.min.css">
        <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="public/user/css/bootstrap.min.css">
        <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="public/user/css/jquery.fancybox.css">
        <!-- animate -->
        <link rel="stylesheet" href="public/user/css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="public/user/css/main.css">
        <!-- media-queries -->
        <link rel="stylesheet" href="public/user/css/media-queries.css">

        <!-- Modernizer Script for old Browsers -->
        <script src="public/user/js/modernizr-2.6.2.min.js"></script>

    </head>
    
    <body>
        <div id="preloader">
            <img src="public/user/img/preloader.gif" alt="preloader">
        </div>
           
        <div id="bannerTop" >
        <!-- header nav -->
            <div class="container-fluid"> 
                <header id="navigation" class="navbar-fixed-top navbar">
                        <div class="navbar-header">
                            <!-- responsive nav button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-bars fa-2x"></i>
                            </button>
                            <!-- /responsive nav button -->
                            <!-- logo -->
                            <a class="navbar-brand" href="https://www.facebook.com/" target="blank">
                                <h1 id="logo">
                                    <img src="public/user/img/logo.png" class="img-responsive" alt="">
                                </h1>
                            </a>
                            <!-- /logo -->
                        </div>

                        <!-- main nav -->
                            <nav class="collapse navbar-collapse navbar-right" role="navigation">   
                                <ul id="nav" class="nav navbar-nav">
                                    <?php  
                                        $cates_cursor =  new M_cates;
                                        $cates =  $cates_cursor->read_cates();
                                        foreach ($cates as $cate) {
                                    ?>
                                    <li><a href="<?php echo $cate->link; ?>"><?php echo $cate->name; ?></a>
                                        <?php  
                                            if ($cate->name == 'Menu') {

                                        ?>
                                            <ul style="color: white;
                                                font-size: 16px;
                                                font-weight: bold;
                                                display: none;"  >
                                                <li>-menu1</li>
                                                <li>--menu2</li>
                                                <li>-menu3</li>
                                            </ul>
                                        <?php  
                                            }
                                        ?>
                                    </li>
                                    <?php  
                                        }
                                    ?>
                                    <li><a href="https://twitter.com/?lang=vi" target="blank"><i class="fa fa-twitter" aria-hidden="true" style="color: #CC9900"></i></a>
                                    </li>
                                    <li><a href="https://www.youtube.com/watch?v=1_eDEaU_5mQ" target="blank"><i class="fa fa-youtube" aria-hidden="true" style="color: #CC9900"></i></a>
                                    </li>
                                    <li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook" aria-hidden="true" style="color: #CC9900"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        <!-- /main nav -->
                        
                </header>

                    </div>     
                        <div id="textTop" align="center">
                           <div class="container-fluid">
                               <div class="row">
                                  <div class="col-md-2 col-sm-0 col-lg-2 col-xs-0"></div>
                                  <!-- Text Top -->
                                  <div class="col-md-8 col-md-8 col-xs-8 col-xs-8" >
                                          <h1 id="title">
                                              <div id="titleTop">The right ingredients</div>
                                              <div id="titleBot"> for the right food</div>
                                          </h1>
                                          <br>
                                          <br>
                                          <img src="public/user/img/dive-big.png" class="img-responsive" alt="dive">
                                          <br>
                                          <br>
                                          <div id="btnTop">
                                              <a href="#content5">
                                                <button class="btnTop" id="btnLeft">BOOK A TABLE</button>
                                              </a>
                                              <a href="#content3">
                                              <button class="btnTop" id="btnRight">SEE THE MENU</button>
                                              </a>  
                                          </div>
                                  </div>
                                  <!-- /Text Top -->
                                  <div class="col-md-2 col-sm-0 col-lg-2 col-xs-0"></div>
                               </div>
                            </div>
                    </div>

        </div>
            <!-- /header nav-->
        <!-- /Top -->
        
        <!-- Content 1-->
            <div  id="content1" >
               <div class="container same">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                           <div class="leftContent1" >
                                <h1 id="textContent1">Just the right food</h1>
                                <br>
                                <img id="diveContent1" class="img-responsive" src="public/user/img/dive-yellow.png" alt="">
                                <br>
                                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active" data-interval="2000">
                                            <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam repellendus voluptates corrupti, dolores quasi quam laudantium ut quos, recusandae facere, tempore libero. Reiciendis qui repellendus nihil perferendis, autem provident enim.</span>
                                            <br><br>
                                            <img id="imgSignature" class="img-responsive" src="public/user/img/signature.png" alt="this is signature">
                                        </div>
                                        <div class="item" data-interval="2000">
                                            <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam repellendus voluptates corrupti, dolores quasi quam laudantium ut quos, recusandae facere, tempore libero. Reiciendis qui repellendus nihil perferendis, autem provident enim.</span>
                                            <br><br>
                                            <img id="imgSignature" class="img-responsive" src="public/user/img/signature.png" alt="this is signature">
                                        </div>
                                        <div class="item " data-interval="2000">
                                            <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam repellendus voluptates corrupti, dolores quasi quam laudantium ut quos, recusandae facere, tempore libero. Reiciendis qui repellendus nihil perferendis, autem provident enim.</span>
                                            <br><br>
                                            <img id="imgSignature" class="img-responsive" src="public/user/img/signature.png" alt="this is signature">
                                        </div>
                                    </div>
                                </div>
                           </div>
                    </div>
                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 dish ">
                        <img  class="img-responsive" src="public/user/img/dish.png" alt="this is beef">
                    </div>
                </div>
            </div>
        

        <!-- /Content 1 -->

        <!-- Content 2-->
        <div  id="content2" >
                <div class="container" style="width: 1170px;" >
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-5 col-xs-5 col-lg-5 col-sm-5 fine">
                            
                                <h1 id="fineText">Fine ingredients</h1>
                                    <img id="diveFine" src="public/user/img/dive-white.png" class="img-responsive" alt="dive">
                                    <div id="myCarousel"  class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                           <div class="item active" data-interval="2000">
                                               <p id="textContent2"> If you've been to one of our retaurants,you've seen-and tasted-what skeep our customers coming back for more. Perfect materials andfreshly backed food,delicious Lanbla cake, muffins,and gourmet coffees make us hard to resits! Stop in today and check us out! </p> <br><br> <div class="imgContent2"> <img class="img-responsive imgFloat" src="public/user/img/food-1.png" alt=""> <img class="img-responsive imgFloat" src="public/user/img/food-2.png" alt=""> <img class="img-responsive imgFloat" src="public/user/img/food-3.png" alt=""> </div>
                                           </div>
                                            <div class="item" data-interval="2000">
                                               <p id="textContent2"> If you've been to one of our retaurants,you've seen-and tasted-what skeep our customers coming back for more. Perfect materials andfreshly backed food,delicious Lanbla cake, muffins,and gourmet coffees make us hard to resits! Stop in today and check us out! </p> <br><br> <div class="imgContent2"> <img class="img-responsive imgFloat" src="public/user/img/food-1.png" alt=""> <img class="img-responsive imgFloat" src="public/user/img/food-2.png" alt=""> <img class="img-responsive imgFloat" src="public/user/img/food-3.png" alt=""> </div>
                                           </div>
                                            <div class="item" data-interval="2000" style="height: 270px !important">
                                               <p id="textContent2"> If you've been to one of our retaurants,you've seen-and tasted-what skeep our customers coming back for more. Perfect materials andfreshly backed food,delicious Lanbla cake, muffins,and gourmet coffees make us hard to resits! Stop in today and check us out! </p> <br><br> <div class="imgContent2"> <img class="img-responsive imgFloat" src="public/user/img/food-1.png" alt=""> <img class="img-responsive imgFloat" src="public/user/img/food-2.png" alt=""> <img class="img-responsive imgFloat" src="public/user/img/food-3.png" alt=""> </div>
                                           </div>
                                    </div>
                                </div>
                           </div>
                            
                           <div class="col-md-1"></div>         
                    </div>
                </div>   
            </div> 
        </div>     
        <!-- /Content 2 -->
            
        <!-- Content 3 -->
        <div id="content3" >
            <div class="container">
                <div class="row"  align="center">
                    <!-- menu-->
                    <?php  
                        foreach ($menus as $menu) {
                    ?>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 mainMenu" >
                        <h3 class="menuTitle"><?php echo $menu->name; ?></h3>
                        <br>
                        <img src="public/user/img/dive-yellow.png" class="img-responsive diveMenu"  alt="dive">
                        <?php  
                            $list_foods =  $list_foods_cursor->read_id_menu($menu->id);
                            foreach ($list_foods as $list_food) {
                                if ($list_food->special == 1) {

                               
                        ?>
                            <!-- Food Special -->
                        <div class="special" id="special">
                            <span id="detaiSpecial">
                                Special
                            </span>
                            <div class="list" id="list">
                                <p class="menuLeft"><?php echo $list_food->name; ?></p>
                                <p class="menuRight">$<?php echo $list_food->price ; ?></p>
                            </div>
                            <hr class="style3">
                            <div class="listText menuLeft" id="listText">
                                <p ><?php echo $list_food->description; ?> </p>               
                            </div>
                        </div>
                            <!--/Food Special -->
                        <?php  
                            }
                            else
                            {
                        ?>

                        <div class="special">
                            <div class="list">
                                <p class="menuLeft"><?php echo $list_food->name; ?></p>
                                <p class="menuRight">$<?php echo $list_food->price ; ?></p>
                            </div>
                            <hr class="style3">
                            <div class="listText menuLeft">
                                <p ><?php echo $list_food->description; ?> </p>               
                            </div>
                        </div>

                        <?php 
                                }
                            }
                        ?>
                    </div>
                     <!-- /menu -->
                    <?php  
                        }
                    ?>
                   
                </div>
                <!-- /Content 3-->
                
             </div>   
            </div>
        </div>
        <!-- Content 4-->
        <div id="content4">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-xs-0  col-sm-0">
                    </div>
                    <div class="col-md-8 col-xs-8 col-lg-8 col-sm-8" >
                        <div id="comment">
                            <br>
                            <h3 >Guest Reviews</h3>
                            <img  src="public/user/img/dive-white.png" alt="">
                            <div>
                                
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active" data-interval="3000">
                                     <div class="tenten">“</div>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel saepe, laudantium eaque, libero impedit dicta optio ut vitae ipsa deleniti rerum, facere illum placeat obcaecati amet, assumenda provident blanditiis sed.</p>
                                     <br>
                                     -food inc , NewYork
                                  </div>

                                  <div class="item" data-interval="3000">
                                    <div class="tenten">“</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur fugiat accusamus, expedita rem assumenda numquam, blanditiis tenetur impedit labore cupiditate quam in incidunt consequuntur iste sit, eligendi deserunt voluptate maiores!</p>
                                    <br>
                                    -food inc , NewYork
                                  </div>
                                
                                  <div class="item"  data-interval="3000" >
                                    <div class="tenten">“</div>
                                    <p>xin cho 2 ta vao nhung dam duoi mien man xin cho 2 ta vao nhung dam duoi mien man xin cho 2 ta vao nhung dam duoi mien man xin cho 2 ta vao nhung dam duoi mien man</p>
                                    <br>
                                    -food inc , NewYork
                                  </div>
                                </div>

                              </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-0  col-sm-0">
                    </div>  
                   
                </div>
            </div>
        </div>
        <!-- /Content 4-->
       
       <!-- Content 5-->
        <div>
            <div id="content5" >
                <div class="container">
                    <div>
                        <div class="row">
                            <div id="item">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                    <div class="row">
                                    <!-- Item 1-->
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <img src="public/user/img/item-1.png" id="itemImg1" alt="item 1" class="img-responsive itemImg">
                                        </div>
                                        <!-- /Item 1-->

                                        <!-- Item 2-->
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <img src="public/user/img/item-2.png" id="itemImg2" alt="item 2" class="img-responsive itemImg">
                                        </div>
                                    <!-- /Item 2-->
                                    </div>
                                </div>
                            </div>
                            <!-- Right Food-->
                            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 content5Right" align="center" >
                                <h1 id="titleContent5">Just the right food</h1>
                                <img src="public/user/img/dive-yellow.png" class="img-responsive" alt="dive">
                                <?php  
                                        if (isset($_SESSION['created'])) {
                                        
                                      ?>
                                      <div class="alert alert-success" style="font-size: 20px; font-weight: bold">Order Successfully</div>
                                      <?php  
                                        }
                                        unset($_SESSION['created']);
                                        if (isset($_SESSION['notcorrect']))
                                        {
                                      ?>
                                      <div class="alert alert-danger" style="font-size: 20px; font-weight: bold"><?php echo $_SESSION['notcorrect']; ?></div>
                                      <?php  
                                        unset($_SESSION['notcorrect']);
                                        }
                                      ?>
                                <span>If you’ve been to one of our restaurants, you’ve seen – and tasted - what keeps our customer coming back for more.Perfect materials and freshly baked food.

Delicious Lambda cakes, muffins,and gourmet coffes make us hard to resist! Stop in today and check us out!Perfect materials and freshly baked food.
                                </span>
                                <br>
                            <!-- /Right Food -->
                            <!-- Register -->
                                <div class="row" >
                                     <form action="admin.html?page=store_order_uses" class="form-group" method="post" enctype="multipart/form-data">
                                        <div class="col-md-6">
                                            <h4 class="pos">Name</h4>
                                            <input type="text" class="form-control" placeholder="your name*" name="name" required="required">
                                            <br>
                                            <h4 class="pos">Date</h4>
                                            <input type="text" class="form-control" placeholder="date* " id="datepicker" name="date" required="required">
                                            <span><i id="calendar" class="fa fa-calendar"></i></span>
                                        </div>
                                         <div class="col-md-6">
                                            <h4 class="pos">Email</h4>
                                            <input type="email" class="form-control" placeholder="your email*" name="email" required="required">
                                            <br>
                                            <h4 class="pos">Party Number</h4>
                                            <select class="form-control" name="party_number" required="required">
                                                <?php  
                                                  for ($i=1; $i <=30 ; $i++) { 
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php  
                                                  }
                                                ?>
                                            </select>
                                            <br>
                                            
                                        </div>
                                        <button class="form-control btn" name="send">Book Now</button>
                                    </form>
                                   
                                </div>
                            <!-- /Register -->
                            </div>
                            <!-- /Right Food-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--/Content 5-->
       <!-- Footer -->
        <div style="background-color: black; height: 300px ; ">
            <div class="container" align="center">
                <!-- About us -->
                <div class="col-xs-4 col-md-4 col-lg-4 col-sm-4 FOM" id="about">
                    <h3>About Us</h3>
                    <br>
                    <img src="public/user/img/dive-white.png" class="img-responsive" alt="About Us">
                    <br>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nulla dolorem molestias obcaecati a commodi placeat ea totam voluptates vero, adipisci provident quasi asperiores! Reprehenderit laboriosam aut neque in ipsam!</span>
                </div>
                <!-- /About us -->
                    
                <!-- Open House -->
                <div class="col-xs-4 col-md-4 col-lg-4 col-sm-4 FOM " id="open">
                    <h3>Opening House</h3>
                    <br>
                    <img src="public/user/img/dive-white.png" class="img-responsive" alt="About Us">
                    <br>
                    <p>Mon-Thu 7:00am - 8:00pm</p>
                    <p>Fri-Sun 7:00am - 10:00pm</p>  
                    <br>
                    <ul id="footerBuil">
                        <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-university" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <!-- /Open House -->
                    
                <!-- Our Location -->
                <div class="col-xs-4 col-md-4 col-lg-4 col-sm-4 FOM"  id="location">
                    <h3>Our Location</h3>
                    <br>
                    <img src="public/user/img/dive-white.png" class="img-responsive" alt="About Us">
                    <br>
                    <p>19th Paradies Street Sitia</p>
                    <p>128 Meserole Avenue</p>
                    <br>
                    <ul id="footerSocial">
                        <li><a href=""><i class="fa fa-instagram " aria-hidden="true" ></i></a></li>
                        <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook" aria-hidden ="true"></i></a></li>
                        <li><a href=""><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <!--/Our Location -->
            </div>
        </div>
       <!--/Footer -->
        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="public/user/js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="public/user/js/bootstrap.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="public/user/js/jquery.fancybox.pack.js"></script>
        <!-- jquery.mixitup.min -->
        <script src="public/user/js/jquery.mixitup.min.js"></script>
        <!-- jquery.parallax -->
        <script src="public/user/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countTo -->
        <script src="public/user/js/jquery-countTo.js"></script>
        <!-- jquery.appear -->
        <script src="public/user/js/jquery.appear.js"></script>
        <!-- Contact form validation -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- jquery easing -->
        <script src="public/user/js/jquery.easing.min.js"></script>
        <!-- jquery easing -->
        <script src="public/user/js/wow.min.js"></script>
        <script>
            var wow = new WOW ({
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       120,          // distance to the element when triggering the animation (default is 0)
                mobile:       false,       // trigger animations on mobile devices (default is true)
                live:         true        // act on asynchronously loaded content (default is true)
              }
            );
            wow.init();
        </script> 
        <!-- Custom Functions -->
        <script src="public/user/js/custom.js"></script>
        <!-- fix nav > tag a -->
        <script type="text/javascript">
             $(".navbar a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 900, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
        </script>
        <!-- /fix nav >tag 1-->

        <!-- fix button -->
        <script type="text/javascript">
             $("a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 900, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
        </script>
        <!--/fix button -->
        
        <script type="text/javascript">
            $(function(){
                /* ========================================================================= */
                /*  Contact Form
                /* ========================================================================= */
                
                $('#contact-form').validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        message: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: "come on, you have a name don't you?",
                            minlength: "your name must consist of at least 2 characters"
                        },
                        email: {
                            required: "no email, no message"
                        },
                        message: {
                            required: "um...yea, you have to write something to send this form.",
                            minlength: "thats all? really?"
                        }
                    },
                    submitHandler: function(form) {
                        $(form).ajaxSubmit({
                            type:"POST",
                            data: $(form).serialize(),
                            url:"process.php",
                            success: function() {
                                $('#contact-form :input').attr('disabled', 'disabled');
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $(this).find(':input').attr('disabled', 'disabled');
                                    $(this).find('label').css('cursor','default');
                                    $('#success').fadeIn();
                                });
                            },
                            error: function() {
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $('#error').fadeIn();
                                });
                            }
                        });
                    }
                });
            });
        </script>
        <!-- Script of me design input form -->
        
        <!-- /Script of me design input form-->
        <!-- Script animate -->
        <script type="text/javascript">
            $(document).ready(function()
            {
                $(window).scroll(function(){
                    $("slideanim").each(function()
                    {
                        var sl = $(this).offset().top;
                        var winTop = $(window).scrollTop();
                        if (sl< winTop + 200)
                        {
                            $(this).addClass("slide");
                        }
                    });
                });
            });
        </script>
        <!-- /Script animate -->
        <!-- Spicker -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
          $( function() {
            $( "#datepicker" ).datepicker();
          } );
        </script>
        <!--/Spicker-->

       
    </body>
</html>
