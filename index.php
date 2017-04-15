<!DOCTYPE html>
<html lang="en">
<?php 
    require_once('ajax.php');
    // if (!isset($_COOKIE['user']) || (isset($_COOKIE['user']) && $_COOKIE['user'] == '')){
 	  //   setcookie('user', (isset($_REQUEST['user'])) ? $_REQUEST['user'] : ((isset($_COOKIE['user'])) ? $_COOKIE['user'] : '')); 
    // }
    setcookie('user', '');
    $user = (isset($_REQUEST['user'])) ? $_REQUEST['user'] : ((isset($_COOKIE['user'])) ? $_COOKIE['user'] : '');
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="img/Logo/Gradient/icon.png" />
    <title>Apollo: Peer Tutoring Service</title>

    <!-- Bootstrap Core CSS -->
    <link type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300" rel="stylesheet"> 
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link type="text/css" rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link type="text/css" rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link type="text/css" href="css/new-age.min.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" >
    <?php if ((isset($_COOKIE['user']) && $_COOKIE['user'] != 'Tutor' && $_COOKIE['user'] != 'Student')
    		 || (isset($_REQUEST['user']) && $_REQUEST['user'] != 'Tutor' && $_REQUEST['user'] != 'Student')
    	     || (!isset($_COOKIE['user']) && !isset($_REQUEST['user']))): ?>
    <div class="access container">
        <div>
            <div class="quote">
                <h1> <strong> Alone we are smart. <br> Together we are brilliant. </strong></h1>
                <p> - Steven Anderson </p>
            </div>
            <div class="enter"> 
                <h2> I am using Apollo as a: </h2>
                
                <form method="post" action="">
                    <div class="continue"> 
                        <input type="submit" name="user" value="Student" class="continue-student">
                        <input type="submit" name="user" value="Tutor" class="continue-tutor"> 
                    </div> 
                </form>
            </div>
        </div>
    </div>
    <?php else : ?>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img class="logo" src='img/Logo/Gradient/icon.png' alt='Apollo'/>
                        <h3 class="nav-title"> Apollo </h3>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <a class="page-scroll" href="join.php">Sign Up Now</a>
                        </li> -->
                        <li>
                            <a class="page-scroll" href="#download">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#tutor">The Tutors</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact Us</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="team.php">The Team</a>
                        </li>
                        <li>
                            <label class="switch">
                                <input id='switch' type="checkbox" checked>
                                <div class="toggle round"></div>
                            </label>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div id='content-user'>
            <?= GetLayout($user); ?>
        </div>
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <p>&copy; 2017 Apollo. All Rights Reserved.</p>
                <!-- <ul class="list-inline">
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="#">Terms</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                </ul> -->
            </div>
        </footer>
    <?php endif; ?>
    
    <!-- PACKAGES AND PLUG-INS -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/new-age.min.js"></script>
    <script >
        $(function() {
            var form = $('#contact-form');
            $('#submit').click(function (){
                var name = $("#name").val();
                var email = $("#email").val();
                var message = $("#message").val();

                var data = 'name='+name+'&email='+email+'&message='+message;
                $.ajax({
                    type: 'POST',
                    url: './send.php',
                    data: data,
                    success: function() {
                        $('#submit').slideUp();
                        $('#response').slideDown();
                    }
                });
            return false;
            });
        });

        function ChangeLayout(user) {
            $.ajax({ 
                url: 'ajax.php', 
                type: 'post',
                data: {
                    action: 'ChangeLayout', 
                    user: user,// what we want to do
                },
                success: function(output) {
                    $('#content-user').html(output);
                }
            });
        }
        var user = "<?php echo $user; ?>";

        $(document).ready(function() {
            $('#switch').click(function() {
                if (user == 'Student') {
                    user = 'Tutor';
                    ChangeLayout('Tutor');
                } else if (user == 'Tutor') {
                    user = 'Student';
                    ChangeLayout('Student');
                }
            });
        });
    </script>
</body>
</html>
