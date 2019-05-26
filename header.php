<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="images/logo2.png" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">HOME</a></li>
        <li><a href="#retinopathy">DIABETIC RETINOPATHY ?</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#" class="waves-effect waves-light btn">SIGNIN / SIGNUP</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav center" id="mobile-demo">
    <li><a href="#">HOME</a></li>
    <li><a href="#retinopathy">DIABETIC RETINOPATHY ?</a></li>
    <li><a href="#about">ABOUT US</a></li>
    <li><a href="#contact">CONTACT</a></li>
    <li><a href="#" class="waves-effect waves-light btn">SIGNIN / SIGNUP</a></li>
  </ul>


<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.scrollspy').scrollSpy();
  });
</script>
</body>
</html>