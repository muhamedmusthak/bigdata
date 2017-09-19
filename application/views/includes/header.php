<!-- <?php 
// base directory
$base_dir = __DIR__;

// server protocol
$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';

// domain name
$domain = $_SERVER['SERVER_NAME'];

// base url
// $base_url = preg_replace("!^${doc_root}!", '', $base_dir);

// server port
$port = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";

// put em all together to get the complete base URL
$url = "${protocol}://${domain}${disp_port}";

// echo $url.dirname($_SERVER['PHP_SELF']); // = http://example.com/path/directory

$url =  $url."/bdihub";

// $result = parse_url($url);
// print_r($url);
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
// echo $path;
//echo $page;

$currentpage_url = $_SERVER["REQUEST_URI"];
// echo $currentpage_url;

$parsedUrlPath = parse_url($currentpage_url);
	//echo $parsed['path'];
$urlSegments = explode('/', $parsedUrlPath['path']);
	//echo $urlSegments[1];
$currentFolder = $urlSegments[1];
//echo $currentFolder;

// Get the Directory Name
$fullDirName = dirname($_SERVER['PHP_SELF']);
$directoryName = '';
$positionDir = strrpos($directoryName, '/') +1;
$directoryName = substr($fullDirName,$positionDir);
// print_r($fullDirName);
//echo $directoryName;
?> -->
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<link rel="stylesheet" href="<?php echo base_url();?>application/css/styles.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url();?>application/css/museo.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url();?>application/css/bootstrap.css" type="text/css" media="screen"/>
<script src="<?php echo base_url();?>application/js/jquery-1.12.0.min.js"></script>
<script src="<?php echo base_url();?>application/js/bootstrap.js"></script>

	<link href="<?php echo base_url();?>application/images/favicon.ico" type="image/ico" rel="shortcut icon"/>
</head>
<div id="header_section" class="clearfix">
	<div class="wrapper">
		<div class="logo">
		<a href="<?php echo base_url('BigdatasiteController/index');?>"><img src="<?php echo base_url();?>application/images/logo-bdih.png" alt="Logo" title="BDIHub"></a>
<!--		<a href="/"><object id="spe-logo" type="image/svg+xml" data="images/logo.svg"><img src="images/bdih-logo.png" alt="Logo" title="BDIHub"></object></a>-->
		</div>
		<div class="menu">
			<ul>
				<li ><a href="<?php echo base_url('BigdatasiteController/index');?>">inicio</a></li>
                                <li ><a href="<?php echo base_url('BigdatasiteController/about_us');?>">Quiénes Somos</a></li>
				<li ><a href="<?php echo base_url('BigdatasiteController/why_us');?>">BDIHub?</a></li>
				<li ><a href="<?php echo base_url('BigdatasiteController/training_program');?>">Cursos</a>
				<div>
					<div class="nav-column">    


						<ul>
							<li ><a href="<?php echo base_url('BigdatasiteController/associate/1');?>">Associate</a></li>
							<li ><a href="<?php echo base_url('BigdatasiteController/practitioner/2');?>">Practitioner</a></li>
							<li ><a href="<?php echo base_url('BigdatasiteController/specialist/3');?>">Specialist</a></li>
							<li ><a href="<?php echo base_url('BigdatasiteController/advanced/4');?>/">Specialized Courses</a></li>
						</ul>
					</div>
				</div>
				</li>
				<li ><a href="<?php echo base_url('BigdatasiteController/training_on_demand/5');?>">Capacitación Corporativa</a>
				<!-- <div>
					<div class="nav-column">
						<ul>
							<li ><a href="<?php echo base_url('BigdatasiteController/');?>"><?php echo $this->lang->line('corporate_trainingondemand_heading');?></a></li>
							<li><a href="<?php echo base_url('BigdatasiteController/business_solutions/6');?>"><?php echo $this->lang->line('corporate_bussinesssolutions_heading');?></a></li>
							
						</ul>
					</div>
				</div> -->
				</li>
				<li ><a href="<?php echo base_url('BigdatasiteController/business_solutions/6');?>">Soluciones para empresas</a></li>
				<li><a href="<?php echo base_url('BigdatasiteController/contact_us');?>">Contacto</a></li>
				<li><a href="<?php echo base_url('BigdatasiteController/bidi');?>">bidi</a></li>
                                <!--  <li style="cursor:pointer"><a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/<?php if($this->session->userdata('site_lang') == 'english') { echo 'spanish'; } else { echo 'english'; } ?>';"><?php echo $this->lang->line('langTitle'); ?></a>
				</li> -->
                                <!-- <li ><a href="">Languages</a>
				<div>
					<div class="nav-column">
						<ul>
							<li ><a href="">English</a></li>
							<li><a href="">Spanish</a></li>
							
						</ul>
					</div>
				</div>
				</li> -->
<!--				<li id="LoginBtn"><a href="#">LOG IN</a></li>-->
			</ul>
		</div>
	</div>
	<a class="show_hide_menu" href="javascript:void(0);"><span class="lineBar"></span>
    <span class="lineBar"></span>
    <span class="lineBar"></span>
    </a>
</div>
