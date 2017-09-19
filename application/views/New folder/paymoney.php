<style type="text/css">
tr {
    height: 56px;
}
.enroll_header{
  background-color:#226CCD;
  text-align: center;
}
.enroll_header > h4{
  padding:1em;
}
.input-group-addon{

  background-color:white!important;
  color:#226CCD!important;
}
.fullform{
  padding-top: 150px;
  padding-bottom: 100px;
}
.inner-border{
  border-style: solid;
  border-width: 2px;
  border-color: #e6e6e6;
  border-radius: 8px;
}
.enroll{
  border-radius: 15px;
  width: 120px;
  height:40px;
  background-color: white;
  border : 2px solid #226CCD;
  color:#226CCD;
}
.enroll:hover 
{
   background-color: #def7fe; 
}
</style>
<style>
.enroll-form
{
  border-top: 1px solid #e6e6e6;
  border-left:1px solid #e6e6e6;
  border-right:1px solid #e6e6e6;
  border-bottom:1px solid #e6e6e6;
  background-color:  #ffffff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  border-radius:8px;
}
.enroll-in-form
{
  padding: 10px;
}
.form-control 
{
    background-color: #fff;
    background-image: none;
    border: 1px solid #ddd;
    /*border-radius: 4px;*/
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 14px;
    height: 41px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    border-radius:0px;
}
</style>
<?php
//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'Insert_PayPal_Email'; //Business Email
?>
<div id="content" class="site-content">
    <div class="row fullform">
      <div class="col-md-offset-3 col-md-6 col-sm-6">
        <div class="enroll_header">
          <h4 style="color:white">Check your payment details</h4>
        </div>
        <div class="enroll-form">
          <div class="row">
              <form action="<?php echo $paypalURL; ?>" method="post">
                  <!-- Identify your business so that you can collect the payments. -->
                  <input type="hidden" name="business" value="jayawebdeveloper-facilitator@gmail.com">
                  <!-- Specify a Buy Now button. -->
                  <input type="hidden" name="cmd" value="_xclick">
                  <!-- Specify details about the item that buyers will purchase. -->
                  <input type="hidden" name="item_name" value="<?php echo $result[0]['course_name']; ?>">
                  <input type="hidden" name="item_number" value="<?php echo $result[0]['enroll_id']; ?>">
                  <input type="hidden" name="amount" value="100">
                  <input type="hidden" name="currency_code" value="USD">
                  <!-- Specify URLs -->
                  <input type='hidden' name='cancel_return' value='http://localhost/paypaltest/cancel.php'>
                  <input type='hidden' name='return' value='http://localhost/paypaltest/success.php'>

                  <div class="col-md-12 col-lg-12"> 
                   <table class="table table-user-information table-responsive" style="font-size:15px;border:none">
                      <tbody>
                        <tr>
                          <td width="27%">Amount</td>
                          <td width="38%">100.00</td>
                        </tr>
                        <tr>
                          <td width="27%">Course Name</td>
                          <td width="38%"><?php echo $result[0]['course_name']; ?></td>
                        </tr>
                        <tr>
                          <td width="27%">Class Name</td>
                          <td width="38%"><?php echo $result[0]['class_name']; ?></td>
                        </tr>
                        <tr>
                          <td width="27%">First Name</td>
                          <td width="38%"><?php echo $result[0]['first_name']; ?></td>
                        </tr>
                        <tr>
                          <td>Last Name</td>
                          <td><?php echo $result[0]['last_name']; ?></td>
                        </tr>
                        <tr>
                          <td>Email Id</td>
                          <td><?php echo $result[0]['email']; ?></td>
                        </tr>
                          <tr>
                          <td>Contact</td>
                          <td><?php echo $result[0]['contact']; ?></td>
                        </tr>
                        <tr>
                          <td>Address</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                      <!-- Display the payment button. -->
                      <input type="submit" name="submit" border="0" class="btn btn-primary"
                      src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online" value="pay now">
                      <br>
                      <!-- <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > -->
                    </br>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


