<!DOCTYPE HTML>j
<html>

<head>
   <meta charset="utf-8">
   <title>BLOOMCON | Archive</title>
   <!-- code for iPhone -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

   <meta name="keywords" content="bloomcon, BLOOMCON, bloom, con, Bloomsburg Con, Bloomsburg University, hacker, hackers, conference">
   <meta name="description" content="The Bloomsburg University Hacker Conference">
   <meta name="author" content="Riodw">

   <!-- Favicon.png-->
   <link rel="shortcut icon" href="favicon.png">

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   <!-- Font-Awesome -->
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <!-- CSS ==========-->
   <!-- BOOTSTRAP -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

   <!-- MY CUSTOM CSS-->
   <link href="/css/styles.css" rel="stylesheet" type="text/css">
   <!--Navbar-->
   <!--<link href="/css/nav.css" rel="stylesheet" type="text/css">-->
   <!--About-->
   <link href="/css/about.css" rel="stylesheet" type="text/css">
   <!--Schedule-->
   <link href="/css/Schedule.css" rel="stylesheet" type="text/css">
   <!--Events-->
   <link href="/css/Event-Squares.css" rel="stylesheet" type="text/css">
   <!--Sponsors-->
   <link href="/css/flip.css" rel="stylesheet" type="text/css">
   <!--Contact-->
   <link href="/css/contact.css" rel="stylesheet" type="text/css">
   <!--Footer-->
   <link href="/css/FooterLinks.css" rel="stylesheet" type="text/css">

   <!-- Matrix: Scrolling text -->
   <link href="/css/Matrix.css" rel="stylesheet" type="text/css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

   <script>
      (function(i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;
         i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
         }, i[r].l = 1 * new Date();
         a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-61756765-2', 'auto');
      ga('send', 'pageview');
   </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
   <style>
      /* Color of links (ie. Get Directions) */
      
      .btn-outline:hover,
      .btn-outline:focus,
      .btn-outline:active,
      .btn-outline.active {
         border: solid 2px #fff;
         color: #FB5F67;
         background: #fff;
      }
   </style>
   <!-- Navigation - NAV - Navigation - NAV - Navigation - NAV - -->
   <!-- Navigation - NAV - Navigation - NAV - Navigation - NAV - -->
   <!--css/nav.css-->
   <!-- Navigation - NAV - Navigation - NAV - Navigation - NAV - -->
   <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            <a class="navbar-brand page-scroll" href="/">
               <i class="fa fa-expeditedssl"></i> <span class="light">Bloom</span>CON
            </a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
               <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
               <li class="hidden">
                  <a href="#page-top"></a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about -->
   <!-- ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about -->
   <!-- css/about.css -->
   <!-- ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about -->
   <div id="about" class="container">
      <div class="content-center" style="text-align:center">
         <!-- content -->
         <div class="clearfix colelem" id="u7564-4">
            <!-- content -->
            <p style="font-size:5em"><i class="fa fa-expeditedssl"></i></p>
         </div>
         <h1>PREVIOUS CONS</h1>
      </div>
      <div class="container">
            <?php
               
            ?>
            <h3><a href="/archive/years/2017.html">2017</a></h3>
         </div>
      </div>
      
      <hr style="width:60%">
      <br>
      <p style="font-weight:100; letter-spacing:.45em; text-align:center;">&copy;Bloomcon <span id="dateTimeValue2"></span></p>
      <!-- Year -->
      <script type="text/javascript">
         window.onload = function() {
            var dateYear = new Date();
            var formattedDateYear = dateYear.getFullYear();
            document.getElementById("dateTimeValue2").innerHTML = formattedDateYear;
         };
      </script>
      
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      
      <script>
         function showHack() {
            if($("#hacker").height() == 0) {
               $("#hacker").css("height", "145px");
               $("#matrixHolder").css("height", "790px");
            } else {
               $("#hacker").css("height", "0");
               $("#matrixHolder").css("height", "645px");
            }
         }
      </script>

      <script>
         // Change Schedule Buttons
         $("#schedule .days article div").click(function() {
            $("#schedule .days article div").removeClass("active");
            $(this).addClass("active");
            if($("#schedule .days article div:first-of-type").hasClass("active")) {
               $("#DAY1").show();
               $("#DAY2").hide();
               //alert( "Handler for .click() called." );
            } else {
               $("#DAY1").hide();
               $("#DAY2").show();
            }
         });
      </script>

      <!--<script src="/js/jqBootstrapValidation.js"></script>-->
      <!--<script src="/js/contact_me.js"></script>-->
      <!--<script src="/js/freelancer.js"></script>-->

      <!-- FROM GrayScale -->
      <!-- Plugin JavaScript -->
      <!--<script src="/js/jquery.easing.min.js"></script>-->
      <!-- Custom Theme JavaScript -->
      <!--<script src="/js/grayscale.js"></script>-->

</body>
</html>