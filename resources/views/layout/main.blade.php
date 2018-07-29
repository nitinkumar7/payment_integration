<!DOCTYPE html>
<html>
<head>
    <title>Payment Integration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <script src="{{asset('js/lightGallery.js')}}"></script>
    <script src="{{asset('js/SmoothScroll.min.js')}}"></script>
    <script src="{{asset('js/numscroller-1.0.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('css/lightGallery.css')}}" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

            <script type="text/javascript">
        
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });

        $(function () {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: true,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
      </script>
</head>
<body>
<div class="banner">
        <!-- <div class="container"> -->
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><img src="{{asset('images/logo.png')}}" width="50" height="60" align="left"><a class="navbar-brand" href="{{url('/')}}">The Sparks Foundation</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a class="active scroll" href="https://www.thesparksfoundationsingapore.org/">About</a></li> 
                         
                        <li><a class="scroll" href="https://www.thesparksfoundationsingapore.org/">Gallery</a></li> 
                        <li><a class="scroll" href="https://www.thesparksfoundationsingapore.org/">Join Us</a></li> 
                        <li><a class="scroll" href="https://www.thesparksfoundationsingapore.org/">Contact</a></li> 
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>     
              <ul class="top-links">
                                    <li><a href="https://www.facebook.com/thesparksfoundation.info/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/the-sparks-foundation/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
        <!-- </div> -->
    </div>
    @yield('content')   
</body>
</html> 