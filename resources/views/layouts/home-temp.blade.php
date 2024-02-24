<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>WOF - System Portal</title>

    <!-- CSS FILES -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">

    <!-- <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Akershusstranda 20, 0150 Oslo, Norway
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header> -->

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                 <img src="images/wof.gif" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                
                    <h4 style="color:#3b1d76;">System Portal</h4>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Causes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">News</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                            <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                        </ul>
                    </li> -->

                    <li class="nav-item">
                        
                    </li>

                    <li class="nav-item ms-3">
                    


                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <p>Welcome, </p> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    




                    </li>
                </ul> 
            </div>
        </div>
    </nav>

    <main>

    


        <section class="section-padding">
        
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                    <h4 style="color:#3b1d76;text-align:left;">QUICK LINKS:</h4>
                    </div>

                    @yield('content')


                </div>
                


                <div class="row mt-5">
                            <div class="col-sm-12 mt-5 text-center">
                                    <a class="navbar-brand " href="http://worldoffun.com.ph/" target="_blank">
                                        
                                        <span>
                                        
                                            <p  style="color:#3b1d76;margin-left:20px;">
                                            <strong> Visit Our Website</strong><br>
                                            http://worldoffun.com.ph/
                                            </p>
                                        </span>
                                    </a>                                    
                            </div>
                            
                            <div class="col-sm-12 mt-5 text-center">
                            <ul class="social-icon">
                        <li class="social-icon-item">
                        <img src="images/wof.gif" class="logo img-fluid" alt="Kind Heart Charity">
                        </li>

                        <li class="social-icon-item">
                        <img src="images/icons/funfuntime.png" class="logo img-fluid" alt="Kind Heart Charity">
                        </li>

                        <li class="social-icon-item">
                        <img src="images/icons/szone.png" class="logo img-fluid" alt="Kind Heart Charity">
                        </li>

                        <li class="social-icon-item">
                        <img src="images/icons/tfs.png" class="logo img-fluid" alt="Kind Heart Charity">
                        </li>


                        <li class="social-icon-item">
                        <img src="images/icons/gwof.png" class="logo img-fluid" alt="Kind Heart Charity">
                        </li>


                        </ul>    
                            </div>


                            <div class="col-sm-12 mt-5 text-center">
                                        <span>
                                            <p  style="color:#3b1d76;margin-left:20px;">
                                            <strong> 
                                                7th Floor CLMC Building, 259 EDSA, Greenhills, Mandaluyong City, Philippines<br/>
                                                © World Of Fun | All rights reserved 2024 | <br/>
                                                (63)8705-1630
                                            </strong>
                                            
                                            </p>
                                        </span> 
                            </div>


                            <div class="col-sm-12 mt-5 text-center" style="margin-left:20px;">
                                        <span >
                        <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>
                        </ul>
                                        </span> 
                            </div>

                </div>



            </div>
        </section>

        


       

      

    </main>

     <footer class="site-footer">
        <div class="container">
        
        </div> 

        <!-- <div class="site-footer-bottom">
         
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>