@extends('layouts.master')
@section('content')
<!--body content wrap start-->


<!--hero section start-->
<section class="hero-section ptb-100 background-img" style="background: url('img/hero-bg-2.jpg')no-repeat center center / cover">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="hero-content-left text-white mt-lg-0 mt-md-0 mt-5">
                    <h1 class="text-white">We are Digital Agency & Marketing </h1>
                    <p class="lead">Rapidiously conceptualize sustainable process improvements without superior infomediaries. Quickly parallel task 24/365 catalysts for change.</p>

                    <!--clients logo start-->
                    <div class="client-section-wrap mt-5">
                        <p>Trusted by companies like: </p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><img src="img/client-1-gray.png" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="img/client-2-gray.png" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="img/client-3-gray.png" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="img/client-4-gray.png" width="85" alt="client" class="img-fluid"></li>
                        </ul>
                    </div>
                    <!--clients logo end-->
                </div>
            </div>
            <div class="col-md-6 col-lg-5">

                @include('partials.get_quote')

            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<!--promo section start-->
<section class="promo-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="section-heading text-center mb-5">
                    <h2>Why does your business need AgencyCo?</h2>
                    <p class="lead">
                        Following reasons show advantages of adding AgencyCo to your lead pages, demos and checkouts
                    </p>
                </div>
            </div>
        </div>
        <div class="row equal">
            <div class="col-md-4 col-lg-4">
                <div class="single-promo single-promo-hover text-center gray-light-bg p-5 h-100">
                    <span class="ti-bar-chart icon-md icon color-primary"></span>
                    <h5>Convert traffic into sales</h5>
                    <p>Proactively provide access to distinctive quality vectors for adaptive solutions. </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-promo single-promo-hover text-center gray-light-bg p-5 h-100">
                    <span class="ti-headphone-alt icon-md icon color-primary"></span>
                    <h5>Increase customer trust</h5>
                    <p>Interactively reintermediate reliable platforms rather than synergistic e-commerce.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single-promo single-promo-hover text-center gray-light-bg p-5 h-100">
                    <span class="ti-vector icon-md icon color-primary"></span>
                    <h5>Growth guaranteed</h5>
                    <p>Professionally pursue standards compliant networks whereas impactful experiences. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--promo section end-->


<!--about us section start-->
<section id="about" class="about-us ptb-100 gray-light-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-left">
                    <p class="color-secondary"><strong>About Us</strong></p>
                    <h2>We help drive your
                        business forward faster</h2>
                    <p>Proactively syndicate open-source e-markets after low-risk high-yield synergy. Professionally simplify visionary technology before team driven sources. </p>
                    <div class="row mt-5">
                        <div class="col single-feature mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <span class="ti-bar-chart rounded mr-3 icon icon-color-2"></span>
                                <h5 class="mb-0">Increase conversion</h5>
                            </div>
                            <p>Display recent conversions, build credibility and trust.</p>
                        </div>
                        <div class="col single-feature mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <span class="ti-stats-up rounded mr-3 icon icon-color-3"></span>
                                <h5 class="mb-0">Product analytics</h5>
                            </div>
                            <p>A top promo bar that counts down until a few discounts.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col single-feature mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <span class="ti-light-bulb rounded mr-3 icon icon-color-3"></span>
                                <h5 class="mb-0">Discussion for Idea</h5>
                            </div>
                            <p>Enthusiastically coordinate competitive users vis-a-vis results. </p>
                        </div>
                        <div class="col single-feature mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <span class="ti-paint-bucket rounded mr-3 icon icon-color-4"></span>
                                <h5 class="mb-0">Perfect testing </h5>
                            </div>
                            <p>Credibly evisculate covalent quality vectors and maintainable.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right">
                    <img src="img/business.png" alt="about us" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--about us section end-->

