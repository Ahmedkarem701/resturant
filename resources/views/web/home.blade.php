<!doctype html>
@if(\Illuminate\Support\Facades\App::getLocale() == 'en')
    <html lang="zxx">
    @else
        <html lang="ar" dir="rtl">
        @endif
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap.min.css') }}">
            <!-- IcoFont Min CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/icofont.min.css') }}">
            <!-- Animate CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/animate.css') }}">
            <!-- Magnific Popup CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/magnific-popup.css') }}">
            <!-- Owl Carousel CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/owl.carousel.css') }}">
            <!-- Owl Theme Default CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/owl.theme.default.min.css') }}">
            <!-- Style CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">
            <!-- Responsive CSS -->
            <link rel="stylesheet" href="{{ asset('web/assets/css/responsive.css') }}">

            <title>{{ $setting->name }}</title>

            <link rel="icon" type="image/png" href="{{ asset("uploads/$setting->logo") }}">

            @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
                <link rel="stylesheet" href="{{ asset('web/assets/css/rtl.css') }}">
            @endif
        </head>

        <body data-bs-spy="scroll" data-bs-offset="70">

        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->

        <header class="top-area">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="call-to-action">
                                <p><i class="icofont-envelope"></i> Email: <a href="#">{{ $setting['email'] }}</a>
                                </p>
                                <p><i class="icofont-phone"></i> Phone: <a href="#">{{ $setting['phone'] }}</a></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul class="top-social">
                                <li><a href="{{ $setting['facebook'] }}"><i class="icofont-facebook"></i></a></li>
                                <li><a href="{{ $setting['twiiter'] }}"><i class="icofont-twitter"></i></a></li>
                                <li><a href="{{ $setting['linkedin'] }}"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="{{ $setting['instagram'] }}"><i class="icofont-instagram"></i></a></li>
                            </ul>

                            <div class="opening-hours">
                                <p><i class="icofont-wall-clock"></i> Opening Hours : {{ $setting['open'] }}
                                    - {{ $setting['close'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light transparent-navbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset("uploads/$setting->logo") }}" alt="white-logo">
                    </a>
                    <a class="navbar-brand black-logo" href="{{ url('/') }}">
                        <img src="{{ asset("uploads/$setting->logo") }}" alt="black-logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="#home">{{ __('web.home') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#offer">Offer</a></li>
                            <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                <li class="nav-item">
                                    <a class="btn btn-primary" class="nav-link"
                                       href="{{ url('lang/set/ar') }}">Arabic</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary" class="nav-link"
                                       href="{{ url('lang/set/en') }}">English</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Header Area -->

        <!-- Start Main Banner -->
        <div id="home" class="main-banner item-bg-one">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <h1>Spicy & Tasty</h1>
                            <h3>American Delicious Food</h3>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                               data-bs-target="#reservationModal">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="down_arrow">
                <a href="#about" class="scroll_down"></a>
            </div>
        </div>
        <!-- End Main Banner -->

        <!-- Start Story Area -->
        <section id="about" class="story-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="story-image">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="{{ asset('web/assets/img/about-img1.jpg') }}" alt="image">
                                    <img src="{{ asset('web/assets/img/about-img2.jpg') }}" alt="image">
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <img src="{{ asset('web/assets/img/about-img3.jpg') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="story-content">
                            <div class="section-title">
                                <span>Our Story</span>
                                <h2>Welcome to Laureel</h2>
                            </div>

                            <p>Quisque sit amet turpis et ipsum elementum facilisis. Quisque sed placerat libero.
                                Pellentesque
                                nec tellus sollicitudin, sollicitudin ligula non, tristique nibh Donec vitae turpis
                                sagittis,
                                cursus nunc ac, aliquet nunc. Donec viverra vel massa at posuere. Aliquam et fringilla
                                augue
                                consequat posuere sem, eu ornares viverra veleso massa at posuere. Aliquam et fringilla
                                augue</p>

                            <div class="story-quote">
                                <div class="quote-content">
                                    <p>"Mauris tempor libero fringilla orci vivrra faucibue fringilla orci vivrra
                                        faucibus.
                                        Integer ullamcorper erat in tellus efficitur, quis porta sapien tincidunt. Nunc
                                        mattis
                                        lectus sed semper semper."</p>
                                    <img src="{{ asset('web/assets/img/about_sign.png') }}" alt="img">
                                </div>
                                <div class="quote-info">
                                    <img src="{{ asset('web/assets/img/story-1.jpg') }}" alt="story">
                                    <h3>John Smith</h3>
                                    <span>Master Chef</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <canvas id="canvas"></canvas>
            <div class="line-bg"><img src="{{ asset('web/assets/img/line.png') }}" alt="line"></div>
        </section>
        <!-- End Story Area -->

        <!-- Start Offer Area -->
        <section id="offer" class="offer-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Amazing Delicious</span>
                    <h2>This Week Special</h2>
                </div>

                <div class="row">
                    <div class="offer-slides owl-carousel owl-theme">
                        @foreach($week_specials as $special)
                            <div class="col-lg-12 col-md-12">
                                <div class="single-offer">
                                    <a href="#">
                                        <img style="width: 300px;height: 300px" src="{{ asset("uploads/$special->img") }}" alt="offer-img">
                                    </a>
                                    <div class="offer-content">
                                        <h3><span>{{ $special->discount }}% off</span> For {{ $special->condition() }}
                                        </h3>
                                        <p>{{ $special->offer() }}</p>
                                        <a href="#" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer Area -->

        <!-- Start Stunning Things Area -->
        <section class="stunning-things ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>For Your Comfort</span>
                    <h2>Stunning Things</h2>
                </div>

                <div class="row">
                    @foreach($stunnings as $stunning)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-box">
                                <div class="icon">
                                    <img style="height: 245px;" src="{{ asset("uploads/$stunning->icon") }}">
                                </div>
                                <h3>{{ $stunning->name() }}</h3>
                                <p>{{ $stunning->description() }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="line-bg"><img src="{{ asset('web/assets/img/line.png') }}" alt="line"></div>
        </section>
        <!-- End Stunning Things Area -->

        <!-- Start Video Area -->
        <section class="video-area ptb-100">
            <div class="container">
                <div class="video-content">
                    <h2>Best Place of Culinary</h2>
                    <a href="https://www.youtube.com/watch?v=6LrGPJruKcQ" class="video-btn"><i
                            class="icofont-play-alt-3"></i></a>
                </div>
            </div>
        </section>
        <!-- End Video Area -->

        <!-- Start Restaurant Menu Area -->
        <section id="menu" class="menu-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Discover</span>
                    <h2>Our Menu</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab">
                            <ul class="tabs">
                                @foreach($categories as $category)
                                    <li><a href="#">
                                            <img style="width: 100px;height: 100px;border: 1px solid black;border-radius: 50%;" src="{{ asset("uploads/$category->icon") }}">
                                            <br>
                                            {{ $category->name() }}
                                        </a></li>
                                @endforeach
                            </ul>

                            <div class="tab_content">
                                @foreach($categories as $category)
                                    <div class="tabs_item tab-item-bg-one">
                                        <div class="row">
                                            @foreach($category->menus as $menu)
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="single-menu">
                                                        <div class="food-menu-img">
                                                            <img style="width: 85px;height: 85px;border: 1px solid black;border-radius: 50%;" src="{{ asset("uploads/$menu->img") }}" alt="food-img">
                                                        </div>

                                                        <div class="food-menu-content">
                                                            <h3>{{ $menu->name() }} <span class="menu-price">${{ $menu->price }}</span></h3>
                                                            <ul>
                                                                <li>{{ $menu->ingredients() }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line-bg"><img src="{{ asset('web/assets/img/line.png') }}" alt="line"></div>
        </section>
        <!-- End Restaurant Menu Area -->

        <!-- Start Reservation Area -->
        <section class="reservation-area ptb-100">
            <div class="container">
                <h2>Book A table Now !</h2>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">Book
                    Now</a>
            </div>
        </section>
        <!-- End Reservation Area -->

        <!-- Start Reservation Modal -->
        <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Table Booking Reservation Form</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="icofont-close"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('message/send') }}" class="modalForm">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="date" class="form-control" placeholder="01/02/2021">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="time" class="form-control" placeholder="Time">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select name="number" class="form-control">
                                            <option value="1 Person">1 Person</option>
                                            <option value="2 Person">2 Person</option>
                                            <option value="3 Person">3 Person</option>
                                            <option value="4 Person">4 Person</option>
                                            <option value="5 Person">5 Person</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Book a Table</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Reservation Modal -->

        <!-- Start Team Area -->
        <section id="team" class="team-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Expert Chefs</span>
                    <h2>Meet the Team</h2>
                </div>

                <div class="row">
                    <div class="team-slides owl-carousel owl-theme">
                        @foreach($teams as $team)
                            <div class="col-lg-12 col-md-12">
                                <div class="single-team">
                                    <div class="team-image">
                                        <img style="height:320px" src="{{ asset("uploads/$team->img") }}" alt="chef-img">

                                        <ul class="team-member-social">
                                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                            <li><a href="#"><i class="icofont-behance"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="team-content">
                                        <h3>{{ $team->name() }}</h3>
                                        <span>{{ $team->job() }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="line-bg"><img src="{{ asset('web/assets/img/line.png') }}" alt="line"></div>
        </section>
        <!-- End Team Area -->

        <!-- Start Find Us Area -->
        <section class="find-us-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <span>We deliver on correct time</span>
                        <h2>Come & Experience Our Best of World Class Cousine</h2>
                    </div>

                    <div class="col-lg-3 col-md-12 text-end">
                        <a href="#" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Find Us Area -->

        <!-- Start Gallery Area -->
        <section id="gallery" class="gallery-area ptb-100 pb-0">
            <div class="container">
                <div class="section-title">
                    <span>Restaurant Gallery</span>
                    <h2>See Our Gallery</h2>
                </div>
            </div>

            <div class="row m-0">
                @foreach($galleries as $gallery)
                    <div style="margin: 10px 0;" class="col-lg-3 col-md-6 p-0">
                        <div class="single-image">
                            <img style="height:300px" src="{{ asset("uploads/$gallery->img") }}" alt="gallery-img">
                            <a href="{{ asset("uploads/$gallery->img") }}" class="popup-btn"><i
                                    class="icofont-search-restaurant"></i></a>

                            <div class="image-content">
                                <h3><a href="#">{{ $gallery->name() }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- End Gallery Area -->

        <!-- Start Features Area -->
        <section class="features-area ptb-100 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-features">
                            <div class="icon">
                                <i class="icofont-soft-drinks"></i>
                            </div>
                            <div class="features-content">
                                <h3>Hot Spirits</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid
                                    iduntus
                                    ut.</p>
                            </div>
                        </div>

                        <div class="single-features">
                            <div class="icon">
                                <i class="icofont-box"></i>
                            </div>
                            <div class="features-content">
                                <h3>Packaged Foods</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid
                                    iduntus
                                    ut.</p>
                            </div>
                        </div>

                        <div class="single-features">
                            <div class="icon">
                                <i class="icofont-chicken-fry"></i>
                            </div>
                            <div class="features-content">
                                <h3>Spicy Stuff</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid
                                    iduntus
                                    ut.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="features-img">
                            <img src="{{ asset('web/assets/img/features-img1.jpg') }}" alt="features-img">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-features">
                            <div class="icon">
                                <i class="icofont-food-basket"></i>
                            </div>
                            <div class="features-content">
                                <h3>Salubrious Snacks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid
                                    iduntus
                                    ut.</p>
                            </div>
                        </div>

                        <div class="single-features">
                            <div class="icon">
                                <i class="icofont-cocktail"></i>
                            </div>
                            <div class="features-content">
                                <h3>Healthy Drinks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid
                                    iduntus
                                    ut.</p>
                            </div>
                        </div>

                        <div class="single-features">
                            <div class="icon">
                                <i class="icofont-cup-cake"></i>
                            </div>
                            <div class="features-content">
                                <h3>Chocolate Desserts</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid
                                    iduntus
                                    ut.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->

        <!-- Start Feedback Area -->
        <section class="feedback-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>Our Client Feedback</h2>
                </div>

                <div class="row">
                    <div class="feedback-slides owl-carousel owl-theme">
                        @foreach($client_feedbacks as $feedback)
                            <div class="col-lg-12 col-md-12">
                                <div class="single-feedback">
                                    <p>{{ $feedback->feedback() }}</p>

                                    <div class="client-info">
                                        <h3>{{ $feedback->name }}</h3>
                                        <span>{{ $feedback->job }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feedback Area -->

        <!-- Start Blog Area -->
        <section id="blog" class="blog-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>From Our Blog</span>
                    <h2>Latest News</h2>
                </div>

                <div class="row">
                    <div class="blog-slides owl-carousel owl-theme">

                        @foreach($blogs as $blog)
                            <div class="col-lg-12 col-md-12">
                                <div class="single-blog-post">
                                    <a href="#" class="post-image">
                                        <img style="height: 300px;" src="{{ asset("uploads/$blog->img") }}" alt="blog-image">
                                    </a>

                                    <div class="blog-post-content">
                                        <ul>
                                            <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                            <li><i class="icofont-wall-clock"></i>{{ $blog->date }}</li>
                                        </ul>
                                        <h3><a href="#">{{ $blog->name() }}</a></h3>
                                        <p>{{ $blog->description() }}</p>
                                        <a href="#" class="read-more-btn">Read More <i
                                                class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Restaurant CTA Area -->
        <section class="restaurant-cta ptb-100">
            <div class="container">
                <span>Prepare The Best Dishes</span>
                <h2>Our Restaurant and the food they serve their guests</h2>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">Book
                    Now</a>
            </div>
        </section>
        <!-- End Restaturent CTA Area -->

        <!-- Start Partner Area -->
        <section class="partner-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Client</span>
                    <h2>Our Partner</h2>
                </div>

                <div class="row">
                    <div class="partner-slides owl-carousel owl-theme">
                        @foreach($partners as $partner)
                            <div class="col-lg-12 col-md-12">
                                <div class="item">
                                    <a href="{{ $partner->link }}"><img style="width: 80px !important;" src="{{ asset("uploads/$partner->img") }}"
                                                                        alt="partner-img"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner Area -->

        <!-- Start Contact Area -->
        <section id="contact" class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <h3>Contact Us</h3>
                            <p>
                                <a href="#"><i class="icofont-google-map"></i>
                                    {{ $setting['address'] }}
                                </a>
                            </p>
                            <p>
                                <a href="#"><i class="icofont-phone"></i> {{ $setting['phone'] }}</a>
                            </p>
                            <p>
                                <a href="#">
                                    <i class="icofont-envelope"></i>{{ $setting['email'] }}
                                </a>
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <h3>Opening Hours</h3>
                            <p class="opening-hours">Sun - Fri
                                <span>{{ $setting['open'] }} - {{ $setting['close'] }}</span></p>
                            <p class="opening-hours">Saturday <span>Closed</span></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="contact-box">
                            <h3>Newsletter</h3>
                            <form class="newsletter-form" data-bs-toggle="validator">
                                <input type="text" class="form-control" placeholder="Your email.." name="EMAIL" required
                                       autocomplete="off">
                                <button type="submit" class="btn btn-primary"><i class="icofont-paper-plane"></i>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <form method="POST" action="{{ url('message/send') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstname"
                                               placeholder="First name" required
                                               data-error="Please enter your first name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last name"
                                               required
                                               data-error="Please enter your last name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your email"
                                               required
                                               data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Your phone"
                                               required
                                               data-error="Please enter your number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                <textarea name="message" cols="30" rows="5" class="form-control"
                                          placeholder="Your message..." required
                                          data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <!-- Start Instagram Area -->
        <section class="instagram-area">
            <div class="instagram-item-list">
                <div class="instagram-follow">
                    <h3><a href="#">Follow On Instagram</a></h3>
                </div>
                <div class="instagram-slides owl-carousel owl-theme">
                    @foreach($instagrams as $instagram)
                        <div class="instagram-item">
                            <a href="{{ $instagram->link }}"><img style="width: 100%;height: 300px" src="{{ asset("uploads/$instagram->img") }}" alt="instagram-image"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Instagram Area -->

        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p>Copyright @ 2022 Smart Target. All rights reserved</p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="icofont-fork-and-knife"></i></div>

        <!-- jQuery Min JS -->
        <script data-cfasync="false"
                src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ asset('web/assets/js/jquery.min.js') }}"></script>
        <!-- Prpper JS -->
        <script src="{{ asset('web/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
        <!-- Plugins JS -->
        <script src="{{ asset('web/assets/js/plugins.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('web/assets/js/main.js') }}"></script>
        </body>

        </html>
