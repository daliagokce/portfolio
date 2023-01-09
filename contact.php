<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio Website | Dalia Gokce</title>
    </head>

    <body>
    <!-- navbar -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/portfolio/php/"; include($IPATH."navbar.html");?> 
        <main>
            <p> SEND E-MAIL </p>
            <form class="contact-form" action="contactform.php" method = "post">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="mail" placeholder="Your e-mail">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">SEND MAIL</button>
            </form>
        </main>
    </body>
</html>