<!--our services section start-->
<section id="services" class="our-services-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="section-heading text-center text-center">
                    <p class="color-secondary"><strong>Our Services</strong></p>
                    <h2>Market your business to own your market</h2>
                    <p class="lead">We provide profissional services for grow your business and increases sell digital product</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-services text-center gray-light-bg rounded border mt-4 pt-5 pb-5 pl-4 pr-4">
                    <span class="ti-email icon-md color-secondary"></span>
                    <div class="feature-content">
                        <h5 class="mb-2">Email marketing</h5>
                        <p>Email marketing is one of the most popular strategies offered by full-service digital marketing agencies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-services text-center gray-light-bg rounded border mt-4 pt-5 pb-5 pl-4 pr-4">
                    <span class="ti-vector icon-md color-secondary"></span>
                    <div class="feature-content">
                        <h5 class="mb-2">Web design and development</h5>
                        <p>Your website provides a place for interested users to learn more about your business, your products and services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-services text-center gray-light-bg rounded border mt-4 pt-5 pb-5 pl-4 pr-4">
                    <span class="ti-mobile icon-md color-secondary"></span>
                    <div class="feature-content">
                        <h5 class="mb-2">Mobile app development</h5>
                        <p>We are also working in mobile App Development that is skillful and professional Mobile development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our services section end-->

<!--testimonial section start-->
<section class="testimonial ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-heading text-center mb-5">
                    <h2>What customer say about us</h2>
                    <p class="lead">
                        Rapidiously morph transparent internal or "organic" sources whereas resource sucking e-business. Conveniently innovate compelling internal.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded owl-drag client-testimonial dot-indicator">
                <div class="item">
                    <div class="testimonial-wrap">
                        <blockquote class="mb-4 mt-4 lead">If you can design one thing you can design everything with Front. Just believe it. Collaboratively repurpose performance based e-commerce without cost. It's beautiful and the coding is done quickly and seamlessly. </blockquote>
                        <div class="media author-info">
                            <div class="author-img mr-3">
                                <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-0">John Charles</h5>
                                <span>Google</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrap">
                        <blockquote class="mb-4 mt-4 lead">Completely build backend ROI whereas cross-media metrics. Collaboratively deploy customer directed web-readiness via global testing procedures. Appropriately reinvent distributed innovation without proactive catalysts for change. Distinctively.</blockquote>
                        <div class="media author-info">
                            <div class="author-img mr-3">
                                <img src="img/client-2.jpg" alt="client" class="img-fluid rounded-circle">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-0">Arabella Ora</h5>
                                <span>Amazon</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrap">
                        <blockquote class="mb-4 mt-4 lead">The template is really nice and offers quite a large set of options. It's beautiful and the coding is done. If you can design one thing you can design everything with Front. Just believe it. </blockquote>
                        <div class="media author-info">
                            <div class="author-img mr-3">
                                <img src="img/client-3.jpg" alt="client" class="img-fluid rounded-circle">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-0">Jeremy Jere</h5>
                                <span>Themetags</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrap">
                        <blockquote class="mb-4 mt-4 lead">I just wanted to share a quick note and let you know that you guys do a really good job. I’m glad I decided to work with you. It’s really great how easy your websites are to update and manage. I never have any problem at all.</blockquote>
                        <div class="media author-info">
                            <div class="author-img mr-3">
                                <img src="img/client-4.jpg" alt="client" class="img-fluid rounded-circle">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-0">Ciaran Kierce</h5>
                                <span>Facebook</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial section end-->

<!--contact us section start-->
<section id="contact" class="contact-us ptb-100 gray-light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-heading">
                    <h3>Contact with us</h3>
                    <p>It's very easy to get in touch with us. Just use the contact form or pay us a
                        visit for a coffee at the office. Dynamically innovate competitive technology after an
                        expanded array of leadership.</p>
                </div>
                <div class="footer-address">
                    <h6><strong>Head Office</strong></h6>
                    <p>13 Acacia Street West, Sagewood Midrand, South Africa</p>
                    <ul>
                        <li><span>Phone: +27 72 589 1003</span></li>
                        <li><span>Email : <a href="mailto:hello@websiteapps.co.za">hello@websiteapps.co.za</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            @include('partials.reach_us_quickly')
        </div>
    </div>
</section>
<!--contact us section end-->

<!--call to action start-->
<section class="call-to-action ptb-100 background-img" style="background: url('img/hero-bg-2.jpg')no-repeat center center / cover fixed">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 mb-3">
                <div class="call-to-action-content text-center text-white">
                    <h2 class="text-white">Discover AgencyCo. It's easier than you think.</h2>
                    <p>Progressively deliver market-driven quality vectors rather than goal-oriented niche markets.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action end-->

<!--body content wrap end-->

@endsection