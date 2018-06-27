<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-Control" content="no-cache"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <!--[if lte IE 9]>
        <link href='/PATH/TO/FOLDER/css/animations-ie-fix.css' rel='stylesheet'>
        <![endif]-->
        <title>Simple Landing Page with Bootstrap</title>
        <!----CSS----->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/practise.css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
        <link 
            href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
            rel="stylesheet"  type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="simple-line-icons-master/css/simple-line-icons.css" />
    </head>
    <body>
        <!---Navigation---->
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand"><img src="images/mother2.ico"></a>
                <button class="btn btn-primary">Sign In</button>
            </div>
        </nav>
        <!---Header--->
        <header class="headerStyle text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h1 class="mb-5 display-4">
                            Build a landing page for your business or project and generate more leads!
                        </h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form>
                            <div class="form-row">
                                <div class="col-12 col-md-9 mb-3">
                                    <input type="email" class="form-control form-control-lg" placeholder="enter your email here...." />
                                </div>
                                <div class="col-12 col-md-3">
                                    <button type="button" class="btn btn-block btn-success btn-lg">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!---Icon Grid---->
        <section class="features-icon bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icon-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icon-icons d-flex">
                                <i class="icon-screen-desktop m-auto text-primary"></i>
                            </div>
                            <h3 class="mb-3">Fully Responsive</h3>
                            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icon-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icon-icons d-flex">
                                <i class="icon-layers m-auto text-primary"></i>
                            </div>
                            <h3 class="mb-3">Bootstrap 4 Ready</h3>
                            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icon-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icon-icons d-flex">
                                <i class="icon-anchor m-auto text-primary"></i>
                            </div>
                            <h3 class="mb-3">Responsivefully for any Device</h3>
                            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---Images Liabrary---->
        <section>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white" style="background-image: url('images/bg-showcase-1.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto p-7">
                        <h3 class="showcase mb-3"><u>Fully Responsive Design</u></h3>
                        <p class="lead mb-0 textStyle">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white" style="background-image: url('images/bg-showcase-2.jpg');"></div>
                    <div class="col-lg-6 my-auto p-7">
                        <h3 class="showcase mb-3"><u>Fully Responsive Design</u></h3>
                        <p class="lead mb-0 textStyle">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white" style="background-image: url('images/bg-showcase-3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 p-7">
                        <h3 class="showcase mb-3"><u>Fully Responsive Design</u></h3>
                        <p class="lead mb-0 textStyle">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                    </div>
                </div>
            </div>
        </section>
        <!---Testimonial---->
        <section class="text-center bg-light p-7">
            <h2 class="mb-5">What People Are Saying....</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-5">
                        <div class="mx-auto mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-2.jpg" />
                            <h3 class="mb-3">Nikky .t</h3>
                            <p class="font-weight-light font-italic mb-0">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-5">
                        <div class="mx-auto mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-1.jpg" />
                            <h3 class="mb-3">Freed .S</h3>
                            <p class="font-weight-light font-italic mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-5">
                        <div class="mx-auto mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-3.jpg" />
                            <h3 class="mb-3">Jimmy .S</h3>
                            <p class="font-weight-light font-italic mb-0">"Thanks so much for making these free resources available to us!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---Call to Action--->
        <section class="text-center shocaseParent text-white p-7">
            <div class="overlay2"></div>
            <div class="container">
                <div class="row p-5">
                    <div class="col-xl-9 mx-auto mb-4">
                        <h3 class="text-dark lead font-weight-light" style="font-size: 2.2rem !important;">Ready to get Started ? Sign Up now</h3>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form>
                            <div class="form-row">
                                <div class="col-12 col-md-9 mb-md-0">
                                    <input type="email" class="form-control form-control-lg" placeholder="enter your email..." />
                                </div>
                                <div class="col-12 col-md-3">
                                    <button type="button" class="btn btn-block btn-primary btn-lg">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!---Footer---->
        <footer class="bg-dark p-3 myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item">
                                <a href="#">About</a>
                            </li>
                            <li class="list-inline-item">&sdot;</li>
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">&sdot;</li>
                            <li class="list-inline-item">
                                <a href="#">Gallery</a>
                            </li>
                            <li class="list-inline-item">&sdot;</li>
                            <li class="list-inline-item">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        <p class="text-muted">&copy; your website for 2018</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <a href="#">
                                    <i class="fa fa-facebook fa-2x fa-fw"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mr-3">
                                <a href="#">
                                    <i class="fa fa-twitter fa-2x fa-fw"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-github fa-2x fa-fw"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-----JS------->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>
