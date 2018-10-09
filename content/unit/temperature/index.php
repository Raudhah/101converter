<?php
  include "../../../config.php";
  include "../../../header1.php";
  //html title and meta
?>

<title>101 Converter</title>
<meta name="description" content="." />
<meta name="keyword" content="Convert Anything to Anything, numbers, format, text, images, currency, etc.">
<meta name="author" content="Raudhah Project">

<?php
  include "../../../header2.php";
  //include "headline.php";
  include "../../../sidebar.php";
?>


      <div class="col-md-9" id="mainCol">

                <ol class="breadcrumb">
                  <li><a href="<?php echo $BASE_URL;?>">Home</a></li>
                  <li><a href="<?php echo $BASE_UNIT_URL;?>">Unit Converter</a></li>
                  <li><a href="<?php echo $UNIT_TEMPERATURE_URL;?>">Temperature</a></li>
                  <li class="active">Temperature Menu</li>
                </ol>

                <!-- THIS IS THE PROGRAM PART -->

                  <h2 id="sec0">Temperature Converter</h2>
                  Convert Anything about temperature here.
                  <hr/>


                  <div class="row">
                    <div class="col-md-12">
                       
                      <table class="table table-striped table-hover">
                        <tr><td>Celsius to Fahrenheit</td></tr>
                        <tr><td>Celsius to Kelvin</td></tr>
                        <tr><td>Celsius to Reamur</td></tr>
                        <tr><td><a href="converter-fahrenheit-to-celsius.php" target="_blank">Fahrenheit to Celsius</a></td></tr>
                        <tr><td>Fahrenheit to Reamur</td></tr>
                        <tr><td>Fahrenheit to Kelvin</td></tr>
                        <tr><td>Kelvin to Celsius</td></tr>
                        <tr><td>Kelvin to Fahrenheit</td></tr>
                        <tr><td>Kelvin to Reamur</td></tr>
                        <tr><td>Reamur to Celsius</td></tr>
                        <tr><td>Reamur to Fahrenheit</td></tr>
                        <tr><td>Reamur to Kelvin</td></tr>
                        
                      </table>

                    </div>
                  </div>

                  <hr class="col-md-12">


                  <!-- THIS IS THE DESCRIPTION ABOUT HOW IT WORKS PART -->

                	<div class="row">
                    <div class="col-md-10">
                      <div class="panel panel-primary">
                        <div class="panel-heading"><h4><strong>Understand the Basic and How To Do it Manually</strong></h4></div>
                        <div class="panel-body">
                          <p>in this part we explain on how it all works. </p>


                        </div>
                      </div>
                    </div>

                    <!-- THIS IS THE FORMULA PART -->

                    <div class="row">
                      <div class="col-md-10">
                        <div class="panel panel-primary">
                          <div class="panel-heading"><h4><strong>THE FORMULA</strong></h4></div>
                          <div class="panel-body">
                            <p>Temp Celsius = (Temp Fahranheit * 9 / 5) + 32</p>

                          </div>
                        </div>
                      </div>


                    <!-- THIS IS THE SOURCE CODE -->

                    <div class="col-md-10">
                        <div class="panel panel-default">
                        <div class="panel-heading"><h4>Source Code.</h4></div>
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.
                        </div>
                      </div>
                    </div>
                	</div>

                	<hr>



        		</div>
    	<?php

      include "../../../footer.php";
       ?>




       <script>
       // THE MAIN PROGRAM CODE IS HERE


            //first built the function
           function convertFahrenheitToCelsius(tempF){

             var tempC;
             tempC = (9.0 * tempF / 5.0) + 32;
             return tempC;
           }

           //now put the function to the places
           $( "#convertbutton" ).click(function() {

             var inputTempF = document.getElementById("inputTempF");
             var convertResult = document.getElementById("convertResult");

             var result = convertFahrenheitToCelsius(inputTempF.value);

             convertResult.value = result;

             console.log("Result : " + result + " Fahrenheit");

           });

           //copy to clipboard button
           function copyResult(){

             /* Get the text field */
              var copyText = document.getElementById("convertResult");

              /* Select the text field */
              copyText.select();

              /* Copy the text inside the text field */
              document.execCommand("copy");

              /* Alert the copied text */
              alert("Success Copied the Result : " + copyText.value);
           }

           $( "#copybutton" ).click(function() {
             copyResult();
           });



       </script>
