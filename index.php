<?php
include("mylibrary/ip-tor-blocker.php");
   getUserHostIP();
   getUserHostIP2();
   getUserHostIP3();
   getUserHostIP4();
   getUserHostIP5();
   getUserHostIP6();
   getUserHostIP7();
   
$visitorIp = getUserIP();
$denied_ips = ipfreely();
$status = array_search($visitorIp, $denied_ips);

if($status !== false){  
header("Location: unauthorized.php");
die();
};

$ip1 = $_SERVER['REMOTE_ADDR'];
$port1 = $_SERVER['REMOTE_PORT'];
$hostname1 = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$text1 = " ip address is: " . $ip1 . " " . "user port: " . $port1 . " " . "user host: " . $hostname1;
$file1 = fopen('visitorIp.html', 'a');
fwrite($file1, $text1 . " " . date("F j, Y, g:i a") . "<hr><br/>\n");
fclose($file1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affordable and professional Web Development Services">
    <meta name="keywords" content="web hosting, web development, internet Administration, web dev, web site builder, wed designer, e-commerce, blog, WordPress">
    <meta name="Robert H." content="Robert H. Media">
    <title>Web Developer Portfolio</title>
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/footer.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

    <!--Nav CSS Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet " type="text/css " href="/Content/font-awesome/css/font-awesome.min.css " />

</head>

<body>

    <p id="home"></p>
    <div style="padding-bottom: 60px" class="bs-example">
        <nav class="navbar navbar-default navbar-fixed-top ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Robert Hunnicutt</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <i style="width:4rem; height:2rem; margin-top:1.4rem" class="fas fa-home"></i>
                    </li>
                    <li class="active">
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#pro">Portfolio</a>
                    </li>
                    <li>
                        <a target="_blank" href="mylibrary/resume.php">Resume</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <i style="width:4rem; height:2rem; margin-top:1.4rem;" class="far fa-envelope"></i>
                    </li>
                    <li>
                        <a style="margin-right:2rem" target="_blank" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div  class="container">
        <div id="carousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div style="background-color: #a2a7a1 " class="item active">
                    <img alt="Bootstrap template" width="225px" src="images/c-pic-1.jpg">
                    <div class="carousel-caption">
                        <h3 id="monkey3">Developer Profile</h3>
                        <p style="margin-bottom:10%; margin-left:10%; text-align: left" class="monkey2">
                            I build interactive, astonishing and feature rich responsive website solutions for business or personal. Freelancer web designer at heart, headquartered in Central FL. Formally studied development at Dev Mountain in Dallas Texas. Frontend or backend website design, both custom or content management systems like WordPress. Dynamic web apps available with or without database driven functionality. All sites are responsive thus viewable on any hand held device. Also Web deployment, hosting, Web site administration among others options as well.
                        </p>
                    </div>
                </div>
                <div style="background:black" class="item">
                    <img alt="suck it" style="width:1200px; height: 400px;" src="images/c-pic-2.jpg">

                    <div style="color:#eb39dc " class="carousel-caption ">
                        <h4>HTML5</h4>
                        <h4>CSS3</h4>
                        <h4>BOOTSTRAP / REACTSTRAP</h4>
                        <h4>JAVASCRIPT / REACT.JS</h4>
                        <h4>NODE.JS / EXPRESS / REST API</h4>
                        <h4>PHP / PHPMYADMIN / JSON</h4>
                        <h4>MYSQL / POSTGRESSQL / MONGODB</h4>
                        <h4>WORDPRESS / GIT / GITHUB</h4>

                        <div class="col-lg-12 text-xs-center v-center " style="font-size: 39pt;">

                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fab fa-html5 "></i>
                            </span>


                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fab fa-css3-alt "></i>
                            </span>


                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fab fa-js "></i>
                            </span>


                            <span class="avatar ">
                                <i style="color:#eb39dc " i class="fas fa-bold"></i>
                            </span>


                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fab fa-php "></i>
                            </span>


                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fas fa-database "></i>
                            </span>


                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fab fa-wordpress "></i>
                            </span>

                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fab fa-node "></i>
                            </span>
                            <span class="avatar ">
                                <i style="color:#eb39dc " class="fab fa-react "></i>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="item ">
                    <a href="http://snapcollector.com/#/">
                        <img alt="full stack developer" style="width:1200px; height: 400px;" src="images/snapCollector.PNG">
                    </a>
                    <div style="font-size:2rem;" class="carousel-caption ">
                       
                        <!-- <div width="150px !important" class="panel panel-default">
                           
                            <div class="panel-body">
                                    <h4 style="font-size:3rem; color:rgb(230, 224, 224); text-shadow:.1rem .1rem black">Projects Showcase</h4>
                                    <p class="hey">
                                        <a style="font-size:3rem; color:rgb(230, 224, 224); text-shadow:.1rem .1rem black" target="_blank" title="link to site" href="http://SnapCollector.com/">SnapCollector.com</a>
                                    </p>    
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div>
                <ul class=" nav nav-pills nav-justified ">
                    <li data-target="#carousel1 " data-slide-to="0 " class="active ">
                        <a href="# ">About Me
                        <small>Full Stack Web Developer</small>
                        </a>
                    </li>
                    <li data-target="#carousel1 " data-slide-to="1 ">
                        <a href="# "><i class="fas fa-code "></i>
                        <small>Coding Languages</small>
                        </a>
                    </li>
                    <li data-target="#carousel1 " data-slide-to="2 ">
                        <a href="# ">Spotlight
                        <small>SnapCollector.com</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Parallax Scroll on the background pictures-->
    <div class="parallax1"></div>  

    <div style="padding-bottom:20px; margin-bottom:20px;" class="container">
        <h2 id="pro" style="margin-bottom:35px" class="title-portfolio">My Portfolio Section</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li style="border-color:gray" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li style="border-color:gray" data-target="#myCarousel" data-slide-to="1"></li>
                <li style="border-color:gray" data-target="#myCarousel" data-slide-to="2"></li>
                <li style="border-color:gray" data-target="#myCarousel" data-slide-to="3"></li>
                <li style="border-color:gray" data-target="#myCarousel" data-slide-to="4"></li>
                <li style="border-color:gray" data-target="#myCarousel" data-slide-to="5"></li>
                <li style="border-color:gray" data-target="#myCarousel" data-slide-to="6"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="images/snapCollector.PNG" alt="trey web development project" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn" style="margin:auto" onclick="myFunction()">FIND OUT MORE: DOUBLE CLICK ME</button>
                        <div id="hide" class="container">
                            <a title="Link too site" target="_blank" href="http://snapcollector.com/">
                                <h2>SnapCollector.com</h2>
                            </a>
                            <div class="panel panel-default">
                                <div class="panel-heading">HTML CSS JavaScript React.js Redux Node.js PostgresSQL </div>
                                <div class="panel-body">Built mobile first, check it out on your phone. Full stack project users can create/edit their profile and make a library of collections using image detection soft-wear to help user detect if items already exists in there collection, mark library public or private and share with the world. </div>
                                <div class="panel-footer">Progressive web-app</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="images/portfolio-pic-2.jpg" alt="web development project" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn" style="margin:auto" onclick="myFunction1()">FIND OUT MORE: DOUBLE CLICK ME</button>
                        <div id="hide1" class="container">
                            <a target="_blank" title="Link too site" href="https://recipestore.hunecut.com/">
                                <h2>Food Store</h2>
                            </a>
                            <div class="panel panel-default">
                                <div class="panel-heading">HTML CSS PHP MySQL</div>
                                <div class="panel-body"> Database design with relation tables, Foreign keys, InnoDB engine, Back-door with full CMS for store admin to update products change prices! Too much to list. No libraries or frameworks used, pure code.</div>
                                <div class="panel-footer">E-commerce</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="images/portfolio-pic-3.jpg" alt="web development project" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn" style="margin:auto" onclick="myFunction2()">FIND OUT MORE: DOUBLE CLICK ME</button>

                        <div id="hide2" class="container">
                            <a target="_blank" title="Link too site" href="https://familyrecipe.hunecut.com/">
                                <h2>Recipe Center</h2>
                            </a>
                            <div class="panel panel-default">
                                <div class="panel-heading">PHP MySQL HTML CSS</div>
                                <div class="panel-body">User can login / register, post news stories, blog, comment on other people stories, upload new recipes to share. Database design with full server-side validation.</div>
                                <div class="panel-footer">Blog - Social media website</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/portfolio-pic-4.jpg" alt="web development project" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn" style="margin:auto" onclick="myFunction3()">FIND OUT MORE: DOUBLE CLICK ME</button>

                        <div id="hide3" class="container">
                            <a target="_blank" title="Link too site" href="https://missinnmenutest.hunecut.com/lunch">
                                <h2>Menu Quiz for Restaurant Servers</h2>
                            </a>
                            <div class="panel panel-default">
                                <div class="panel-heading">JAVASCRIPT HTML CSS</div>
                                <div class="panel-body">Built a quiz in pure javascript, client side validation no database used for restaurant! Completely responsive.</div>
                                <div class="panel-footer">Business Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/portfolio-pic-5.jpg" alt="web development project" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn" style="margin:auto;" onclick="myFunction4()">FIND OUT MORE: DOUBLE CLICK ME</button>
                        <div id="hide4" class="container">
                            <a target="_blank" title="Link too site" href="http://trappertrey.hunecut.com/">
                                <h2>Trapper Trey</h2>
                            </a>
                            <div class="panel panel-default">
                                <div class="panel-heading">HTML CSS MYSQL</div>
                                <div class="panel-body"> Built a 3 page static fully responsive website with database for collection of email and contact info form.</div>
                                <div class="panel-footer">Business site</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/flblue2.PNG" alt="react.js locale storage" style="width:100%;">
                    <div class="carousel-caption">
                        <button class="btn" style="margin:auto;" onclick="myFunction5()">FIND OUT MORE: DOUBLE CLICK ME</button>
                        <div id="hide5" class="container">
                            <a target="_blank" title="shopping list with cart React.js" href="https://robert-hunnicutt-florida-blue.netlify.com/">
                                <h2>Shopping List & Cart</h2>
                            </a>
                            <div class="panel panel-default">
                                <div class="panel-heading">REACT.JS</div>
                                <div class="panel-body"> Built a shopping list using Locale Storage for data persistance, that you can add to delete or add to cart, lots of small extras there is a link to github about project</div>
                                <div class="panel-footer">Web App</div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="item">
                <img src="images/butlerBrother.PNG" alt="web design" style="width:100%;">
                <div class="carousel-caption">
                    <button class="btn" style="margin:auto;" onclick="myFunction6()">FIND OUT MORE: DOUBLE CLICK ME</button>
                    <div id="hide6" class="container">
                        <a target="_blank" title="react project" href="http://AirART2go.com">
                            <h2>AirART2go.com</h2>
                        </a>
                        <div class="panel panel-default">
                            <div class="panel-heading">Javascript React.js Node.js Express MongoDB</div>
                            <div class="panel-body"> Coded an online E-commerce business that promotes local restaurant with a full admin login and content management system. It was a tough challenge to learn mongoDB on the fly, built my own system to store images directly in the database. Built for desk-top views</div>
                            <div class="panel-footer">Web App</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- <div class="parallax2"></div> -->


    <section id="boxes">

        <div class="container-boxes">
                <h3 class="title-portfolio" style="text-align:center"> Interested in hiring me?</h3>
            <h3 style="text-align:center">My Process...</h3>
            <div class="box">
                <img alt="full stack developer" src="images/box-pic-1.jpg">
                <h3>Project Consultation and Design</h3>
                <p>I want to make you happy and bring your vision online. We will have a one-on-one personal consultation to fully take the time to understand that vision. I enjoy my work and always treat each project like it's my first one and make every
                    project special and a unique experience no matter how big or small!</p>
            </div>
            <div class="box">
                <img alt="full stack developer" src="images/box-pic-2.jpg">
                <h3>Design-Coding Phase</h3>
                <p>I take programming / coding very seriously and always stay up to date on current trends in the tech field. The data design will be current for best optimization. Working with me will be as unique as the experience we provide to the users.
                    During this phase, I code together the ideas and visions into actual algorithms.</p>
            </div>
            <div class="box">
                <img alt="full stack developer" src="images/box-pic-3.jpg">
                <h3>Web Deployment</h3>
                <p>There's a lot that goes into deploying the site live online. I'm here every step of the way to handle it. As your needs grow, we grow with you! Also, I offer web administration to handle your site 24/7 if needed or just once and again
                    for minor touch ups! Full customer support available.</p>
            </div>
        </div>
        
    </section>



    <div class="parallax3"></div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footerleft ">
                    <h6 class="heading7">About Me</h6>
                    <p><a href="contact.html">Robert H. Media</a> is a website development company from USA, Florida. I build interactive, astonishing, responsive, and feature rich website design solutions.</p>
                    <p itemprop="address"><i class="fa fa-map-pin"></i>

                        <span itemprop="addressLocality">Orlando</span>
                        <span itemprop="addressRegion">, Florida</span>
                        <span itemprop="addressCountry">USA</span><br/>

                        <p><i class="fa fa-phone"></i> Phone (USA) :
                            <span itemprop="telephone"><a href="#" class="fields"
                                                  title="Contact Trey"> </a></span></p>
                        <p><i class="fa fa-envelope"></i> E-mail :
                            <span itemprop="email"><a href="mailto:Trey@hunecut.com" class="fields"
                                              title="Trey office">Trey@hunecut.com</a></span></p>

                        <span itemprop="openingHoursSpecification"><p><i
                                class="fa fa-calendar"></i> Work Days:
<span itemprop="dayOfWeek">
<span itemprop="name">MON, TUE, WED, THUR, FRI</span></span>
                    </p>
                    <p><i class="far fa-clock"></i> Opening time:
                        <span itemprop="opens" content="2018-04-15">10:00 AM</span> <i class="far fa-clock"></i> Closing time:
                        <span itemprop="closes" content="2018-04-18">07:00 PM</span></p>
                    </span>
                </div>
                <div class="col-md-4 paddingtop-bottom">
                    <h6 class="heading7">Useful Links</h6>
                    <ul class="footer-ul">
                        <li>
                            <a href="mylibrary/resume.php" title="home tab"> <i class="fa fm fa-angle-double-right"></i> About Me</a>
                        </li>


                        <li>
                            <a href="./contact.php" title="Trey Contact me"> <i class="fa fm fa-angle-double-right"></i> Contact Me </a>
                        </li>

                        <li>
                            <a href="https://robert-hunnicutt-react-store.netlify.com/" target="_blank" title="React.js e-commerce store">
                            <i class="fa fm fa-angle-double-right"></i> My last Project</a>
                        </li>
                        <li>
                            <a href="https://github.com/treygithub" target="_blank" title="React.js e-commerce store">
                            <i class="fa fm fa-angle-double-right"></i> My GitHub</a>
                        </li>
                    </ul>
                </div>


                <div class="col-md-4 paddingtop-bottom">
                    <h6 class="heading7">Subscribe To My Newsletter</h6>
                    <form action="addsubscription.inc.php" method="POST">
                        <input type="email" name="email" placeholder="Enter Email..." required>
                        <input type="hidden" name="content" value="addsubscription">
                        <button type="submit" name="submit" class="button_1">Subscribe</button>
                    </form>
                </div>



            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="col-md-12">
                <p>© 2019 - All Rights reserved with <a target="_blank" href="mailto:Trey@hunecut.com">Robert H. Media</a> | Trey </p>
            </div>
        </div>
    </div>


    <!--
    <footer>
        <a href="mailto:Trey@hunecut.com">
            Contact Me
        </a> | NewJack Web Design &copy; 2018


    </footer>
-->
    <script>
        function myFunction() {
            var x = document.getElementById('hide');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
 
        function myFunction1() {
            var x = document.getElementById('hide1');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
 
        function myFunction2() {
            var x = document.getElementById('hide2');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
  
        function myFunction3() {
            var x = document.getElementById('hide3');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
   
        function myFunction4() {
            var x = document.getElementById('hide4');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
 
        function myFunction5() {
            var x = document.getElementById('hide5');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

        function myFunction6() {
            var x = document.getElementById('hide6');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
  
        jQuery(function($) {
            $('#carousel1').carousel({
                interval: 6000
            });

            var clickEvent = false;

            $('#carousel1').on('click', '.nav a', function() {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if (!clickEvent) {
                    var count = $('.nav').children().length - 1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>
</body>

</html>