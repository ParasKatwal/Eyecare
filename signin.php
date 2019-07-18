<?php 
  define('Title',"Sign In");
?>

<?php include('header.php') ?>

    <div class="signin">
        <div class="container">
            <div class="row">
                <form class="col s10 l5 offset-s1 offset-l4">
                    <div class="row">
                        <div class="center logo">
                            <i class="material-icons prefix">verified_user</i>
                            <h4>SIGN IN</h4>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">User Name / Email</label>
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
                            <input type="submit" name="login_user" value="Sign IN" class="btn"> 
                        </div>
                        <div class="input-field center">
                            <h6>Dont Have Account?</h6>
                            <a href="signup.php" class="btn">SIGN UP</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>
