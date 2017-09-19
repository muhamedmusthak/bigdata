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

 <?php
$str = "4Vj8eK4rloUd272L48hsrarnUA~508029~".$result[0]['enroll_id'].$result[0]['email'].$result[0]['contact']."~".$result[0]['amount']."~COP";
/*$str = "4bQ1hbGsR5XX60ZfV9rqfhf5Bz~672872~".$result[0]['enroll_id'].$result[0]['email'].$result[0]['contact']."~".$result[0]['amount']."~COP";*/
$sig = md5($str);
//echo md5($str);
//echo "4a8ab91407ff4bd117e1d2cbc02daca3";
?>

  <body>
   
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-md-offset-3 headtil">
          <center><h3 style="color: white;">Check Details</h3></center>
        </div>
        <br>
        <div class="col-xs-12 col-md-8 col-md-offset-3">
    		<form action="https://sandbox.gateway.payulatam.com/ppp-web-gateway" method="post" >
        <!-- <form action="https://gateway.payulatam.com/ppp-web-gateway" method="post" >     -->
		      <input name="merchantId"    type="hidden"  value="508029"   >
          <!-- <input name="merchantId"    type="hidden"  value="672872"   > -->
          <input name="accountId"     type="hidden"  value="512321" >
          <!-- <input name="accountId"     type="hidden"  value="512321" > -->
          <input name="description"   type="hidden"  value="<?php echo $result[0]['course_name'] ?>"  >
          <input name="referenceCode" type="hidden"  value="<?php echo $result[0]['enroll_id'] ?><?php echo $result[0]['email'] ?><?php echo $result[0]['contact'] ?>" >
        <!--   <input name="amount"        type="hidden"  value="<?php echo $result[0]['amount'] ?>"   > -->
          <input name="tax"           type="hidden"  value="0"  >
          <input name="taxReturnBase" type="hidden"  value="0" >
          <input name="currency"      type="hidden"  value="COP" >
          <input name="signature"     type="hidden"  value="<?php echo $sig ?>"  >
          <input name="test"          type="hidden"  value="1" >
           <!-- <input name="test"          type="hidden"  value="0" > -->
         <!--  <input name="buyerEmail"    type="hidden"  value="<?php $result[0]['email'] ?>" > -->
         <!--  <input name="responseUrl"    type="hidden"  value="http://localhost/bdihub/BigdatasiteController/thankyou_payment/<?php echo $result[0]['enroll_id'] ?>" > -->
           <input name="responseUrl"    type="hidden"  value="http://cloudlogic.in/bdihub/BigdatasiteController/thankyou_payment/<?php echo $result[0]['enroll_id'] ?>" >
          <!--   <input name="responseUrl"    type="hidden"  value="http://www.bdihub.com/bdihub/BigdatasiteController/thankyou_payment/<?php echo $result[0]['enroll_id'] ?>" > -->
         <!--  <input name="confirmationUrl"    type="hidden"  value="http://localhost/bdihub/" > -->
           <input name="confirmationUrl"    type="hidden"  value="http://cloudlogic.in/bdihub/" >
            <!-- <input name="confirmationUrl"    type="hidden"  value="http://www.bdihub.com/bdihub/" > -->
<!--           <input name="Submit"        type="submit"  value="Enviar" >
 -->
            <table class="table-responsive tablein">
              <tbody>
               
                <tr>
                  <td class="column1">Amount: </td>
                  <td><input type="text" name="amount" value="<?php echo $result[0]['amount'] ?>"></td>
               </tr>
                <tr>
                  <td>Email: </td>
                  <td><input name="buyerEmail" id="buyerEmail" value="<?php echo $result[0]['email'] ?>" /></td>
                </tr>
                <tr>
                <tr>
                  <td>Course Name: </td>
                  <td colspan="3"><textarea name="products[0].name" value="<?php echo $result[0]['course_name']; ?>"><?php echo $result[0]['course_name']; ?></textarea></td>
                </tr>
                <tr>
                  <td>Phone: </td>                 
                  <td><input name="Phone" value="<?php echo $result[0]['contact'] ?>" /></td>
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
                  <!-- <?php if(!$hash) { ?> -->
                     <td><button name="Submit"  type="submit"  value="Enviar">Proceed Payment</button></td>
                   <!--  <td><input type="submit" value="Submit" /></td> -->
               <!--    <?php } ?> -->
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
  </script>
</html>

