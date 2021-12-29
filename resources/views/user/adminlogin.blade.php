<!DOCTYPE html>
<html lang="en">
<head>
<title>Eventrum</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="icon" href="user/images/favicon.ico">
<link rel="shortcut icon" href="user/images/favicon.ico" />
<link rel="stylesheet" href="user/css/touchTouch.css">
<link rel="stylesheet" href="user/css/style.css">
<script src="user/js/jquery.js"></script>
<script src="user/js/jquery-migrate-1.1.1.js"></script>
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

<body>
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
             <li class="current"><a href="/">Home</a></li>
             <li><a href="/userlogin">Login</a></li>
    
           </ul>
          </nav>
          <div class="clear"></div>
        </div>       
      </div>
    </div>
  </div>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>

  <div class="container">
    <div class="row">
      <div class="grid_9">
        <h4>Admin Login</h4>
      
        <div class="row">
          <div class="col-sm-4">
           
            <form action="alogin" method="post">
            @csrf
            <div class="form-group">
                    <label> Email:</label>
                    <input type="email" name="email" class="form-control">
                    @error("email")
                    <p style="color:red">{{$errors->first("email")}}
                    @enderror
              </div>
              <div class="form-group">
                    <label> Password:</label>
                    <td><input type="text" name="password" class="form-control"></td>
                    @error("password")
                    <p style="color:red">{{$errors->first("password")}}
                    @enderror
              </div>
              <div class="form-group">
                    
                    <input type="submit" name="submit" value="login" class="btn btn- #ff66d9">
                  
              </div>
           </form>
            
        
          </div>
        </div> 
        
      </div> 
    </div>
  </div>
</section>

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

