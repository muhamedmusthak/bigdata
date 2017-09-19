<title>BDIHub / Contacto</title>
<body>
<div class="main_container">
	
<!-- InstanceBeginEditable name="MainContainer" -->
	<div id="contactPage">
		<div class="innerPageBanner clearfix">
		<img src="<?php echo base_url();?>application/images/banners/contact-us.jpg" alt="Contact BDIHub">
		</div>
		<div class="contentBlock">
		<div class="spacer20"></div>
		<div class="wrapper800">
		<h1 class="title">CONTACTO</h1>
		<div class="spacer20"></div>
		<div class="row between-md">
			<div class="col-xs-12 col-md-7">
			<div id="form-container">			
			<form name="contactform" method="post"  id="contactform" enctype="multipart/form-data">
	<div class="inputWrap">
		<label class="label" for="salutation"><?php echo $this->lang->line('salutation'); ?>&nbsp;&nbsp;</label>
		<select class="list" name="salutation" id="salutation">
			<option value="Mr." selected="selected"><?php echo $this->lang->line('Mr'); ?>.</option>
			<option value="Mrs."><?php echo $this->lang->line('Mrs'); ?>.</option>
			<option value="Ms."><?php echo $this->lang->line('Ms'); ?>.</option>
			<option value="Dr."><?php echo $this->lang->line('Dr'); ?>.</option>
		</select>
	</div>
	<div class="inputWrap">
		<div class="splitBlk">
			<label class="label"><?php echo $this->lang->line('first_name'); ?><span style="color:red">*</span></label>
			<input required type="text" class="text-field" id="first_name" name="first_name" size="40" placeholder="Primer Nombre">
		</div>
		<div class="splitBlk">
			<label class="label"><?php echo $this->lang->line('last name'); ?><span style="color:red">*</span></label>
			<input required type="text" class="text-field" id="last_name" name="last_name" size="40" placeholder="Apellido" style=" background-position: 10px -54px;">
		</div>
	</div>
	<div class="inputWrap">
		<div class="splitBlk">
			<label class="label"><?php echo $this->lang->line('telephone'); ?><span style="color:red">*</span></label>
			<input required type="text" class="text-field" id="phone_num" name="phone_num" size="40" placeholder="Numero De Célular" style=" background-position: 10px -88px;">
		</div>
		<div class="splitBlk">
			<label class="label">empresa</label>
			<input type="text" class="text-field" id="company" name="company" size="40" placeholder="empresa" style=" background-position: 8px -184px;">
		</div>
	</div>
	<div class="inputWrap">

			<label class="label"><?php echo $this->lang->line('email'); ?><span style="color:red">*</span></label>
			<input required type="text" class="text-field fullLength" id="email" name="email" size="40" placeholder="Correo electrónico" style=" background-position: 10px -121px;">
		
	</div>
	<div class="inputWrap">
		<label class="label" for="inputdescription"><?php echo $this->lang->line('please_give'); ?><span style="color:red">*</span>
<!--					  <span><a id="inline" href="#dataform">(Need breifing help? Click here)</a></span>--></label>
		<textarea  class="text-area" value="" id="message" name="message" cols="30" rows="5" placeholder="descripción" style=" background-position: 10px -214px;"></textarea>
	</div>
	<input type="submit" name="submit" class="submit-Bigbtn" value="<?php echo $this->lang->line('submit'); ?>">
	<div class="policyForm"><a href="privacy-policy.php">Privacy Policy</a>
	</div>
</form>
		</div>
			</div>
			<div class="col-xs-12 col-md-4">
			<div class="contactSidebar">

			<div class="info-content">
			<h3 class="sideBarHead"><?php echo $this->lang->line('address'); ?></h3>
			<div class="sideBarText">
                       BIG DATA INNOVATION HUB S.A.S.<br>
                       Carrera 9 No. 94 A – 32<br>
                       Edificio Bureau - # 502<br>
                       Bogotá – Colombia<br>
                       Tel. (+57) 1 609 0534<br>
				
			</div>
			</div>
	<!-- 		<div class="info-content">
			<h3 class="sideBarHead"><?php echo $this->lang->line('phone_email'); ?></h3>
			<div class="sideBarText">
				<span>Tel. (+57) (1) 381-4966</span><br>
				<span>contact@bdih.com</span>
			</div>
			</div> -->
			<div class="info-content">
				<h3 class="sideBarHead"><?php echo $this->lang->line('locate'); ?></h3>
				<div id="map"></div>
			</div>
			</div>
			</div>
		</div>
		</div>
		<div class="spacer40"></div>
		
		</div>
		</div>
		<script>
      function initMap() {
		  //4.726763, -74.032322
        var uluru = {lat: 4.726763, lng: -74.032322};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj6znQhGxfN-cT7X8qmXjINqg7WN2qhUA&callback=initMap">
    </script>
	<!-- InstanceEndEditable -->
		
	</div>
<!-- InstanceBeginEditable name="FooterScriptRegion" --><!-- InstanceEndEditable -->
	
	</body>
<!-- InstanceEnd --></html>
