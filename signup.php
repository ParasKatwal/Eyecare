<?php 
  define('Title',"Sign Up");
?>

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

<?php include('footer.php') ?>
