<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "rjQUPktU";

// Merchant Salt as provided by Payu
$SALT = "e5iIg1jwi8";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://test.payu.in";

$action = '';

$posted = array();
$posted['firstname'] = $result[0]['first_name'];
$posted['email'] = $result[0]['email'];
$posted['productinfo'] = $result[0]['course_name'];
$posted['phone'] = $result[0]['contact'];
$posted['amount'] = $result[0]['amount'];
$posted['service_provider'] = "payu_paisa"; 
// $posted['surl'] = "successdf.php";
// $posted['furl'] = "failurdfe.php";
$posted['key'] = $MERCHANT_KEY;
//print_r($posted); exit();


if(!empty($_POST))
{
    // print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

 if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
  $posted['txnid'] = $txnid;
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>

<html>
<head>
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url();?>application/css/styles.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo base_url();?>application/css/museo.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo base_url();?>application/css/bootstrap.css" type="text/css" media="screen"/>
  <style>
    table {
      
      border-spacing: 0;
      width: 100%;
    }

    th, td {
        border: none;
        text-align: left;
        padding: 8px;

      
    }
    .column1
    {
       width:28%; 
    }

    tr:nth-child(even){background-color: #f2f2f2}
    .headtil{
      background-color: #3E8ACC;
      min-height: 50px;
      padding-top: 10px;

    }
    .container{
      padding-top: 50px;
      padding-bottom: 50px;
      
    }
    .btn-success{
      background-color: #3E8ACC;
      border: #3E8ACC;
    }
    .btn-success:hover{
      background-color: #3E8ACC;
      border: #3E8ACC;
    }
    .btn-success:focus {
      background-color: #3E8ACC;
      border: #3E8ACC;
    }
  </style>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      console.log(payuForm,"payform");//alert(payuForm);
      payuForm.submit();
    }
  </script>
  </head>


  <body onload="submitPayuForm()">
    <!-- <h2>PayU Form</h2>
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?> -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-md-offset-3 headtil">
          <center><h3 style="color: white;">Check Details</h3></center>
        </div>
        <br>
        <div class="col-xs-12 col-md-8 col-md-offset-3">
    			<form action="<?php echo $action; ?>" method="post" name="payuForm">
            <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
            <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
            <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
            <input type="hidden" name="enroll_map_id" value="<?php echo $result[0]['enroll_id']; ?>" />
            <table class="table-responsive tablein">
              <tbody>
                <!-- <tr>
                  <td><b>Mandatory Parameters</b></td>
                </tr> -->
                <tr>
                  <td class="column1">Amount: </td>
                  <td ><input name="amount" value="<?php echo $result[0]['amount']; ?>" /></td>
                </tr>
                <tr>
                  <td>First Name: </td>
                  <td><input name="firstname" id="firstname" value="<?php echo $result[0]['first_name']; ?>" /></td>
                </tr>
                <tr>
                  <td>Last Name: </td>
                  <td><input name="lastname" id="lastname" value="<?php echo $result[0]['last_name']; ?>" /></td>
                  <!-- </tr>
                  <td>Cancel URI: </td> -->
                  <td><input name="curl" type="hidden" value="" /></td>
                </tr>
                <tr>
                  <td>Email: </td>
                  <td><input name="email" id="email" value="<?php echo $result[0]['email']; ?>" /></td>
                </tr>
                <tr>
                  <td>Phone: </td>
                  <td><input name="phone" value="<?php echo $result[0]['contact']; ?>" /></td>
                </tr>
                <tr>
                  <td>Course Name: </td>
                  <td colspan="3"><textarea name="productinfo"><?php echo $result[0]['course_name']; ?></textarea></td>
                </tr>
                <tr>
                  <td>Batch: </td>
                  <td colspan="3">
                  <textarea name=""><?php echo $result[0]['session_show'];?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>Batch Timing: </td>
                  <td colspan="3">
                  <?php if($result[0]['session_id']==3)
                  { 
                      $count=count($result);
                      for($i=0;$i<$count;$i++)
                      {
                       print_r($result[$i]['day']); print_r(" ");
                      }

                     ?> - <?php
                      if($result[0]['flag']=='first'){
                        echo $result[0]['first_start_time'] ." to ".$result[0]['first_end_time']; 
                      }
                      elseif($result[0]['flag']=='second'){
                       echo $result[0]['second_start_time'] ." to ".$result[0]['second_end_time'];
                      } ?> <br>

                     <?php 

                      echo "saturday, sunday - "; echo $result[0]['third_start_time'] ." to ".$result[0]['third_end_time']; 
                  }
                  else
                  {

                      if($result[0]['flag']=='first')
                      {
                        echo $result[0]['first_start_time'] ." to ".$result[0]['first_end_time']; 
                      }
                      elseif($result[0]['flag']=='second'){
                       echo $result[0]['second_start_time'] ." to ".$result[0]['second_end_time'];
                      } 
                } ?></td>
                </tr>

                <tr>
               <!--    <td>Success URI: </td> -->
                  <td colspan="3"><input name="surl" type="hidden" value="http://cloudlogic.in/bdihub/BigdataAdminController/payumoney_succsess" /></td>
                </tr>
                <tr>
                 <!--  <td>Failure URI: </td> -->
                  <td colspan="3"><input name="furl" type="hidden" value="http://cloudlogic.in/bdihub/BigdataAdminController/payumoney_failure" size="64" /></td>
                </tr>

                <tr>
                  <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
                </tr>

               <!--  <tr>
                  <td><b>Optional Parameters</b></td>
                </tr> -->
                
                <!-- <tr>
                  <td>Address1: </td>
                  <td><input name="address1" value="" /></td>
                  <td>Address2: </td>
                  <td><input name="address2" value="" /></td>
                </tr>
                <tr>
                  <td>City: </td>
                  <td><input name="city" value="" /></td>
                  <td>State: </td>
                  <td><input name="state" value="" /></td>
                </tr>
                <tr>
                  <td>Country: </td>
                  <td><input name="country" value="" /></td>
                  <td>Zipcode: </td>
                  <td><input name="zipcode" value="" /></td>
                </tr> -->
                <tr>
                 <!--  <td>UDF1: </td> -->
                  <td><input  type="hidden" name="udf1" value="" /></td>
                 <!--  <td>UDF2: </td> -->
                  <td><input  type="hidden" name="udf2" value="" /></td>
                </tr>
                <tr>
                 <!--  <td>UDF3: </td> -->
                  <td><input  type="hidden" name="udf3" value="" /></td>
                 <!--  <td>UDF4: </td> -->
                  <td><input  type="hidden" name="udf4" value="" /></td>
                </tr>
                <tr>
                <!--   <td>UDF5: </td> -->
                  <td><input  type="hidden" name="udf5" value="" /></td>
                 <!--  <td>PG: </td> -->
                  <td><input  type="hidden" name="pg" value="" /></td>
                </tr>
                <tr>
                  <!-- <?php if(!$hash) { ?> -->
                    <td><input type="submit" value="Submit" /></td>
               <!--    <?php } ?> -->
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
