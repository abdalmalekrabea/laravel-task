@extends('layouts.front')

@section('volunteer')
    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="{{ asset('images/logo.svg')}}" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li><a href="index.html" title="Home">Home</a></li>
                <li><a href="about.html" title="About">About</a></li>
                <li><a href="events.html" title="Services">Events</a></li>
                <li class="current"><a href="contact.html" title="Contact us">Contact</a></li>	
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- page header
    ================================================== -->
    <section class="page-header page-header--contact">

        <div class="gradient-overlay"></div>
        <div class="row page-header__content">
            <div class="column">
                <h1>Contact Us</h1>
            </div>
        </div>

    </section> <!-- end page-header -->


    <!-- page content
    ================================================== -->
    <section class="page-content">

        <div class="row">
            <div class="column">

                <p class="lead drop-cap">
                Corrupti voluptas sed possimus odio cupiditate. Ut id nemo doloremque 
                iusto voluptates placeat esse ut. Voluptatem saepe aut vel ut. Perferendis 
                hic voluptates quibusdam animi quis est itaque. Atque delectus praesentium 
                voluptas voluptas. Odio voluptatem facilis magni magnam quas aut quasi.                 
                </p>

                <p>
                Nam est quae harum doloribus illum consequatur cupiditate quod rem. Error 
                qui culpa. Porro cupiditate veniam assumenda nostrum eius. Tempore rerum eos.
                Est perferendis nesciunt corrupti quia sunt reprehenderit id autem. 
                Quis in voluptates perspiciatis. Voluptatem saepe aut vel ut reprehenderit id
                perferendis.
                </p>

                <div class="row">
                    <div class="column large-6 tab-full">
                        <h3>Main Office.</h3>
                        <p>
                        1600 Amphitheatre Parkway<br>
                        Mountain View, CA 94043 US<br>
                        Mon-Thur 8:30am – 4:30pm 
                        </p>
                    </div>

                    <div class="column large-6 tab-full">
                        <h3>Contact Info.</h3>
                        <p>
                        sayhello@hesed.com<br>
                        info@hesed.com <br>
                        Phone: +197 543 2345
                        </p>
                    </div>
                </div>


                <h2>Get In Touched.</h2>

                <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" id="cName" class="h-full-width h-remove-bottom" placeholder="Your Name" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" id="cEmail" class="h-full-width h-remove-bottom" placeholder="Your Email" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cWebsite" id="cWebsite" class="h-full-width h-remove-bottom" placeholder="Website" value="" type="text">
                        </div>

                        <div class="message form-field">
                            <textarea name="cMessage" id="cMessage" class="h-full-width h-remove-bottom" placeholder="Your Message"></textarea>
                        </div>

                        <br>

                        <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width" value="Send Message" type="submit">

                    </fieldset>
                </form>

            </div>
        </div>

    </section> <!-- end page-content -->

@endsection