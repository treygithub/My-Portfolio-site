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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/footer.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
        .jumbotron {
            background: #358CCE;
            color: #FFF;
            border-radius: 0px;
        }
        
        .jumbotron-sm {
            padding-top: 24px;
            padding-bottom: 24px;
        }
        
        .jumbotron small {
            color: #FFF;
        }
        
        .h1 small {
            font-size: 24px;
        }
        
        html {
            height: 100%;
        }
        
        body {
            height: 100%;
        }
        
        footer {
            position: relative;
            margin-top: -180px;
            /* negative value of footer height */
            height: 180px;
            clear: both;
        }
    </style>
</head>

<body>

    <div class="jumbotron jumbotron-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1">
                        Contact Me  <small> I would LOVE to hear from you</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form action="addcontact.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name
                                    </label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                         Email Address
                                    </label>
                                <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject
                                    </label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">I'm interested in Hiring you </option>
                                        <option value="newstore">Hosting Issues</option>
                                        <option value="product">Content Issues</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message
                                    </label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="content" value="addcontact">
                                <button type="submit" class="btn btn-primary pull-right" name="submit" id="btnContactUs">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> My office</legend>
                    <address>
                        <strong>Robert H. Media</strong><br>
                        <br>
                        Orlando, FL 94107<br>
                        <!--
                        <b title="Phone">
                            P:</b>
                        (605) 277-5371-->
                    </address>
                    <address>
                        <strong>Trey H.</strong><br>
                        <a href="mailto:Trey@hunecut.com">Trey@hunecut.com</a>
                    </address>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">

            <div class="row">
                <div class="copyright">
                    <div style="margin-top:60px" class="container">
                        <div style="width:100%; padding:20px" class="col-md-12">
                            <p>© 2019 - All Rights Reserved <a href="http://www.hunecut.com">  Return to Home Page</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>