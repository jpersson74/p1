<?php require('quote.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Josh Persson CSCIE-15 Project 1</title>
    <link rel="stylesheet" href="css/p1.css">
</head>

<body>
    <h1> Josh Persson</h1>
    <div>
        <figure>

            <img src="images/persson.jpg" alt="Persson, Joshua" width="140" height="180">

            <figcaption>Hello, my name is Josh and I live in Rhode Island. This is my third course out of five for the Web Technologies Graduate Certificate. While not chasing around our six year old twins, I work in the Geospatial Group for the engineering company WSP creating maps and mapping products from aerial imagery. I'm hoping the skills I'm learning can help our Group deliver our products over the web. </figcaption>

        </figure>
    </div>
    <div class="quote">

        <h2>...and here's a random quote:</h2>
        <p>
            <?php echo  $input[$rand_quote]. "\n"?>
        </p>
    </div>

</html>
