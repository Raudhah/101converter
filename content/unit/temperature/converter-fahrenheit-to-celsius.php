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
                  <li class="active">Fahrenheit to Celsius</li>
                </ol>

                <!-- THIS IS THE PROGRAM PART -->

                  <h2 id="sec0">Converter Fahrenheit to Celsius</h2>
                  Convert Fahrenheit to Celcius Online here. See also how it works, how to do it manually, and More! Even the source code is available here.

                  <hr/>


                  <div class="row">
                    <div class="col-md-12">
                        <strong><em>
                        Please input The temperature in Fahrenheit below. Click Convert to see the result. You can copy the result to clipboard.
                        </em></strong>
                      <br/>
                      <br/>

                        <form class="form-horizontal">

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Temperature in Fahrenheit</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control input-lg" id="inputTempF" placeholder="Enter Temperature">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button  id="convertbutton"  type="button" class="btn btn-success btn-lg">Convert</button>
                            </div>
                          </div>

                          <div class="form-group">
                           <label class="col-sm-2 control-label">Result</label>
                           <div class="col-sm-10">

                              <div class="input-group">
                               <input type="text" readonly class="form-control input-lg" id="convertResult" placeholder="Result">
                               <span class="input-group-addon" id="basic-addon2">Fahrenheit</span>
                              </div>


                             <button id="copybutton" data-toggle="tooltip" title="Copy the Result to Clipboard" data-clipboard-target="#result" type="button" class="btn btn-primary btn-xs">Copy The Result</button>

                             </p>
                           </div>
                         </div>
                        </form>



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
