<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portfolio Website | Dalia Gokce</title>
<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="css/lightbox.min.css">
<script src="js/lightbox-plus-jquery.min.js"></script>

</head>

<style>
    * {
    box-sizing: border-box; 
    font-family: sans-serif;
    }
    body {
        margin: 0;
    }
    h1{
    font-size: 35px;
    font-weight: 500;
    text-align: center;
    padding-top: 1em;
    padding-bottom: 1em;
    }
    img{
        width: 30%;
        display: block;
        border-radius: 50%;
        margin-bottom: 35px;
        margin-left: auto;
        margin-right: auto;
    }
    main{
    margin-left: 250px; 
    padding: 10px;
    background: rgb(230, 230, 219);
    }
</style>

<body>
<!-- navbar -->
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/portfolio/php/"; include($IPATH."navbar.html");?> 

<main>
    <h1>ABOUT</h1>
    <img src="images/me.jpg">

    <p> Kaya Hashem is a freelance digital artist. In her spare time, she enjoys drawing characters from books and Turkish shows.</p>

</main>
</body>

</html>
