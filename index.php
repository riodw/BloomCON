<!DOCTYPE HTML>
<html>
<?php
   // ("https://raw.githubusercontent.com/riodw/bloomcon/master/bloomcon.xml"));
   $BCxml = simplexml_load_file('bloomcon.xml');
   $URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

    <head>
        <meta charset="utf-8">
        <title>BLOOMCON |
            <?php echo $BCxml->date->month.' '.$BCxml->date->days_start.'-'.$BCxml->date->days_end; ?>
        </title>
        <!-- code for iPhone -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="keywords" content="bloomcon, BLOOMCON, bloom, con, Bloomsburg Con, Bloomsburg University, hacker, hackers, conference">
        <meta name="description" content="The Bloomsburg University Hacker Conference">
        <meta name="author" content="Riodw">

        <!-- Favicon.png-->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
        <!-- Font-Awesome -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- CSS ==========-->
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- MY CUSTOM CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/styles.css">
        <!--Navbar-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/nav.css">
        <!--About-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/about.css">
        <!--Schedule-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/Schedule.css">
        <!--Events-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/Event-Squares.css">
        <!--Sponsors-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/flip.css">
        <!--Contact-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/contact.css">
        <!--Footer-->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/FooterLinks.css">

        <!-- Matrix: Scrolling text -->
        <link rel="stylesheet" type="text/css" href="<?php echo $URL ?>css/Matrix.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
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
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-expeditedssl"></i>
                        <span class="light">Bloom</span>CON
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo $BCxml->purchase ?>" type="button" class="btn btn-primary btn-lg">Tickets</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#when">When</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#where">Where</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- HEADER - header - HEADER - header - HEADER - header - HEADER - header - HEADER - header -->
        <!-- HEADER - header - HEADER - header - HEADER - header - HEADER - header - HEADER - header -->
        <div id="logo" class="container" style="z-index:200;">
            <img class="center-block" src="<?php echo $URL ?>images/huskblue.png" alt="logo">
            <h1>BloomCON</h1>
            <p>
                <?php echo $BCxml->date->month.' '.$BCxml->date->days_start.'-'.$BCxml->date->days_end; ?> @ Bloomsburg University </p>

            <div style="float:none;text-align:center">
                <a href="<?php echo $BCxml->purchase ?>" type="button" class="btn btn-primary btn-lg" style="background-color:rgba(200,200,200,.3);">Buy Tickets</a>
            </div>
            <hr style="width:40%;">
            <p>Brought to you by
                <a onclick="showHack()" style="cursor:pointer">hackers</a>.</p>
            <div id="hacker" style="height:0;overflow:hidden">
                <p>
                    <span style="font-size:2em;">hack·er</span>
                    <br>
                    <i>noun
                        <br>plural noun:
                        <strong>hackers</strong>
                    </i>
                </p>
                <p style="padding-left:20px;">
                    <strong>1.</strong>&nbsp;&nbsp;&nbsp;A malicious meddler who tries to discover sensitive information by poking
                    around.
                </p>
            </div>
        </div>

        <div style="background:#333; padding: 10px 0;">
            <div class="container">
                <div class="row text-center">
                    <style>
                        .prod p a {
                            color: #FFF;
                            font-size: 35px;
                            text-decoration: underline;
                        }
                    </style>
                    <div class="prod col-md-4 col-sm-6 col-xs-12">
                        <p>
                            <a data-toggle="modal" data-target="#cfp" href="#">Call for Papers</a>
                        </p>
                    </div>
                    <div class="prod col-md-4 col-sm-6 col-xs-12">
                        <p>
                            <a class="page-scroll" href="#sponsors">Sponsors</a>
                        </p>
                    </div>
                    <div class="prod col-md-4 col-sm-12 col-xs-12">
                        <p>
                            <a href="/archive">Archive</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about -->
        <!-- ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about -->
        <!-- css/about.css -->
        <!-- ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about - ABOUT - about -->
        <div id="about" class="container">
            <div class="content-center" style="text-align:center">
                <!-- content -->
                <div class="clearfix colelem" id="u7564-4">
                    <!-- content -->
                    <p style="font-size:5em">
                        <i class="fa fa-expeditedssl"></i>
                    </p>
                </div>
                <h1>ABOUT BLOOMCON</h1>
            </div>
            <div class="container">
                <h3>The third BloomCON Forensics and Security conference!
                    <br>Will be held March 23-25, 2018
                    <br>At Bloomsburg University in Hartline Science Center, PA (USA).
                    <br>BloomCon is a once in a life time experience! It is established around those whom are interested in cyber
                    security.
                    <br>There will be many speakers, and you will have a chance to compete in unique workshops and cybersecurity
                    challenges for prizes.</h3>
                <h2 style="text-decoration:underline;">
                    <a data-toggle="modal" data-target="#parking" href="#">Parking</a>
                </h2>
            </div>
        </div>

        <hr style="width:60%">

        <!-- SCHEDULE - Schedule - SCHEDULE - Schedule - SCHEDULE - Schedule - SCHEDULE - Schedule -->
        <!-- SCHEDULE - Schedule - SCHEDULE - Schedule - SCHEDULE - Schedule - SCHEDULE - Schedule -->
        <!--css/Schedule.css-->
        <!-- SCHEDULE - Schedule - SCHEDULE - Schedule - SCHEDULE - Schedule - SCHEDULE - Schedule -->
        <div id="schedule">
            <div class="content-center" style="text-align:center">
                <div class="container" id="u7564-4">
                    <p style="font-size:5em">
                        <i class="fa fa-clock-o"></i>
                    </p>
                </div>
                <h1>
                    <?php echo $BCxml->schedule['title']; ?>
                </h1>
                <div class="text-center">
                    <!--<h4>Full Schedule:</h4>-->
                    <!--<h2>-->
                    <!--   <a href="images/Friday.png" style="text-decoration:underline;">Friday</a>&nbsp;&nbsp;&nbsp;<a href="images/Saturday.png" style="text-decoration:underline;">Saturday</a>-->
                    <!--</h2>-->
                </div>
            </div>
            <section class="days container">
                <article class="col-xs-12">
                    <?php
                        $num_days = 1;
                        foreach ($BCxml->schedule->children() as $day) {
                            if ($num_days == 1) {
                                echo '<div id="dayButton'.$num_days.'" class="active col-xs-4" onclick="clickDay(\''. $num_days .'\');">';
                            } else {
                                echo '<div id="dayButton'.$num_days.'" class="col-xs-4" onclick="clickDay(\''. $num_days .'\');">';
                            }
                            echo '<p>' . $day[0]['name'] . '</p>';
                            echo '</div>';
                            $num_days++;
                        }
                    ?>
                </article>
            </section>

            <?php
            $num_days = 1;
            foreach ($BCxml->schedule->children() as $day) {
               echo '<section id="DAY'.$num_days.'" class="container day_schedule">';
               
               foreach ($day->children() as $Activities) {
                  $split = 1;
                  echo '<article><div class="time col-xs-2"><p><i class="fa fa-'.$Activities['fa'].'"></i></p>';
                  echo '<p>'.$Activities['start'].'</p></div>';
                  
                  $num = $Activities->count();
                  
                  if($num == 1) {
                  echo '<div class="eventTime col-xs-10 col-xs-push-2">';
                     echo '<div class="col-xs-12">
                           <h3>'.$Activities->activity->title.'</h3>
                           <p>'.$Activities->activity->content.'</p>
                       </div>';
                  } else {
                     foreach ($Activities->children() as $activity) {
                        $num = 1;
                        echo '<div class="eventTime col-xs-5';
                        if($num == 1)
                           echo ' col-xs-push-2">';
                        echo '<div class="col-xs-12"><h3>'.$activity->title.'</h3><p>'.$activity->content.'</p></div></div>';
                        $num++;
                     }
                  }
                  echo '</article>';
               }
               if($num_days == 1) {
                  echo '
                  <article data-toggle="modal" data-target="#Remove_After_P_card" style="cursor:pointer;">
                     <div class="announcement col-xs-12">
                        <div class="col-xs-12"><h3>After Party - 6:00 PM</h3>
                           <p>Party with <b>Dual Core</b> at <b><a href="#" style="color:#fff;text-decoration:underline;">To Be Announced</a></b>.</p>
                           <!--p><a class="btn btn-danger btn-lg"><i class="fa fa-info-circle"></i> After Party Info</a></p-->
                        </div>
                     </div>
                  </article>';
               }
               if($num_days == count($BCxml->schedule->children())) {
                  echo '
                  <article>
                     <div class="announcement col-xs-12">
                        <div class="col-xs-12">
                           <h3>Closing Ceremony - 3:00 PM</h3>
                           <p>Stay for competition prizes and giveaways!</p>
                        </div>
                     </div>
                  </article>';
               }
               echo '</section>';
               $num_days++;
            }
            ?>
                <hr style="width:60%;">
        </div>

        <!-- EVENTS - events - EVENTS - events - EVENTS - events - EVENTS - events - EVENTS - events -->
        <!-- Event Squares - Pic, Text, Hover -->
        <!--css/Event-Squares.css-->
        <!-- EVENTS - events - EVENTS - events - EVENTS - events - EVENTS - events - EVENTS - events -->
        <div id="events">
            <div class="content-center" style="text-align:center;margin-top:20px;">
                <div class="container" id="u7564-4">
                    <p style="font-size:5em">
                        <i class="fa fa-bolt"></i>
                    </p>
                </div>
                <h1 id="Events_Title">
                    <?php echo $BCxml->events['title']; ?>
                </h1>
                <hr style="width:60%;">
            </div>
            <div class="container">
                <?php
               foreach ($BCxml->events->children() as $event) {
                  echo '
                        <section class="event">
                           <a class="image icon fa-'. $event->fa .' col-xs-12 col-sm-6">
                              <img src="'.$URL.'images/'. $event->image .'" alt="event image"/>
                           </a>
                           <div class="content col-xs-12 col-sm-6">
                              <h3 style="color:#428bca;">'. $event->title .'</h3>
                              <p>'. $event->content .'</p>
                           </div>
                        </section>';
                           
               }
            ?>
            </div>
        </div>
        <br>
        <br>
        <br>

        <!-- TICKETS - tickets - TICKETS - tickets - TICKETS - tickets - TICKETS - tickets -->
        <!-- TICKETS - tickets - TICKETS - tickets - TICKETS - tickets - TICKETS - tickets -->
        <section class="container" style="box-shadow: 0 0 50px 5px #428bca; max-width:90%;">
            <hr style="width:60%;">
            <div class="container" style="float:none;text-align:center">
                <h1>Get Your Tickets</h1>
                <p>Only 500 tickets total
                    <br>Powered by Eventbrite</p>
                <a href="<?php echo $BCxml->purchase ?>" type="button" class="btn btn-primary btn-lg">Buy Tickets</a>
            </div>
            <hr style="width:60%;">
        </section>
        <br>
        <br>

        <!-- VIDEO - video - VIDEO - video - VIDEO - video - VIDEO - video - VIDEO - video - VIDEO  -->
        <link href="<?php echo $URL ?>css/video.css" rel="stylesheet" type="text/css">' ?>
        <!-- VIDEO - video - VIDEO - video - VIDEO - video - VIDEO - video - VIDEO - video - VIDEO  -->

        <!-- DATE - date - DATE - date - DATE - date - DATE - date - DATE - date - DATE - date - DATE - date DATE - date -->
        <div id="when">
            <div id="slider" style="position: relative;">
                <h1 id="Date_Month" style="color:white;font-size:3.2em;">
                    <?php echo $BCxml->date->month; ?>
                </h1>
                <div class="caption">
                    <h1 id="Date_Day" style="color:white;">
                        <?php echo $BCxml->date->days_start.' - '.$BCxml->date->days_end; ?>
                    </h1>
                    <h2 id="Date_Year" style="color:#ECECEC;">
                        <?php echo $BCxml->date->year; ?>
                    </h2>
                </div>
                <div id="videoContainer">
                    <video autoplay id="aboutImage" poster="<?php echo 'images/Matrix.jpg' ?>" loop>
                        <source src="<?php echo $URL ?>Matrix.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>


        <!-- Sponsors - SPONSORS -Sponsors - SPONSORS - Sponsors - SPONSORS - Sponsors - SPONSORS-->
        <!-- Sponsors - SPONSORS -Sponsors - SPONSORS - Sponsors - SPONSORS - Sponsors - SPONSORS-->
        <!--css/flip.css-->
        <!-- Sponsors - SPONSORS -Sponsors - SPONSORS - Sponsors - SPONSORS - Sponsors - SPONSORS-->
        <section id="sponsors" style="position:relative;">
            <div class="content-center" style="padding-top:25px;">
                <h1>
                    <?php echo $BCxml->sponsors['title']; ?>
                </h1>
                <hr style="width:60%; border-color:black;">
            </div>

            <?php
            foreach ($BCxml->sponsors->levels->children() as $level) {
               echo '
               <div class="content-center">
                  <h2 style="color:#'. $level['color'] .'">'. $level['name'] .'</h2>
                  <hr style="border-color:#'. $level['color'] .';">
               </div>
               <div class="container">';
               
               $total = $level->count();
               $count = 1;
               $count2 = $level->count();
               $count3 = 0;
               
               while($total >= 3) {
                  
                  echo '<div class="row">';
                  
                  foreach ($level->children() as $company) {
                     echo '
                     <article class="col-xs-12 col-sm-4">
                        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" style="background-color:#'. $company['color'] .'; box-shadow: 0 0 50px 5px #'. $level['color'] .';">
                           <div class="flipper">
                              <div class="front">
                                 <img src="'.$URL.'images/sponsors/'. $BCxml->date->year .'/'. $company->front .'" style="';
                                 if($company->front['width'] != '')
                                    echo 'width:'. $company->front['width'] .'%;';
                                 if($company->front['margin'] != '')
                                    echo 'margin-top:'. $company->front['margin'] .'px;';
                                 echo '">
                              </div>
                              <div class="back">
                                 <img src="'.$URL.'images/sponsors/'. $BCxml->date->year .'/'. $company->back .'" style="';
                                 if($company->back['width'] != '')
                                    echo 'width:'. $company->back['width'] .'%;';
                                 if($company->back['margin'] != '')
                                    echo 'margin-top:'. $company->back['margin'] .'px;';
                                 echo '">';
                                 echo '<p><a href="http://www.'. $company->link .'?bloomcon.com" target="new">@'. $company->link .'</a></p>
                              </div>
                           </div>
                        </div>
                     </article>';
                     
                     $count++;
                     $count2--;
                     $total--;
                     if($count > 3) break;
                  }
                  $count = 1;
                  $count2 = $level->count();
                  $count3++;
                  echo '</div>';
               }
               
               if($total == 2) {
                  echo '<div class="row">';
                  $count = 0;
                  foreach ($level->children() as $company) {
                     $count++;
                     if($count3 != 0) {
                        if($count == 3) {
                           $count = 0;
                           $count3--;
                        }
                        continue;
                     }
                     
                     echo '
                     <article class="col-xs-12 col-sm-6">
                        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" style="background-color:#'. $company['color'] .'; box-shadow: 0 0 50px 5px #'. $level['color'] .';">
                           <div class="flipper">
                              <div class="front">
                                 <img src="'.$URL.'images/sponsors/'. $company->front .'" style="';
                                 if($company->front['width'] != '')
                                    echo 'width:'. $company->front['width'] .'%;';
                                 if($company->front['margin'] != '')
                                    echo 'margin-top:'. $company->front['margin'] .'px;';
                                 echo '">
                              </div>
                              <div class="back">
                                 <img src="'.$URL.'images/sponsors/'. $company->back .'" style="';
                                 if($company->back['width'] != '')
                                    echo 'width:'. $company->back['width'] .'%;';
                                 if($company->back['margin'] != '')
                                    echo 'margin-top:'. $company->back['margin'] .'px;';
                                 echo '">';
                                 echo '<p><a href="http://www.'. $company->link .'?bloomcon.com" target="new">@'. $company->link .'</a></p>
                              </div>
                           </div>
                        </div>
                     </article>';
                     
                     $count++;
                     $count2--;
                     $total--;
                     if($count > 3) break;
                  }
                  $count = 1;
                  $count2 = $level->count();
                  $count3++;
                  echo '</div>';
               }
               
               if($total == 1) {
                  echo '<div class="row">';
                  $count = 0;
                  foreach ($level->children() as $company) {
                     $count++;
                     if($count != $count2) continue;
                        
                     echo '
                        <article class="col-xs-12 col-sm-12">
                           <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" style="background-color:#'. $company['color'] .'; box-shadow: 0 0 50px 5px #'. $level['color'] .';">
                              <div class="flipper">
                                 <div class="front">
                                    <img src="'.$URL.'images/sponsors/'. $company->front .'" style="';
                                    if($company->front['width'] != '')
                                       echo 'width:'. $company->front['width'] .'%;';
                                    if($company->front['margin'] != '')
                                       echo 'margin-top:'. $company->front['margin'] .'px;';
                                    echo '">
                                 </div>
                                 <div class="back">
                                    <img src="'.$URL.'images/sponsors/'. $company->back .'" style="';
                                    if($company->back['width'] != '')
                                       echo 'width:'. $company->back['width'] .'%;';
                                    if($company->back['margin'] != '')
                                       echo 'margin-top:'. $company->back['margin'] .'px;';
                                    echo '">';
                                    echo '<p><a href="http://www.'. $company->link .'?bloomcon.com" target="new">@'. $company->link .'</a></p>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>';
                  }
               }
               
               echo '</div>';
            }
         ?>

                <div class="content-center" style="text-align:center; padding-top:25px; color:#fff; background-color: #74202F; margin-top:20px">
                    <h2 id="Sponsors_Email_Title">BECOME A SPONSOR</h2>
                    <a href="#" data-toggle="modal" data-target="#sponsor" type="button" class="text-center btn btn-primary btn-lg" style="border:none; border-radius:0; background-color:#EEE; color:#74202f;">See All Sponsorship Opportunities</a>
                    <p style="font-weight:200;font-size:1.3em;">Email:
                        <?php echo $BCxml->sponsors->email; ?>
                        <br>
                    </p>
                    <hr style="width:60%;">
                </div>
        </section>

        <!-- CONTACT - contact - CONTACT - contact - CONTACT - contact - CONTACT - contact -->
        <!-- CONTACT - contact - CONTACT - contact - CONTACT - contact - CONTACT - contact -->
        <!--css/contact.css-->
        <!-- CONTACT - contact - CONTACT - contact - CONTACT - contact - CONTACT - contact -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 style="font-weight:700;font-size:2.7em">CONTACT THE DARK SIDE</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Phone Number (optional)</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- LOCATION - location - LOCATION - location - LOCATION - location - LOCATION - location  -->
        <!-- LOCATION - location - LOCATION - location - LOCATION - location - LOCATION - location  -->
        <!-- css/FooterLinks.css -->
        <!-- LOCATION - location - LOCATION - location - LOCATION - location - LOCATION - location  -->
        <footer id="where" class="text-center">
            <div class="footer-above" style="box-shadow: 2px 5px 5px 1px rgba(0, 0, 0, 0.2);z-index:1000;">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3>Location</h3>
                            <p>Hartline Science Center
                                <br> Bloomsburg, PA 17815</p>
                            <p>
                                <a href="https://www.google.com/maps/place/Hartline+Science+Center,+Bloomsburg,+PA+17815/@41.0071703,-76.4497342,17z/data=!3m1!4b1!4m5!3m4!1s0x89c5877ad79d10d1:0x35763104e5911a15!8m2!3d41.0071686!4d-76.4474066"
                                    target="_new">Google Map It »</a>
                            </p>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Connect With Us</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="https://www.facebook.com/bloomcon/" class="btn-social btn-outline">
                                        <i class="fa fa-fw fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/bloom_con" class="btn-social btn-outline">
                                        <i class="fa fa-fw fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Find Out More</h3>
                            <p style="min-width: 310px;">Email us.
                                <br>
                                <span style="color:#FB5F67;">
                                    <?php echo $BCxml->sponsors->email; ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAP - map - MAP - map - MAP - map - MAP - map - MAP - map - MAP - map - MAP -->
            <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
            <style type="text/css">
                @media (max-width: 768px) {
                    #map {
                        width: 100%;
                        height: 350px;
                    }
                }

                @media (min-width: 768px) {
                    #map {
                        width: 100%;
                        height: 388px;
                    }
                }
            </style>
            <!-- GOOGLE MAPS -->
            <script type="text/javascript">
                // When the window has finished loading create our google map below
                google.maps.event.addDomListener(window, 'load', init);

                function init() {
                    // The latitude and longitude to center the map (always required)
                    var myLatlng = new google.maps.LatLng(41.0065621, -76.4523345);
                    // Basic options for a simple Google Map
                    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                    var mapOptions = {
                        // How zoomed in you want the map to start at (always required)
                        zoom: 11,
                        scrollwheel: false,
                        // The latitude and longitude to center the map (always required)
                        center: myLatlng
                        // How you would like to style the map.
                        // This is where you would paste any style found on Snazzy Maps.

                    };
                    // Create the Google Map using out element and options defined above
                    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
                    var contentString =
                        '<div id="content" style="color:#1c1c1c;"><h5>BloomCon</h5><p>@ Bloomsburg University</p></div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    var image = '<?php echo $URL ?>marker.png';
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        icon: image
                    });
                    // To add the marker to the map, call setMap();
                    marker.setMap(map);
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(map, marker);
                    });
                }
            </script>
            <div id="map" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"></div>
            <!-- /.Google Maps -->
            <br>
            <p style="font-weight:100;letter-spacing:.45em;">&copy;Bloomcon
                <span id="dateTimeValue2"></span>
            </p>
            <!-- Year -->
            <script type="text/javascript">
                window.onload = function () {
                    var dateYear = new Date();
                    var formattedDateYear = dateYear.getFullYear();
                    document.getElementById("dateTimeValue2").innerHTML = formattedDateYear;
                };
            </script>

        </footer>
        <!-- ./Footer -->

        <div id="matrixHolder" class="matrix-container">
            <div id="matrix">
                <div class="t1" style="left:0px;">Rio Weber made this.</div>
                <div class="t5" style="left:10px;">I Put on My Robe and Wizard Hat.</div>
                <div class="t1" style="left:20px;">var i = 'COOL!'</div>
                <div class="t2" style="left:5px;">2,147,483,647 Integer.MAX_VALUE</div>
                <div class="t1" style="left:2px;">Who Here Loves Minions? Seriously.</div>
                <div class="t5" style="left:25px;">Rio Weber is SO COOL!</div>
                <div class="t1" style="left:60px;">TestTestTestTest Test Test Test</div>
                <div class="t2" style="left:80px;">Who Here Loves Minions? Seriously.</div>
                <div class="t4" style="left:110px;">I'm Like so totaly awesome!</div>
                <div class="t2" style="left:140px;">I AM THE CLOSES THING TO GOD</div>
                <div class="t3" style="left:170px;">Live Image Crop Script With PHP Jquery</div>
                <div class="t1" style="left:185px;">Rio Weber is SO COOL!</div>
                <div class="t3" style="left:200px;">Light Weight RSS Reader With PHP</div>
                <div class="t5" style="left:250px;">Rio Weber is SO COOL!</div>
                <div class="t2" style="left:290px;">You just can NOT hate me, cuse I'm so cool</div>
                <div class="t3" style="left:310px;">Supper SEXY!</div>
                <div class="t5" style="left:350px;">I'm Like so totaly awesome! ya man</div>
                <div class="t4" style="left:390px;">Rio Weber is SO COOL!</div>
                <div class="t2" style="left:430px;">I have your IP Address</div>
                <div class="t1" style="left:470px;">Rio Weber is SO COOL!</div>
                <div class="t3" style="left:490px;">it's a me a mario</div>
                <div class="t5" style="left:520px;">Come On Down to Bloom Town!</div>
                <div class="t2" style="left:550px;">it's a me a mario</div>
                <div class="t4" style="left:590px;">Call me MAYBE??</div>
                <div class="t2" style="left:630px;">You ALL KNOW ME!!!</div>
                <div class="t1" style="left:670px;">Call me!!!!!!!!!!!!!!!!!!!</div>
                <div class="t3" style="left:690px;">nice shadow effect YA!!!</div>
                <div class="t5" style="left:720px;">DOES SHE SQUAT?</div>
                <div class="t2" style="left:750px;">BRO SCIENCE LIFE!!!!!!!!!</div>
                <div class="t4" style="left:790px;">Call me Walter Weight!! </div>
                <div class="t2" style="left:830px;">WHY YOU SO MAD???? Don't be Mad! Be Glad!</div>
                <div class="t1" style="left:870px;">it's a me a mario</div>
                <div class="t3" style="left:890px;">You have to think anyway, so why not think big? - Donald Trump</div>
                <div class="t5" style="left:920px;">Everyone Vote for... Donald Pump, gettn my weight on!</div>
                <div class="t6" style="left:950px;">In the end, you're measured not by how much you undertake but by what you finally accomplish. - Donald Trump
                </div>
                <div class="t4" style="left:390px;">Elect me for President - 2016</div>
                <div class="t6" style="left:430px;">I'm going to make America Great again!</div>
                <div class="t1" style="left:470px;">3.1415926535897932384626433832795028841971693993751058</div>
                <div class="t6" style="left:490px;">nice shadow effect!!!! SO COOL!</div>
                <div class="t5" style="left:520px;">Everything in life is luck. - Donald Trump</div>
                <div class="t6" style="left:550px;">Live Image Resize Script With PHP</div>
                <div class="t1" style="left:0px;">Rio Weber is SO COOL!</div>
                <div class="t6" style="left:500px;">nice shadow effect</div>
                <div class="t5" style="left:510px;">I Put on My Robe and Wizard Hat.</div>
                <div class="t6" style="left:520px;">Live Image Resize Script With PHP</div>
                <div class="t1" style="left:2px;">TestTestTestTest Test Test Test</div>
                <div class="t5" style="left:25px;">TestTestTestTest Test Test Test</div>
                <div class="t1" style="left:60px;">TestTestTestTest Test Test Test</div>
                <div class="t2" style="left:80px;">3.1415926535897932384626433832795028841971693993751058</div>
                <div class="t0" style="left:185px;">Everyone Vote for... Donald Pump, Make America BIG again!</div>
                <div class="t0" style="left:200px;">My Favorite Actor is Nick Cage</div>
                <div class="t0" style="left:390px;">O'Captain my Captain!</div>
                <div class="t0" style="left:350px;">I WOKE UP IN A NEW BUGATTI</div>
                <div class="t0" style="left:520px;">We should all take this event very seriousaly!</div>
                <div class="t0" style="left:550px;">you have no idea, how amazing I truly am.</div>
                <div class="t0" style="left:690px;">Nicolas Cage Nicolas Cage Nicolas Cage Nicolas Cage</div>
                <div class="t0" style="left:750px;">Yall should buy me some Bit Coin!</div>
                <div class="t0" style="left:890px;">Yall should buy me some Bit Coin!</div>
                <div class="t0" style="left:920px;">Yall should buy me some Bit Coin!</div>
                <div class="t0" style="left:490px;">Suppppper FLYYY!</div>
                <div class="t0" style="left:520px;">Yall should buy me some Bit Coin!</div>
                <div class="t0" style="left:510px;">Yall should buy me some Bit Coin!</div>
                <div class="t0" style="left:520px;">Yall should buy me some Bit Coin!</div>
            </div>
        </div>

        <!-- MODALS -->
        <!-- MODALS -->

        <!-- Call for Papers -->
        <div id="cfp" class="modal fade" role="dialog">
            <div class="col-xs-11 col-sm-8" style="margin: auto;float:none;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CALL FOR PAPERS</h4>
                    </div>
                    <div class="modal-body col-xs-12" style="text-align:center;">
                        <div class="content-center" style="text-align:center;">
                            <h2>BLOOMCON
                                <i class="fa fa-expeditedssl"></i> CFP</h2>
                            <hr style="width:55%;">
                        </div>
                        <h4>
                            The third BloomCON Forensics and Security conference will be held March 23-25, 2018 in Bloomsburg, PA (USA).
                            <br> We are now officially accepting presentation and workshop submissions. We will hosting multiple speaking and workshop tracks.
                            <br> We are looking for talks of 25 or 50 minutes in length and 2-hr or 4-hr workshops.
                        </h4>

                        <br>
                        <div style="max-width:600px; margin:0 auto; clear:both;">
                            <h4>
                                If you have something you would like to share please send the following to: drphil@bloomcon.com
                            </h4>
                            <ul style="text-align:left; max-width:600px; margin:0 auto;">
                                <li>your name or handle/alias</li>
                                <li>the presentation name/title</li>
                                <li>a brief topic abstract (1-2 paragraphs)</li>
                                <li>what kind of thing you are submitting from the following list 25-minute talk, 50-minute talk,
                                    2-hr workshop, 4-hr workshop</li>
                                <li>a brief bio (100% optional item, but if your talk is chosen it saves the time and trouble
                                    of asking for it later)</li>
                            </ul>
                            <p>
                                <em>* NOTE: All submissions are due BY March 1, 2018.
                                    <br> However we may be making some early selections from amongst the submissions, so please
                                    submit your stuff early.</em>
                            </p>

                            <br>

                            <h4>If you present at the BloomCON, you will receive:</h4>
                            <ul style="text-align:left; max-width:600px; margin:0 auto;">
                                <li>free BloomCON admission for you and three adult guests</li>
                                <li>whatever speaker swag we can muster with our limited budget</li>
                                <li>transportation to/from IPT or AVP and Bloomsburg, PA if required</li>
                                <li>minimal fame, glory, and possibly even notorietyp</li>
                                <li>bragging rights for speaking at BloomCON</li>
                            </ul>
                            <br>
                            <h4>Please be aware that we are unable to sponsor travel accomodations at this time. That said, your
                                company (if any) will be listed as a bronze sponsor in all event materials and will be permitted
                                a booth at the event. We may have limited funding to cover hotel rooms if needed.</h4>
                            <br>
                            <h4>Here is what we have planned so far:</h4>
                            <ul style="text-align:left; max-width:300px; margin:0 auto;">
                                <li>Lock picking</li>
                                <li>Social engineering</li>
                                <li>Digital forensics</li>
                                <li>WiFi hacking</li>
                                <li>Open source intelligence (OSINT)</li>
                                <li>Hardware hacking</li>
                                <li>Networking party with Dual Core</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer" style="clear: both;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Parking -->
        <div id="parking" class="modal fade" role="dialog">
            <div class="col-xs-11 col-sm-7" style="margin: auto;float:none;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Parking</h4>
                    </div>
                    <div class="modal-body col-xs-12" style="text-align:center;">
                        <div class="content-center" style="text-align:center;">
                            <h2>BLOOMCON
                                <i class="fa fa-car"></i> PARKING</h2>
                            <hr style="width:55%;">
                        </div>
                        <div style="max-width:600px; margin:0 auto; clear:both;">
                            <h4>Parking on Friday:</h4>
                            <p>We have reserved the bottom levels of the tri-level parking deck for Friday. This will
                                open at 8am. Please be aware that past 9am we will not have attendents in the parking deck
                                (they want to come to BloomCON too!). As a result, the deck may become full. Should the deck
                                become full you can either park on the upper campus in the Orange lot and take a campus shuttle
                                down or stop by Buckingham Maintenance Center (right off Lightstreet road) and ask for a
                                visitor parking permit.</p>
                            <br>
                            <h4>Parking on Saturday:</h4>
                            <p>You can park in the tri-level deck on Saturday. If this becomes full you can park anywhere on
                                campus without fear of getting a ticket.</p>
                        </div>
                        <br>
                        <a href="http://www.bloomu.edu/parking" type="button" class="text-center btn btn-primary btn-lg" style="border:none; border-radius:0; background-color:#EEE; color:#74202f;">More information on parking can be found at www.bloomu.edu/parking</a>
                    </div>
                    <div class="modal-footer" style="clear: both;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- How to sponsor -->
        <div id="sponsor" class="modal fade" role="dialog">
            <div class="col-xs-11 col-sm-7" style="margin: auto;float:none;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sponsorship Levels</h4>
                    </div>
                    <div class="modal-body col-xs-12" style="text-align:center;">
                        <div class="content-center" style="text-align:center;">
                            <h2>SPONSORSHIP
                                <i class="fa fa-diamond"></i> LEVELS</h2>
                            <hr style="width:55%;">
                        </div>
                        <h4>Sponsorship is available at the following levels:</h4>
                        <br>
                        <div style="max-width:600px; margin:0 auto; clear:both;">
                            <h4>Diamond $5000:</h4>
                            <ul style="text-align:left; margin:0 auto;">
                                <li>Listed as a diamond sponsor in all event materials</li>
                                <li>VIP access and swag</li>
                                <li>Largest booth space (if desired)</li>
                                <li>Ten free badges</li>
                            </ul>
                            <h4>Platinum $2500:</h4>
                            <ul style="text-align:left; margin:0 auto;">
                                <li>Listed as a platinum sponsor in all event materials</li>
                                <li>VIP access and swag</li>
                                <li>Larger booth space (if desired)</li>
                                <li>Five free badges</li>
                            </ul>
                            <h4>Gold $1500:</h4>
                            <ul style="text-align:left; margin:0 auto;">
                                <li>Listed as a gold sponsor in all event materials</li>
                                <li>Standard booth space (if desired)</li>
                                <li>Larger booth space (if desired)</li>
                                <li>Four free badges</li>
                            </ul>
                            <h4>Silver $1000:</h4>
                            <ul style="text-align:left; margin:0 auto;">
                                <li>Listed as a silver sponsor on website</li>
                                <li>Standard booth space (if desired)</li>
                                <li>Larger booth space (if desired)</li>
                                <li>Three free badges</li>
                            </ul>
                            <h4>Bronze $500:</h4>
                            <ul style="text-align:left; margin:0 auto;">
                                <li>Listed as a bronze sponsor on website</li>
                                <li>Standard booth space (if desired)</li>
                                <li>Two free badges</li>
                                <li>Three free badges</li>
                            </ul>
                            <h4>Copper $200: (non-profits only)</h4>
                            <ul style="text-align:left; margin:0 auto;">
                                <li>Listed as a copper sponsor on website</li>
                                <li>Standard booth space (if desired)</li>
                                <li>One Free badge</li>
                            </ul>
                        </div>
                        <br>
                        <a href="./bloomcon0x03-sponsor (1).docx" type="button" class="text-center btn btn-primary btn-lg" style="border:none; border-radius:0; background-color:#EEE; color:#74202f;">Download File to see all details</a>
                    </div>
                    <div class="modal-footer" style="clear: both;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- AFTER PARTY CSS -->
        <link href="<?php echo $URL ?>css/AfterParty.css" rel="stylesheet" type="text/css">
        <!-- After Party -->
        <div id="After_P_card" class="modal fade" role="dialog">
            <div class="col-xs-11 col-sm-10" style="margin: auto;float:none;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">AFTER PARTY</h4>
                    </div>
                    <div class="modal-body col-xs-12" style="text-align:center; height:750px;">
                        <br>
                        <p>The After Party will be held at
                            <a href="https://www.facebook.com/goodolddaysbar" target="new">Good Old Days Bar</a> featuring
                            <a href="http://dualcoremusic.com/nerdcore/" target="new">Dual Core</a>.</p>
                        <div class="content-center" style="text-align:center;">
                            <h2>AFTER
                                <i class="fa fa-beer"></i> PARTY</h2>
                            <hr style="width:55%;">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="card-container">
                                <div class="card">
                                    <div class="front">
                                        <div class="cover" style="max-height:184px;overflow:hidden;">
                                            <img src="<?php echo $URL ?>images/bar.jpg">
                                        </div>
                                        <div class="user">
                                            <?php echo '<img class="img-circle" src="'.$URL.'images/bar_logo.png">' ?>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h3 class="name">Good Old Days Bar</h3>
                                                <p class="profession">Bar &amp; Grill · Night Club</p>
                                                <h5>
                                                    <i class="fa fa-clock-o fa-fw text-muted"></i> Mon-Sun: 11:00 am - 2:00 am</h5>
                                                <h5>
                                                    <i class="fa fa-map-marker fa-fw text-muted"></i> 501 East St, Bloomsburg</h5>
                                                <h5>
                                                    <i class="fa fa-phone fa-fw text-muted"></i> (570) 784-6269</h5>
                                                <h4>
                                                    <a href="https://www.facebook.com/goodolddaysbar/menu/?p_ref=pa" target="new">
                                                        <i class="fa fa-file-text-o fa-fw text-muted"></i>Menu »</a>
                                                </h4>
                                            </div>
                                            <div style="display:inline-block;">
                                                <a href="https://www.facebook.com/goodolddaysbar/" class="btn btn-social-icon btn-facebook" style="color:#fff; background-color:#3B5998;"
                                                    target="new">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </div>
                                            <div style="display:inline-block;">
                                                <a href="https://www.google.com/maps/dir/Bloomsburg+University+of+Pennsylvania,+400+East+2nd+Street,+Bloomsburg,+PA+17815/Good+Old+Days,+501+East+Street,+Bloomsburg,+PA+17815/@41.0047798,-76.453092,16z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x89c58765246cb437:0xc6786230f80c181b!2m2!1d-76.4478707!2d41.0077751!1m5!1m1!1s0x89c587796bf5f72b:0x5d61149023078f6c!2m2!1d-76.448733!2d41.0019735!3e2"
                                                    class="btn btn-primary btn-md" style="text-align:center;" target="new">Google Map It »</a>
                                            </div>
                                            <div class="footer">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end front panel -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end card-container -->
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="card-container">
                                <div class="card">
                                    <div class="front">
                                        <div class="cover" style="max-height:184px;overflow:hidden;">
                                            <?php echo '<img src="'.$URL.'images/dualcore_back.jpg">' ?>
                                        </div>
                                        <div class="user">
                                            <?php echo '<img src="'.$URL.'images/dualcore.jpg">' ?>
                                        </div>
                                        <div class="content">
                                            <div class="main">
                                                <h3 class="name">Dual Core</h3>
                                                <p class="profession">Nerdcore</p>
                                                <h5>
                                                    <i class="fa fa-youtube-play fa-fw text-muted"></i> youtube.com/user/dualcoremusic</h5>
                                                <h5>
                                                    <i class="fa fa-link fa-fw text-muted"></i> dualcoremusic.com</h5>
                                                <br>
                                                <h4>
                                                    <a href="https://www.youtube.com/watch?v=FoUWHfh733Y" target="new">
                                                        <i class="fa fa-music fa-fw text-muted"></i> All The Things »</a>
                                                </h4>
                                            </div>
                                            <div style="display:inline-block;">
                                                <a href="https://www.facebook.com/Dual-Core-119938221531/" class="btn btn-social-icon btn-facebook" style="color:#fff; background-color:#3B5998;"
                                                    target="new">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </div>
                                            <div style="display:inline-block;">
                                                <a href="https://twitter.com/dualcoremusic" style="color:#fff; background-color:#4099FF;" class="btn btn-primary btn-md"
                                                    style="text-align:center;" target="new">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </div>
                                            <div class="footer">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end front panel -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end card-container -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--./ MODALS -->

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>
            // Hack Definition
            function showHack() {
                if ($("#hacker").height() == 0) {
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
            function clickDay(day) {
                $("#schedule .days article div").removeClass("active");
                $("#dayButton" + day).addClass("active");
                $('.day_schedule').hide();
                $("#DAY" + day).show();
            }
        </script>

        <script src="<?php echo $URL ?>js/jqBootstrapValidation.js"></script>
        <script src="<?php echo $URL ?>js/contact_me.js"></script>
        <script src="<?php echo $URL ?>js/freelancer.js"></script>

        <!-- FROM GrayScale -->
        <!-- Plugin JavaScript -->
        <script src="<?php echo $URL ?>js/jquery.easing.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo $URL ?>js/grayscale.js"></script>

    </body>

</html>
