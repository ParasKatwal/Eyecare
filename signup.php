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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

<?php include('header.php') ?>

    <div class="signup">
        <div class="container">
            <div class="row">
                <form class="col s12 l7 offset-l3">
                    <div class="row">
                        <div class="center logo">
                            <i class="material-icons prefix">supervised_user_circle</i>
                            <h4>SIGN UP</h4>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">User Name</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" class="validate">
                            <label for="icon_telephone">Password</label>
                        </div>
                        <label>
                            <input type="checkbox" />
                            <span>I agree on Terms and Condition</span>
                        </label>
                        <div class="input-field center">
                            <input type="submit" name="login_user" value="Sign Up" class="btn"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<?php include('footer.php') ?>
</html>