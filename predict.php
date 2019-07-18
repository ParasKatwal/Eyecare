
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

                                    
    