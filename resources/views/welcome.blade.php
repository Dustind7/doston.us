@extends('master')
@section('title', 'SALOM')
@section('content')
<!-- Wrapper -->
<div class="barna__wrapper">
    <!-- Header -->
    <header class="header" id="header">
        <div class="logo">
            <a href="index.html"><img src="img/logo.svg" alt="" /></a>
        </div>

        <nav class="nav">
            <ul>
                <li class="current"><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <div class="social">
            <ul>
                <li>
                    <a href="#" target="_blank"
                    ><img src="svg/social/stackoverflow.svg" alt="" class="svg"
                        /></a>
                </li>
                <li>
                    <a href="#" target="_blank"
                    ><img src="svg/social/github.svg" alt="" class="svg"
                        /></a>
                </li>
                <li>
                    <a href="#" target="_blank"
                    ><img src="svg/social/facebook.svg" alt="" class="svg"
                        /></a>
                </li>
                <li>
                    <a href="#" target="_blank"
                    ><img src="svg/social/twitter.svg" alt="" class="svg"
                        /></a>
                </li>
                <li>
                    <a href="#" target="_blank"
                    ><img src="svg/social/linkedin.svg" alt="" class="svg"
                        /></a>
                </li>
            </ul>
        </div>
    </header>
    <!-- /Header -->

    <!-- Mobile Header -->
    <div class="barna__mobile_header">
        <div class="header_top">
            <a class="logo" href="index.html"
            ><img src="img/logo.svg" alt=""
                /></a>

            <a href="#" class="hamb">
                <div class="hamburger hamburger--vortex">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="header_bottom">
            <ul>
                <li class="current"><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- /Mobile Header -->

    <!-- Main Wrapper -->
    <div class="main">
        <!-- Section Home -->
        <section id="home">
            <!-- Hero Header -->
            <div class="barna__hero">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="container">
                            <div class="title_holder">
                                <p><span>Welcome to Barneta</span></p>
                                <h3>I'm Summer Morgan</h3>
                                <h5>UI/UX Designer</h5>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="bg1" data-bg-img="img/slider/bg.jpg"></div>
                            <div class="bg2" data-bg-img="img/slider/1.jpg"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="title_holder">
                                <p><span>Meet new HTML Template</span></p>
                                <h3>I'm Barna</h3>
                                <h5>Software Engineer</h5>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="bg1" data-bg-img="img/slider/bg.jpg"></div>
                            <div class="bg2" data-bg-img="img/slider/2.jpg"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="title_holder">
                                <p><span>Get in touch with us</span></p>
                                <h3>I'm Web Developer</h3>
                                <h5>Junior Photographer</h5>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="bg1" data-bg-img="img/slider/bg.jpg"></div>
                            <div class="bg2" data-bg-img="img/slider/3.jpg"></div>
                        </div>
                    </div>
                </div>

                <div class="my__nav">
                    <a href="#" class="prev"
                    ><img src="svg/left.svg" alt="" class="svg"
                        /></a>
                    <a href="#" class="next"
                    ><img src="svg/left.svg" alt="" class="svg"
                        /></a>
                </div>
            </div>
            <!-- /Hero Header -->
        </section>
        <!-- /Section Home -->

        <!-- Section About -->
        <section id="about">
            <div class="barna__section_title">
                <div class="title">
                    <h3>About Me</h3>
                    <img src="svg/shape.svg" alt="" class="svg" />
                </div>
            </div>

            <!-- Partners -->
            <div class="barna__partners">
                <div class="container">
                    <div class="in">
                        <ul>
                            <li>
                                <a href="#"><img src="img/partners/1.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/partners/2.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/partners/3.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/partners/4.png" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Partners -->

            <!-- About -->
            <div class="barna__about">
                <div class="container">
                    <div class="in">
                        <div class="left">
                            <div class="img_holder">
                                <img src="img/about/1.jpg" alt="" />
                            </div>
                        </div>

                        <div class="right">
                            <!-- Main Title -->
                            <div class="barna__title">
                                <p><span>Who am I?</span></p>
                                <h3>About Me</h3>
                            </div>
                            <!-- /Main Title -->

                            <div class="desc">
                                <p>
                                    I have been building remarkable UX/UI designs and web
                                    development for and '<a href="#">tried</a> to design
                                    according to the best trends.
                                </p>
                                <p>
                                    My main goal is how to create a timely
                                    <a href="#">product</a> and it will help the business to
                                    reach the peak of development as a unique example in the
                                    future. I prioritize the design model because it is one of
                                    the best ways to run a company quickly and efficiently.
                                </p>
                            </div>

                            <div class="list">
                                <ul>
                                    <li>
                                        <div class="item">
                                            <img src="svg/address.svg" alt="" class="svg" />
                                            <p><span>Name:</span>DS Summer Morgan</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="svg/mailbox.svg" alt="" class="svg" />
                                            <p><span>Email:</span>BrandonBt@gmail.com</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="svg/user.svg" alt="" class="svg" />
                                            <p><span>Address:</span>156 KG Road, NewYork</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="svg/calendar.svg" alt="" class="svg" />
                                            <p><span>Born:</span>12 March 1990</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="button">
                                <a href="img/logo.svg" download
                                >Download
                                    <span class="text"
                                    ><span>CV</span><span>CV</span></span
                                    ></a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /About -->
        </section>
        <!-- /Section About -->

        <!-- Section Skills -->
        <section id="skills" data-bg-img="img/skills/bg.jpg">
            <div class="bg"></div>

            <div class="container">
                <div class="in">
                    <div class="left">
                        <p>
                            We're web design and development agency from California USA.
                            Every project design and development is done very carefully.
                        </p>
                    </div>
                    <div class="right">
                        <div class="barna__progress">
                            <div class="progress_item" data-value="70">
                                <div class="progress_top">
                                    <h3 class="progress_title">Marketing analysis</h3>
                                    <span class="progress_percent"></span>
                                </div>
                                <div class="progress_bgwrap">
                                    <div class="progress_bg"><span></span></div>
                                </div>
                            </div>

                            <div class="progress_item" data-value="85">
                                <div class="progress_top">
                                    <h3 class="progress_title">Trending design</h3>
                                    <span class="progress_percent"></span>
                                </div>
                                <div class="progress_bgwrap">
                                    <div class="progress_bg"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Skills -->

        <!-- Section Resume -->
        <section id="resume">
            <div class="barna__section_title right">
                <div class="title">
                    <h3>My Resume</h3>
                    <img src="svg/shape.svg" alt="" class="svg" />
                </div>
            </div>

            <div class="container">
                <!-- Main Title -->
                <div class="barna__title center">
                    <p><span>Resume</span></p>
                    <h3>My Skills and Education</h3>
                </div>
                <!-- /Main Title -->

                <!-- Resume List -->
                <div class="barna__resume_list">
                    <ul class="resume">
                        <!-- Resume: Item #1 -->
                        <li class="resume_item">
                            <div class="item_wrapper">
                                <div class="left">
                                    <img src="svg/education.svg" alt="" class="svg" />
                                    <h3>Education</h3>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img src="svg/check.svg" alt="" class="svg" />2009
                                                    - 2013
                                                </p>
                                                <h3>Master of Computer Science</h3>
                                                <h5>Hardverd University</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img src="svg/check.svg" alt="" class="svg" />2005
                                                    - 2010
                                                </p>
                                                <h3>Secondary School Certificate</h3>
                                                <h5>California SG Hight School</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img src="svg/check.svg" alt="" class="svg" />2008
                                                    - 2012
                                                </p>
                                                <h3>Honours of UI/UX Design</h3>
                                                <h5>Cambridge University</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img src="svg/check.svg" alt="" class="svg" />2000
                                                    - 2005
                                                </p>
                                                <h3>Primary School Certificate</h3>
                                                <h5>Markav TM Primary School</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Resume: Item #1 -->

                        <!-- Resume: Item #2 -->
                        <li class="resume_item">
                            <div class="item_wrapper">
                                <div class="left">
                                    <img src="svg/experience.svg" alt="" class="svg" />
                                    <h3>Experience</h3>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img src="svg/check.svg" alt="" class="svg" />2014
                                                    - 2017
                                                </p>
                                                <h3>Envato WP Theme Developer</h3>
                                                <h5>Envato Market</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img src="svg/check.svg" alt="" class="svg" />2012
                                                    - 2014
                                                </p>
                                                <h3>Photographer of PhotoDune</h3>
                                                <h5>Photodune</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img
                                                        src="svg/check.svg"
                                                        alt=""
                                                        class="svg"
                                                    />20017 - 2019
                                                </p>
                                                <h3>Themeforest HTML5 Designer</h3>
                                                <h5>Themeforest</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <p>
                                                    <img src="svg/check.svg" alt="" class="svg" />2009
                                                    - 2013
                                                </p>
                                                <h3>Master PHP Scripts Writer</h3>
                                                <h5>CodeCanyon</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Resume: Item #2 -->
                    </ul>
                </div>
                <!-- /Resume List -->
            </div>
        </section>
        <!-- /Section Resume -->

        <!-- Section Services -->
        <section id="services" data-bg-img="img/services/bg.jpg">
            <div class="barna__section_title">
                <div class="title">
                    <h3>My Services</h3>
                    <img src="svg/shape.svg" alt="" class="svg" />
                </div>
            </div>

            <div class="container">
                <!-- Main Title -->
                <div class="barna__title center">
                    <p><span>Services</span></p>
                    <h3>My Services</h3>
                </div>
                <!-- /Main Title -->

                <!-- Services List -->
                <div class="barna__services">
                    <ul>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/service-1.svg" alt="" class="svg" />
                                </div>
                                <h3>
                                    <span>Visual Design</span>
                                    <img src="svg/shape.svg" alt="" class="svg" />
                                </h3>
                                <p>
                                    Aistinctio nascetur distia quis malesuada adipisci platea
                                    Curabitur laboriosamula delectus fermen
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/service-2.svg" alt="" class="svg" />
                                </div>
                                <h3>
                                    <span>Graphics Design</span>
                                    <img src="svg/shape.svg" alt="" class="svg" />
                                </h3>
                                <p>
                                    Aistinctio nascetur distia quis malesuada adipisci platea
                                    Curabitur laboriosamula delectus fermen
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/service-3.svg" alt="" class="svg" />
                                </div>
                                <h3>
                                    <span>Social Marketing</span>
                                    <img src="svg/shape.svg" alt="" class="svg" />
                                </h3>
                                <p>
                                    Aistinctio nascetur distia quis malesuada adipisci platea
                                    Curabitur laboriosamula delectus fermen
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/service-4.svg" alt="" class="svg" />
                                </div>
                                <h3>
                                    <span>Product Design</span>
                                    <img src="svg/shape.svg" alt="" class="svg" />
                                </h3>
                                <p>
                                    Aistinctio nascetur distia quis malesuada adipisci platea
                                    Curabitur laboriosamula delectus fermen
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/service-5.svg" alt="" class="svg" />
                                </div>
                                <h3>
                                    <span>Vector Design</span>
                                    <img src="svg/shape.svg" alt="" class="svg" />
                                </h3>
                                <p>
                                    Aistinctio nascetur distia quis malesuada adipisci platea
                                    Curabitur laboriosamula delectus fermen
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/service-6.svg" alt="" class="svg" />
                                </div>
                                <h3>
                                    <span>100% Satisfaction</span>
                                    <img src="svg/shape.svg" alt="" class="svg" />
                                </h3>
                                <p>
                                    Aistinctio nascetur distia quis malesuada adipisci platea
                                    Curabitur laboriosamula delectus fermen
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /Services List -->
            </div>
        </section>
        <!-- /Section Services -->

        <!-- Section Portfolio -->
        <section id="portfolio" data-bg-img="img/portfolio/bg.jpg">
            <div class="barna__section_title right">
                <div class="title">
                    <h3>My Portfolio</h3>
                    <img src="svg/shape.svg" alt="" class="svg" />
                </div>
            </div>

            <div class="container">
                <!-- Main Title -->
                <div class="barna__title center">
                    <p><span>Portfolio</span></p>
                    <h3>My Work Table</h3>
                </div>
                <!-- /Main Title -->

                <!-- Portfolio List -->
                <div class="barna__portfolio">
                    <div class="filter">
                        <ul>
                            <li>
                                <a href="#" class="current" data-filter=".branding"
                                >Branding</a
                                >
                            </li>
                            <li><a href="#" data-filter=".webapp">Web App</a></li>
                            <li>
                                <a href="#" data-filter=".vectordesign">Vector Design</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".productdesign">Product Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="list">
                        <ul class="gallery_zoom">
                            <li class="branding webapp">
                                <div class="item">
                                    <img src="img/thumb/370-375.jpg" alt="" />
                                    <div
                                        class="main_image"
                                        data-bg-img="img/portfolio/1.jpg"
                                    ></div>
                                    <a
                                        class="zoom"
                                        href="img/portfolio/1.jpg"
                                        title="Business Card Design"
                                    ></a>
                                    <div class="title_holder">
                                        <div class="icon">
                                            <img src="svg/resize-full.svg" alt="" class="svg" />
                                        </div>
                                        <h3>Business Card Design</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="vectordesign webapp branding">
                                <div class="item">
                                    <img src="img/thumb/370-375.jpg" alt="" />
                                    <div
                                        class="main_image"
                                        data-bg-img="img/portfolio/2.jpg"
                                    ></div>
                                    <a
                                        class="zoom"
                                        href="img/portfolio/2.jpg"
                                        title="Business Card Design"
                                    ></a>
                                    <div class="title_holder">
                                        <div class="icon">
                                            <img src="svg/resize-full.svg" alt="" class="svg" />
                                        </div>
                                        <h3>Business Card Design</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="branding vectordesign">
                                <div class="item">
                                    <img src="img/thumb/370-375.jpg" alt="" />
                                    <div
                                        class="main_image"
                                        data-bg-img="img/portfolio/3.jpg"
                                    ></div>
                                    <a
                                        class="zoom"
                                        href="img/portfolio/3.jpg"
                                        title="Business Card Design"
                                    ></a>
                                    <div class="title_holder">
                                        <div class="icon">
                                            <img src="svg/resize-full.svg" alt="" class="svg" />
                                        </div>
                                        <h3>Business Card Design</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="branding webapp">
                                <div class="item">
                                    <img src="img/thumb/370-375.jpg" alt="" />
                                    <div
                                        class="main_image"
                                        data-bg-img="img/portfolio/4.jpg"
                                    ></div>
                                    <a
                                        class="zoom"
                                        href="img/portfolio/4.jpg"
                                        title="Business Card Design"
                                    ></a>
                                    <div class="title_holder">
                                        <div class="icon">
                                            <img src="svg/resize-full.svg" alt="" class="svg" />
                                        </div>
                                        <h3>Business Card Design</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="vectordesign productdesign branding">
                                <div class="item">
                                    <img src="img/thumb/370-375.jpg" alt="" />
                                    <div
                                        class="main_image"
                                        data-bg-img="img/portfolio/5.jpg"
                                    ></div>
                                    <a
                                        class="zoom"
                                        href="img/portfolio/5.jpg"
                                        title="Business Card Design"
                                    ></a>
                                    <div class="title_holder">
                                        <div class="icon">
                                            <img src="svg/resize-full.svg" alt="" class="svg" />
                                        </div>
                                        <h3>Business Card Design</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="productdesign webapp branding">
                                <div class="item">
                                    <img src="img/thumb/370-375.jpg" alt="" />
                                    <div
                                        class="main_image"
                                        data-bg-img="img/portfolio/6.jpg"
                                    ></div>
                                    <a
                                        class="zoom"
                                        href="img/portfolio/6.jpg"
                                        title="Business Card Design"
                                    ></a>
                                    <div class="title_holder">
                                        <div class="icon">
                                            <img src="svg/resize-full.svg" alt="" class="svg" />
                                        </div>
                                        <h3>Business Card Design</h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Portfolio List -->
            </div>
        </section>
        <!-- /Section Portfolio -->

        <!-- Section Counter -->
        <section id="counter">
            <div class="container">
                <div class="barna__counters">
                    <ul>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/counter-1.svg" alt="" class="svg" />
                                </div>
                                <h3>
                      <span
                          class="barna__counter"
                          data-from="0"
                          data-to="368"
                          data-speed="3000"
                          data-decimals="0"
                      >0</span
                      >K
                                </h3>
                                <p>Project finished since 2008</p>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/counter-2.svg" alt="" class="svg" />
                                </div>
                                <h3>
                      <span
                          class="barna__counter"
                          data-from="0"
                          data-to="8370"
                          data-speed="3000"
                          data-decimals="0"
                      >0</span
                      >+
                                </h3>
                                <p>Happy client s worldwide</p>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon">
                                    <img src="svg/counter-1.svg" alt="" class="svg" />
                                </div>
                                <h3>
                      <span
                          class="barna__counter"
                          data-from="0"
                          data-to="456"
                          data-speed="3000"
                          data-decimals="0"
                      >0</span
                      >+
                                </h3>
                                <p>Total awards won count</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /Section Counter -->

        <!-- Section Testimonials -->
        <section id="testimonials" data-bg-img="img/testimonials/bg.jpg">
            <div class="barna__section_title">
                <div class="title">
                    <h3>Testimonial</h3>
                    <img src="svg/shape.svg" alt="" class="svg" />
                </div>
            </div>

            <div class="container">
                <!-- Main Title -->
                <div class="barna__title center">
                    <p><span>Testimonials</span></p>
                    <h3>What say client</h3>
                </div>
                <!-- /Main Title -->

                <!-- Testimonials -->
                <div class="barna__testimonials">
                    <div class="my__container">
                        <div class="owl-carousel">
                            <div class="item">
                                <div
                                    class="img_holder"
                                    data-bg-img="img/testimonials/1.jpg"
                                ></div>
                                <div class="title_holder">
                                    <p>
                                        Facilisis possimus velit mollis vulputate purus
                                        faucibus. magnam quae litora orci vestibulum harum
                                        architecto senectus, egestas cillum odit quas
                                        voluptatibus magnis? Elementum quibusdam molestie
                                    </p>
                                    <h3>Grantor Marcos</h3>
                                    <h5>Senior UI/UX Designer</h5>
                                    <div class="icon">
                                        <img src="svg/quote.svg" alt="" class="svg" />
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="img_holder"
                                    data-bg-img="img/testimonials/1.jpg"
                                ></div>
                                <div class="title_holder">
                                    <p>
                                        Facilisis possimus velit mollis vulputate purus
                                        faucibus. magnam quae litora orci vestibulum harum
                                        architecto senectus, egestas cillum odit quas
                                        voluptatibus magnis? Elementum quibusdam molestie
                                    </p>
                                    <h3>Grantor Marcos2</h3>
                                    <h5>Senior UI/UX Designer</h5>
                                    <div class="icon">
                                        <img src="svg/quote.svg" alt="" class="svg" />
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="img_holder"
                                    data-bg-img="img/testimonials/1.jpg"
                                ></div>
                                <div class="title_holder">
                                    <p>
                                        Facilisis possimus velit mollis vulputate purus
                                        faucibus. magnam quae litora orci vestibulum harum
                                        architecto senectus, egestas cillum odit quas
                                        voluptatibus magnis? Elementum quibusdam molestie
                                    </p>
                                    <h3>Grantor Marcos3</h3>
                                    <h5>Senior UI/UX Designer</h5>
                                    <div class="icon">
                                        <img src="svg/quote.svg" alt="" class="svg" />
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="img_holder"
                                    data-bg-img="img/testimonials/1.jpg"
                                ></div>
                                <div class="title_holder">
                                    <p>
                                        Facilisis possimus velit mollis vulputate purus
                                        faucibus. magnam quae litora orci vestibulum harum
                                        architecto senectus, egestas cillum odit quas
                                        voluptatibus magnis? Elementum quibusdam molestie
                                    </p>
                                    <h3>Grantor Marcos4</h3>
                                    <h5>Senior UI/UX Designer</h5>
                                    <div class="icon">
                                        <img src="svg/quote.svg" alt="" class="svg" />
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="img_holder"
                                    data-bg-img="img/testimonials/1.jpg"
                                ></div>
                                <div class="title_holder">
                                    <p>
                                        Facilisis possimus velit mollis vulputate purus
                                        faucibus. magnam quae litora orci vestibulum harum
                                        architecto senectus, egestas cillum odit quas
                                        voluptatibus magnis? Elementum quibusdam molestie
                                    </p>
                                    <h3>Grantor Marcos5</h3>
                                    <h5>Senior UI/UX Designer</h5>
                                    <div class="icon">
                                        <img src="svg/quote.svg" alt="" class="svg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my__dots">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                </div>
                <!-- /Testimonials -->
            </div>
        </section>
        <!-- /Section Testimonials -->

        <!-- Section News -->
        <section id="news">
            <div class="barna__section_title right">
                <div class="title">
                    <h3>News Feed</h3>
                    <img src="svg/shape.svg" alt="" class="svg" />
                </div>
            </div>

            <div class="container">
                <!-- Main Title -->
                <div class="barna__title center">
                    <p><span>Blog</span></p>
                    <h3>News &amp; Update</h3>
                </div>
                <!-- /Main Title -->

                <!-- Blog List -->
                <div class="barna__blog">
                    <div
                        class="owl-carousel modal_items"
                        data-from="blog"
                        data-count="6"
                    >
                        <div class="item modal_item" data-index="1">
                            <div class="item_top">
                                <img src="img/thumb/37-21.jpg" alt="" />
                                <div class="main_image" data-bg-img="img/blog/1.jpg"></div>
                            </div>
                            <div class="item_bottom">
                                <div class="item_title">
                                    <a href="#" class="category">Design</a>
                                    <h3>
                                        <a href="#"
                                        >Auodit morbi excepturi exer citation site best
                                            protect</a
                                        >
                                    </h3>
                                </div>
                                <div class="item_meta">
                                    <div class="author">
                                        <div
                                            class="main_image"
                                            data-bg-img="img/blog/author.jpg"
                                        ></div>
                                        <h5>RT Shuvro</h5>
                                    </div>
                                    <div class="date">19 April 2021</div>
                                </div>
                            </div>
                            <div class="hidden_information">
                                <div class="image">
                                    <img src="img/thumb/4-3.jpg" alt="" />
                                    <div class="main" data-bg-img="img/blog/1.jpg"></div>
                                </div>
                                <div class="description">
                                    <h3>
                                        Auodit morbi excepturi exer citation site best protect
                                    </h3>
                                    <p>
                                        Just because we can't get out and about like we normally
                                        would, doesn’t mean we have to taking pictures. There’s
                                        still plenty you can do, provided you're prepared to use
                                        some imagination. Here are a few ideas to keep you
                                        shooting until normal life resumes.
                                    </p>
                                    <p>
                                        Most photographers love to shoot the unusual, and you
                                        don’t get much more unusual than These Unprecedented
                                        Times. Right now everything counts as out of the
                                        ordinary. There are a number of remarkable things about
                                        these lockdown days that are worth photographing now we
                                        can remember them when it is all over.
                                    </p>
                                    <h3>What Is Branding?</h3>
                                    <p>
                                        Nullam blandit constituto eam ne, te nam ignota
                                        vituper.atoribus. Malis cetero quem saipe, prou
                                        thendrerit voluptaria.
                                    </p>
                                    <div class="in_list">
                                        <ul>
                                            <li>
                                                <p>Email is a crucial channel in any marketing.</p>
                                            </li>
                                            <li><p>Curious what to say? How to say it?</p></li>
                                            <li>
                                                <p>Whether you’re kicking off a new ca mpaign.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    Habitasse per feugiat aliquam luctus accumsan
                                                    curae
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Streets empty that are usually busy are remarkable and
                                        can evoke the sense of historical pictures from before
                                        the invention of the motorcar. Other things that are
                                        different at the moment will be queues to get into
                                        stores and the lines marked out on the floor to show how
                                        far apart we should be.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item modal_item" data-index="2">
                            <div class="item_top">
                                <img src="img/thumb/37-21.jpg" alt="" />
                                <div class="main_image" data-bg-img="img/blog/2.jpg"></div>
                            </div>
                            <div class="item_bottom">
                                <div class="item_title">
                                    <a href="#" class="category">Design</a>
                                    <h3>
                                        <a href="#"
                                        >One tempore temporibus explicabo vehicula illum
                                            dapibus</a
                                        >
                                    </h3>
                                </div>
                                <div class="item_meta">
                                    <div class="author">
                                        <div
                                            class="main_image"
                                            data-bg-img="img/blog/author.jpg"
                                        ></div>
                                        <h5>RT Shuvro</h5>
                                    </div>
                                    <div class="date">17 April 2021</div>
                                </div>
                            </div>
                            <div class="hidden_information">
                                <div class="image">
                                    <img src="img/thumb/4-3.jpg" alt="" />
                                    <div class="main" data-bg-img="img/blog/2.jpg"></div>
                                </div>
                                <div class="description">
                                    <h3>
                                        One tempore temporibus explicabo vehicula illum dapibus
                                    </h3>
                                    <p>
                                        Just because we can't get out and about like we normally
                                        would, doesn’t mean we have to taking pictures. There’s
                                        still plenty you can do, provided you're prepared to use
                                        some imagination. Here are a few ideas to keep you
                                        shooting until normal life resumes.
                                    </p>
                                    <p>
                                        Most photographers love to shoot the unusual, and you
                                        don’t get much more unusual than These Unprecedented
                                        Times. Right now everything counts as out of the
                                        ordinary. There are a number of remarkable things about
                                        these lockdown days that are worth photographing now we
                                        can remember them when it is all over.
                                    </p>
                                    <h3>What Is Branding?</h3>
                                    <p>
                                        Nullam blandit constituto eam ne, te nam ignota
                                        vituper.atoribus. Malis cetero quem saipe, prou
                                        thendrerit voluptaria.
                                    </p>
                                    <div class="in_list">
                                        <ul>
                                            <li>
                                                <p>Email is a crucial channel in any marketing.</p>
                                            </li>
                                            <li><p>Curious what to say? How to say it?</p></li>
                                            <li>
                                                <p>Whether you’re kicking off a new ca mpaign.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    Habitasse per feugiat aliquam luctus accumsan
                                                    curae
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Streets empty that are usually busy are remarkable and
                                        can evoke the sense of historical pictures from before
                                        the invention of the motorcar. Other things that are
                                        different at the moment will be queues to get into
                                        stores and the lines marked out on the floor to show how
                                        far apart we should be.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item modal_item" data-index="3">
                            <div class="item_top">
                                <img src="img/thumb/37-21.jpg" alt="" />
                                <div class="main_image" data-bg-img="img/blog/3.jpg"></div>
                            </div>
                            <div class="item_bottom">
                                <div class="item_title">
                                    <a href="#" class="category">Design</a>
                                    <h3>
                                        <a href="#"
                                        >One tempore temporibus explicabo vehicula illum
                                            dapibus</a
                                        >
                                    </h3>
                                </div>
                                <div class="item_meta">
                                    <div class="author">
                                        <div
                                            class="main_image"
                                            data-bg-img="img/blog/author.jpg"
                                        ></div>
                                        <h5>RT Shuvro</h5>
                                    </div>
                                    <div class="date">14 April 2021</div>
                                </div>
                            </div>
                            <div class="hidden_information">
                                <div class="image">
                                    <img src="img/thumb/4-3.jpg" alt="" />
                                    <div class="main" data-bg-img="img/blog/3.jpg"></div>
                                </div>
                                <div class="description">
                                    <h3>
                                        One tempore temporibus explicabo vehicula illum dapibus
                                    </h3>
                                    <p>
                                        Just because we can't get out and about like we normally
                                        would, doesn’t mean we have to taking pictures. There’s
                                        still plenty you can do, provided you're prepared to use
                                        some imagination. Here are a few ideas to keep you
                                        shooting until normal life resumes.
                                    </p>
                                    <p>
                                        Most photographers love to shoot the unusual, and you
                                        don’t get much more unusual than These Unprecedented
                                        Times. Right now everything counts as out of the
                                        ordinary. There are a number of remarkable things about
                                        these lockdown days that are worth photographing now we
                                        can remember them when it is all over.
                                    </p>
                                    <h3>What Is Branding?</h3>
                                    <p>
                                        Nullam blandit constituto eam ne, te nam ignota
                                        vituper.atoribus. Malis cetero quem saipe, prou
                                        thendrerit voluptaria.
                                    </p>
                                    <div class="in_list">
                                        <ul>
                                            <li>
                                                <p>Email is a crucial channel in any marketing.</p>
                                            </li>
                                            <li><p>Curious what to say? How to say it?</p></li>
                                            <li>
                                                <p>Whether you’re kicking off a new ca mpaign.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    Habitasse per feugiat aliquam luctus accumsan
                                                    curae
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Streets empty that are usually busy are remarkable and
                                        can evoke the sense of historical pictures from before
                                        the invention of the motorcar. Other things that are
                                        different at the moment will be queues to get into
                                        stores and the lines marked out on the floor to show how
                                        far apart we should be.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item modal_item" data-index="4">
                            <div class="item_top">
                                <img src="img/thumb/37-21.jpg" alt="" />
                                <div class="main_image" data-bg-img="img/blog/1.jpg"></div>
                            </div>
                            <div class="item_bottom">
                                <div class="item_title">
                                    <a href="#" class="category">Design</a>
                                    <h3>
                                        <a href="#"
                                        >Auodit morbi excepturi exer citation site best
                                            protect</a
                                        >
                                    </h3>
                                </div>
                                <div class="item_meta">
                                    <div class="author">
                                        <div
                                            class="main_image"
                                            data-bg-img="img/blog/author.jpg"
                                        ></div>
                                        <h5>RT Shuvro</h5>
                                    </div>
                                    <div class="date">12 April 2021</div>
                                </div>
                            </div>
                            <div class="hidden_information">
                                <div class="image">
                                    <img src="img/thumb/4-3.jpg" alt="" />
                                    <div class="main" data-bg-img="img/blog/1.jpg"></div>
                                </div>
                                <div class="description">
                                    <h3>
                                        One tempore temporibus explicabo vehicula illum dapibus
                                    </h3>
                                    <p>
                                        Just because we can't get out and about like we normally
                                        would, doesn’t mean we have to taking pictures. There’s
                                        still plenty you can do, provided you're prepared to use
                                        some imagination. Here are a few ideas to keep you
                                        shooting until normal life resumes.
                                    </p>
                                    <p>
                                        Most photographers love to shoot the unusual, and you
                                        don’t get much more unusual than These Unprecedented
                                        Times. Right now everything counts as out of the
                                        ordinary. There are a number of remarkable things about
                                        these lockdown days that are worth photographing now we
                                        can remember them when it is all over.
                                    </p>
                                    <h3>What Is Branding?</h3>
                                    <p>
                                        Nullam blandit constituto eam ne, te nam ignota
                                        vituper.atoribus. Malis cetero quem saipe, prou
                                        thendrerit voluptaria.
                                    </p>
                                    <div class="in_list">
                                        <ul>
                                            <li>
                                                <p>Email is a crucial channel in any marketing.</p>
                                            </li>
                                            <li><p>Curious what to say? How to say it?</p></li>
                                            <li>
                                                <p>Whether you’re kicking off a new ca mpaign.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    Habitasse per feugiat aliquam luctus accumsan
                                                    curae
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Streets empty that are usually busy are remarkable and
                                        can evoke the sense of historical pictures from before
                                        the invention of the motorcar. Other things that are
                                        different at the moment will be queues to get into
                                        stores and the lines marked out on the floor to show how
                                        far apart we should be.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item modal_item" data-index="5">
                            <div class="item_top">
                                <img src="img/thumb/37-21.jpg" alt="" />
                                <div class="main_image" data-bg-img="img/blog/2.jpg"></div>
                            </div>
                            <div class="item_bottom">
                                <div class="item_title">
                                    <a href="#" class="category">Design</a>
                                    <h3>
                                        <a href="#"
                                        >One tempore temporibus explicabo vehicula illum
                                            dapibus</a
                                        >
                                    </h3>
                                </div>
                                <div class="item_meta">
                                    <div class="author">
                                        <div
                                            class="main_image"
                                            data-bg-img="img/blog/author.jpg"
                                        ></div>
                                        <h5>RT Shuvro</h5>
                                    </div>
                                    <div class="date">09 April 2021</div>
                                </div>
                            </div>
                            <div class="hidden_information">
                                <div class="image">
                                    <img src="img/thumb/4-3.jpg" alt="" />
                                    <div class="main" data-bg-img="img/blog/2.jpg"></div>
                                </div>
                                <div class="description">
                                    <h3>
                                        One tempore temporibus explicabo vehicula illum dapibus
                                    </h3>
                                    <p>
                                        Just because we can't get out and about like we normally
                                        would, doesn’t mean we have to taking pictures. There’s
                                        still plenty you can do, provided you're prepared to use
                                        some imagination. Here are a few ideas to keep you
                                        shooting until normal life resumes.
                                    </p>
                                    <p>
                                        Most photographers love to shoot the unusual, and you
                                        don’t get much more unusual than These Unprecedented
                                        Times. Right now everything counts as out of the
                                        ordinary. There are a number of remarkable things about
                                        these lockdown days that are worth photographing now we
                                        can remember them when it is all over.
                                    </p>
                                    <h3>What Is Branding?</h3>
                                    <p>
                                        Nullam blandit constituto eam ne, te nam ignota
                                        vituper.atoribus. Malis cetero quem saipe, prou
                                        thendrerit voluptaria.
                                    </p>
                                    <div class="in_list">
                                        <ul>
                                            <li>
                                                <p>Email is a crucial channel in any marketing.</p>
                                            </li>
                                            <li><p>Curious what to say? How to say it?</p></li>
                                            <li>
                                                <p>Whether you’re kicking off a new ca mpaign.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    Habitasse per feugiat aliquam luctus accumsan
                                                    curae
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Streets empty that are usually busy are remarkable and
                                        can evoke the sense of historical pictures from before
                                        the invention of the motorcar. Other things that are
                                        different at the moment will be queues to get into
                                        stores and the lines marked out on the floor to show how
                                        far apart we should be.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item modal_item" data-index="6">
                            <div class="item_top">
                                <img src="img/thumb/37-21.jpg" alt="" />
                                <div class="main_image" data-bg-img="img/blog/3.jpg"></div>
                            </div>
                            <div class="item_bottom">
                                <div class="item_title">
                                    <a href="#" class="category">Design</a>
                                    <h3>
                                        <a href="#"
                                        >One tempore temporibus explicabo vehicula illum
                                            dapibus</a
                                        >
                                    </h3>
                                </div>
                                <div class="item_meta">
                                    <div class="author">
                                        <div
                                            class="main_image"
                                            data-bg-img="img/blog/author.jpg"
                                        ></div>
                                        <h5>RT Shuvro</h5>
                                    </div>
                                    <div class="date">01 April 2021</div>
                                </div>
                            </div>
                            <div class="hidden_information">
                                <div class="image">
                                    <img src="img/thumb/4-3.jpg" alt="" />
                                    <div class="main" data-bg-img="img/blog/3.jpg"></div>
                                </div>
                                <div class="description">
                                    <h3>
                                        One tempore temporibus explicabo vehicula illum dapibus
                                    </h3>
                                    <p>
                                        Just because we can't get out and about like we normally
                                        would, doesn’t mean we have to taking pictures. There’s
                                        still plenty you can do, provided you're prepared to use
                                        some imagination. Here are a few ideas to keep you
                                        shooting until normal life resumes.
                                    </p>
                                    <p>
                                        Most photographers love to shoot the unusual, and you
                                        don’t get much more unusual than These Unprecedented
                                        Times. Right now everything counts as out of the
                                        ordinary. There are a number of remarkable things about
                                        these lockdown days that are worth photographing now we
                                        can remember them when it is all over.
                                    </p>
                                    <h3>What Is Branding?</h3>
                                    <p>
                                        Nullam blandit constituto eam ne, te nam ignota
                                        vituper.atoribus. Malis cetero quem saipe, prou
                                        thendrerit voluptaria.
                                    </p>
                                    <div class="in_list">
                                        <ul>
                                            <li>
                                                <p>Email is a crucial channel in any marketing.</p>
                                            </li>
                                            <li><p>Curious what to say? How to say it?</p></li>
                                            <li>
                                                <p>Whether you’re kicking off a new ca mpaign.</p>
                                            </li>
                                            <li>
                                                <p>
                                                    Habitasse per feugiat aliquam luctus accumsan
                                                    curae
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Streets empty that are usually busy are remarkable and
                                        can evoke the sense of historical pictures from before
                                        the invention of the motorcar. Other things that are
                                        different at the moment will be queues to get into
                                        stores and the lines marked out on the floor to show how
                                        far apart we should be.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Blog List -->
            </div>
        </section>
        <!-- /Section News -->

        <!-- Section Contact -->
        <section id="contact">
            <div class="barna__section_title">
                <div class="title">
                    <h3>Contact Me</h3>
                    <img src="svg/shape.svg" alt="" class="svg" />
                </div>
            </div>

            <div class="container">
                <!-- Main Title -->
                <div class="barna__title center">
                    <p><span>Message</span></p>
                    <h3>Contact</h3>
                </div>
                <!-- /Main Title -->

                <!-- Contact -->
                <div
                    class="barna__contact"
                    data-bg-img="img/contact/bg.jpg"
                    data-email="yourmail@gmail.com"
                >
                    <div class="info">
                        <div
                            class="success"
                            data-success="Your message has been received, we will contact you soon."
                        ></div>
                        <div class="empty_notice">
                            <span>Please Fill Required Fields</span>
                        </div>
                    </div>

                    <div class="in">
                        <div class="left">
                            <div class="left_in">
                                <div class="item">
                                    <span class="placeholder">Name *</span>
                                    <input class="name" type="text" />
                                </div>
                                <div class="item">
                                    <span class="placeholder">Email *</span>
                                    <input class="email" type="email" />
                                </div>
                                <div class="item">
                                    <span class="placeholder">Subject</span>
                                    <input class="subject" type="text" />
                                </div>
                            </div>
                        </div>

                        <div class="right">
                            <div class="right_in">
                                <div class="item">
                                    <span class="placeholder">Message</span>
                                    <textarea class="message"></textarea>
                                </div>
                                <div class="item nobg">
                                    <a id="send_message" href="#">Submit request</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Contact -->
            </div>
        </section>
        <!-- /Section Contact -->
    </div>
    <!-- /Main Wrapper -->

    <footer id="footer">
        <div class="widgets">
            <div class="container">
                <ul class="list">
                    <li class="list_item">
                        <div class="item">
                            <div class="icon">
                                <img src="svg/widget-1.svg" alt="" class="svg" />
                            </div>
                            <h3>Address:</h3>
                            <p>156 KG Road, NewYork</p>
                        </div>
                    </li>
                    <li class="list_item">
                        <div class="item">
                            <div class="icon">
                                <img src="svg/widget-2.svg" alt="" class="svg" />
                            </div>
                            <h3>Email:</h3>
                            <p>Mompanyiou@gmail.com</p>
                        </div>
                    </li>
                    <li class="list_item">
                        <div class="item">
                            <div class="icon">
                                <img src="svg/widget-3.svg" alt="" class="svg" />
                            </div>
                            <h3>Social:</h3>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank"
                                        ><img
                                                src="svg/social/stackoverflow.svg"
                                                alt=""
                                                class="svg"
                                            /></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"
                                        ><img src="svg/social/github.svg" alt="" class="svg"
                                            /></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"
                                        ><img
                                                src="svg/social/facebook.svg"
                                                alt=""
                                                class="svg"
                                            /></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"
                                        ><img src="svg/social/twitter.svg" alt="" class="svg"
                                            /></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"
                                        ><img
                                                src="svg/social/linkedin.svg"
                                                alt=""
                                                class="svg"
                                            /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <p>
                    @2021 by
                    <a
                        href="https://themeforest.net/user/ib-themes/portfolio"
                        target="_blank"
                    >ib-themes</a
                    >
                    All right reserved
                </p>
            </div>
        </div>
    </footer>
</div>
<!-- /Wrapper -->
@stop
