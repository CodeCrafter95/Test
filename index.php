<?php
//A random Code for the request to the API
$random_code = '123456789Text';
//Random Code can be anything static, or you can generate it through //built-in random functions
//The below url accepts AppName, AppInfo & SecretCode
$cURLConnection = curl_init('https://www.authenticatorapi.com/pair.aspx?AppName=MyApp&AppInfo=Test&SecretCode='.$random_code);
//Setting Options for the cURL Request
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
//Execute the Request
$apiResponse = curl_exec($cURLConnection);
//Close
curl_close($cURLConnection);
//Displaying the QR Code
echo $apiResponse;
?>
<form method="post" action="your_next_page.php">
    <div class="row">
      <div class="col-lg-4"></div>
<div class="form-group col-lg-4" style="float:center">
  <input type="text" class="form-control" min="4" name="pin" max="6" required/>
  <br><br>
  <button name="submit-pin" type="submit" class="btn btn-primary">Enter</button>
</div>
<div class="col-lg-4"></div>
    </div>
    </form>