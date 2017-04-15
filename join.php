<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="img/Logo/Gradient/icon.png" />
    <title>Apollo: Peer Tutoring Service</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="join-page">
    <!-- NAVIGATION BAR -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-join">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/#page-top">
                    <img class="logo" src='img/Logo/Gradient/icon.png' alt='Apollo'/>
                    <h3 class="nav-title"> Apollo </h3>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top">Sign Up Now</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#download">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#tutor">The Tutors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#contact">Contact Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="team.php">The Team</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- LANDING PAGE -->
    <section class="join bg-primary">
        <div class="container">
            <div class="row">
                <div class='col-md-10 col-md-offset-1'>
                    <h2>Sign Up for our Beta Testing!</h2>
                    <h3>Interested in using Apollo? Please fill out the form below. <br />We are constantly looking for tutors and students to test Apollo!</h3>
                    <p class="input-info"> *All fields are required </p>

                    <div class='row'>
                        <div class='col-md-10 col-md-offset-1'>
                            <form  action="" method="POST" id="contact-form">
                                <div class='form-area'>
                                    <!-- Name -->
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <input id="fname" class="input" name="fname" type="text" placeholder="First Name" size="30" />
                                        </div>

                                        <div class='col-md-6'>
                                            <input id="lname" class="input" name="lname" type="text" placeholder="Last Name" size="30" />
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <input id="email" class="input" name="email" type="email" placeholder="Email" size="30" />
                                        </div>
                                    </div>
                                    <!-- Phone -->
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <input id="phone" class="input" name="phone" type="tel" placeholder="Phone" size="30" />
                                        </div>
                                    </div>
                                    <!-- Student vs Tutor -->
                                    <div class='row'>
                                        <div class='col-md-12 input-area'>
                                            <p id="" class=""> Are you signing up as a student or tutor? </p>
                                            <div class='options'>
                                                <div class='radio-option'> <input id="userS" class="input" name="user" type="radio" placeholder="Student" style="width: 10px;" value='Student'> Student </input> </div>
                                                <div class='radio-option'> <input id="userT" class="input" name="user" type="radio" placeholder="Tutor" style="width: 10px;" value='Tutor'> Tutor </input> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id='tutor' style='display: none;'>
                                        <!-- Courses -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> What courses would you like to teach? </p>
                                                <textarea id="courses" class="input" name="courses" rows="3" cols="30" placeholder="(MATH 141, COMP 202, PHGY 311)"></textarea>
                                            </div>
                                        </div>

                                        <!-- Experience -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> Have you had prior tutoring experience? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="experience" class="input" name="experience" type="radio" style="width: 10px;" value='Yes'> Yes </input> </div>
                                                    <div class="radio-option"> <input id="experience" class="input" name="experience" type="radio" style="width: 10px;" value='No'> No </input> </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Experience = TRUE -->
                                        <div id='exp' style='display: none;'>
                                            <!-- Past organizations -->
                                            <div class='row'>
                                                <div class='col-md-12 input-area'>
                                                    <p id="" class=""> If yes, with which organization? </p>
                                                    <div class='options'>
                                                        <div class='radio-option'> <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='Professional Businesses'> Professional Businesses (A+ Tutoring, Grade Savers, etc) </input> </div>
                                                        <div class='radio-option'> <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='McGill Tutoring Organizations'> McGill Tutoring Organizations (EPTS, SUS Tutoring, etc) </input> </div>
                                                        <div class='radio-option'> <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='Free Lance Tutoring'> Free Lance Tutoring </input> </div>
                                                        <div class='radio-option'> 
                                                            <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='Other'> Other </input> 
                                                            <input id="other" class="input other-text" name="other" type="text" placeholder="" size="30" style ='display: none;'/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Students per semester -->
                                            <div class='row'>
                                                <div class='col-md-12 input-area'>
                                                    <p id="" class=""> How many students do you tutor in a semester? </p>
                                                    <input id="stpersm" class="input" name="stpersm" type="number" placeholder="" size="30" min="1" max="20"/>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Experience = FALSE -->
                                        <div id='noexp' style='display: none;'>
                                            <div class='row'>
                                                <div class='col-md-12 input-area'>
                                                    <p id="" class=""> If no, please attach your transcript below (Unofficial transcripts are allowed) </p>
                                                    <div class='options'>
                                                        <input id="file" class="input" name="file" type="file"> </input> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Price range -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> What is your preferred price range per hour? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="Below 15"> Below 15 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="15 - 20"> 15 - 20 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="20 - 25"> 20 - 25 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="25 - 30"> 25 - 30 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="30 - 35"> 30 - 35 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="35 - 40"> 35 - 40 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="40+"> 40+ </input> </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Group Session -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> Do you prefer tutoring in a one-on-one setting or a small group setting? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="group" class="input" name="group" type="radio" style="width: 10px;" value="One-on-one"> One-on-one </input> </div>
                                                    <div class="radio-option"> <input id="group" class="input" name="group" type="radio" style="width: 10px;" value="Small Group"> Small Group (Upto 5 people) </input> </div>
                                                    <div class="radio-option"> <input id="group" class="input" name="group" type="radio" style="width: 10px;" value="No Preference"> No Preference </input> </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Location -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> Where would you prefer to meet students? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="On Campus"> On Campus </input> </div>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="Off Campus"> Off Campus </input> </div>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="Local Cafe"> Local Cafe </input> </div>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="At Home"> At Home </input> </div>
                                                    <div class="radio-option"> 
                                                    <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="Other"> Other </input> 
                                                        <input id="other-loc" class="input other-text-loc" name="other" type="text" placeholder="" size="30" style ='display: none;'/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id='student' style='display: none;'>
                                         <!-- Courses -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> What courses would you like help in? </p>
                                                <textarea id="courses" class="input" name="courses" rows="3" cols="30" placeholder="(MATH 141, COMP 202, PHGY 311)"></textarea>
                                            </div>
                                        </div>

                                        <!-- Experience -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> Have you been tutored before? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="experience" class="input" name="experience" type="radio" style="width: 10px;" value='Yes'> Yes </input> </div>
                                                    <div class="radio-option"> <input id="experience" class="input" name="experience" type="radio" style="width: 10px;" value='No'> No </input> </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div id='exp' style='display: none;'>
                                            <!-- Past organizations -->
                                            <div class='row'>
                                                <div class='col-md-12 input-area'>
                                                    <p id="" class=""> If yes, with which organization? </p>
                                                    <div class='options'>
                                                        <div class='radio-option'> <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='Professional Businesses'> Professional Businesses (A+ Tutoring, Grade Savers, etc) </input> </div>
                                                        <div class='radio-option'> <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='McGill Tutoring Organizations'> McGill Tutoring Organizations (EPTS, SUS Tutoring, etc) </input> </div>
                                                        <div class='radio-option'> <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='Free Lance Tutoring'> Free Lance Tutoring </input> </div>
                                                        <div class='radio-option'> 
                                                            <input id="past" class="input" name="past" type="radio" style="width: 10px;" value='Other'> Other </input> 
                                                            <input id="other" class="input other-text" name="other" type="text" placeholder="" size="30" style ='display: none;'/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <!-- Price range -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> What is your preferred price range for tutors per hour? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="Below 15"> Below 15 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="15 - 20"> 15 - 20 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="20 - 25"> 20 - 25 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="25 - 30"> 25 - 30 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="30 - 35"> 30 - 35 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="35 - 40"> 35 - 40 </input> </div>
                                                    <div class="radio-option"> <input id="price" class="input" name="price" type="radio" style="width: 10px;" value="40+"> 40+ </input> </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Group Session -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> Do you prefer being tutored in a one-on-one setting or a small group setting? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="group" class="input" name="group" type="radio" style="width: 10px;" value="One-on-one"> One-on-one </input> </div>
                                                    <div class="radio-option"> <input id="group" class="input" name="group" type="radio" style="width: 10px;" value="Small Group"> Small Group (Up to 5 people) </input> </div>
                                                    <div class="radio-option"> <input id="group" class="input" name="group" type="radio" style="width: 10px;" value="No Preference"> No Preference </input> </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Location -->
                                        <div class='row'>
                                            <div class='col-md-12 input-area'>
                                                <p id="" class=""> Where would you prefer to meet tutors? </p>
                                                <div class='options'>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="On Campus"> On Campus </input> </div>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="Off Campus"> Off Campus </input> </div>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="Local Cafe"> Local Cafe </input> </div>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="At Home"> At Home </input> </div>
                                                    <div class="radio-option"> <input id="location" class="input" name="location" type="checkBox" style="width: 10px;" value="Other"> Other </input> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input class="submit" type="submit" id='submit' name='submit' value="Submit" style='display: none;'/>
                            </form>
                            <h3 id="response" class="form-response" style='display: none;'> Thank you for your feedback! </h3>
                        </div>
                    </div>
                    <h3>We hope that you can join us on this journey as we begin at McGill University and fuel us with your support!</h3>
                </div>
            </div>
        </div>
    </section> 

    <div class="container progress-section">
        <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style='width: 0%;'>
            </div>
        </div>
    </div>  
    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p>&copy; 2017 Apollo. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- PACKAGES AND PLUG-INS -->
    <!-- jQuery --> 
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/new-age.min.js"></script>
    <script>
        var fnameVal = '';
        var lnameVal = '';
        var emailVal = '';
        var phoneVal = '';
        var coursesVal = '';
        var priceVal = '';
        var groupVal = '';
        var locationVal = '';
        var experienceVal = '';
        var pastVal = '';
        var stpersmVal = '';
        var fileVal = '';

        var progress = '';

        $(function () {
            $('input:radio[name="user"]:checked').prop('checked', false);
            $('input:radio[name="experience"]:checked').prop('checked', false);
            
            var fname = 0; //1/8
            var lname = 0; //1/8
            var email = 0; //1/16
            var phone = 0; //1/16
            var user = 0; //1/8
            var userVal = '';
            var courses = 0; //1/8
            var experience = 0;
            var past = 0;
            var stpersm = 0;
            var file = 0;
            var price = 0; //1/8
            var group = 0; //1/8
            var location = 0; //1/8

            $('.input').change(function (){ 
                if($('#fname').val() != '') {
                    fname = 6.25;
                } else {
                    fname = 0;
                }

                if($('#lname').val() != '') {
                    lname = 6.25;
                } else {
                    lname = 0;
                }
                
                if($('#email').val() != '') {
                    email = 6.25;
                } else {
                    email = 0;
                } 
                
                if($('#phone').val() != '') {
                    phone = 6.25;
                } else {
                    phone = 0;
                }
                
                if($('[name="user"]:checked').val() == 'Student') {
                    $('#student').slideDown(1000);
                    $('#tutor').slideUp(1000);
                    user = 12.5;
                    if($('[name="experience"]:checked').val() == 'Yes') {
                        $('#noexp').slideUp(1000);
                        $('#exp').slideDown(1000);

                        if($('[name="past"]:checked').val() == 'Professional Businesses') {
                            past = 12.5;
                            $('.other-text').css({'display' : 'none'});
                        } else if($('[name="past"]:checked').val() == 'McGill Tutoring Organizations') {
                            past = 12.5;
                            $('.other-text').css({'display' : 'none'});
                        } else if($('[name="past"]:checked').val() == 'Free Lance Tutoring') {
                            past = 12.5;
                            $('.other-text').css({'display' : 'none'});
                        } else if($('[name="past"]:checked').val() == 'Other') {
                            $('.other-text').css({'display' : 'block'});
                            if($('.other-text').val() != '') {
                                past = 12.5;
                            }
                        } else {
                            past = 0;
                            $('.other-text').css({'display' : 'none'});
                        }
                    } else if($('[name="experience"]:checked').val() == 'No') {
                        $('#exp').slideUp(1000);
                        $('#noexp').slideDown(1000);
                        experience = 12.5;
                    } else {
                        $('#noexp').slideDown(1000);
                        $('#exp').slideDown(1000);
                        experience = 0;
                    }
                } else if($('[name="user"]:checked').val() == 'Tutor') {
                    $('#tutor').slideDown(1000);
                    $('#student').slideUp(1000);
                    user = 12.5;
                    if($('[name="experience"]:checked').val() == 'Yes') {
                        $('#noexp').slideUp(1000);
                        $('#exp').slideDown(1000);

                        if($('[name="past"]:checked').val() == 'Professional Businesses') {
                            past = 6.25;
                            $('.other-text').css({'display' : 'none'});
                        } else if($('[name="past"]:checked').val() == 'McGill Tutoring Organizations') {
                            past = 6.25;
                            $('.other-text').css({'display' : 'none'});
                        } else if($('[name="past"]:checked').val() == 'Free Lance Tutoring') {
                            past = 6.25;
                            $('.other-text').css({'display' : 'none'});
                        } else if($('[name="past"]:checked').val() == 'Other') {
                            $('.other-text').css({'display' : 'block'});
                            if($('.other-text').val() != '') {
                                past = 6.25;
                            }
                        } else {
                            past = 0;
                            $('.other-text').css({'display' : 'none'});
                        }

                        if($('[name="stpersm"]').val() != '') {
                            stpersm = 6.25;
                        } else {
                            stpersm = 0;
                        }
                        experience = past + stpersm;

                    } else if($('[name="experience"]:checked').val() == 'No') {
                        $('#exp').slideUp(1000);
                        $('#noexp').slideDown(1000);

                        if($('[name="file"]').val() != '') {
                            experience = 12.5;
                        } else {
                            experience = 0;
                        }
                    } else {
                        $('#noexp').slideDown(1000);
                        $('#exp').slideDown(1000);
                        experience = 0;
                    }
                } else {
                    $('#tutor').hide();
                    $('#student').hide();
                    user = 0; 
                }

                if($('#courses').val() != '') {
                    courses = 12.5;
                } else {
                    courses = 0;
                }

                if($('[name="price"]:checked').val() != '') {
                    price = 12.5;
                } else {
                    price = 0;
                }

                if($('[name="group"]:checked').val() != '') {
                    group = 12.5;
                } else {
                    group = 0;
                }

                if($('[name="location"]:checked').val() == 'Other') {
                    $('.other-text').css({'display' : 'block'});
                    if($('.other-text-loc').val() != '') {
                        location = 12.5;
                    }
                } else if($('[name="location"]:checked').val() != "" ) {
                    location = 12.5;
                } else {
                    location = 0;
                    $('.other-text-loc').css({'display' : 'none'});
                }

                progress = ((fname+lname+email+phone+user+courses+experience+price+group+location) + "%");
                $('.progress-bar').css({'width': (fname+lname+email+phone+user+courses+experience+price+group+location) + "%"});
                checkComplete();
            });
        });

        function checkComplete() {
            if(progress == '100%') {
                $('#submit').show();
            } else {
                $('#submit').hide();
            }
        }

        $(function() {
            var form = $('#contact-form');
            $('#submit').click(function (){
                fnameVal = $('#fname').val();
                lnameVal = $('#lname').val();
                emailVal = $('#email').val();
                phoneVal = $('#phone').val();
                coursesVal = $('#courses').val();
                priceVal = $('[name="price"]:checked').val();
                groupVal = $('[name="group"]:checked').val();
                locationVal = $('[name="location"]:checked').val();
                experienceVal = $('[name="experience"]:checked').val();
                pastVal = ($('[name="past"]:checked').val() ==  'Other') ? $('.other-text').val() : $('[name="past"]:checked').val();
                stpersmVal = $('[name="stpersm"]').val()
                fileVal = $('[name="file"]').val()

                var data = 'name='+fnameValVal+' '+lnameVal+'&email='+emailVal+'&phone='+phoneVal+'&courses='+coursesVal+'&price='+priceVal+'&group='+groupVal+'&location='+locationVal+'&experience='+experienceVal+'&past='+pastVal+'&strpersm='+strpersmVal+'&file='+fileVal;
                $.ajax({
                    type: 'POST',
                    url: './submit.php',
                    data: data,
                    success: function() {
                        $('#submit').slideUp();
                        $('#response').slideDown();
                    }
                });
            return false;
            });
        });
    </script>
</body>

</html>
