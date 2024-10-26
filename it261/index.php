 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPortal page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
 </head>
 <body>
    <h1><a href="index.php">Ruka's Portal Page</a></h1>
    <h2>The navigation below represents our BIG Assighnments.</h2>
    <div id="wrapper">
<nav>
<ul>
<li><a href="website/index.php">Switch</a></li>
<li><a href="adder.php">Troubleshoot</a></li>
<li><a href="">Calculator</a></li>
<li><a href="">Email</a></li>
<li><a href="">Databese</a></li>
<li><a href="">Gallery</a></li>

</ul>


</nav>
<main>
<h2>About Ruka</h2>
<img class="right" src="images/ruka.jpg" alt="Ruka">
<p>Hi! I'm Ruka Kimura, an international student from Japan. 
   I'm majoring in biotechnology at a university in Japan, and I also study computer science at SCC. 
   Recently, I've started learning Chinese as well. 
   In my free time, I enjoy playing volleyball and softball, as well as traveling, baking, and watching dramas.
</p>

<h3>Screenshot1</h3>
    <img src="images/Screenshot1.png" alt="Screenshot of my work1" class="screenshot">

<h3>Screenshot2</h3>
<img src="images/Screenshot2.png" alt="Screenshot of my work2" class="screenshot">

</main>

<aside>

<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ol>
<li><a href ="weeks/week2/var.php">var.php</a></li>
<li><a href ="weeks/week2/vars2.php">vers2.php</a></li>
<li><a href ="weeks/week2/currency-logic.php">currency-logic.php</a></li>
<li><a href ="weeks/week2/currency.php">currency.php</a></li>
</ol>

<h3>Week 3</h3>
<ol>
<li><a href ="weeks/week3/about.php">about.php</a></li>
<li><a href ="weeks/week3/date.php">date.php</a></li>
<li><a href ="weeks/week3/for-each.php">for-each.php</a></li>
<li><a href ="weeks/week3/if.php">if.php</a></li>
<li><a href ="weeks/week3/index.php">index.php</a></li>
<li><a href ="weeks/week3/switch.php">switch.php</a></li>

<h3>Week 4</h3>
<ol>
<li><a href ="weeks/week4/form1.php">form1.php</a></li>
<li><a href ="weeks/week4/form2.php">fomr2.php</a></li>
<li><a href ="weeks/week4/form3.php">form3.php</a></li>
<li><a href ="weeks/week4/form-get.php">form-get.php</a></li>
<li><a href ="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
<li><a href ="weeks/week4/celcius.php">celcius.php</a></li>
</ol>

</ol>





</aside>


    </div>
    
    <footer>
    <ul>
        <li>Copyright &copy; 2024</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Ruka Kimura</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
    </ul>
    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</footer>

 </body>
 </html>