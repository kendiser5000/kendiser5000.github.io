<?php
if(isset($_POST['submit'])){
    $to = "ashraf1sikender@utexas.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contact from SikenderAshraf.me";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: thankyou.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sikender Ashraf |Embedded Systems and Integrated Circuits Engineer</title>
    <!-- CSS -->
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal site of Sikender Ashraf, Embedded Systems and Integrated Circuits Engineer in Austin, TX. ">
    <meta name="author" content="Sikenderali Musa Ashraf">
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="sXH43jrG9mgJYZMlnThPfDbdUEGpWQo2UKU1RX9AMtk" />
    <link rel="apple-touch-icon" sizes="57x57" href="/images/im/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg">
</head>

<body>
    <div id="particles-js">
        <div class="container">
            <div class="row top">
                <div class="twelve column">
                    <div class="logo">
                        <a href="https://www.SikenderAshraf.me/">S</a>
                    </div>
                    <h1>Contacting me is easy!</h1>
                    <p><strong>Are you interested in working together?</strong> Fill out the form below and we can get started!</p>
                </div>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="six columns">
                        <label for="email">Your email</label>
                        <input class="u-full-width" name="email" type="email" placeholder="Your email..." id="email">
                    </div>
                    <div class="six columns">
                        <label for="name">Your Name</label>
                        <input class="u-full-width" name="name" type="text" placeholder="Your name..." id="name">
                    </div>
                </div>
                <label for="message">Message</label>
                <textarea class="u-full-width" name="message" placeholder="Hi Sikender you're AWESOME..." id="message"></textarea>
                <button type="submit" name="submit" class="button">Submit</div>
            </form>
        </div>
        <div class="row">
            <div class="u-full-width column cta">
                <div class="logo smallLogo">
                    S
                </div>
                <ul class="footerLinks">
                    <li><a href="https://www.linkedin.com/in/sikender-ashraf/">Linkedin</a></li>
                    <li><a href="https://github.com/kendiser5000">Github</a></li>
                    <li><a href="mailto:ashraf1sikender@utexas.edu">Contact</a></li>
                </ul>
                <div class="footer">
                    <p>Built using: <a href="https://github.com/VincentGarreau/particles.js/">Particles.js</a>,
                        <a href="http://cpv2api.com/">Codepen V2 API</a> &amp; <a href="http://getskeleton.com/">Skeleton.css</a></p>
                </div>
                <!-- <button onclick="location.href='mailto:jwv.gib@gmail.com';" class="button-primary ">Contact Me</button> -->
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
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
    ga('create', 'UA-64631488-1', 'auto');
    ga('send', 'pageview');
    </script>
</body>

</html>
