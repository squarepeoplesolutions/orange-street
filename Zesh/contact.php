<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RFF - Contact</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/png" href="img/favicon.png">
		<script src="main.js"></script>
	</head>
	<body>
		<header>
            <a href="index.html">
                <img src="./img/logo.png" alt="">
            </a>
            <div class="menu-toggle">
                <div class="inner"></div>
                <div class="inner"></div>
                <div class="inner"></div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="zesh.html">Zesh</a></li>
                    <li><a href="news.html">Media</a></li>
                    <li><a href="join.html">Join ZRF</a></li>
                    <li class="selected"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="hero">
            <div class="container captions">
                <h1>CONTACT ZRF</h1>
            </div>
        </div>
        <section class="services">
            <div class="container justify">
                <h2 class="fancy"><span>Contact Zesh Rehman Foundation</span></h2>
                <p>To find out more about our programmes or to get involved please contact us using the form below.<br> We look forward to hearing from you!</p>
                <br>
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
                                mail("info@zeshrehmanfoundation.org", $subject, $message, $from);
                                echo "<p class='form_message'>Email sent!</p>";
                            }
                    }
                ?>
            </div>
        </section>
        <section class="alpha-bg" style="background-image: url('./img/5StarActive_comp.jpg');">
            <div class="inner">
                <div class="container justify">
                    <blockquote>"Guided by Zesh’s passion for sport and recognising how football in particular, could be used to enable social cohesion and change, ZRF has developed a number of sports-based programmes and educational initiatives to raise young people’s aspirations, encourage healthy and active lifestyles and provide positive role models."</blockquote>
                </div>
            </div>
        </section>
        <section class="section text-center buttons">
            <div class="container">
                <a href="contact.php" class="button">Get in touch</a>
            </div>
        </section>
        <!-- PAGE CONTENT END -->
        <footer>
            <p>&copy; Copyright Zesh Rehman Foundation | Site by <a href="http://squarepeoplesolutions.co.uk">Square People Solutions</a></p>
        </footer>

	</body>
</html>