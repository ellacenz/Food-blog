<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ella Delicacies</title>

        <!-- Fonts -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content-wrapper" class="d-flex flex-column m-5">

            <!-- Main Content -->
            <div id="content" class="container-fluid">
                
                <div class="h1  text-center pt-3">
                    <a href="/" class="text-decoration-none">
                        <h1 class="h1 bg-light pt-3 display-1">Ella's Delicacy</h1>
                    </a>
                </div>

                <!-- Topbar -->

                <nav class="navbar navbar-expand-sm bg-light font-weight-bold justify-content-center pt-3">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recipe search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cookbook recipes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/recipe">Recipe Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">The Book</a>
                        </li><!-- comment -->
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact-us">Contact Us</a>
                        </li>
                    </ul>

                </nav>
                <!-- End of top bar -->
                @yield('content')
                 <!-- Footer area -->
                 <footer class="footer bg-light p-4">
                        <div class="row">
                            <div class="col-sm-4 pl-5"> 
                                <h5>Oh She Glows</h5>
                                <ul class="list-unstyled">
                                    <li>My Story</li>
                                    <li>Apps</li>
                                    <li>Books</li>
                                    <li>ED in MEdia</li>
                                    <li>Archives</li>
                                </ul>

                            </div>
                            <div class="col-sm-4 pl-5">
                                <h5>Popular</h5>
                                <ul class="list-unstyled">
                                    <li>My Story</li>
                                    <li>Apps</li>
                                    <li>Books</li>
                                    <li>MY FAVOURITE SKIN CARE PRODUCTS</li>
                                    <li>Archives</li>
                                </ul>

                            </div><!-- comment -->
                            <div class="col-sm-4 pt-2 text-center pr-5">
                                <span class="fa fa-facebook p-2"></span>
                                <span class="fa fa-instagram p-2"></span><!-- comment -->
                                <span class="fa fa-twitter p-2"></span>
                                <span class="fa fa-pinterest p-2"></span>
                                <span class="fa fa-youtube p-2"></span>
                       
                            </div>
                        </div>
                    </footer>
                 <div class="text-center">
                     <p>CopyRight @CenzTech 2021 | ALL RIGHTS RESERVED. 
                         | PRIVACY POLICY | TERMS OF SERVICE</p><p> AN ELITE CAFEMEDIA FOOD PUBLISHER</p>
                 </div>
            </div>

        </div>
    </body>
</html>
