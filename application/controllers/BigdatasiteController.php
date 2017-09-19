<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BigdatasiteController extends CI_Controller {
   	function __construct()
    {
		parent::__construct();
		$this->load->model('BigdatasiteModel');
		/*$config = Array(
		   'protocol' => 'smtp',
		   'smtp_host' => 'ssl://smtp.googlemail.com',
		   'smtp_port' => 465,
		   'smtp_user' => 'jayawebdeveloper@gmail.com', // change it to yours
		   'smtp_pass' => 'webdeveloper', // change it to yours
		   'charset' => 'iso-8859-1',
		   'wordwrap' => TRUE,
	       'smtp_auth'=> TRUE
	  	);*/
		$config = Array(
        'protocol' => 'mail',
        'smtp_host' => 'mail.bdihub.com',
	    'smtp_port' => 587,
	    'smtp_user' => 'info@bdihub.com', // change it to yours
	    'smtp_pass' => 'welcome123', // change it to yours
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE,
        'smtp_auth'=> TRUE
		);
		$this->email->initialize($config);
		$this->load->library('email', $config);
	}
	public function index()
	{
		
        $data['result1']=$this->BigdatasiteModel->get_r_course_details();
     	$data['result3']=$this->BigdatasiteModel->get_undergraduate_details();
   		$data['result4']=$this->BigdatasiteModel->get_postgraduate_details();
   		$this->load->view('includes/header');
		$this->load->view('index',$data);
		$this->load->view('includes/footer');
	
	}
	function associate($id)
 	{
     	$data['result3']=$this->BigdatasiteModel->get_undergraduate_details();
   		$data['result4']=$this->BigdatasiteModel->get_postgraduate_details();
   		$this->load->view('includes/header');
   		$data['result']=$this->BigdatasiteModel->associate($id);
		$this->load->view('training-program/associate/index.php',$data);
   		$this->load->view('includes/footer');
   	}
	function practitioner($id)
	{
		$data['result3']=$this->BigdatasiteModel->get_undergraduate_details();
   		$data['result4']=$this->BigdatasiteModel->get_postgraduate_details();
		$this->load->view('includes/header');
        $data['result']=$this->BigdatasiteModel->associate($id);
		$this->load->view('training-program/practitioner/index.php',$data);
		$this->load->view('includes/footer');
	}
	function specialist($id)
	{
		$data['result3']=$this->BigdatasiteModel->get_undergraduate_details();
   		$data['result4']=$this->BigdatasiteModel->get_postgraduate_details();
		$this->load->view('includes/header');
        $data['result']=$this->BigdatasiteModel->associate($id);
		$this->load->view('training-program/specialist/index.php',$data);
		$this->load->view('includes/footer');
	}
	function advanced($id)
	{

		$data['result3']=$this->BigdatasiteModel->get_undergraduate_details();
   		$data['result4']=$this->BigdatasiteModel->get_postgraduate_details();
		$this->load->view('includes/header');
        $data['result']=$this->BigdatasiteModel->associate($id);
		$this->load->view('training-program/advanced/index.php',$data);
		$this->load->view('includes/footer');
	}
	function corporate_solutions()
	{

		$this->load->view('includes/header');
		$this->load->view('corporate-solutions/index.php');
		$this->load->view('includes/footer');
	}
	function training_on_demand($id)
	{
		$this->load->view('includes/header');
                $data['result']=$this->BigdatasiteModel->associate($id);
		$this->load->view('corporate-solutions/training-on-demand',$data);
		$this->load->view('includes/footer');

	}
	function business_solutions($id)
	{
		$this->load->view('includes/header');
                $data['result']=$this->BigdatasiteModel->associate($id);
		$this->load->view('corporate-solutions/business-solutions',$data);
		$this->load->view('includes/footer');

	}
	// function research_consultation($id)
	// {
	// 	$this->load->view('includes/header');
 //                $data['result']=$this->BigdatasiteModel->associate($id);
	// 	$this->load->view('corporate-solutions/research-consultation',$data);
	// 	$this->load->view('includes/footer');

	// }
	function contact_us()
	{
		$this->load->view('includes/header');
		$this->load->view('contact-us');
		$this->load->view('includes/footer');

	}
   function global_opportunities_new()
	{
		$this->load->view('includes/header');
		$this->load->view('global-opportunities');
		$this->load->view('includes/footer');

	}
	function privacy_policy()
	{
		$this->load->view('includes/header');
		$this->load->view('privacy-policy');
		$this->load->view('includes/footer');

	}
	function clients()
	{
		$this->load->view('includes/header');
		$this->load->view('clients');
		$this->load->view('includes/footer');

	}
	function insert_training()
	{
		$result = $this->BigdatasiteModel->insert_training();
		$data = $this->BigdatasiteModel->get_training_data($result);
		//print_r($result); exit();
		$data1['result'][0]['first_name'] =  $data[0]['first_name'];
		$data1['result'][0]['last_name'] =  $data[0]['last_name'];
		$data1['result'][0]['email'] =  $data[0]['email'];
		$data1['result'][0]['contact'] =  $data[0]['contact'];
		$data1['result'][0]['company_name'] =  $data[0]['company_name'];
		$data1['result'][0]['address'] =  $data[0]['address'];
		$data1['result'][0]['business'] =  $data[0]['business'];
		$data1['result'][0]['department'] =  $data[0]['department'];
		$data1['result'][0]['designation'] =  $data[0]['designation'];
		$data1['result'][0]['interested'] =  $data[0]['interested'];
		$data1['result'][0]['contact_through'] =  $data[0]['contact_through'];
		$data1['result'][0]['course_name'] =  $data[0]['course_name'];
		
	  
	 	 $this->email->set_mailtype("html");
	     $this->email->set_newline("\r\n");
	     //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB Administrator'); // change it to yours
	     $this->email->from('info@bdihub.com','Administrator'); // change it to yours
	     $this->email->to($data[0]['email']);
	     $this->email->subject('You have successfully registered for course.');
	     $message=$this->load->view('training_student',$data1,TRUE);
	     $this->email->message($message);
	     if (!$this->email->send())
	     {
	     	redirect("BigdatasiteController/index");
	       //show_error($this->email->print_debugger());
	     }
	   
	    
	     $this->email->set_mailtype("html");
	     $this->email->set_newline("\r\n");
	     //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB Administrator'); // change it to yours 
	     //$this->email->to('jayawebdeveloper@gmail.com');
	  	 $this->email->from('info@bdihub.com','Administrator'); // change it to yours
	     $this->email->to('jacob.william@bdihub.com');
	     $this->email->cc('frank.rajan@bdihub.com,Priscilla.william@bdihub.com,lauro.bianda@bdihub.com');
	     $this->email->subject('New candidate registered for Big Data-Associate course.');
	     $message=$this->load->view('training_admin',$data1,TRUE);
	     $this->email->message($message);
	     if (!$this->email->send())
	     {
	    	redirect("BigdatasiteController/index");
	       //show_error($this->email->print_debugger());
	     }
	}
	function insert_batch_other()
	{	
		$this->BigdatasiteModel->insert_batch_other();

	}
	function thankyou_contact()
	{
		    $this->load->view('includes/header');
			$this->load->view('thankyou_contact');
			$this->load->view('includes/footer');		
	}
	function insert_batch()
	{	
		$this->BigdatasiteModel->insert_batch();

	}
	function admin()
    {

			
			$this->load->view('admin/index');
			
	}

	function about_us()
	{
			$this->load->view('includes/header');
			$this->load->view('about-us');
			$this->load->view('includes/footer');

	}
	function bidi()
	{
			$this->load->view('includes/header');
			$this->load->view('bidi');
			$this->load->view('includes/footer');

	}
	function why_us()
	{
			$this->load->view('includes/header');
			$this->load->view('why-us');
			$this->load->view('includes/footer');

	}
	function training_program()
	{
                     
			$this->load->view('includes/header');
			$this->load->view('training-program/index');
			$this->load->view('includes/footer');

	}
	function get_batchtiming()
	{

		$data['result']=$this->BigdatasiteModel->get_batch_timing();
		$this->load->view("batch_timing",$data);
		//print_r($data); exit();
		//echo json_encode($data);

	}
	function get_batchtiming_others()
	{

		$data['result']=$this->BigdatasiteModel->get_batchtiming_others();
		//print_r($data); exit();
		$this->load->view("batch_timing_others",$data);
		
		//echo json_encode($data);
	}
	function register_contact()
	{
		
		$data1 = $this->BigdatasiteModel->register_contact();
		$data2 = $this->BigdatasiteModel->register_contact_mail($data1);
		$data['result'][0]['first_name'] = $data2[0]['first_name'];
		$data['result'][0]['last_name'] = $data2[0]['last_name'];
		$data['result'][0]['email'] = $data2[0]['email'];		
		$data['result'][0]['phone_num'] = $data2[0]['contact'];
		$data['result'][0]['company'] = $data2[0]['company'];
		$data['result'][0]['message'] = $data2[0]['message'];
	
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
        //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB'); // change it to yours
		$this->email->from('info@bdihub.com','Administrator'); // change it to yours
		$this->email->to($data2[0]['email']);
		$this->email->subject('You have successfully Contact Us.');
		$message=$this->load->view('contact_student',$data,TRUE);
		$this->email->message($message);
		if(!$this->email->send())
		{
		   
		   redirect("BigdatasiteController/index");
		}
		    
	
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$this->email->from('info@bdihub.com','Administrator'); // change it to yours
		//$this->email->from('jayawebdeveloper@gmail.com','BDIHUB'); // change it to yours
		//$this->email->to('jayawebdeveloper@gmail.com');
		$this->email->to('jacob.william@bdihub.com');
		$this->email->cc('frank.rajan@bdihub.com,Priscilla.william@bdihub.com,lauro.bianda@bdihub.com');
		$this->email->subject('New candidate Contact us.');
		$message=$this->load->view('contact_admin',$data,TRUE);
		$this->email->message($message);
		if(!$this->email->send())
		{
		   redirect("BigdatasiteController/index");
		}

		redirect('BigdatasiteController/thankyou_contact');			
	}
	function thankyou_payment($id){

		$merchantId = $_GET['merchantId'];
		$merchant_name = $_GET['merchant_name'];
		$referenceCode = $_GET['referenceCode'];
		$email = $_GET['buyerEmail'];
		$amount = $_GET['TX_VALUE'];
		$transactionId=$_GET['transactionId'];
		$description=$_GET['description'];                
		$data1 = $this->BigdatasiteModel->payment_update($id);
		//print_r($email);exit();
		$data['result']= array(
			'merchantId' =>$merchantId ,
			'merchant_name' =>$merchant_name , 
			'referenceCode' =>$referenceCode , 
			'email' =>$email , 
			'amount' =>$amount , 
			'transactionId' =>$transactionId , 
			'description' =>$description  
		);

		//print_r($data);exit();

		    $this->load->view('includes/header');
			$this->load->view('thankyou_payment',$data);
		}
		 function thankyou_payment_success(){		

		    $this->load->view('includes/header');
			$this->load->view('thankyou_payment');
			 $this->load->view('includes/footer');
		}


 //    function register_course()
 //    {

	//    $data1 = $this->BigdatasiteModel->register_course();
	//    $data2 = $this->BigdatasiteModel->register_mail($data1);
	//    $data['result'][0]['enroll_id'] = $data2[0]['enroll_id'];
	//    $data['result'][0]['first_name'] = $data2[0]['first_name'];
	//    $data['result'][0]['last_name'] = $data2[0]['last_name'];
	//    $data['result'][0]['email'] = $data2[0]['email'];
	   
	//    $data['result'][0]['phone_num'] = $data2[0]['phone_num'];
	//    $data['result'][0]['company'] = $data2[0]['company'];
	//    $data['result'][0]['course_id'] = $data2[0]['course_id'];
	//    $data['result'][0]['course_name'] = $data2[0]['course_name'];
   
 //  	$config = Array(
 //     'protocol' => 'smtp',
 //     'smtp_host' => 'ssl://smtp.googlemail.com',
 //     'smtp_port' => 465,
 //     'smtp_user' => 'jayawebdeveloper@gmail.com', // change it to yours
 //     'smtp_pass' => 'webdeveloper', // change it to yours
 //     'charset' => 'iso-8859-1',
 //     'wordwrap' => TRUE,
 //           'smtp_auth'=> TRUE
 //    );
 //     $this->email->initialize($config);
 //     $this->load->library('email', $config);
 //  $this->email->set_mailtype("html");
 //     $this->email->set_newline("\r\n");
 //     $this->email->from('jayawebdeveloper@gmail.com','Administrator'); // change it to yours
 //     $this->email->to($data2[0]['email']);
 //     $this->email->subject('You have successfully registered for course.');
 //        $message=$this->load->view('register_student',$data,TRUE);
 //     $this->email->message($message);
 //     if (!$this->email->send())
 //     {
 //       show_error($this->email->print_debugger());
 //     }

 //     $config = Array(
 //     'protocol' => 'smtp',
 //     'smtp_host' => 'ssl://smtp.googlemail.com',
 //     'smtp_port' => 465,
 //     'smtp_user' => 'jayawebdeveloper@gmail.com', // change it to yours
 //     'smtp_pass' => 'webdeveloper', // change it to yours
 //     'mailtype' => 'text',
 //     'charset' => 'iso-8859-1',
 //     'wordwrap' => TRUE,
 //     'smtp_auth'=> TRUE
 //    );
 //     $this->email->initialize($config);
 //     $this->load->library('email', $config);
 //     $this->email->set_mailtype("html");
 //     $this->email->set_newline("\r\n");
     
 //  	 $this->email->from('jayawebdeveloper@gmail.com','Administrator'); // change it to yours
 //     $this->email->to('jayawebdeveloper@gmail.com');
 //     $this->email->subject('New candidate registered for Big Data-Associate course.');
 //     $message=$this->load->view('register_admin',$data,TRUE);
 //     $this->email->message($message);
 //     if (!$this->email->send())
 //     {
 //       show_error($this->email->print_debugger());
 //     }

 //     redirect('BigdatasiteController/thankyou_contact');

   
		
	// }
 //        function register_contact(){
		
	// 			$data1 = $this->BigdatasiteModel->register_contact();
	// 			$data2 = $this->BigdatasiteModel->register_contact_mail($data1);
	// 			//$data['result'][0]['enroll_id'] = $data2[0]['enroll_id'];
	// 			$data['result'][0]['first_name'] = $data2[0]['first_name'];
	// 			$data['result'][0]['last_name'] = $data2[0]['last_name'];
	// 			$data['result'][0]['email'] = $data2[0]['email'];		
	// 			$data['result'][0]['phone_num'] = $data2[0]['contact'];
	// 			$data['result'][0]['company'] = $data2[0]['company'];
	// 			//$data['result'][0]['course_id'] = $data2[0]['course_id'];
	// 			$data['result'][0]['message'] = $data2[0]['message'];
	// 	   //$data['result'][0][''] = $data2[0]['contact'];
		   
	// 			//print_r($data2);
		
	// 			// print_r($data); exit();
	// 	  $config = Array(
	// 		 'protocol' => 'mail',
	// 		 'smtp_host' => 'mail.bdihub.com',
	// 	          'smtp_port' => 587,
	// 	         'smtp_user' => 'info@bdihub.com', // change it to yours
	// 	         'smtp_pass' => 'welcome123', // change it to yours

	// 		 'charset' => 'iso-8859-1',
	// 		 'wordwrap' => TRUE,
	// 			   'smtp_auth'=> TRUE
	// 		);
	// 		$this->email->initialize($config);
	// 		$this->load->library('email', $config);
	// 		  $this->email->set_mailtype("html");
	// 		$this->email->set_newline("\r\n");
	// 		$this->email->from('info@bdihub.com','Administrator'); // change it to yours
	// 		$this->email->to($data2[0]['email']);
	// 		$this->email->subject('You have successfully Contact Us.');
	// 		$message=$this->load->view('contact_student',$data,TRUE);
	// 		$this->email->message($message);
	// 		 if (!$this->email->send())
	// 		 {
	// 		   show_error($this->email->print_debugger());
	// 		 }
		
	// 		 $config = Array(
	// 		 'protocol' => 'mail',
	// 		 'smtp_host' => 'mail.bdihub.com',
	// 	        'smtp_port' => 587,
	// 	       'smtp_user' => 'info@bdihub.com', // change it to yours
	// 	        'smtp_pass' => 'welcome123', // change it to yours
 //                         'mailtype' => 'text',
	// 		 'charset' => 'iso-8859-1',
	// 		 'wordwrap' => TRUE,
	// 		 'smtp_auth'=> TRUE
	// 		);
	// 		$this->email->initialize($config);
	// 		$this->load->library('email', $config);
	// 		$this->email->set_mailtype("html");
	// 		$this->email->set_newline("\r\n");
	// 		$this->email->from('info@bdihub.com','Administrator'); // change it to yours
	// 		$this->email->to('jacob.william@bdihub.com');
	// 		$this->email->cc('frank.rajan@bdihub.com,Priscilla.william@bdihub.com,lauro.bianda@bdihub.com');
	// 		$this->email->subject('New candidate Contact us.');
	// 		$message=$this->load->view('contact_admin',$data,TRUE);
	// 		$this->email->message($message);
	// 		 if (!$this->email->send())
	// 		 {
	// 		   show_error($this->email->print_debugger());
	// 		 }
		
	// 		 redirect('BigdatasiteController/thankyou_contact');			
	// 		}

	// function register_student()
	// {
	// 	$this->view->register_student();
	// }
	//  function register_admin(){
	// 	$this->view->register_admin();
	// }
	// function thankyou_contact(){
	// 	    $this->load->view('includes/header');
	// 		$this->load->view('thankyou_contact');
	// 		$this->load->view('includes/footer');		
	// }
	// function contact_student(){
	// 	$this->view->contact_student();
	// }
	//  function contact_admin(){
	// 	$this->view->contact_admin();
	// }
	// function success_msg(){
	// 	$this->load->view('includes/header');
	// 	$this->load->view('success_msg');
	// 	$this->load->view('includes/footer');
	// }
	
    
 //    function testdata(){

	// $res=$this->BigdatasiteModel->testvalidation();
	// // print_r($res);exit();
	// echo $res;
	 
	
 //     }
	// function getcoursequestion()
	// {


	// 	$eid=$this->input->post('enrollId');
	// 	// $data['cpattern']=$this->input->post('pattern');
	// 	$res['res']=$this->BigdatasiteModel->getcoursequestion($eid);

	// 	//print_r($res['res']);exit();

	// 	$this->load->view('includes/modelVBodyContent',$res);

	// }

	
	// function resetpasswordview($id)
	// {
	// 	$data['id']=$id;
	// 	$this->load->view('header');
	// 	$this->load->view('resetpasswordview',$data);
	// 	$this->load->view('footer');
	// }
	// function resetpasswordsubmit()
 //        {
      	   
	//    $this->load->view('header');
	//    $this->load->view('resetpasswordsubmit');
	//    $this->load->view('footer');
 //  	}
	// function about()
	// {
 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin"|| $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 //                $this->load->view('header');
	// 	$this->load->view('about');
	// 	$this->load->view('footer');
 //                 }

	// }
	// function global_opportunity_profile()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 //                 }
	// 	$this->load->view('header');
	// 	$this->load->view('global_opportunity_profile');
	// 	$this->load->view('footer');

	// }
	// function management_team()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('management_team');
	// 	$this->load->view('footer');
 //                }

	// }
	// function why_bdih()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('why_bdih');
	// 	$this->load->view('footer');
 //                }

	// }
	
 //      function corporate_courses()
	// {
 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
 //               else{
	// 	$this->load->view('header');
	// 	$this->load->view('corporate-courses');
	// 	$this->load->view('footer');
 //                }
	// }
	// function courses()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }  
 //                else{
 //                $this->load->view('header');
	// 	$this->load->view('courses');
	// 	$this->load->view('footer');
 //                }
                
	// }
	// function analyticalTools()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('analytical-tools');
	// 	$this->load->view('footer');
 //                }
	// }
	// function certificationCourses()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('certification-courses');
	// 	$this->load->view('footer');
 //                }
	// }
	// function dataScience()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('data-science');
	// 	$this->load->view('footer');
 //                }
	// }
	// function global_opportunities()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('global-opportunities');
	// 	$this->load->view('footer');
 //                }
	// }
	// function contact()
	// {	
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('contact');
	// 	$this->load->view('footer');
 //                }
	// }
 //    function articles()
 //    {
 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 //                        $this->load->view('header');
 //                        $this->load->view('articles');
 //                        $this->load->view('footer');
 //                    }
 //     }
	// function thankyou()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('thankyou');
	// 	$this->load->view('footer');
 //                }
	// }
 //    function thankyou_verify()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //        else if($check=="student")
 //        {
 //                redirect('BigdataAdminController/student_dashboard');

 //        }
	// 	else{
	// 	$this->load->view('header');
	// 	$this->load->view('thankyou_verify');
	// 	$this->load->view('footer');
		
 //        }
	// }
	
 //    function bigdata_specialization($id)
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$this->load->view('header');
	// 	$data['result']=$this->BigdatasiteModel->bigdata_spec($id);
 //                $this->load->view('courses/bigdata_specialization',$data);
	// 	$this->load->view('footer');
 //                }
	// }
	// function datascience_specialization($id)
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 // 		$data['result']=$this->BigdatasiteModel->datascience_spec($id);
 //  		$this->load->view('courses/datascience_specialization',$data);
 //  		$this->load->view('footer');
 //                }
 // 	}
	// function business_analyst($id)
	// {
 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	  $this->load->view('header');
	// 	  $data['result']=$this->BigdatasiteModel->datascience_spec($id);
	// 	  $this->load->view('courses/business_analyst',$data);
	// 	  $this->load->view('footer');
 //                  }
	// }
 //  	function corporate_training()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('courses/corporate_training');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function combo_course($id)
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 // 		$data['result']=$this->BigdatasiteModel->combo($id);
 //  		$this->load->view('courses/combo_course',$data);
 //  		$this->load->view('footer');
 //                }
 // 	}	
	// function banking_finance()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('banking_finance');
 //  		$this->load->view('footer');
 //                }
 // 	}
 //  	function manufacturing()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('manufacturing');
 //  		$this->load->view('footer');
 //                }
 // 	}
 //  	function pharmace()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('pharmace');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function retail()
 // 	{        
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('retail');
 //  		$this->load->view('footer');
 //                 }
 // 	}
 // 	function education()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('education');
 //  		$this->load->view('footer');
 //                }
 // 	}
 //  	function information_technology()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('information_technology');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function agriculture()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('agriculture');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function oil_energy()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('oil_energy');
 //  		$this->load->view('footer');
 //               }
 // 	}
 // 	function video_mining()
 // 	{	
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('video_mining');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function bigdata_solution()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('bigdata_solution');
 //  		$this->load->view('footer');
 //                 }
 // 	}
 // 	function machine_learning()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 // 	 	$this->load->view('machine_learning');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function predictive_analytics()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('predictive_analytics');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function network_mining()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('network_mining');
 //  		$this->load->view('footer');
 //                }
 // 	}
 //  	function data_warehouse()
 // 	{
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('data_warehouse');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function cognitive()
 //        {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('cognitive');
 //  		$this->load->view('footer');
 //                }  
 // 	}
	// function deep_learning()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//  	$this->load->view('header');
	//   	$this->load->view('deep_learning');
	//   	$this->load->view('footer');
 //                }
	// }
 //  	function internet_things()
	// {
 //                $check=$this->session->userdata('v');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//  	$this->load->view('header');
	//   	$this->load->view('internet_things');
	//   	$this->load->view('footer');
 //                }
	// }
 // 	function sensor_analysis()
 // 	{	
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('sensor_analysis');
 //  		$this->load->view('footer');
 //                 }
 // 	}
 // 	function cross_sell()
	// {
 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('cross_sell');
 //  		$this->load->view('footer');
 //                }
 // 	}
 // 	function customer_segmentation()
 // 	{       
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
 // 		$this->load->view('header');
 //  		$this->load->view('customer_segmentation');
 //  		$this->load->view('footer');
 // 	}}
	// function investment_advice()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//  	$this->load->view('header');
	//         $this->load->view('investment_advice');
	//         $this->load->view('footer');
	//         } 
 //       }
	// function strategy_marketing()
	// {

 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//     $this->load->view('header');
	//     $this->load->view('strategy_marketing');
	//     $this->load->view('footer');
 //             }
	// }
	// function human_resource()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//     $this->load->view('header');
	//     $this->load->view('human_resource');
	//     $this->load->view('footer');
 //             }
	// }
	// function visualization()
	// {
 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//  	$this->load->view('header');
	//   	$this->load->view('visualization');
	//   	$this->load->view('footer');
 //                }
	// }
	// function training_demand()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//  	$this->load->view('header');
	//   	$this->load->view('training_demand');
	//   	$this->load->view('footer');
 //                }
	// }
	// function placement()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//  	$this->load->view('header');
	//   	$this->load->view('placement');
	//   	$this->load->view('footer');
 //                 }
	// }
	// function corporate()
	// {
 //               $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	//  	$this->load->view('header');
	//   	$this->load->view('corporate');
	//   	$this->load->view('footer');
 //                }
	// }
	// function bds_class1($id)
	// {   
 //                $id= base64_decode($id);
	// 	$check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else
 //               {
			      
 //                   if(is_numeric($id))
 //                   {
	// 	       $schedule=$this->BigdatasiteModel->getschedule($id);
 //                       if($schedule)
	//                {	

	// 	       $data['val2']=$schedule[0]['start_date'];
	// 	       $countTotal=$this->BigdatasiteModel->checkStudentCount($id,$schedule[0]['start_date']);
	// 	            if(count($countTotal)<20)
	// 	            {
				           
 //                              $this->load->view('enroll_header');
	//                        $data['result']=$this->BigdatasiteModel->bigdata_enroll($id);
	// 	              $this->load->view('courses/bds_class1',$data);
	// 	              $this->load->view('footer');
	// 	            }
	// 		   else
	// 	           {
	// 	              redirect('BigdatasiteController/courses');
	// 	           }
	// 	       }
	// 	       else
	//                {
	// 	          redirect('BigdatasiteController/courses');
	// 	       }
	// 	    }
	//             else
	//             {
	//                  redirect('BigdatasiteController/courses');
	//             }
 //               }
 //        }
	
	// function dss_class1($id)
	// {
 //                $id= base64_decode($id);
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
                     
	// 	           $schedule=$this->BigdatasiteModel->getschedule($id);
		          
		          
	// 	                 $data['val2']=$schedule[0]['start_date'];
	// 	                 $data['result']=$this->BigdatasiteModel->bigdata_enroll($id);
	// 	                 $this->load->view('enroll_header');
 //                                 $this->load->view('courses/ds_1',$data);
	// 	                 $this->load->view('footer');
                            
 //                   }
                            
	// }
	
	// function bdds_class1($id,$date)
	// {
 //                $id= base64_decode($id);
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
                           
	// 	            $schedule=$this->BigdatasiteModel->getschedule($id);
		           
	// 	             $data['val2']=$schedule[0]['start_date'];
	// 	             $data['result']=$this->BigdatasiteModel->bigdata_enroll($id);
	// 	             $this->load->view('enroll_header');
 //                             $this->load->view('courses/bigdata_r1',$data);
	// 	             $this->load->view('footer');
                           

 //                }
	// }
	// function bas_class1($id,$date)
	// {
 //                $id= base64_decode($id);
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
                
	// 	else{
                          
	// 	           $schedule=$this->BigdatasiteModel->getschedule($id);
		         
		           
	// 	                $data['val2']=$schedule[0]['start_date'];
	// 	               $data['result']=$this->BigdatasiteModel->bigdata_enroll($id);
	// 	               $this->load->view('enroll_header');
 //                               $this->load->view('courses/busniess_1',$data);
	// 	               $this->load->view('footer');
                           
                           
 //                      }
	// }
	
 //        function add()
	// {
 //                $check=$this->session->userdata('role');
 //                if($check=="superadmin" || $check=="admin")
	// 	{
			
	// 		redirect('BigdataAdminController/admin_dashboard');
	// 	}
 //                else if($check=="student"){
                     
 //                       redirect('BigdataAdminController/student_dashboard');

 //                 }
	// 	else{
	// 	$data=$this->BigdatasiteModel->ins();
	// 	// redirect('BigdatasiteController/phpmail');
	// 	$this->phpmail($data);
 //                }

	// }
	// function phpmail($data)
	// {	
	// 	// data=$_POST['email'];
	// 	//print_r($data['email']);
	// 	//exit();
	// 	$config = Array(
	// 		'protocol' => 'smtp',
	// 		'smtp_host' => 'ssl://secure180.servconfig.com',
	// 		'smtp_user' => 'mail@cloudlogic.in', // change it to yours
	// 		'smtp_pass' => 'welcome123', // change it to yours
 //                        'smtp_port' => 465,
			
	// 		'charset' => 'iso-8859-1',
	// 		'wordwrap' => TRUE,
 //                        'smtp_auth'=> TRUE
	// 	);
		
	// 	$this->load->library('email', $config);
 //                $this->email->set_mailtype("html");
 //                 $this->email->set_newline("\r\n");
 //                $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-            transitional.dtd">
	// 	<html xmlns="http://www.w3.org/1999/xhtml">
	// 	<head>
 //                <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
		   
	// 	    <style type="text/css">
	// 	        body {
	// 	            font-family: Arial, Verdana, Helvetica, sans-serif;
	// 	            font-size: 14px;
	// 	            }
	// 	            .container{
	// 	           	width:100%;
	// 	            height:100%;
	// 	            background-color: rgba(72, 250, 177, 0.2);
	// 	            color:black;
	// 	            }
	// 	            h2{
	// 	            	margin-left:50px;
	// 	            	margin-top:20px;
	// 	            }
	// 	            h1{
	// 	            	margin-left:250px;
	// 	            	margin-top:20px;
	// 	            }
	// 	            h3.name{
	// 	            	text-transform:capitalize;
	// 	            }
	// 	            h3{
	// 	            	font-size:18px;
	// 	            	margin-left:20px;
	// 	            }
		            

	// 	    </style>
	// 	</head>
	// 	<body>
	// 	<div class="container">
	// 	<h1>Student details</h1>
	// 	<table>
	// 	<tr>
	// 	<td><h2>Name:</h2></td>
	// 	<td><h3 class=name>'.$data["name"].'</h3></td>
	// 	</tr>
	// 	<tr>
	// 	<td><h2>Email:</h2></td>
	// 	<td><h3>'.$data["email"].'</h3></td>
	// 	</tr>
	// 	<tr>
	// 	<td><h2>Mobile No:</h2></td>
	// 	<td><h3>'.$data["pnumber"].'</h3></td>
	// 	</tr>
	// 	<tr>
	// 	<td><h2>Subject:</h2></td>
	// 	<td><h3>'.$data["subject"].'</h3></td>
	// 	</tr>
	// 	<tr>
	// 	<td><h2>Message:</h2></td>
	// 	<td><h3>'.$data["message"].'</h3></td>
	// 	</tr>
	// 	</table>
	// 	</div>
	// 	</body>
	// 	</html>';
               
	// 	$this->email->from('mail@cloudlogic.in'); // change it to yours
	// 	$this->email->to('musthakcse@gmail.com');
 //                $this->email->subject('Message');
 //                $this->email->message($body);
 //                //$message=$this->load->view('resetpasswordtemplate',NULL,TRUE);
 //                 // $this->email->message('name:'.$data["name"].' '.' '.'email:'.$data["email"].' '.'Phone number:'.''.$data["pnumber"].''.'subject:'.''.$data["subject"].''.'Message:'.$data["message"]);


 //               if ($this->email->send())
 //                {
 //                    redirect ('BigdatasiteController/contact');
 //                }
 //                else 
 //                {
 //                     show_error($this->email->print_debugger());
 //                }
	// }
	
 }

