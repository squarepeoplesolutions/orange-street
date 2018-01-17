<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact | Rio Ferdinand Foundation</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:300,400" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/png" href="dist/images/favicon.png">
		<script src="main.js"></script>
	</head>
	<body>
		<header>
            <div class="menu-toggle">
                <div class="inner"></div>
                <div class="inner"></div>
                <div class="inner"></div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="programmes.html">Programmes</a></li>
                    <li><a href="/news/">News</a></li>
                    <!-- <li><a href="5f.html">Endz2Endz</a></li> -->
                    <li><a href="contact.php" class="selected">Contact</a></li>
                </ul>
            </nav>
        </header>
        <!-- HEADER END -->
        <section class="hero">
            <div class="hero-inner">
                <video class="" id="" autoplay="autoplay" loop="loop" muted="muted" playsinline>
                    <source src="./video/football_comp.mp4" type="video/mp4">
                    <source src="video/football_comp.webm" type="video/webm">
                </video>
            </div>
        </section>
        <section class="section indent-top">
            <div class="container">
                <a href="index.html"><img src="img/RFF-logo-black.png" alt="" id="logo"></a>
            </div>
        </section>
         <hr>
        <section class="section call-out">
            <div class="container">
                <h2>Bringing People together to Build A Brighter Future</h2>
                <p>Our work with young people hinges on partnerships with like-minded individuals and organisations. If you’d like to work with us or would like more information about our programmes please get in touch using the form below or by giving us a quick call. We look forward to hearing from you.</p>
            </div>
        </section>
        <hr>
        <section class="contact">
            <div class="container">
                <div class="social">
                    <a href="https://www.facebook.com/RioFoundation"><img src="./img/facebook_logo.png" alt=""></a>
                    <a href="https://twitter.com/riofoundation"><img src="./img/twitter_logo.png" alt=""></a>
                    <a href="https://www.instagram.com/rioferdinandfoundation/"><img src="./img/instagram_logo.png" alt=""></a>
                    <a href="https://www.snapchat.com/add/riofoundation"><img src="./img/snapchat_logo.png" alt=""></a>
                </div>
                <h2>Say hello...</h2>
                <?php
                    $action=$_REQUEST['action'];
                    if ($action==""){
                        ?>
                        <form  action="" method="POST" enctype="multipart/form-data" class="contactform">
                        <input type="hidden" name="action" value="submit">
                        Your name:<br>
                        <input name="name" type="text" value="" size="30"/><br>
                        Your email:<br>
                        <input name="email" type="text" value="" size="30"/><br>
                        Your message:<br>
                        <textarea name="message" rows="7" cols="30"></textarea><br>
                        <input type="submit" value="Send email"/>
                        </form>
                        <?php
                    }else {
                        $name=$_REQUEST['name'];
                        $email=$_REQUEST['email'];
                        $message=$_REQUEST['message'];
                        if (($name=="")||($email=="")||($message=="")) {
                            echo "<p class='form_message'>All fields are required, please fill in the form again.</p>";
                            echo '
                                <form  action="" method="POST" enctype="multipart/form-data" class="contactform">
                                    <input type="hidden" name="action" value="submit">
                                    Your name:<br>
                                    <input name="name" type="text" value="" size="30"/><br>
                                    Your email:<br>
                                    <input name="email" type="text" value="" size="30"/><br>
                                    Your message:<br>
                                    <textarea name="message" rows="7" cols="30"></textarea><br>
                                    <input type="submit" value="Send email"/>
                                </form>
                            ';

                        }else {
                                $from="From: $name<$email>\r\nReturn-path: $email";
                                $subject="Message sent using your contact form";
                                mail("info@rioferdinandfoundation.com", $subject, $message, $from);
                                echo "<p class='form_message'>Email sent!</p>";
                            }
                    }
                ?>
            </div>
        </section>
        <hr>
        <section class="section call-out text-center">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <p>Rio Ferdinand Foundation<br>
                        The Clarence Centre<br>
                        6 St Georges Circus<br>
                        London,<br>
                        SE1 6FE</p>
                        <p>Phone: <a href="tel:+442070898644">+44 (0) 20 7089 8644</a></p>
                        <p>Email: <a href="mailto:info@rioferdinandfoundation.com">info@rioferdinandfoundation.com</a></p>
                    </div>
                    <div class="six columns">
                        <p>Rio Ferdinand Foundation<br>
                        Salford Innovation Forum<br>
                        51 Frederick Rd<br>
                        Salford<br>
                        M6 6FP</p>
                        <p>Phone: <a href="tel:+447375701950">+44 (0) 7375701950</a></p>
                        <p>Email: <a href="mailto:info@rioferdinandfoundation.com">info@rioferdinandfoundation.com</a></p>
                    </div>
                </div>
                <br>
                <br>
                <p>Hours</p>
                <p>Mon – Fri: 10 am – 6 pm</p>
            </div>
        </section>
        <hr>
        <section class="news-boxes">
            <div class="container">
                <h2>Recent News</h2>
                <br>
                <br>
                <div>
                    <div class="four-cols post" style="background-image: url(./img/newblogimg.jpg);">
                        <a href="img/London Summer Programme - RFF FINAL.pdf" target="_blank">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>RFF SUMMER PROGRAMME 2017</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/20280408_1474387232626357_8758291144589256275_o.jpg);">
                        <a href="walkden-high.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>Youth Leaders Workshop at Walkden High School</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/IMG_8524.JPG);">
                        <a href="achievers-launch.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>#Achievers Launch at Pop Brixton</p></div>
                        </a>
                    </div>

                    <div class="four-cols post" style="background-image: url(./img/IMG_2604-1024x692.jpg);">
                        <a href="new-programme-manager.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>New Team Member</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/ActiveCommunitiesRioFoundationJC214.jpg);">
                        <a href="bt-partnership.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>Our BT Belfast Work</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/news_1.jpg);">
                        <a href="award-winners.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>Award Nomination</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/news_2.jpg);">
                        <a href="walkden-girls.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>Walkden Girls Football Tournament</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/news_3.jpg);">
                        <a href="prisons-and-communities.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>Prisons &amp; Communities Conference</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/news_4.jpg);">
                        <a href="bt-tower.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>BT Tower Celebration</p></div>
                        </a>
                    </div>
                    <div class="four-cols post" style="background-image: url(./img/news_5.jpg);">
                        <a href="salford-youth-leaders.html">
                            <img class="" src="./img/lake.jpg" alt="">
                            <div class="post-inner"><p>Celebrating Salford Youth Leaders</p></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="indent-bottom">
            <div class="container">
                <hr>
            </div>
        </div>
        <!-- PAGE CONTENT END -->
        <footer>
            <p>&copy; Copyright Rio Ferdinand Foundation</p>
            <p>Site by <a href="http://squarepeoplesolutions.co.uk">Square People Solutions</a></p>
        </footer>

	</body>
</html>