
        
<html >
<head > 
    
<title></title>
</head>
  <meta charset="utf-8">
    <title>elearning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    
   


<body bgcolor="lightgrey">
     <?php require 'connectelearning.php'; ?>

     <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="elearninghomepage.php" class="text-decoration-none">
                    <img src="img/elearninglogo.jpg" width="200" height="70">
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>Rue 34, Avenue Hassan II Medina Rabat. Morocco</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <a ><small>berlizelearninacademyg@gmail.com</small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+212 610 310 304</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Courses</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Arts<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">History</a>
                                <a href="" class="dropdown-item">Music</a>
                                <a href="" class="dropdown-item">Arts and Culture</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Information and Technology<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Artificial Intelligence</a>
                                <a href="" class="dropdown-item">Computer Science</a>
                                <a href="" class="dropdown-item">Software Development</a>
                                <a href="" class="dropdown-item">Computer Engineering</a>
                            </div>
                        <a href="" class="nav-item nav-link">Human Relations</a>
                        <a href="" class="nav-item nav-link">Finance</a>
                        <a href="" class="nav-item nav-link">Accounting</a>
                        <a href="" class="nav-item nav-link">Hotel Management</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="elearninghomepage.php" class="nav-item nav-link active">Home</a>
                            <a href="elearningabout.php" class="nav-item nav-link">About</a>
                            <a href="elearningcourses.php" class="nav-item nav-link">Courses</a>
                            <a href="teachers.php" class="nav-item nav-link">Teachers</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="elearningblog.php" class="dropdown-item">Blog List</a>
                                    <a href="elearningblog2.php" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div>
                            <a href="elearningcontact.php" class="nav-item nav-link">Contact</a>
                            <?php  if (isset($_GET['confirm']))echo "<h5 class='nav-item nav-link'>Feedback submitted.</h5>"; ?>
                        </div> 
                        <div class="nav-item dropdown">                       
                            <a href="elearningloginform.php" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block nav link" >LOG IN</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
 
