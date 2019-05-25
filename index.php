<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 1050px)">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php include('header.php') ?>

    <div class="topSection">
        <div class="parallax-container">
            <div class="parallax"><img src="images/bg.jpg"></div>
            <div class="test center-align">
                <h1>Test Your Eye</h1>
                <button class="waves-effect waves-light btn-large">Upload image</button>
            </div>
        </div>
    </div>

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col s12 scrollspy def" id="retinopathy">
                    <h1>What is Diabetic Retinopathy</h1>
                    <p>This eye disease is caused by high blood sugar and high blood pressure: over time, this can damage the blood vessels in the back of the eye.</p>
                    <h5>This eye disease is caused by high blood sugar and high blood pressure: over time, this can damage the blood vessels in the back of the eye.</h5>
                    <p>The disease usually affects both eyes, though one can be affected more than the other, and is caused when a patient’s blood pressure or blood sugar are too high. Over time, this can damage the blood vessels that supply blood to the retina in the eye, which coverts light into electrical signals and sends them to the brain.  If the retina doesn’t get the blood it needs, it can’t work properly, meaning vision is affected. It can eventually cause permanent blindness.</p>
                    <p>The disease is progressive: at first, the blood vessels start to leak and eventually cause bleeding inside the eyes. There are three stages of retinopathy that mainly affect the central part of the retina and can cause permanent blindness, while a different type of the disease, called maculopathy, affects the middle of the eye.</p>
                </div>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>
</body>
</html>