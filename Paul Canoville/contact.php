<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paul Canoville Foundation</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" href="img/favicon.png">
        <script src="main.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="two columns">
                        <a href="index.html" class="logo">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="ten columns">
                        <div class="menu-toggle">
                            <div class="inner"></div>
                            <div class="inner"></div>
                            <div class="inner"></div>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="index.html" class="">Home</a></li>
                                <li><a href="about.html" class="">About us</a></li>
                                <li><a href="paul.html" class="">Paul Canoville</a></li>
                                <li><a href="work.html" class="">Our Work</a></li>
                                <li><a href="news.html" class="">News &amp; Events</a></li>
                                <li class="selected"><a href="contact.php" class="">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->
        <div class="hero" style="background-image: url('img/contacthero.jpg');">
            <div class="hero-inner">
                <div class="captions">
                    <h1>Get in touch</h1>
                </div>
            </div>
        </div>
        <!-- HEADER END -->
        <section>
            <div class="container callout large-padding text-center">
                <p>Our work is built on partnerships with inspiring individuals and like-minded organisations. If you’d like more information on what we do or would like to attend or sponsor one of our many events please get in touch with us using the form below.</p>
                <p>We look forward to hearing from you!</p>
                <p>Best wishes,</p>
                <p>Canners and the team</p>
                <br>
                <br>
                <hr>
                <br>
                <br>
                <p>Gable House<br>
                239 Regents Park Road<br>
                London<br>
                N3 3LF</p>
                <p><a href="tel:+447522771047" class="underline dark">07522 771047</a></p>
            </div>
        </section>

        <section class="blue-panel text-center large-padding contact">
            <div class="container">

                <!-- <form class="contactform">
                    <input type="text" name="" placeholder="Name">
                    <input type="text" name="" placeholder="Email">
                    <input type="text" name="" placeholder="Phone">
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" name="" placeholder="">
                </form> -->
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
                                mail("canners@paulcanovillefoundation.com", $subject, $message, $from);
                                echo "<p class='form_message'>Email sent!</p>";
                            }
                    }
                ?>
            </div>
        </section>
        <section>
            <div class="container call-out text-center large-padding">
                <blockquote>Listen to your inner spirit, I'm sure it's saying: Don't give up! Be your own hero, you know you can do it. All you have to do is BELIEVE!</blockquote>
            </div>
        </section>
        <!-- PAGE CONTENT END -->
        <footer>
            <div class="container">
                <a href="https://www.facebook.com/paul.canoville" target="_blank" class="social" style="background-image: url('img/facebook.png');"></a>
                <a href="https://twitter.com/CanovilleFdn" target="_blank" class="social" style="background-image: url('img/twitter.png');"></a>
                <a href="javascript:void(0);" class="social" style="background-image: url('img/linkedin.png');"></a>
                <a href="https://www.youtube.com/results?search_query=paul+canoville" target="_blank" class="social" style="background-image: url('img/youtube.png');"></a>
                <a href="https://www.instagram.com/kingcanners/" target="_blank" class="social" style="background-image: url('img/instagram.png');"></a>
            </div>
            <div class="container">
                <p class="copyright">&copy; Copyright Paul Canoville Foundation 2017</p>
            </div>
        </footer>

    </body>
</html>