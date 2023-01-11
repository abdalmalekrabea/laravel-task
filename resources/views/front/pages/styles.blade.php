@extends('layouts.front')


@section('volunteer')
    <!-- hero
    ================================================== -->
    <section class="s-hero" data-parallax="scroll" data-image-src="{{ asset('images/hero-bg-3000.jpg')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="hero-left-bar"></div>

        <div class="row hero-content">

            <div class="column large-full hero-content__text">
                <h1>
                    We Exist To <br>
                    Honor God And <br>
                    Make Disciples
                </h1>

                <div class="hero-content__buttons">
                    <a href="events.html" class="btn btn--stroke">Upcoming Events</a>
                    <a href="about.html" class="btn btn--stroke">About Us</a>
                </div>
            </div> <!-- end hero-content__text -->

        </div> <!-- end hero-content -->

        <ul class="hero-social">
            <li class="hero-social__title">Follow Us</li>
            <li>
                <a href="#0" title="">Facebook</a>
            </li>
            <li>
                <a href="#0" title="">YouTube</a>
            </li>
            <li>
                <a href="#0" title="">Instagram</a>
            </li>
        </ul> <!-- end hero-social -->

        <div class="hero-scroll">
            <a href="#styles" class="scroll-link smoothscroll">
                Scroll For More
            </a>
        </div> <!-- end hero-scroll -->

    </section> <!-- end s-hero -->


    <!-- styles
    ================================================== -->
    <section id="styles" class="s-styles page-content">

        <div class="row add-bottom">

            <div class="column large-full">

                <h1 class="display-1">Style Guide.</h1>

                <p class="lead">Lorem ipsum Officia elit ad tempor dolore est ex incididunt incididunt occaecat culpa deserunt 
                sunt labore in cillum ullamco magna in Excepteur consequat in reprehenderit proident mollit incididunt officia commodo.
                Duis ea officia sed dolor pariatur enim dolore dolore quis incididunt nulla exercitation commodo veniam et ea incididunt.
                </p>

            </div>

        </div>

        <div class="row">

            <div class="column large-6 tab-full">

                <h3>Paragraph and Image</h3>

                <p><a href="#"><img width="120" height="120" class="h-pull-left" alt="sample-image" src="images/sample-image.jpg"></a>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.Cras id urna. Morbi 
                tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, 
                purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. 
                Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id 
                neque posuere nunc justo tempus leo. </p>

                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. 
                Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. 
                Donec mattis, purus nec placerat bibendum, dui pede condimentumodio, ac blandit ante orci ut diam.	
                </p>

                <p>A <a href="#">link</a>,
                <abbr title="this really isn't a very good description">abbrebation</abbr>,
                <strong>strong text</strong>,
                <em>em text</em>,
                <del>deleted text</del>, and
                <mark>this is a mark text.</mark>
                <code>.code</code>
                </p>

            </div>

            <div class="column large-6 tab-full">

                <h3>Drop Caps</h3>

                <p class="drop-cap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the 
                necessary regelialia. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, 
                euposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, 
                ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, 
                lorem tellus eleifend magna, eget fringilla velit magna id neque.
                </p>

                <h3>Small Print</h3>

                <p>Buy one widget, get one free!
                <small>(While supplies last. Offer expires on the vernal equinox. Not valid in Ohio.)</small>
                </p>

            </div>

        </div> <!-- end row -->

        <div class="row">

            <div class="column large-6 tab-full">

                <h3>Pull Quotes</h3>

                <aside class="pull-quote">
                    <blockquote>
                    <p>
                    When you look in the eyes of grace, when you meet grace, 
                    when you embrace grace, when you see the nail prints in 
                    grace’s hands and the fire in his eyes, when you feel his 
                    relentless love for you - it will not motivate you to sin. 
                    It will motivate you to righteousness.
                    </p>
                    </blockquote>
                </aside>

            </div>

            <div class="column large-6 tab-full">

                <h3>Block Quotes</h3>

                <blockquote cite="http://where-i-got-my-info-from.com">
                    <p>
                    For God so loved the world, that he gave his only Son, that whoever believes in 
                    him should not perish but have eternal life. For God did not send his Son into 
                    the world to condemn the world, but in order that the world might be 
                    saved through him.
                    </p>
                    <cite>
                        <a href="#0">John 3:16-17 ESV</a>
                    </cite>
                </blockquote>

                <blockquote>
                <p>There is a God-shaped vacuum in the heart of each man which cannot be satisfied 
                by any created thing but only by God the Creator.</p>
                <cite>Blaise Pascal</cite>
                </blockquote>

            </div>

        </div> <!-- end row -->

        <div class="row half-bottom">

            <div class="column large-6 tab-full">

                <h3>Example Lists</h3>

                <ol>
                    <li>Here is an example</li>
                    <li>of an ordered list.</li>
                    <li>A parent list item.
                        <ul>
                            <li>one</li>
                            <li>two</li>
                            <li>three</li>
                        </ul>
                        </li>
                        <li>A list item.</li>
                    </ol>

                <ul class="disc">
                    <li>Here is an example</li>
                    <li>of an unordered list.</li>
                </ul>

                <h3>Definition Lists</h3>

                <h5>a) Multi-line Definitions (default) </h5>

                <dl>
                    <dt><strong>This is a term</strong></dt>
                        <dd>this is the definition of that term, which both live in a <code>dl</code>.</dd>
                    <dt><strong>Another Term</strong></dt>
                        <dd>And it gets a definition too, which is this line</dd>
                        <dd>This is a 2<sup>nd</sup> definition for a single term. A <code>dt</code> may be followed by multiple <code>dd</code>s.</dd>
                </dl>

            </div>

            <div class="column large-6 tab-full">

                <h3>Buttons</h3>

                <p>
                    <a class="btn btn--primary h-full-width" href="#0">Primary Button</a>
                    <a class="btn h-full-width" href="#0">Default Button</a>
                    <a class="btn btn--stroke h-full-width" href="#0">Stroke Button</a>
                </p>

                <h3>Skill Bars</h3>
                
                <ul class="skill-bars">
                    <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML5</strong>
                    </li>
                    <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>CSS3</strong>
                    </li>
                    <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>JQuery</strong>
                    </li>
                    <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>PHP</strong>
                    </li>
                    <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>Wordpress</strong>
                    </li>
                    <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>Angular JS</strong>
                    </li>
                </ul>

            </div>

        </div> <!-- end row -->

        <div class="row half-bottom">

            <div class="column large-6 tab-full">
                    
                <h1>H1 Heading</h1>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h2>H2 Heading</h2>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h3>H3 Heading</h3>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

            </div>

            <div class="column large-6 tab-full">
                    
                <h4>H4 Heading</h4>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h5>H5 Heading</h5>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                <h6>H6 Heading</h6>
                <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

            </div>

        </div> <!-- end row -->

        <div class="row half-bottom">

            <div class="column large-full">

                <h3>Stats Tabs</h3>

                <ul class="stats-tabs">
                    <li><a href="#">1,234 <em>Peter</em></a></li>
                    <li><a href="#">567 <em>James</em></a></li>
                    <li><a href="#">23,456 <em>John</em></a></li>
                    <li><a href="#">3,456 <em>Andrew</em></a></li>
                    <li><a href="#">456 <em>Philip</em></a></li>
                    <li><a href="#">26 <em>Matthew</em></a></li>
                </ul>

            </div>

        </div> <!-- end row -->

        <div class="row half-bottom">

            <div class="column large-6 tab-full">

                <h3>Responsive Image</h3>
                <p><img src="images/wheel-500.jpg" 
                    srcset="images/wheel-1000.jpg 1000w, 
                    images/wheel-500.jpg 500w" 
                    sizes="(max-width: 1000px) 100vw, 1000px" alt="">
                </p>

            </div>

            <div class="column large-6 tab-full">

                <h3>Responsive video</h3>

                <div class="video-container">
                <iframe src="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                </div>

            </div>
            
        </div> <!-- end row -->

        <div class="row add-bottom">

            <div class="column large-full">

                <h3>Tables</h3>
                <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> when building a <code>table</code>.</p>

                <div class="table-responsive">

                    <table>
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Location</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>William J. Seymour</td>
                                <td>34</td>
                                <td>Male</td>
                                <td>Azusa Street</td>
                            </tr>
                            <tr>
                                <td>Jennie Evans Moore</td>
                                <td>30</td>
                                <td>Female</td>
                                <td>Azusa Street</td>
                            </tr>
                            </tbody>
                    </table>

                </div>

            </div>
            
        </div> <!-- end row -->

        <div class="row">

            <div class="column large-6 tab-full">

                <h3>Form Styles</h3>

                <form>
                    <div>
                        <label for="sampleInput">Your email</label>
                        <input class="h-full-width" type="email" placeholder="test@mailbox.com" id="sampleInput">
                    </div>
                    <div>
                        <label for="sampleRecipientInput">Reason for contacting</label>
                        <div class="ss-custom-select">
                            <select class="h-full-width" id="sampleRecipientInput">
                                <option value="Option 1">Questions</option>
                                <option value="Option 2">Report</option>
                                <option value="Option 3">Others</option>
                            </select>
                        </div>
                    </div>
                    
                    <label for="exampleMessage">Message</label>
                    <textarea class="h-full-width" placeholder="Your message" id="exampleMessage"></textarea>

                    <label class="h-add-bottom">
                        <input type="checkbox">
                        <span class="label-text">Send a copy to yourself</span>
                    </label>
                
                    <input class="btn--primary h-full-width" type="submit" value="Submit">
                </form>

            </div>

            <div class="column large-6 tab-full">

                <h3>Alert Boxes</h3>

                <br>
                
                <div class="alert-box alert-box--error hideit">
                    <p>Error Message. Your Message Goes Here.</p>
                    <i class="fa fa-times alert-box__close" aria-hidden="true"></i>
                </div><!-- end error -->
                        
                <div class="alert-box alert-box--success hideit">
                    <p>Success Message. Your Message Goes Here.</p>
                    <i class="fa fa-times alert-box__close" aria-hidden="true"></i>
                </div><!-- end success -->
                        
                <div class="alert-box alert-box--info hideit">
                    <p>Info Message. Your Message Goes Here.</p>
                    <i class="fa fa-times alert-box__close" aria-hidden="true"></i>
                </div><!-- end info -->
                        
                <div class="alert-box alert-box--notice hideit">
                    <p>Notice Message. Your Message Goes Here.</p>
                    <i class="fa fa-times alert-box__close" aria-hidden="true"></i>
                </div><!-- end notice -->
            
            </div>

        </div> <!-- end row -->


    </section> <!-- end s-styles -->

@endsection
  