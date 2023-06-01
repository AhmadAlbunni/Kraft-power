@extends('website.layouts.app')
@section('content')

    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="images/bg/02.jpg"
             style="z-index: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>blog single slider post</h1>
                        <p>We know the secret of your success</p>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i>
                        </li>
                        <li><a href="#">Blog</a> <i class="fa fa-angle-double-right"></i></li>
                        <li><span>blog single slider post</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="jarallax-container-0"
             style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
            <img src="images/bg/02.jpg"
                 style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1680px; height: 435.8px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -3.9px; transform: translate3d(0px, 3.9px, 0px);">
        </div>
    </section>

    <section class="blog blog-single white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <h6 class="mb-20">Search</h6>
                        <div class="widget-search">
                            <i class="fa fa-search"></i>
                            <input type="search" class="form-control" placeholder="Search....">
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">About the blog</h6>
                        <p>We are the <strong> webster </strong> dolor sit ametLorem Ipsum Proin gravida nibh vel velit
                            auctor aliquet. Aenean sollicitudin, <br> <br>
                            Consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet. sem nibh
                            Aenean sollicitudin, </p>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">Recent Posts </h6>
                        <div class="recent-post clearfix">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="images/blog/01.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
                                <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                            </div>
                        </div>
                        <div class="recent-post clearfix">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="images/blog/02.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
                                <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                            </div>
                        </div>
                        <div class="recent-post clearfix">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="images/blog/03.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
                                <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget clearfix">
                        <h6 class="mt-40 mb-20">Archives</h6>
                        <ul class="widget-categories">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2021</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2021</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2021</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2021</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> August 2021</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">Tags</h6>
                        <div class="widget-tags">
                            <ul>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">CSS3</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Multipurpose</a></li>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">Wordpress</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">Meta</h6>
                        <ul class="widget-categories">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Log in</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Entries RSS</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Comments RSS </a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2021</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> WordPress.org</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">Testimonials</h6>
                        <div class="owl-carousel owl-loaded owl-drag" data-nav-dots="false" data-items="1"
                             data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-597px, 0px, 0px); transition: all 1s ease 0s; width: 1791px;">
                                    <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-widget">
                                                <div class="testimonial-content">
                                                    <p>Webster provide me consectetur adipisicing elit. Voluptatum
                                                        dignissimos amet numquam at est eum libero repellat reiciendis!
                                                        Accusamus quibusdam.</p>
                                                </div>
                                                <div class="testimonial-info mt-20">
                                                    <div class="testimonial-avtar">
                                                        <img class="img-fluid" src="images/team/01.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial-name">
                                                        <strong>Michael Bean</strong>
                                                        <span>Project Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-widget">
                                                <div class="testimonial-content">
                                                    <p>I am happy with webster service adipisicing elit. Voluptatum
                                                        dignissimos amet libero repellat reiciendis! Accusamus quibusdam
                                                        numquam at est eum. </p>
                                                </div>
                                                <div class="testimonial-info mt-20">
                                                    <div class="testimonial-avtar">
                                                        <img class="img-fluid" src="images/team/02.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial-name">
                                                        <strong>Paul Flavius</strong>
                                                        <span>Design</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 268.5px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-widget">
                                                <div class="testimonial-content">
                                                    <p>Webster provide me consectetur adipisicing elit. Voluptatum
                                                        dignissimos amet numquam at est eum libero repellat reiciendis!
                                                        Accusamus quibusdam.</p>
                                                </div>
                                                <div class="testimonial-info mt-20">
                                                    <div class="testimonial-avtar">
                                                        <img class="img-fluid" src="images/team/01.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial-name">
                                                        <strong>Michael Bean</strong>
                                                        <span>Project Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 268.5px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-widget">
                                                <div class="testimonial-content">
                                                    <p>I am happy with webster service adipisicing elit. Voluptatum
                                                        dignissimos amet libero repellat reiciendis! Accusamus quibusdam
                                                        numquam at est eum. </p>
                                                </div>
                                                <div class="testimonial-info mt-20">
                                                    <div class="testimonial-avtar">
                                                        <img class="img-fluid" src="images/team/02.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial-name">
                                                        <strong>Paul Flavius</strong>
                                                        <span>Design</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-widget">
                                                <div class="testimonial-content">
                                                    <p>Webster provide me consectetur adipisicing elit. Voluptatum
                                                        dignissimos amet numquam at est eum libero repellat reiciendis!
                                                        Accusamus quibusdam.</p>
                                                </div>
                                                <div class="testimonial-info mt-20">
                                                    <div class="testimonial-avtar">
                                                        <img class="img-fluid" src="images/team/01.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial-name">
                                                        <strong>Michael Bean</strong>
                                                        <span>Project Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-widget">
                                                <div class="testimonial-content">
                                                    <p>I am happy with webster service adipisicing elit. Voluptatum
                                                        dignissimos amet libero repellat reiciendis! Accusamus quibusdam
                                                        numquam at est eum. </p>
                                                </div>
                                                <div class="testimonial-info mt-20">
                                                    <div class="testimonial-avtar">
                                                        <img class="img-fluid" src="images/team/02.jpg" alt="">
                                                    </div>
                                                    <div class="testimonial-name">
                                                        <strong>Paul Flavius</strong>
                                                        <span>Design</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="fa fa-angle-left fa-2x"></i></button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="fa fa-angle-right fa-2x"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">Quick contact</h6>
                        <form class="gray-form">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="message"></textarea>
                            </div>
                            <a class="button" href="#">Submit</a>
                        </form>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">Photo gallery</h6>
                        <div class="widget-gallery popup-gallery clearfix">
                            <ul>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/01.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/01.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/02.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/02.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/03.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/03.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/04.gif">
                                        <img class="img-fluid" src="images/portfolio/small/04.gif" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/05.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/05.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/06.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/06.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/07.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/07.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/08.gif">
                                        <img class="img-fluid" src="images/portfolio/small/08.gif" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/09.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/09.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/10.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/10.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/01.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/01.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/02.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/02.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/03.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/03.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/04.gif">
                                        <img class="img-fluid" src="images/portfolio/small/04.gif" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/05.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/05.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="portfolio-img" href="images/portfolio/small/06.jpg">
                                        <img class="img-fluid" src="images/portfolio/small/06.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6 class="mt-40 mb-20">Newsletter</h6>
                        <div class="widget-newsletter">
                            <div class="newsletter-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="newsletter-content">
                                <i>Keep up on our always evolving product features and technology. Enter your e-mail and
                                    subscribe to our newsletter. </i>
                            </div>
                            <div class="newsletter-form mt-20">
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Name">
                                </div>
                                <a class="button d-grid" href="#">Submit</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h6 class="mt-40 mb-20">Our clients</h6>
                        <div class="widget-clients">
                            <div class="owl-carousel owl-loaded owl-drag" data-nav-dots="false" data-items="1"
                                 data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-597px, 0px, 0px); transition: all 1s ease 0s; width: 2388px;">
                                        <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/03.png" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/04.png" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/02.png" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/03.png" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/04.png" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 268.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid mx-auto" src="images/clients/02.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><i
                                            class="fa fa-angle-left fa-2x"></i></button>
                                    <button type="button" role="presentation" class="owl-next"><i
                                            class="fa fa-angle-right fa-2x"></i></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========================== -->
                <div class="col-lg-9">
                    <div class="blog-entry mb-10">
                        <div class="entry-image clearfix">
                            <div class="owl-carousel bottom-center-dots owl-loaded owl-drag" data-nav-dots="ture"
                                 data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-1767px, 0px, 0px); transition: all 1s ease 0s; width: 6185px;">
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/03.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/04.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/03.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/04.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/03.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><i
                                            class="fa fa-angle-left fa-2x"></i></button>
                                    <button type="button" role="presentation" class="owl-next"><i
                                            class="fa fa-angle-right fa-2x"></i></button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot active"><span></span></button>
                                    <button role="button" class="owl-dot"><span></span></button>
                                    <button role="button" class="owl-dot"><span></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="blog-detail">
                            <div class="entry-meta mb-10">
                                <ul>
                                    <li><i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#">
                                            HTML5 </a></li>
                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Consectetur, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                    vitae, consequuntur minima tempora cupiditate ratione est, ad molestias deserunt in
                                    ipsam ea quasi cum culpa adipisci dolores voluptatum fuga at! assumenda provident
                                    lorem ipsum dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <div class="blog-entry blockquote mb-40 mt-40">
                        <div class="entry-blockquote clearfix">
                            <blockquote class="mt-60 blockquote">
                                The trouble with programmers is that you can never tell what a programmer is doing until
                                it's too late. The future belongs to a different kind of person with a different kind of
                                mind: artists, inventors, storytellers-creative and holistic ‘right-brain’ thinkers
                                whose abilities mark the fault line between who gets ahead and who doesn’t.
                                <cite> – Daniel Pink</cite>
                            </blockquote>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <div class="blog-entry entry-content mt-20 mb-30 post-1 clearfix">
                        <p>Proin gravida nibh Lorem ipsum dolor sit amet of Lorem Ipsum. vel velit auctor aliquet.
                            Aenean sollicitudin, lorem q biben um auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                            ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                            consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra, per inceptos himenaeos.</p><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <img class="img-fluid image-content" src="images/portfolio/01.jpg" alt="">
                                <p>Aenean sollicitudin lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel
                                    velit auctor aliquet. lorem q biben um auctor, nisi elit consequat ipsum, nec
                                    sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                                    mauris. </p> <br>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor odio. Sed non
                                    mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad
                                    litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                        <br>
                        <p>Nisi elit consequat ipsum, nec sagittis sem nibh id elit lorem ipsum dolor sit amet of Lorem
                            Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem q biben um
                            auctor, . </p>

                        <div class="entry-share clearfix">
                            <div class="tags">
                                <h5>Tags:</h5>
                                <ul>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">HTML5</a></li>
                                </ul>
                            </div>
                            <div class="social list-style-none float-end mt-10">
                                <strong>Share : </strong>
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <div class="port-navigation clearfix">
                        <div class="port-navigation-left float-start">
                            <div class="tooltip-content-3" data-original-title="Previous Project"
                                 data-bs-toggle="tooltip" data-placement="right" data-bs-original-title="" title="">
                                <a href="#">
                                    <div class="port-photo float-start">
                                        <img src="images/portfolio/01.jpg" alt="">
                                    </div>
                                    <div class="port-arrow">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="port-navigation-right float-end">
                            <div class="tooltip-content-3" data-original-title="Next Project" data-bs-toggle="tooltip"
                                 data-placement="left" data-bs-original-title="" title="">
                                <a href="#">
                                    <div class="port-arrow float-start">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                    <div class="port-photo">
                                        <img src="images/portfolio/02.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <div class="port-post clearfix mt-40">
                        <div class="port-post-photo">
                            <img src="images/team/01.jpg" alt="">
                        </div>
                        <div class="port-post-info">
                            <h3 class="theme-color"><span>Posted by:</span> Kevin Martin</h3>
                            <div class="port-post-social float-end">
                                <strong>Follow on:</strong>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <p>Proin gravida nibh vel velit auctor aliquet lorem ipsum dolor sit amet of Lorem Ipsum.
                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                                sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi
                                accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non
                                mauris vitae erat </p>
                        </div>
                    </div>
                    <!-- ================================================ -->


                    <div class="related-work mt-40">
                        <div class="row">
                            <div class="col-ld-12 col-md-12">
                                <h3 class="theme-color mb-20">Related Post</h3>
                                <div class="owl-carousel owl-loaded owl-drag" data-nav-dots="false" data-items="2"
                                     data-xs-items="1" data-xx-items="1">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                             style="transform: translate3d(-883px, 0px, 0px); transition: all 1s ease 0s; width: 3093px;">
                                            <div class="owl-item cloned" style="width: 411.75px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="blog-box blog-1 active">
                                                        <div class="blog-info">
                                                            <span class="post-category"><a href="#">Business</a></span>
                                                            <h4><a href="#"> Supercharge your motivation</a></h4>
                                                            <p>We also know those epic stories, those modern-day legends
                                                                surrounding the.</p>
                                                            <span><i class="fa fa-user"></i> By Webster</span>
                                                            <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                                        </div>
                                                        <div class="blog-box-img"
                                                             style="background-image:url(images/blog/09.jpg);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 411.75px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="blog-box blog-1 active">
                                                        <div class="blog-info">
                                                            <span class="post-category"><a href="#">Business</a></span>
                                                            <h4><a href="#"> Helen keller a teller &amp; a seller </a>
                                                            </h4>
                                                            <p>I truly believe Augustine’s words are true and if you
                                                                look at history you know it is true.</p>
                                                            <span><i class="fa fa-user"></i> By Webster</span>
                                                            <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                                        </div>
                                                        <div class="blog-box-img"
                                                             style="background-image:url(images/blog/03.jpg);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 411.75px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="blog-box blog-1 active">
                                                        <div class="blog-info">
                                                            <span class="post-category"><a href="#">Business</a></span>
                                                            <h4><a href="#"> Does your life lack meaning</a></h4>
                                                            <p>I truly believe Augustine’s words are true and if you
                                                                look at history you know it is true.</p>
                                                            <span><i class="fa fa-user"></i> By Webster</span>
                                                            <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                                        </div>
                                                        <div class="blog-box-img"
                                                             style="background-image:url(images/blog/01.jpg);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 411.75px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="blog-box blog-1 active">
                                                        <div class="blog-info">
                                                            <span class="post-category"><a href="#">Business</a></span>
                                                            <h4><a href="#"> Supercharge your motivation</a></h4>
                                                            <p>We also know those epic stories, those modern-day legends
                                                                surrounding the.</p>
                                                            <span><i class="fa fa-user"></i> By Webster</span>
                                                            <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                                        </div>
                                                        <div class="blog-box-img"
                                                             style="background-image:url(images/blog/09.jpg);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 411.75px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="blog-box blog-1 active">
                                                        <div class="blog-info">
                                                            <span class="post-category"><a href="#">Business</a></span>
                                                            <h4><a href="#"> Helen keller a teller &amp; a seller </a>
                                                            </h4>
                                                            <p>I truly believe Augustine’s words are true and if you
                                                                look at history you know it is true.</p>
                                                            <span><i class="fa fa-user"></i> By Webster</span>
                                                            <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                                        </div>
                                                        <div class="blog-box-img"
                                                             style="background-image:url(images/blog/03.jpg);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 411.75px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="blog-box blog-1 active">
                                                        <div class="blog-info">
                                                            <span class="post-category"><a href="#">Business</a></span>
                                                            <h4><a href="#"> Does your life lack meaning</a></h4>
                                                            <p>I truly believe Augustine’s words are true and if you
                                                                look at history you know it is true.</p>
                                                            <span><i class="fa fa-user"></i> By Webster</span>
                                                            <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                                        </div>
                                                        <div class="blog-box-img"
                                                             style="background-image:url(images/blog/01.jpg);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 411.75px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="blog-box blog-1 active">
                                                        <div class="blog-info">
                                                            <span class="post-category"><a href="#">Business</a></span>
                                                            <h4><a href="#"> Supercharge your motivation</a></h4>
                                                            <p>We also know those epic stories, those modern-day legends
                                                                surrounding the.</p>
                                                            <span><i class="fa fa-user"></i> By Webster</span>
                                                            <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                                                        </div>
                                                        <div class="blog-box-img"
                                                             style="background-image:url(images/blog/09.jpg);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <button type="button" role="presentation" class="owl-prev"><i
                                                class="fa fa-angle-left fa-2x"></i></button>
                                        <button type="button" role="presentation" class="owl-next"><i
                                                class="fa fa-angle-right fa-2x"></i></button>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <div class="blog-comments mt-40">
                        <div class="comments-1">
                            <div class="comments-photo">
                                <img class="img-fluid" src="images/team/01.jpg" alt="">
                            </div>
                            <div class="comments-info">
                                <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
                                <div class="port-post-social float-end">
                                    <a href="#">Reply</a>
                                </div>
                                <p>Sit amet nibh vulputate cursus a sit amet mauris lorem ipsum dolor sit amet of Lorem
                                    Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                                    bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed
                                    odio <a href="#">http://themeforest.net</a> Morbi accumsan ipsum velit. Nam nec
                                    tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat </p>
                            </div>
                        </div>
                        <div class="comments-1 comments-2">
                            <div class="comments-photo">
                                <img class="img-fluid" src="images/team/02.jpg" alt="">
                            </div>
                            <div class="comments-info">
                                <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
                                <div class="port-post-social float-end">
                                    <a href="#">Reply</a>
                                </div>
                                <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor Lorem ipsum
                                    dolor sit amet of Lorem Ipsum. Proin gravida nibh..</p>
                            </div>
                        </div>
                        <div class="comments-1 comments-2">
                            <div class="comments-photo">
                                <img class="img-fluid" src="images/team/02.jpg" alt="">
                            </div>
                            <div class="comments-info">
                                <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
                                <div class="port-post-social float-end">
                                    <a href="#">Reply</a>
                                </div>
                                <p>Aenean sollicitudin, lorem quis bibendum auctor Lorem ipsum dolor sit amet of Lorem
                                    Ipsum. Proin gravida nibh vel velit auctor aliquet..</p>
                            </div>
                        </div>
                        <div class="comments-1">
                            <div class="comments-photo">
                                <img class="img-fluid" src="images/team/01.jpg" alt="">
                            </div>
                            <div class="comments-info">
                                <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
                                <div class="port-post-social float-end">
                                    <a href="#">Reply</a>
                                </div>
                                <p>Bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel
                                    velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum,
                                    nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                                    amet mauris <a href="#">http://themeforest.net</a> Morbi accumsan ipsum velit. Nam
                                    nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat </p>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h3 class="theme-color mb-30">Leave a Reply </h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div id="formmessage">Success/Error Message Goes Here</div>
                                </div>
                            </div>
                            <form id="contactform" class="gray-form row" role="form" method="post"
                                  action="php/contact-form.php">
                                <div class="col-lg-6 col-md-6 col-sm-6   ">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Website URL">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputPassword1"
                                               placeholder="Email Adress">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputphone1"
                                               placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="mb-3">
                                        <textarea class="form-control" rows="7" placeholder="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="g-recaptcha section-field clearfix"
                                         data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq">
                                        <div style="width: 304px; height: 78px;">
                                            <div>
                                                <iframe title="reCAPTCHA"
                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq&amp;co=ZmlsZTo.&amp;hl=en&amp;v=FFtxPnbuZxq6kkeHkQJR2MNQ&amp;size=normal&amp;cb=rsc1xe3d84js"
                                                        width="304" height="78" role="presentation"
                                                        name="a-1ul5ualcv1da" frameborder="0" scrolling="no"
                                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                            </div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                      class="g-recaptcha-response"
                                                      style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div>
                                        <iframe style="display: none;"></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input type="hidden" name="action" value="sendEmail">
                                    <button id="submit" name="submit" type="submit" value="Send" class="button"><span>Submit Now</span>
                                    </button>
                                </div>
                            </form>
                            <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block"
                                                                           src="images/pre-loader/loader-02.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================================================ -->
            </div>
        </div>
    </section>

    <section class="action-box theme-bg full-width">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 position-relative">
                    <div class="action-box-text">
                        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
                        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with
                            powerful features.</p>
                    </div>
                    <div class="action-box-button">
                        <a class="button button-border white" href="#">
                            <span>Purchase Now</span>
                            <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
