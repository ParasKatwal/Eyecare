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
                    <h2>What is Diabetic Retinopathy</h2>
                    <p>This eye disease is caused by high blood sugar and high blood pressure: over time, this can damage the blood vessels in the back of the eye.</p>
                    <h5>This eye disease is caused by high blood sugar and high blood pressure: over time, this can damage the blood vessels in the back of the eye.</h5>
                    <p>The disease usually affects both eyes, though one can be affected more than the other, and is caused when a patient’s blood pressure or blood sugar are too high. Over time, this can damage the blood vessels that supply blood to the retina in the eye, which coverts light into electrical signals and sends them to the brain.  If the retina doesn’t get the blood it needs, it can’t work properly, meaning vision is affected. It can eventually cause permanent blindness.</p>
                    <p>The disease is progressive: at first, the blood vessels start to leak and eventually cause bleeding inside the eyes. There are three stages of retinopathy that mainly affect the central part of the retina and can cause permanent blindness, while a different type of the disease, called maculopathy, affects the middle of the eye.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="logo">
        <div class="parallax-container">
            <div class="parallax"><img src="images/eyecare.png"></div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col s12 scrollspy" id="about">
                    <h2>About us</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio hic animi quaerat, aspernatur tempora ullam accusantium nihil ipsa ab voluptatem ex saepe sunt quia inventore, natus ad suscipit iste eligendi eveniet, quo minima nobis necessitatibus cupiditate omnis. Nihil deleniti consequuntur consequatur accusamus quae laboriosam deserunt accusantium assumenda corrupti sequi quam hic quos provident minus fugit corporis, numquam in, odit pariatur ad optio! Delectus accusamus animi exercitationem neque totam rerum numquam molestiae assumenda nesciunt nihil laboriosam, ratione saepe, modi voluptatum autem hic, veniam quam ut quod deserunt vitae? Autem, vitae libero? Debitis blanditiis eos similique, voluptatum aliquam iusto dolor sed quam aut error nostrum recusandae unde temporibus quisquam corporis commodi rerum quasi? Dicta molestias mollitia libero autem voluptas, explicabo aperiam quasi quisquam doloribus. Tenetur, quos. Similique officiis mollitia perspiciatis id exercitationem cumque aut, iste labore est, quaerat laudantium praesentium vitae earum, beatae culpa. Provident, quam ullam officia odit voluptatibus laboriosam ad delectus sit perspiciatis vero ipsum ab nostrum quos dignissimos corporis excepturi unde rerum minima deserunt soluta vel consectetur accusamus! Minima mollitia consequuntur sed eos magni repudiandae quia velit, cupiditate repellendus animi facere sint quibusdam nobis laudantium alias minus assumenda recusandae nam! Aliquam cumque omnis distinctio, voluptate dolor error ea aperiam? Tenetur eligendi nulla vel autem beatae eveniet consequatur quidem odit id blanditiis nam dolorum cumque, rem officiis numquam dignissimos, sit ullam iste omnis facere, corrupti minus. Architecto reprehenderit quisquam repellat autem, ex amet beatae excepturi ab voluptates deserunt commodi ducimus earum sunt, optio blanditiis tenetur ea quibusdam praesentium cumque eveniet inventore totam repellendus provident. Soluta architecto repellat beatae exercitationem labore iste, consectetur facilis voluptas natus. Voluptate tempore, voluptatum eum officia, quam aperiam cupiditate eos quasi, minus officiis molestiae sunt illo sint a. Architecto libero minus explicabo inventore nisi distinctio dolorum aspernatur. Sit modi voluptates libero magnam accusantium ullam nobis excepturi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row scrollspy" id="contact">
                <div class="col s12 l4 ">
                    <h3>Address</h3>
                    <p><i class="material-icons">location_on</i>: Kathmandu, Nepal</p>
                    <p><i class="material-icons">email</i>: eyecare@gmail.com</p>
                    <p><i class="material-icons">call</i>: +977 1234567890</p>
                </div>
                <div class="col s12 l8">
                    <form class="col s12">
                        <h3>Quick Messages / Feedback</h3>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telephone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">Message</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>


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