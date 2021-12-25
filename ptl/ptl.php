<?php

$htmlPusl =
'<html xmlns="http://www.w3.org/1999/html">
<head><Title>PTL lyga</Title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="ptl.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="ptl.js"></script>

</head>

<body>
<div class="logo">
    <picture>
        <source media="(min-width: 769px)" srcset="foto/ptlyga_Logo.png">
        <source media="(min-width: 200px)" srcset="foto/logo.jpg">
        <img src="foto" alt="Logo"
             style="height:100px;">
    </picture>
</div>
<header></header>
<aside></aside>
<main></main>
<footer></footer>


</body>
</html>;

//Cia rasysime failo kurimo koda

$naujas = fopen("ptl/ptl.html", "r");
fread ($naujas, $htmlPusl);'

?>
