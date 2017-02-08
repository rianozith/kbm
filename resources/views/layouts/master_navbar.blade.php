<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{asset('bower/bootstrap/dist/css/bootstrap.min.css')}}">
    
    <!-- Custom styles for this template -->
    <link href="{{asset('solid/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('solid/assets/css/font-awesome.min.css')}}" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index">KBM Apps.</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index">HOME</a></li>
            <li><a href="planning">Planning</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="login" data-toggle="modal" data-target="#loginModal">Login</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="single-post.html">SINGLE POST</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="single-project.html">SINGLE PROJECT</a></li>
              </ul>
            </li> <!-- /.dropdown1 -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">KBM <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="siswa">Murid</a></li>
                <li><a href="guru">Pengajar</a></li>
              </ul>
            </li> <!-- /.dropdown2 -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- khusus index
    =========================================================-->
    @yield('index')


    <!-- isi konten web 
    =========================================================-->
    <div id="service">
    	<div class="container">
    		<div class="row">
    			@yield('content')
    		</div> {{-- /.row --}}
       	</div> {{-- /.container --}}
    	
    </div> {{-- /#content --}}

    <!--modal login 
    ==========================================================-->
    <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h1 class="text-center">Login</h1>
          </div>
          <div class="modal-body">
              
              <form action="Auth\AuthController@getLogin" role="form" method="post" class="form col-md-12 center-block">
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control input-lg" placeholder="Password">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                  <span class="pull-right"><a href="register">Register</a></span><span><a href="#">Need help?</a></span>
                </div>
              
              </form>
          </div>
          <div class="modal-footer">
              <div class="col-md-12">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
          </div>  
          </div>
      </div>
      </div>
    </div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset ('bower/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset ('solid/assets/js/bootstrap.min.js')}}"></script>
	  <script src="{{asset ('solid/assets/js/retina-1.1.0.js')}}"></script>
	  <script src="{{asset ('solid/assets/js/jquery.hoverdir.js')}}"></script>
	  <script src="{{asset ('solid/assets/js/jquery.hoverex.min.js')}}"></script>
	  <script src="{{asset ('solid/assets/js/jquery.prettyPhoto.js')}}"></script>
  	<script src="{{asset ('solid/assets/js/jquery.isotope.min.js')}}"></script>
  	<script src="{{asset ('solid/assets/js/custom.js')}}"></script>



<script>
// Portfolio
(function($) {
  "use strict";
  var $container = $('.portfolio'),
    $items = $container.find('.portfolio-item'),
    portfolioLayout = 'fitRows';
    
    if( $container.hasClass('portfolio-centered') ) {
      portfolioLayout = 'masonry';
    }
        
    $container.isotope({
      filter: '*',
      animationEngine: 'best-available',
      layoutMode: portfolioLayout,
      animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    },
    masonry: {
    }
    }, refreshWaypoints());
    
    function refreshWaypoints() {
      setTimeout(function() {
      }, 1000);   
    }
        
    $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector }, refreshWaypoints());
        $('nav.portfolio-filter ul a').removeClass('active');
        $(this).addClass('active');
        return false;
    });
    
    function getColumnNumber() { 
      var winWidth = $(window).width(), 
      columnNumber = 1;
    
      if (winWidth > 1200) {
        columnNumber = 5;
      } else if (winWidth > 950) {
        columnNumber = 4;
      } else if (winWidth > 600) {
        columnNumber = 3;
      } else if (winWidth > 400) {
        columnNumber = 2;
      } else if (winWidth > 250) {
        columnNumber = 1;
      }
        return columnNumber;
      }       
      
      function setColumns() {
        var winWidth = $(window).width(), 
        columnNumber = getColumnNumber(), 
        itemWidth = Math.floor(winWidth / columnNumber);
        
        $container.find('.portfolio-item').each(function() { 
          $(this).css( { 
          width : itemWidth + 'px' 
        });
      });
    }
    
    function setPortfolio() { 
      setColumns();
      $container.isotope('reLayout');
    }
      
    $container.imagesLoaded(function () { 
      setPortfolio();
    });
    
    $(window).on('resize', function () { 
    setPortfolio();          
  });
})(jQuery);
</script>

</body>
</html>