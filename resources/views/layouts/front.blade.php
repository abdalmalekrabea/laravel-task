<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Hesed - Volunteer</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('site.webmanifest')}}">

</head>

<body id="top">

    
@yield('volunteer')

    <!-- Social
    ================================================== -->
    <section class="s-social">
            
        <div class="row social-content">
            <div class="column">
                <ul class="social-list">
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--facebook"></span>
                            <span class="social-list__text">Facebook</span>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--twitter"></span>
                            <span class="social-list__text">Twitter</span>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--instagram"></span>
                            <span class="social-list__text">Instagram</span>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#0" title="">
                            <span class="social-list__icon social-list__icon--email"></span>
                            <span class="social-list__text">Email</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> <!-- end social-content -->

    </section> <!-- end s-social -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">

        <div class="row footer-top">
            <div class="column large-4 medium-5 tab-full">
                <div class="footer-logo">
                    <a class="site-footer-logo" href="index.html">
                        <img src="{{ asset('images/logo.svg')}}" alt="Homepage">
                    </a>
                </div>  <!-- footer-logo -->
                <p>
                Laborum ad explicabo. Molestiae voluptates est. Quisquam labore tenetur 
                et assumenda voluptatibus a beatae. Rerum odio ducimus reprehenderit 
                sit animi laborum nostrum dolorum animi voluptates est voluptatibus a beatae. 
                </p>
            </div>
            <div class="column large-half tab-full">
                <div class="row">
                    <div class="column large-7 medium-full">
                        <h4 class="h6">Our Location</h4>
                        <p>
                        1600 Amphitheatre Parkway <br>
                        Mountain View, California <br>
                        94043 US
                        </p>
        
                        <p>
                        <a href="{{ asset('https://goo.gl/maps/bc7C7eYtSmnNs6216')}}" target="_blank" class="btn btn--footer">Get Direction</a>
                        </p>
                    </div>
                    <div class="column large-5 medium-full">
                        <h4 class="h6">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="volunteer.html">Volunteer</a></li>
                            <li><a href="connect-group.html">Connect Groups</a></li>
                            <li><a href="events.html">Upcoming Events</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end footer-top -->

        <div class="row footer-bottom">
            <div class="column ss-copyright">
                <span>© Copyright Hesed 2019</span> 
                <span>Design by <a href="{{ asset('https://www.styleshout.com/')}}">StyleShout</a></span>
            </div>
        </div> <!-- footer-bottom -->

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0l8 9h-6v15h-4v-15h-6z"/></svg>
            </a>
        </div> <!-- ss-go-top -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

</body>--