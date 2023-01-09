<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portfolio Website | Dalia Gokce</title>
<link rel="stylesheet" href="css/style.css">

</head>

<style>
    * {
        box-sizing: border-box; 
        font-family: sans-serif;
    }
    body {
        margin: 0;
    }
    nav {
        position: fixed;
        top: 0;
        left: 0; 
        width: 250px;
        height: 100%;
        background: rgb(246, 243, 243);
        border-right: 1px solid #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    nav img{
        width: 70%;
        display: block;
        margin-bottom: 35px;
    }

    nav a{
        display: inline-block;
        text-decoration: none;
        padding: 5px 15px;
        font-size: 0.9em;
        color:blue;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    nav a:hover{
        color:blueviolet;
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
    <h1> the webpage title goes here </h1>
    
</main>


</body>
</html>