<?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>Your feedback has been submitted. Thanks for your time</h5>";
            ?>

 <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/hp.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">

                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">Welcome to our official website, Berliz elearning academy</h1>
                            <a href="studentapplform.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Apply Now</a>
                        </div>
                    </div>
                </div>
                 <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/hp.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">berliz e-learning academy</h5>
                            <h1 class="display-3 text-white mb-md-4">experience a whole new intruiging way to learn!</h1>
                            <a href="studentapplform.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/hp.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">Easy learning with inspiring courses</h1>
                            <a href="studentapplform.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/hp.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Learn From Home</h1>
                            <a href="studentapplform.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/mtv2.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>MOTIVATION</h1>
                    </div>
                    <p>Passion drives us everyday , understand your passion, and understand what is that you want in your life because the moment you start doing what you love the most, you’ll start celebrating the process. But in the end, you are responsible for your own well-being, and owe it to yourself to make decisions that will empower you, and that will help you improve yourself and your life.</p>
                    <p>We have three roles here on earth: to learn, to love, and to live. When we stop learning, we start to stagnate and die. When we stop loving, we lose our sense of purpose and become self-centered. When we limit our living, we deny the world the benefits of our talents.</p>
                    <p>The foundation stones of honesty, character, faith, integrity, love, and loyalty are necessary for a balanced success that includes health, wealth, and happiness. As you go onward and upward in life, you will discover that if you compromise any of these principles you will end up with only a beggar's portion of what life has to offer. Over the years, mostly in retrospect, I learned a variety of lessons, and one of the most important is this: You can't hit a target you can’t see. You can't accomplish wonderful things with your life if you have no idea of what they are. You must first become absolutely clear about what you want if you are serious about unlocking the extraordinary power that lies within you.</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Your Future With Us Begins Here</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium ">Computer Science</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course9.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Accounting</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Business Administration</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course9.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Human Relations</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Finance</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course-1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Artificial Intelligence</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course-6.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Arts and Culture</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/course-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Music</h4>
                            <span>View More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Departments</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-1.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>30 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>3 years</small>
                            </div>
                            <a class="h5" href="">Computer Science</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">Liscence</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-2.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>4 years</small>
                            </div>
                            <a class="h5" href="">Arts and Culture</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.4 <small>(250)</small></h6>
                                    <h5 class="m-0">Bsc</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-3.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>40 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>4 years</small>
                            </div>
                            <a class="h5" href="">Mass Communication</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.8 <small>(250)</small></h6>
                                    <h5 class="m-0">Bsc</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-4.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>20 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>2 years</small>
                            </div>
                            <a class="h5" href="">Political Science</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.7 <small>(250)</small></h6>
                                    <h5 class="m-0">Masters</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-5.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>70 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>4 years</small>
                            </div>
                            <a class="h5" href="">Mechanical Engineering</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.9 <small>(250)</small></h6>
                                    <h5 class="m-0">BSc</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/course-6.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>90 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>3 years</small>
                            </div>
                            <a class="h5" href="">Finance and Accounting</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.8 <small>(250)</small></h6>
                                    <h5 class="m-0">Lisence</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">What do you think about our school?</h5>
                        <h1 class="text-white">Send us your thoughts</h1>
                    </div>
                    <p class="text-white">We are working daily and relentlessly to create a better learning and fun environment for our students and you cab be a part of this. Tell us what you think we should improve on. We are at your service anyday, anytime.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Good remote learning provision during closures</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Communicates information to parents</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Well led and managed</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Good and inspiring teachers</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Feedback Form</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="addfeedback.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name" requireds name="name" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email" required name="email" />
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Feedback message" class="form-control border-0 p-4" required name="message"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
                <h1>Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/teacher3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>John Smith</h5>
                            <p class="m-0">Music HOD</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/teacher5.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Anthony Williams</h5>
                            <p class="m-0">Accounting HOD</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/teacher2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Prisca Pipe</h5>
                            <p class="m-0">Finance HOD</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/teacher1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Mary Smart</h5>
                            <p class="m-0">Political Science Hod</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Testimonial Starts -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>We are one strong community</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">It gives me immense pleasure to watch children learn, grow and achieve their milestones. I feel blessed to have finally found a job that I love. I am still growing and learning new things every single day and hope that I am a part of this wonderful family for many more years to come.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/student1.jpg" alt="">
                            <h5 class="m-0">Mrs Mary Smith</h5>
                            <span>Professor</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">
                            I never thought I was ever going to come to this school in my life, but I came. It was my dream to come to this school. This is my dream school. I thought I would never live to see this day happen. This is the best day of my life. I will never disrespect a teacher in my life. I have always liked this school ever since the first time I have seen it in 2022.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/student8.jpg" alt="">
                            <h5 class="m-0">Peter John</h5>
                            <span>Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Our school is fun and nice. Everybody is smiley, happy, serious, and sweet, I’m glad I’m at this good school and I’m glad that my parents put me in this school. Administration is great because we have all these good activities for the students at HSA. When I grow up I will be just like my teachers because they are all great.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/student9.jpg" alt="">
                            <h5 class="m-0">Daniel Smart</h5>
                            <span>Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Testimonial End -->

     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
                <h1>Latest News</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-primary m-0">New vacancies in our library</h5>
                            <p class="text-white mb-3">We are looking for an experienced and self-motivated Library Officer to join our team. As a library officer, you will perform a range of duties such as cataloging library resources, maintaining library records, and making them available to users.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/b4.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-primary m-0">New school club- Jet Agers</h5>
                            <p class="text-white mb-3">JETS club is an acronym for “Junior Engineers, Technicians and Scientist”. The JETS club is a science body that helps in inculcating better understanding of sciences into its members. JETS club project helps to reveal the full potential of young minds, in a way for a child to discover his/her creative potential.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-primary m-0">Celebrating cultural diversity</h5>
                            <p class="text-white mb-3">Cultural celebrations foster respect and open-mindedness for other cultures. Celebrating our differences, as well as our common interests, helps unite and educate us. To understand other's perspectives, to broaden our own, and to fully experience and educate ourselves. In a word, heritage.s</p>
                        </a>
                    </div>
                </div>
            </div>
             <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
        </div>
    </div>


     <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Rue 34, Avenue Hassan II Medina Rabat. Morocco</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+212 610 310 304</p>
                        <p><i class="fa fa-envelope mr-2"></i>berlizelearninacademyg@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                     
                         
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a href="#" class="text-white mb-2" data-toggle="dropdown"><i class="fa fa-angle-right mr-2">Arts</i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">History</a>
                                <a href="" class="dropdown-item">Music</a>
                                <a href="" class="dropdown-item">Arts and Culture</a>
                            </div>
                            <div class="nav-item dropdown">
                            <a href="#" class="text-white mb-2" data-toggle="dropdown"><i class="fa fa-angle-right mr-2">Information and Technology</i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Artificial Intelligence</a>
                                <a href="" class="dropdown-item">Computer Science</a>
                                <a href="" class="dropdown-item">Software Development</a>
                                <a href="" class="dropdown-item">Computer Engineering</a>
                            </div>
                         
                    </div>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Human Relations</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Finance</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Accounting</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hotel Management</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>We bring to you lastest news, future updates, and other amazing servics we offer. Sign up today to stay connected with our ever growing network!</p>
                <div class="w-100"><form action="addnews.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address" name="email" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4" type="submit" onclick="alert('Click OK to start receiving our lastest updates and news')">Sign Up</button>
                        </div>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">berlizelearningacademy</a>. All Rights Reserved. Designed by <a href="#">Tasela Blessed</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


</body>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>
</html> 