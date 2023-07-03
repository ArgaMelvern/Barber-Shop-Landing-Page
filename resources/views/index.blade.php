<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Barber Shop Website</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    </head>
    <body>
        <section id="banner">
            <img src="{{asset('assets/Barber_Shop_img/logo.png')}}" class="logo">
            <div class="banner-text">
                <h1>Hair Studio</h1>
                <p>Style your hair style your life</p>
                <div class="banner-btn">
                    <a href="#"><span></span>Find Out</a>
                    <a href="#"><span></span>Read More</a>
                </div>
            </div>
        </section>

        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#feature">Feature</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#footer">Meet Us</a></li>
                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="{{asset('assets/Barber_Shop_img/menu.png')}}" id="menu">
        </div>

        {{-- Feature --}}
        <section id="feature">
            <div class="title-text">
                <p>Features</p>
                <h1>Why Choose Us</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Experienced Staff</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <div class="feature-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> 
                        </div>
                    </div>
                    <h1>Online Booking</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="feature-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> 
                        </div>
                    </div>
                    <h1>Affordable Cost</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-inr"></i>
                        </div>
                        <div class="feature-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> 
                        </div>
                    </div>
                </div>
                <div class="features-img">
                    <img src="{{asset('assets/Barber_Shop_img/barber-man.jpg')}}">
                </div>
            </div>
        </section>

        {{-- Service --}}
        <section id="service">
            <div class="title-text">
                <p>SERVICES</p>
                <h1>We Provide Better</h1>
            </div>
            <div class="service-box">
                <div class="single-service">
                    <img src="{{asset('assets/Barber_Shop_img/pic-1.jpg')}}">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Hair Style</h3>
                        <hr>
                        <p> The description of the product you put should be long and detailed</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="{{asset('assets/Barber_Shop_img/pic-2.jpg')}}">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Beard Trim</h3>
                        <hr>
                        <p> The description of the product you put should be long and detailed</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="{{asset('assets/Barber_Shop_img/pic-3.jpg')}}">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Hair Cut</h3>
                        <hr>
                        <p> The description of the product you put should be long and detailed</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="{{asset('assets/Barber_Shop_img/pic-4.jpg')}}">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Hair Product</h3>
                        <hr>
                        <p> The description of the product you put should be long and detailed</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Testimonials --}}

        <section id="testimonials">
            <div class="title-text">
                <p>Testimonials</p>
                <h1>Client's Feedback</h1>
            </div>
            <div class="testimonial-row">
                <div class="testimonial-col">
                    <div class="user">
                        <img src="{{asset('assets/Barber_Shop_img/img-1.jpg')}}">
                        <div class="user-info">
                            <h4>Abdul Sack <i class="fa fa-twitter"></i></h4>
                            <small>@Abdul_Sack</small>
                        </div>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
                <div class="testimonial-col">
                    <div class="user">
                        <img src="{{asset('assets/Barber_Shop_img/img-2.jpg')}}">
                        <div class="user-info">
                            <h4>Jennah Junaida<i class="fa fa-twitter"></i></h4>
                            <small>@Jen_Jun</small>
                        </div>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
                <div class="testimonial-col">
                    <div class="user">
                        <img src="{{asset('assets/Barber_Shop_img/img-3.jpg')}}">
                        <div class="user-info">
                            <h4>Geggy Gammal<i class="fa fa-twitter"></i></h4>
                            <small>@GegGa</small>
                        </div>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
            </div>
        </section>

        <section id="footer">
            <img src="{{asset('assets/Barber_Shop_img/footer-img.png')}}" class="footer-img">
            <div class="title-text">
                <p>Contact Us</p>
                <h1>Visit Our Shop</h1>
            </div>
            <div class="footer-row">
                <div class="footer-left">
                    <h1>Opening Hours</h1>
                    <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 9pm</p>
                    <p><i class="fa fa-clock-o"></i>Saturday and Sunday - 11am to 6pm</p>
                </div>
                <div class="footer-right">
                    <h1>Visit Us</h1>
                    <p>#30 Example Streets, Ex. City ID<i class="fa fa-map-marker"></i></p>
                    <p>Example@website.com<i class="fa fa-paper-plane"></i></p>
                    <p>+62 86883678367<i class="fa fa-phone"></i></p>
                </div>
            </div>

            <div class="social-links">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-youtube-play"></i>
                <p>Copyright Arugaaru Design</p>
            </div>
        </section>

        <script>
            var menuBtn = document.getElementById("menuBtn")    
            var sideNav = document.getElementById("sideNav")
            var menu = document.getElementById("menu")

        // sideNav.style.right = "-250px"

        menuBtn.onclick = function(){
            if(sideNav.style.right == "-250px"){
                sideNav.style.right = "0"
                menu.src = 'assets/Barber_Shop_img/close.png'
            }else{
                sideNav.style.right = "-250px"
                menu.src = 'assets/Barber_Shop_img/menu.png'
            }
        }

        var scroll = new SmoothScroll('a[href*="#"]', {
	        speed: 1000,
	        speedAsDuration: true
            });
        </script>
    </body>
</html>