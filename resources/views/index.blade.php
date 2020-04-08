<!doctype html>
<html lang="en">

@include("includes.head")

<body>

    <!--preloader starts-->


    <div class="loader_bg"><div class="loader"></div></div>


    <!--preloader ends-->

    <!--navigation area starts-->

   @include("includes.header")

    <!--navigation area ends-->

    <!--Banner area starts-->

    <div class="banner-area" id="home">

        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="intro animate-scale">

                                    <h3>Welcome to My Website</h3>

                                    <h1 class="ah-headline">

                                        <span class="ah-words-wrapper">
                                            <b class="is-visible"> Anifowose Tobi </b> <!--edit the name to your name-->
                                            <b>Code Teacher</b> <!--edit the designation if you are in different profession-->
                                            <b> Lead Instructor </b> <!--edit the designation if you are in different profession-->
                                            <b>Web Developer</b> <!--edit the designation if you are in different profession-->
                                        </span>
                                    </h1>

                                    <a href="#contact" class="banner-btn">Contact me</a>


                                </section>

                                <div class="clearfix"></div>

                                <a class="mouse-scroll hidden-xs" href="#about">
                                    <span class="mouse">
                                        <span class="mouse-movement"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Banner area ends-->

    <!--about area starts-->

    <div class="about-area section-padding" id="about">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <div class="about-text-left">
                        <h2>Anifowose Tobi</h2> <!--edit name-->
                        <h3>Backend Developer</h3> <!--edit designation-->
                        <p>I am a backend web developer with over 4 years working expereince on simple and complex web based applications ranging from simple blogs to web based solutions for financial institutions. I code majorly with PHP and i have worked with several PHP frameworks including LARAVEL and Symfony. I  also code in javascript with experience working with Jquery and VueJs to build Single Page applications. Most importantly, I enjoy teaching others to code and i have done that for more than two years now. I  am the lead instructor at Gurus Tech , an organization focused on training young people who wanted to become web developers.   </p>
                        <a href="images/about/demo-cv.png" download>Download CV &nbsp; &nbsp;<i class="fa fa-download"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <img src="{{asset('images/tobexkee.jpeg')}}"  class="img-responsive" alt="about image"> <!--add your image here-->
                </div>

                <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                    <div class="about-text-right">

                        <div id="skills">

                            <h3>My Skills</h3>

                            <div class="row">

                                <div class="col-md-12">

                                    <!-- skillbar -->
                                    <div class="skillbar" data-percent="95%"> <!--edit percentage-->

                                        <h6 class="skillbar-title"> PHP / LARAVEL </h6> <!--edit skills-->
                                        <h6 class="skillbar-percent">95%</h6> <!--edit percentage-->

                                        <div class="skillbar-bar">
                                            <div class="skillbar-child"></div>
                                        </div>

                                    </div>
                                    <!-- end skillbar -->

                                </div>


                                <div class="col-md-12">

                                    <!-- skillbar -->
                                    <div class="skillbar" data-percent="90%"> <!--edit percentage-->

                                        <h6 class="skillbar-title">JAVASCRIPT / JQUERY/ Vue JS</h6> <!--edit skills-->
                                        <h6 class="skillbar-percent">90%</h6> <!--edit percentage-->

                                        <div class="skillbar-bar">
                                            <div class="skillbar-child"></div>
                                        </div>

                                    </div>
                                    <!-- end skillbar -->

                                </div>

                                <div class="col-md-12">

                                    <!-- skillbar -->
                                    <div class="skillbar" data-percent="85%"> <!--edit percentage-->

                                        <h6 class="skillbar-title"> GIT/GITHUB </h6> <!--edit skills-->
                                        <h6 class="skillbar-percent">85%</h6> <!--edit percentage-->

                                        <div class="skillbar-bar">
                                            <div class="skillbar-child"></div>
                                        </div>

                                    </div>
                                    <!-- end skillbar -->

                                </div>


                                <div class="col-md-12">

                                    <!-- skillbar -->
                                    <div class="skillbar" data-percent="75%"> <!--edit percentage-->

                                        <h6 class="skillbar-title">HTML</h6> <!--edit skills-->
                                        <h6 class="skillbar-percent">75%</h6> <!--edit percentage-->

                                        <div class="skillbar-bar">
                                            <div class="skillbar-child"></div>
                                        </div>

                                    </div>
                                    <!-- end skillbar -->

                                </div>


                                <div class="col-md-12">
                                    <h4>Credits</h4>
                                    <ul>
                                        <li>Intern at hotels.ng</li>
                                        <li>Co-instructor at ZIT code bootcamp</li>
                                        <li>Lead instructor at Guru's code camp</li>
                                    </ul>
                                </div>

                          
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <!--about area ends-->
    
    <!--Services Area Starts-->

    <div id="services" class="services-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                        <p class="line-one"></p>
                        <h2>What I Offer</h2>
                        <p class="line-one"></p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div id="services-carousel" class="owl-carousel owl-theme">

                    <div class="single-services text-center item">
                        <div class="services-icon">
                            <i class="fa fa-joomla"></i>
                        </div>
                        <div class="services-content">
                            <h3> Building Websites </h3> <!--edit the service you give-->
                            <p>Do you need a website ? Then i am your sure plug. Get a cool website for your business today!</p>
                        </div>

                    </div>

                    <div class="single-services text-center item">
                        <div class="services-icon">
                            <i class="fa fa-slack"></i>
                        </div>
                        <div class="services-content">
                            <h3>  Building Web based applications </h3> <!--edit the service you give-->
                            <p>I build web based applications such as computer based test softwares, financial softwares and much more</p>
                        </div>

                    </div>


                    <div class="single-services text-center item">
                        <div class="services-icon">
                            <i class="fa fa-yelp"></i>
                        </div>
                        <div class="services-content">
                            <h3>Building TDD based Microservices API</h3> <!--edit the service you give-->
                            <p>I can help you build API's for your products using latest technologies </p>
                        </div>

                    </div>


                    <div class="single-services text-center item">
                        <div class="services-icon">
                            <i class="fa fa-viacoin"></i>
                        </div>
                        <div class="services-content">
                            <h3>Teaching Code</h3> <!--edit the service you give-->
                            <p>i guess this is the part i love the most. I enjoy seeing new developers advancing their skill set</p>
                        </div>

                    </div>

 
                </div>

            </div>
        </div>
    </div>

    <!--Services Area Ends-->
    
	 
   
	<!--Portfolio Area Starts-->

	
    @include("includes.portfolio")

	<!--Portfolio Area Ends-->
   
	<!--Testimonial Section Starts-->

	

	<!--Testimonial Section Ends-->

   @include("includes.contact")
 

    <!--Footer Area Starts-->
@include("includes.footer")

    
@include("includes.js")
</body>




    <!--Latest version JQuery-->

</html>