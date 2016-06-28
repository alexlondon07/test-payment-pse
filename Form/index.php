<?php
include_once 'classes/Test.php';
include_once 'classes/PlaceToPay.php';
$objTest = new Test();
$arrBank = $objTest->getBankTest();
//Mostramos la lista de bancos disponibles √
$optionBank = '';
foreach ($arrBank as $key => $value) {
    $optionBank .= "<option value='" . $value->bankCode . "'>" . $value->bankName . "</option>";
}


// $objRequest = new stdClass();
// $objPlaceToPay = new PlaceToPay();
// echo '<pre>' . __FILE__ . ':' . __LINE__ . ' {' . print_r($objPlaceToPay->createTransaction($objRequest), true) . '}';
//     exit;

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alexander Londoño</title>
  <link rel="stylesheet" href="lib/bootstrap.css" crossorigin="anonymous">
  <script src="lib/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <h1>Webservice of PSE</h1>
      <p>Library in PHP that allows you to connect with the webservice of PSE</p>
      <p>All fields are required...</p>
    </div>
    <form action="process.php" method="post">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12-">
            <p class="validateTips"></p>
          </div>
          <div class="col-sm-6">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">firstName</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstName" id="firstName"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">documentType</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="documentType" id="documentType"  placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">document</label>
                <div class="col-sm-8">
                  <textarea type="text" class="form-control" name="document" id="document"  placeholder=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">emailAddress</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="emailAddress" id="emailAddress" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="address" id="address" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">city</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="city" id="city" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">province</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="province" id="province" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">country</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="country" id="country" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">mobile</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label" for="exampleInputName2">bankName</label>
                <div class="col-sm-8">
                  <div class="controls">
                    <select name="bankName" id="bankName"  class="form-control">
                      <?php echo $optionBank; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-horizontal">
              <div>
                <h3 style=''>Information Transaction</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-default">Send</button>
    </form>
  </div>

</body>
</html>
