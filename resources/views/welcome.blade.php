
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Public Complaints</title>
        
<!-- 

Sentra Template

https://templatemo.com/tm-518-sentra

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset('mockup/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('mockup/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{ asset('mockup/css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{ asset('mockup/css/light-box.css')}}">
        <link rel="stylesheet" href="{{ asset('mockup/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('mockup/css/templatemo-style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="{{ asset('mockup/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

<body>



        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <!--/.navbar-header-->
        </header>

        <div class="sidebar-navigation">
            <div class="logo">
                <a>Public Complaints</a>
            </div>
            <nav>
                <ul>            
                    <li>
                        <a href="/login">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            login
                        </a>
                    </li>
                    <li>
                        <a href="/register">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/qr/MMXI2XDVXCACP1">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/muarkos?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="page-content">
            <section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>Public<br><em><b>Complaints</b></em></h1>
                    <p>Having problems? Don't know the solution?
                    <br>Don't worry, we are ready to help with the best performance.</p>
                </div>
                <div class="section-content">
                    <div class="masonry">
                        <div class="row">
                            <div class="item">
                                <div class="col-md-7">
                                    <a data-lightbox="image"><img src="{{ asset('mockup/img/portfolio_1.jpg')}}" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item second-item">
                                <div class="col-md-3">
                                    <a data-lightbox="image"><img src="{{ asset('mockup/img/portfolio_2.jpg')}}" alt="image 2"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3">
                                    <a data-lightbox="image"><img src="{{ asset('mockup/img/portfolio_5.jpg')}}" alt="image 5"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </section>
        </div>

    <script src="{{ asset('mockup/https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('mockup/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

    <script src="{{ asset('mockup/js/vendor/bootstrap.min.js')}}"></script>
    
    <script src={{ asset('mockup/"js/plugins.js')}}"></script>
    <script src="{{ asset('mockup/js/main.js')}}"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="{{ asset('mockup/http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript')}}"></script>

</body>
</html>