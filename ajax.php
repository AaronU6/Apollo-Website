<?php  function GetLayout($layout) {
        if ($layout == 'Tutor'): ?>
        <!-- LANDING PAGE -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="header-content">
                            <div class="header-content-inner">
                                <h1><strong>Where teaching happens.</strong></h1>
                                <h3>A dedicated platform where tutors can connect with students in an intutive and convenient manner</h3>
                                <!-- <hr>
                                <a href="#download" class="btn btn-outline btn-xl page-scroll">Start Now for Free!</a> -->
                                <a class='join-link' href='join.php'> <div class="join-link-<?= $layout; ?>">
                                    <h3> Sign Up for Beta </h3>
                                </div> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="device-container">
                            <div class="device-mockup iphone6_plus portrait white">
                                <div class="device">
                                    <div class="screen">
                                        <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                        <video autoplay loop class="embed-responsive-item" style="width:100%;">
                                            <source src="img/Apollo.mov">
                                        </video>
                                    </div>
                                    <div class="button">
                                        <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Section 2 -->
        <div class="cover-photo">
            <section id="download" class="bg-primary-<?= $layout; ?> text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="section-heading">Apollo at your University!</h2>
                            <p>We are excited to announce that Apollo is now available on iOS and in service at McGill University. With Apollo, you will now be able to get the help and attention you need with our one-to-one, affordable, peer tutoring services
                            <!-- <br><br> <i> Follow us on Facebook to find out when Apollo will be available at your university. </i> </p>
                            <a href="www.facebook.com" class="facebook-logo"><i class="fa fa-facebook-official"></i></a> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Section 3 -->
        <section id="features" class="features text-center secondary-background-<?= $layout; ?> no-padding">
            <div id="myCarousel" class="carousel feature-slideshow slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 primary-slide">
                                <div class='primary-slide-content'>
                                    <h2> Apollo is a platform that offers tutors the capability to schedule, message and complete transaction with students seamlessly through their smartphone </h2>
                                    <p> Our mission is to provide a sustainable platform where students can connect with passionate tutors and schedule lessons. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/6-time.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-calendar text-primary"></i>
                                    <h3>Teach Whenever You Want</h3>
                                    <ul class="text-muted"> 
                                        <li>Apollo allows tutors to choose their availabilities</li>
                                        <li>Tutors get to choose amoung which courses they would like to teach</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-1 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-check text-primary"></i>
                                    <h3>Autonomy Over Prices</h3>
                                    <ul class="text-muted">
                                        <li> We provide tutors full flexibility with choosing their prices </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/10-confirm.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/4-tutors.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-wallet text-primary"></i>
                                    <h3>No Service Charge for Tutors</h3>
                                    <ul class="text-muted">
                                        <li>Apollo is designed by tutors for tutors. We believe tutors should get exactly what they ask for</li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-1 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-credit-card text-primary"></i>
                                    <h3>Convenient Payment System</h3>
                                    <ul class="text-muted">
                                        <li> Transactions are processed in-app and are billed after every session </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/13-payment.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/12-message.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-envelope text-primary"></i>
                                    <h3>In-App Messaging System</h3>
                                    <ul class="text-muted">
                                        <li>Communicate your needs to your student in advance with our instant messaging platform</li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- Section 4 -->
        <section id="tutors" class="text-center">
            <div class="container">
                <div class='row'>
                    <h2 class="section-heading">Passionate, Experienced Tutors</h2>
                    <p>Tutors using Apollo have: </p>
                    <hr>
                    <p class='text-muted'> Previously taken the course and achieved a proficient grade (80% or above) </p>
                    <p class='text-muted'> Had prior tutoring experience and have been thoroughly screened and interviewed </p>
                    <p class='text-muted'> The passion and determination to ensure their students succeed! </p>
                </div>
            </div>
        </section>
        <?php elseif ($layout == 'Student'): ?>
        <!-- LANDING PAGE -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="header-content">
                            <div class="header-content-inner">
                                <h1><strong>Where learning happens.</strong></h1>
                                <h3>Stop paying for over-priced crash courses and start getting the attention you need.</h3>
                                <!-- <hr>
                                <a href="#download" class="btn btn-outline btn-xl page-scroll">Start Now for Free!</a> -->
                                <a class='join-link' href='join.php'> <div class="join-link-<?= $layout; ?>">
                                    <h3> Sign Up for Beta </h3>
                                </div> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="device-container">
                            <div class="device-mockup iphone6_plus portrait white">
                                <div class="device">
                                    <div class="screen">
                                        <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                        <video autoplay loop class="embed-responsive-item" style="width:100%;">
                                            <source src="img/Apollo.mov">
                                        </video>
                                    </div>
                                    <div class="button">
                                        <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Section 2 -->
        <div class="cover-photo">
            <section id="download" class="bg-primary-<?= $layout; ?> text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="section-heading">Apollo at your University!</h2>
                            <p>We are excited to announce that Apollo is now available on iOS and in service at McGill University. With Apollo, you will now be able to get the help and attention you need with our one-to-one, affordable, peer tutoring services
                            <!-- <br><br> <i> Follow us on Facebook to find out when Apollo will be available at your university. </i> </p>
                            <a href="www.facebook.com" class="facebook-logo"><i class="fa fa-facebook-official"></i></a> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Section 3 -->
        <section id="features" class="features text-center secondary-background-<?= $layout; ?> no-padding">
            <div id="myCarousel" class="carousel feature-slideshow slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1 primary-slide">
                                <div class='primary-slide-content'>
                                    <h2> Say goodbye to large commercialized crash courses <br> And hello to the future of peer tutoring </h2>
                                    <p> Our mission is to provide a sustainable platform where students can connect with passionate tutors and schedule their lesson. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/3-courses.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-notebook text-primary"></i>
                                    <h3>Any Course</h3>
                                    <ul class="text-muted"> 
                                        <li>Apollo lets search by course code and find an available tutor specialized to that course</li>
                                        <li>Courses currently supported are COMP 202, MATH 141, PHYS 131, and CHEM 110</li>
                                        <li>More courses will be available soon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-1 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-calendar text-primary"></i>
                                    <h3>Easy Scheduling</h3>
                                    <ul class="text-muted">
                                        <li>No matter how busy your schedule is, find the perfect time slot that works for you and your tutor with our in-app scheduling feature </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/5-date.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/12-message.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-envelope text-primary"></i>
                                    <h3>In-App Messaging System</h3>
                                    <ul class="text-muted">
                                        <li>Communicate your needs to your tutor in advance with our instant messaging platform</li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-1 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-credit-card text-primary"></i>
                                    <h3>Student-Friendly Prices</h3>
                                    <ul class="text-muted">
                                        <li> Apollo tutors provide affordable prices for the same quality of teaching! </li>
                                        <li> Transactions are completely seamless and are billed after every session </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/10-confirm.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 hidden-xs secondary-slide">
                                <div class="device-container">
                                    <div class="device-mockup iphone6_plus portrait white">
                                        <div class="device">
                                            <div class="screen">
                                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                                <img src="img/Screenshots/1-onboard.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 secondary-slide">
                                <div class="feature-item">
                                    <i class="icon-graduation text-primary"></i>
                                    <h3>Created by McGill Students, for McGill Students</h3>
                                    <ul class="text-muted">
                                        <li>As McGillians, we understand the issues with the current tutoring market/services from experience such as affordability, scheduling difficulties, and lack of sustainable platform</li>
                                        <li>That is why we have addressed these problems and incorporated the solutions into Apollo! </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- Section 4 -->
        <section id="tutors" class="text-center">
            <div class="container">
                <div class='row'>
                    <h2 class="section-heading">We are looking for passionate and experienced Tutors to join Apollo</h2>
                    <p> If you have, </p>
                    <hr>
                    <p class='text-muted'> Previously taken the course and achieved a proficient grade (80% or above) </p>
                    <p class='text-muted'> Had prior tutoring experience </p>
                    <p class='text-muted'> The determination and passion to ensure that your students will succeed </p>
                    <p> You may be a good fit, <a href='join.php'> click here to join the team </a> </p>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- Section 7 -->
    <section id="contact" class="contact bg-primary-<?= $layout; ?>">
        <div class="container">
            <div class="row">
                <div class='col-md-8 col-md-offset-2'>
                    <h2>Contact Us</h2>
                    <h3>We are constantly looking for honest feedback so that we can continue to provide you the best learning experience!</h3>

                    <!-- NOTE: Not sure why email link isnt working? -->
                    <h3>Feel free to contact us:</h3>
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <form  action="" method="POST" id="contact-form">
                                <div class='form-area'>
                                    <div class='row'>
                                        <div class='col-md-12 input-area'>
                                            <input id="name" class="input" name="name" type="text" placeholder="Name" size="30" />
                                            <p id="nameInfo" class="input-info"> </p>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12 input-area'>
                                            <input id="email" class="input" name="email" type="email" placeholder="Email" size="30" />
                                            <p id="emailInfo" class="input-info"> </p>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="Write your message here..."></textarea>
                                        <p id="messageInfo" class="input-info"> </p>
                                    </div>
                                    <input class="submit" type="submit" id='submit' name='submit' value="Send email"/>
                                </div>
                            </form>
                            <h3 id="response" class="form-response"> Thank you for your feedback! </h3>
                        </div>
                    </div>
                    <h3>We hope that you can join us on this journey as we begin at McGill University and fuel us with your support!</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="text-center">
        <div class="container">
            <div class="row">
                <h2> Meet the Team </h2>
                <p> <a href='team.php'> Click here to see the Apollo team! </a> </p>
                <p> Are you interested in becoming a tutor for Apollo, <a href='join.php'> click here to sign up </a></p>
            </div>
        </div>
    </section>   
        
<?php } 

if(isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    switch($action) {
        case 'ChangeLayout': 
            GetLayout($_POST['user']);
            break;
    }
}
?>