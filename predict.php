<!DOCTYPE html>
<html lang="en">
<html>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
   <div class="predict">
       <div class="container">
           <div class="row">
               <div class="col">
                   <h2>Upload fundus image of your eye here !</h2>
                    <label class="fileContainer">
                        <!-- Click here to upload image -->
                        <input type="file"/>
                    </label>
                    <button id="predict-button">Predict</button>
                    <p>DR: <span id="dr-prediction"></span></p>
                    <p>NODR: <span id="nodr-prediction"></span></p>
                    <img id="selected-image" src=""/>
               </div>
           </div>
       </div>
   </div>

    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        let base64Image;
        $("#image-selector").change(function() {
            let reader = new FileReader();
            reader.onload = function(e) {
                let dataURL = reader.result;
                $('#selected-image').attr("src", dataURL);
                base64Image = dataURL.replace("data:image/png;base64,","");
                console.log(base64Image);
            }
            reader.readAsDataURL($("#image-selector")[0].files[0]);
            $("#dr-prediction").text("");
            $("#nodr-prediction").text("");
        });
        
        $("#name-button").click(function(event){
            let message = {
                image: base64Image
            }
            console.log(message);
            $.post("http://desktop-cscdn4h:8080/predict", JSON.stringify(message),function(response){
                $("#dr-prediction").text(response.prediction.dr.toFixed(6));
                $("#nodr-prediction").text(response.prediction.nodr.toFixed(6));
                console.log(response);
            });
        });
    </script>
</body>
</html>

                                    
    