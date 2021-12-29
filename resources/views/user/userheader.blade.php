<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" href="user/images/favicon.ico">
<link rel="shortcut icon" href="user/images/favicon.ico" />
<link rel="stylesheet" href="user/css/touchTouch.css">
<link rel="stylesheet" href="user/css/style.css">
<!-- <link rel="stylesheet" href="user/css/formstyle.css"> -->
<script src="user/js/jquery.js"></script>
<script src="/user/js/jquery-migrate-1.1.1.js"></script>
<script src="user/js/jquery.easing.1.3.js"></script>
<script src="user/js/script.js"></script> 
<script src="user/js/superfish.js"></script>
<script src="user/js/jquery.equalheights.js"></script>
<script src="user/js/jquery.mobilemenu.js"></script>
<script src="user/js/tmStickUp.js"></script>
<script src="user/js/jquery.ui.totop.js"></script>
<script src="user/js/touchTouch.jquery.js"></script>
<script src="user/js/jquery.shuffle-images.js"></script>

<script>
  $(window).load(function(){
    $().UItoTop({ easingType: 'easeOutQuart' });
    $('.gallery .info').touchTouch();
  }); 

   $(document).ready(function(){
       $(".shuffle-me").shuffleImages({
         target: ".images > img"
       });
    });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>

<body class="page1" id="top">
  <div class="main">
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h1>
          <a href="index.html">
            <img src="user/images/logo.png" alt="Logo alt">
          </a>
        </h1>
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
        </div>
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li class="current"><a href="/userhome">Home</a></li>
             <li><a href="/userbook">Book</a></li>
             <li><a href="/bookingdetails">View Booking Details</a></li>
             <!-- <li><a href="/viewbill">View Recipt</a></li> -->
             <!-- <li><a href="/addfeedback">Add Feedback</a></li> -->
              <li><a href="/logout">Logout</a></li>
             
           
            
             <!-- <li><a href="contacts.html">Contacts</a></li> --> 
           </ul>
          </nav>
          <div class="clear"></div>
        </div>       
      </div>
    </div>
  </div>
</header>
@yield('user')
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div class="copyright"><a href="#" class="f_logo"><img src="user/images/f_logo.png" alt=""></a> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub_copyright">
            Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
          </div>
        </div>
      </div>
    </div>

  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</div>
</body>

</html>

