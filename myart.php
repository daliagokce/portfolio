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
    main{
    margin-left: 250px; 
    padding: 10px;
    background: rgb(230, 230, 219);
    }

    .gallery{
    column-count: 3;
    max-width: 1000px;
    margin: 0 auto;
    padding: 30px;
    }
       
    .gallery img{
        width: 280px;
        padding: 5px;
    }

    .gallery img:hover{
        transform: scale(1.1);
    }

    @media screen and (max-width: 1150px){
        .gallery{
        column-count: 2;
        }
        .gallery img{
        width: 18em;
        padding: 5px;
        }
    }
    @media screen and (max-width: 900px){
        .gallery{
        column-count: 1;
        }

        .gallery img{
        width: 25em;
        padding: 5px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        }

    }

</style>

<body>
<!-- navbar -->
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/portfolio/php/"; include($IPATH."navbar.html");?> 

<main>
    <h1>ILLUSTRATIONS</h1>
    <div class = "gallery">
        <a href="images/leighandcrows.jpg" data-lightbox="mygallery" data-title="Selfie of Leigh Bardugo and the Crows."><img src="images/leighandcrows.jpg"></a> 
        <a href="images/kanej.jpg" data-title="Kaz and Inej on Christmas Eve." data-lightbox="mygallery"><img src="images/kanej.jpg"></a> 
        <a href="images/efkar.jpg" data-title="Alternate Uc Kurus poster." data-lightbox="mygallery"><img src="images/efkar.jpg"></a> 
        <a href="images/inej.jpg" data-title="Inej Ghafa as Rapunzel." data-lightbox="mygallery"><img src="images/inej.jpg"></a> 
        <a href="images/percy.jpg" data-title="Percy Jackson's claiming from The Lightning Thief." data-lightbox="mygallery"><img src="images/percy.jpg"></a> 
        <a href="images/yamacselim.jpg" data-title="Yamac and Selim." data-lightbox="mygallery"><img src="images/yamacselim.jpg"></a> 
        <a href="images/lukehermes.jpg" data-title="Luke and Hermes." data-lightbox="mygallery"><img src="images/lukehermes.jpg"></a> 
        <a href="images/motherearth.jpg" data-title="Mother Earth." data-lightbox="mygallery"><img src="images/motherearth.jpg"></a> 
        <a href="images/zeycag.jpg" data-title="Zeynep and Cagri as Beauty and the Beast." data-lightbox="mygallery"><img src="images/zeycag.jpg"></a> 
        <a href="images/yamacsena.jpg" data-title="Yamac and Sena S1E1 vs S2E27." data-lightbox="mygallery"><img src="images/yamacsena.jpg"></a> 
    </div>
</main>
</body>

</html>
