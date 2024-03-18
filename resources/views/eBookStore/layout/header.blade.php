<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> eBookStore </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Homepage css links -->
    <link rel="stylesheet" href="{{ url('eBookStore/css/homepage.css') }}">

    <!-- boxicon for login/register page -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicon -->
    <link href="{{ url('eBookStore/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('eBookStore/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('eBookStore/css/style.css') }}" rel="stylesheet">

    <!-- SignIn Stylesheet -->
    <link href="{{ url('eBookStore/css/signin.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="{{ url('/FAQ') }}">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="{{ url('/help') }}">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="{{ url('/support') }}">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ url('/Home') }}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Books</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="/shoppingCart" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mt-1">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Religion & Spirituality <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="#religion-spirituality" class="dropdown-item">Buddhism</a>
                                <a href="#religion-spirituality" class="dropdown-item">Hinduism</a>
                                <a href="#religion-spirituality" class="dropdown-item">Christianity</a>
                                <a href="#religion-spirituality" class="dropdown-item">Islam</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Business & Investing<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="#business-investing" class="dropdown-item">Investing</a>
                                <a href="#business-investing" class="dropdown-item">Marketing and Sales</a>
                                <a href="#business-investing" class="dropdown-item">Finance</a>
                                <a href="#business-investing" class="dropdown-item">Management</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Action & Adventure</a>
                        <a href="" class="nav-item nav-link">Fictions & Literature</a>
                        <a href="" class="nav-item nav-link">History & Biography</a>
                        <a href="" class="nav-item nav-link">Kid's & Teens</a>
                        <a href="" class="nav-item nav-link">Technology</a>
                        <a href="" class="nav-item nav-link">Self Improvement & Relationships</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="{{ url('/Home') }}" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Books</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('/Home') }}" class="nav-item nav-link">Home</a>
                            <a href="{{ url('/shopDetail') }}" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ url('/shoppingCart') }}" class="dropdown-item">Shopping Cart</a>
                                    <a href="{{ url('/checkOut') }}" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                        </div>


                        <div class="navbar-nav ml-auto py-0">
                            @if (Route::has('login'))
                            <div class="hidden d-flex">
                                @auth
                                    @if( $roleId == 1)
                                    <a href="{{ url('/AdminDashboard') }}" class="nav-item nav-link">AdminHome</a>
                                    @endif
                                    <a href="#" id="profileBtn"  class="nav-item nav-link">{{$userName}}</a>
                                    <a href="{{ url('/logout') }}" class="nav-item nav-link">Logout</a>
                                @else
                                    <a href="{{ url('/login') }}" class="nav-item nav-link">Login</a>
                                    @if (Route::has('register'))
                                    <a href="{{ url('/register') }}" class="nav-item nav-link">Register</a>
                                    @endif
                                @endauth
                            </div>
                            @endif
                        </div>
                    </div>
                </nav>

        <!-- Profile informations modal -->
                <div id="profileModal">
                    <nav>
                        <h5>{{$userName}}</h5>
                        <i id="cancelBtn" class='bx bx-x'></i>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <!-- Navbar End -->