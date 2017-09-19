<?php defined('BASEPATH') OR exit('No direct script access allowed');
class BigdataAdminController extends CI_Controller 
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('BigdataAdminModel');
        header("Access-Control-Allow-Origin: *");
	    $this->load->library('session');
		$this->load->helper('path');
		$this->load->helper('string');

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
    function enrollvalue()
    {  

		$result=$this->BigdataAdminModel->enrollvalue();
     	echo json_encode($result);
    }
    function detailform()
    {
    	//print_r("expression");exit();
		$result2=$this->BigdataAdminModel->detailform();
    	$data['result'][0]['first_name'] = $result2[0]['first_name'];
    	$data['result'][0]['preferred_course'] = $result2[0]['preferred_course'];
		$data['result'][0]['last_name'] = $result2[0]['last_name'];
        $data['result'][0]['email'] = $result2[0]['email'];
		$data['result'][0]['course_name'] = $result2[0]['course_name'];
		$data['result'][0]['contact'] = $result2[0]['contact'];
		$data['result'][0]['address'] = $result2[0]['address'];
        $data['result'][0]['other'] = $result2[0]['other'];
		$data['result'][0]['session'] = $result2[0]['session'];
		$data['result'][0]['first_start_time'] = $result2[0]['first_start_time'];
		$data['result'][0]['second_start_time'] = $result2[0]['second_start_time'];
		$data['result'][0]['first_end_time'] = $result2[0]['first_end_time'];
		$data['result'][0]['second_end_time'] = $result2[0]['second_end_time'];
		$data['result'][0]['third_start_time'] = $result2[0]['third_start_time'];
		$data['result'][0]['third_end_time'] = $result2[0]['third_end_time'];
        $data['result'][0]['fourth_start_time'] = $result2[0]['fourth_start_time'];
		$data['result'][0]['fourth_end_time'] = $result2[0]['fourth_end_time'];
		$data['result'][0]['session_show'] = $result2[0]['session_show'];
		$data['result'][0]['session_id'] = $result2[0]['session_id'];
		$data['result'][0]['flag'] = $result2[0]['flag'];
		$data['result'][0]['educational_type'] = $result2[0]['educational_type'];
		$data['result'][0]['education_name'] = $result2[0]['education_name'];
		$data['result'][0]['ready_to'] = $result2[0]['ready_to'];
		$data['result'][0]['contact_me'] = $result2[0]['contact_me'];
		$data['result'][0]['work_exp'] = $result2[0]['work_exp'];
		$data['result'][0]['enroll_id'] =$this->input->post('enroll_map_id');
		
		$this->email->set_mailtype("html");
	    $this->email->set_newline("\r\n");
	    $this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
	    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB Administrator'); // change it to yours
	    $this->email->to($data['result'][0]['email']);
	    $this->email->subject('You have successfully registered for course.');
        $message=$this->load->view('paymentproceed',$data,TRUE);
	    $this->email->message($message);
	    if (!$this->email->send())
	    {
	    	//show_error($this->email->print_debugger());
	        redirect("BigdatasiteController/index");
	    }


	    
    	$this->email->set_mailtype("html");
	    $this->email->set_newline("\r\n");
	    $this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
	    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB'); // change it to yours
	    $this->email->to('ivonne.ayala@bdihub.com');
	    $this->email->cc("Priscilla.william@bdihub.com,lauro.bianda@bdihub.com");
	    $this->email->to('jayawebdeveloper@gmail.com');
	  	$this->email->subject('New student registered');
        $message=$this->load->view('paymentproceedadmin',$data,TRUE);
	    $this->email->message($message);
	    if (!$this->email->send())
	    {
	    	//show_error($this->email->print_debugger());
	        redirect("BigdatasiteController/index");
	    }

          redirect("BigdatasiteController/index");
	}
	function detailform_trainingcourse()
    {
		$this->load->view('includes/header');

    	$result2=$this->BigdataAdminModel->detailform_other();
    	if($result2[0]['session_id']=='3')
    	{

    		$result2=$this->BigdataAdminModel->detailform_both();
    		$data['result'][0]['first_name'] = $result2[0]['first_name'];
			$data['result'][0]['last_name'] = $result2[0]['last_name'];
			$data['result'][0]['email'] = $result2[0]['email'];
			$data['result'][0]['course_name'] = $result2[0]['course_name'];
			$data['result'][0]['contact'] = $result2[0]['contact'];
			$data['result'][0]['address'] = $result2[0]['address'];
			$data['result'][0]['session'] = $result2[0]['session'];
			$data['result'][0]['first_start_time'] = $result2[0]['first_start_time'];
			$data['result'][0]['second_start_time'] = $result2[0]['second_start_time'];
			$data['result'][0]['first_end_time'] = $result2[0]['first_end_time'];
			$data['result'][0]['second_end_time'] = $result2[0]['second_end_time'];
			$data['result'][0]['third_start_time'] = $result2[0]['third_start_time'];
			$data['result'][0]['third_end_time'] = $result2[0]['third_end_time'];
            $data['result'][0]['session_show'] = $result2[0]['session_show'];
			$data['result'][0]['session_id'] = $result2[0]['session_id'];
			$data['result'][0]['flag'] = $result2[0]['flag'];
			$data['result'][0]['day'] = $result2[0]['day'];
			$data['result'][0]['enroll_id'] =$this->input->post('enroll_map_id');
			$data['result'][0]['amount'] = $result2[0]['course_amount'];

	    	$this->load->view('payment_details', $data);
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB'); 
		    $this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
		    $this->email->to($data['result'][0]['email']);
		    $this->email->subject('You have successfully registered for course.');
	        $message=$this->load->view('paymentlater',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		      redirect("BigdatasiteController/index");
		      //show_error($this->email->print_debugger());
		    }
		  
	    
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB'); 
		    //$this->email->to('jayawebdeveloper@gmail.com');
		    $this->email->from('info@bdihub.com','BDIHUB'); // change it to yours
			$this->email->to('ivonne.ayala@bdihub.com');
		    $this->email->cc("Priscilla.william@bdihub.com,lauro.bianda@bdihub.com");
		    $this->email->subject('New student registered');
	        $message=$this->load->view('paymentlateradmin',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		      //show_error($this->email->print_debugger());
		    	redirect("BigdatasiteController/index");
		    }
		} 
    	else
    	{
	    	$data['result'][0]['first_name'] = $result2[0]['first_name'];
			$data['result'][0]['last_name'] = $result2[0]['last_name'];
			$data['result'][0]['email'] = $result2[0]['email'];
			$data['result'][0]['course_name'] = $result2[0]['course_name'];
			$data['result'][0]['contact'] = $result2[0]['contact'];
			$data['result'][0]['address'] = $result2[0]['address'];
			$data['result'][0]['session'] = $result2[0]['session'];
			$data['result'][0]['first_start_time'] = $result2[0]['first_start_time'];
			$data['result'][0]['second_start_time'] = $result2[0]['second_start_time'];
			$data['result'][0]['first_end_time'] = $result2[0]['first_end_time'];
			$data['result'][0]['second_end_time'] = $result2[0]['second_end_time'];
			$data['result'][0]['third_start_time'] = $result2[0]['third_start_time'];
			$data['result'][0]['third_end_time'] = $result2[0]['third_end_time'];
            $data['result'][0]['session_show'] = $result2[0]['session_show'];
			$data['result'][0]['session_id'] = $result2[0]['session_id'];
			$data['result'][0]['flag'] = $result2[0]['flag'];
			$data['result'][0]['enroll_id'] =$this->input->post('enroll_map_id');
			$data['result'][0]['amount'] = $result2[0]['course_amount'];
			
	    	$this->load->view('payment_details', $data);
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB'); 
		    $this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
		    $this->email->to($data['result'][0]['email']);
		    $this->email->subject('You have successfully registered for course.');
	        $message=$this->load->view('paymentlater',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		    	redirect("BigdatasiteController/index");
		     // show_error($this->email->print_debugger());

		    }
		      	
	    	
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB'); 
		    //$this->email->to('jayawebdeveloper@gmail.com');
		    $this->email->from('info@bdihub.com','BDIHUB'); // change it to yours
		    $this->email->to('ivonne.ayala@bdihub.com');
		    $this->email->cc("Priscilla.william@bdihub.com,lauro.bianda@bdihub.com");
		    $this->email->subject('New student registered');
	        $message=$this->load->view('paymentlateradmin',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		    	redirect("BigdatasiteController/index");
		      //show_error($this->email->print_debugger());
		    }
		}
	}
	function paymentlater()
    {
  		
  		$this->load->view('includes/header');

    	$result2=$this->BigdataAdminModel->detailform_other();
    	//print_r($result2[0]['session_id']); exit();
    	if($result2[0]['session_id']=='3')
    	{

    		$result2=$this->BigdataAdminModel->detailform_both();
	    	$data['result'][0]['first_name'] = $result2[0]['first_name'];
			$data['result'][0]['last_name'] = $result2[0]['last_name'];
			$data['result'][0]['email'] = $result2[0]['email'];
			$data['result'][0]['course_name'] = $result2[0]['course_name'];
			$data['result'][0]['contact'] = $result2[0]['contact'];
			$data['result'][0]['address'] = $result2[0]['address'];
			$data['result'][0]['session'] = $result2[0]['session'];
			$data['result'][0]['first_start_time'] = $result2[0]['first_start_time'];
			$data['result'][0]['second_start_time'] = $result2[0]['second_start_time'];
			$data['result'][0]['first_end_time'] = $result2[0]['first_end_time'];
			$data['result'][0]['second_end_time'] = $result2[0]['second_end_time'];
			$data['result'][0]['third_start_time'] = $result2[0]['third_start_time'];
			$data['result'][0]['third_end_time'] = $result2[0]['third_end_time'];
			$data['result'][0]['session_show'] = $result2[0]['session_show'];
			$data['result'][0]['session_id'] = $result2[0]['session_id'];
			$data['result'][0]['flag'] = $result2[0]['flag'];
			$data['result'][0]['day'] = $result2[0]['day'];
			$data['result'][0]['enroll_id'] =$this->input->post('enroll_map_id');
			$data['result'][0]['amount'] = $result2[0]['course_amount'];
			
	    	
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    $this->email->from('jayawebdeveloper@gmail.com','BDIHUB Administrator'); 
		    //$this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
		    $this->email->to($data['result'][0]['email']);
		    $this->email->subject('You have successfully registered for course.');
	        $message=$this->load->view('paymentlater',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		      show_error($this->email->print_debugger());
		    }
		    
	    	
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB Administrator'); 
		    $this->email->from('info@bdihub.com','BDIHUB'); // change it to yours
		    $this->email->to('ivonne.ayala@bdihub.com');
		    $this->email->cc("Priscilla.william@bdihub.com,lauro.bianda@bdihub.com");
		    //$this->email->to('jayawebdeveloper@gmail.com');
		   	$this->email->subject('New student registered');
	        $message=$this->load->view('paymentlateradmin',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		      show_error($this->email->print_debugger());
		    }
        } 
    	else
    	{
	    	$data['result'][0]['first_name'] = $result2[0]['first_name'];
			$data['result'][0]['last_name'] = $result2[0]['last_name'];
			$data['result'][0]['email'] = $result2[0]['email'];
			$data['result'][0]['course_name'] = $result2[0]['course_name'];
			$data['result'][0]['contact'] = $result2[0]['contact'];
			$data['result'][0]['address'] = $result2[0]['address'];
			$data['result'][0]['session'] = $result2[0]['session'];
			$data['result'][0]['first_start_time'] = $result2[0]['first_start_time'];
			$data['result'][0]['second_start_time'] = $result2[0]['second_start_time'];
			$data['result'][0]['first_end_time'] = $result2[0]['first_end_time'];
			$data['result'][0]['second_end_time'] = $result2[0]['second_end_time'];
			$data['result'][0]['third_start_time'] = $result2[0]['third_start_time'];
			$data['result'][0]['third_end_time'] = $result2[0]['third_end_time'];
			$data['result'][0]['session_show'] = $result2[0]['session_show'];
			$data['result'][0]['session_id'] = $result2[0]['session_id'];
			$data['result'][0]['flag'] = $result2[0]['flag'];
			$data['result'][0]['enroll_id'] =$this->input->post('enroll_map_id');
			$data['result'][0]['amount'] = $result2[0]['course_amount'];
			
	    	
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    $this->email->from('jayawebdeveloper@gmail.com','BDIHUB Administrator'); 
		    //$this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
		    $this->email->to($data['result'][0]['email']);
		    $this->email->subject('You have successfully registered for course.');
	        $message=$this->load->view('paymentlater',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		      show_error($this->email->print_debugger());
		    }
			
	    	
			$this->email->set_mailtype("html");
		    $this->email->set_newline("\r\n");
		    //$this->email->from('jayawebdeveloper@gmail.com','BDIHUB Administrator'); 
		    //$this->email->to('jayawebdeveloper@gmail.com');
		    $this->email->from('info@bdihub.com','BDIHUB'); // change it to yours
		    $this->email->to('ivonne.ayala@bdihub.com');
		    $this->email->cc("Priscilla.william@bdihub.com,lauro.bianda@bdihub.com");
		    $this->email->subject('New student registered');
	        $message=$this->load->view('paymentlateradmin',$data,TRUE);
		    $this->email->message($message);
		    if (!$this->email->send())
		    {
		      show_error($this->email->print_debugger());
		    }
		}
  	}
  	function  paymentlater_page($id)
    {
    	$result = $this->BigdataAdminModel->payment_check($id);
    	if($result[0]['payment'] != "success"){

    	//print_r($result);exit();
    	$this->load->view('includes/header');

    	$result2=$this->BigdataAdminModel->detailform_other_paylater($id);
    	//print_r($result2[0]['session_id']); exit();
    	if($result2[0]['session_id']=='3')
    	{

    		$result2=$this->BigdataAdminModel->detailform_both_paylater($id);
    		//print_r($result2); exit();
	    	$data['result'][0]['first_name'] = $result2[0]['first_name'];
			$data['result'][0]['last_name'] = $result2[0]['last_name'];
			$data['result'][0]['email'] = $result2[0]['email'];
			$data['result'][0]['course_name'] = $result2[0]['course_name'];
			$data['result'][0]['contact'] = $result2[0]['contact'];
			$data['result'][0]['address'] = $result2[0]['address'];
			$data['result'][0]['session'] = $result2[0]['session'];
			$data['result'][0]['first_start_time'] = $result2[0]['first_start_time'];
			$data['result'][0]['second_start_time'] = $result2[0]['second_start_time'];
			$data['result'][0]['first_end_time'] = $result2[0]['first_end_time'];
			$data['result'][0]['second_end_time'] = $result2[0]['second_end_time'];
			$data['result'][0]['third_start_time'] = $result2[0]['third_start_time'];
			$data['result'][0]['third_end_time'] = $result2[0]['third_end_time'];
			$data['result'][0]['session_show'] = $result2[0]['session_show'];
			$data['result'][0]['session_id'] = $result2[0]['session_id'];
			$data['result'][0]['flag'] = $result2[0]['flag'];
			$data['result'][0]['day'] = $result2[0]['day'];
			$data['result'][0]['enroll_id'] =$this->input->post('enroll_map_id');
			$data['result'][0]['amount'] = $result2[0]['course_amount'];

			$this->load->view('payment_details', $data); 
			
			
             
    	} 
    	else
    	{
	    	$data['result'][0]['first_name'] = $result2[0]['first_name'];
			$data['result'][0]['last_name'] = $result2[0]['last_name'];
			$data['result'][0]['email'] = $result2[0]['email'];
			$data['result'][0]['course_name'] = $result2[0]['course_name'];
			$data['result'][0]['contact'] = $result2[0]['contact'];
			$data['result'][0]['address'] = $result2[0]['address'];
			$data['result'][0]['session'] = $result2[0]['session'];
			$data['result'][0]['first_start_time'] = $result2[0]['first_start_time'];
			$data['result'][0]['second_start_time'] = $result2[0]['second_start_time'];
			$data['result'][0]['first_end_time'] = $result2[0]['first_end_time'];
			$data['result'][0]['second_end_time'] = $result2[0]['second_end_time'];
			$data['result'][0]['third_start_time'] = $result2[0]['third_start_time'];
			$data['result'][0]['third_end_time'] = $result2[0]['third_end_time'];
			$data['result'][0]['session_show'] = $result2[0]['session_show'];
			$data['result'][0]['session_id'] = $result2[0]['session_id'];
			$data['result'][0]['flag'] = $result2[0]['flag'];
			$data['result'][0]['enroll_id'] =$this->input->post('enroll_map_id');
			$data['result'][0]['amount'] = $result2[0]['course_amount'];

    		$this->load->view('payment_details', $data);

    		}

    	}else{

    		//$this->BigdatasiteController->thankyou_payment_success();
    		redirect('BigdatasiteController/thankyou_payment_success');
    	}


    	
    }
	function login_auth()
	{
		
		$user=$this->input->post('user_id');
		$password=$this->input->post('user_password');
		$result=$this->BigdataAdminModel->login_auth($user,$password);
		if($result==1)
		{
            $this->session->set_userdata('admin_id',$user);
		    redirect('BigdataAdminController/admin_dashboard');
		}else
		{
			$this->session->set_flashdata('error','User Id and password is Incorrected');
			 redirect('BigdatasiteController/admin');
		}
	    
	}
	function admin_dashboard()
	{
                
		$check=$this->session->userdata('admin_id');
		if($check)
		{   
			//print("come in dashboard"); 
			$this->load->view('admin/header');
			$this->load->view('admin/dashboard');
		}
		else{
			 redirect('BigdatasiteController/admin');
		}

	}
	function enroll_student_view()
	{
		$check=$this->session->userdata('admin_id');
		if($check)
		{
	      	$data['result']=$this->BigdataAdminModel->get_enrollstudent();
	    	$this->load->view('admin/header');
		  	$this->load->view('admin/enroll_view',$data);
		}
		else
		{
			redirect('BigdatasiteController');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('admin_id');
        redirect('BigdatasiteController');
	}











/*
    function payumoney_succsess()
    {
    	
    	$email=$_POST['email'];
    	$result=$this->BigdataAdminModel->update_transaction($email);
		$this->load->view('payumoney_success');

    }
    function payumoney_failure()
    {

    	$this->load->view('payumoney_failure');
    	
    }
 

 	function sendEmailfail()
    {

     $this->load->view('includes/header');
     $data['result']=$this->BigdataAdminModel->emaildetails();
 	 // print_r($data); exit();
	 $config = Array(
		   'protocol' => 'smtp',
		    'smtp_host' => 'smtp.bdihub.com',
		   'smtp_port' => 587,
		   'smtp_user' => 'info@bdihub.com', // change it to yours
		   'smtp_pass' => 'welcome123', // change it to yours
		   'charset' => 'iso-8859-1',
		   'wordwrap' => TRUE,
           'smtp_auth'=> TRUE
		  );
    	$this->email->initialize($config);
    	$this->load->library('email', $config);
		$this->email->set_mailtype("html");
	    $this->email->set_newline("\r\n");
	    $this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
	    $this->email->to($data['result'][0]['email']);
	    $this->email->subject('New Candidate Registered.');
        $message=$this->load->view('assessmentFailure',$data,TRUE);
	    $this->email->message($message);
	    if (!$this->email->send())
	    {
	      show_error($this->email->print_debugger());
	    }

	}
	function sendEmail(){
    	$data['email']=$this->input->post('email');
    	$data['firstname']=$this->input->post('first_name');
    	$data['lastname']=$this->input->post('last_name');
    	$data['phonenum']=$this->input->post('phone_num');
    	$data['company']=$this->input->post('company');
    	$data['course']=$this->input->post('course');
    	$data['batch']=$this->input->post('batch');
    	$data['batch_timing']=$this->input->post('batch_timing');
        //print_r($data['firstname']);exit();
     //print_r($email);exit();
    	$config = Array(
		   'protocol' => 'smtp',
		    'smtp_host' => 'smtp.bdihub.com',
		   'smtp_port' => 587,
		   'smtp_user' => 'info@bdihub.com', // change it to yours
		   'smtp_pass' => 'welcome123', // change it to yours
		   'charset' => 'iso-8859-1',
		   'wordwrap' => TRUE,
                   'smtp_auth'=> TRUE
		  );
    	       $this->email->initialize($config);
    	       $this->load->library('email', $config);
		 $this->email->set_mailtype("html");
	        $this->email->set_newline("\r\n");
    	
		$this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
	     $this->email->to($data['email']);
	    $this->email->subject('You have successfully registered for course.');
            $message=$this->load->view('enrollstudent',$data,TRUE);
	    $this->email->message($message);
	    if (!$this->email->send())
	    {
	      show_error($this->email->print_debugger());
	    }



	    $config = Array(
		   'protocol' => 'smtp',
		    'smtp_host' => 'smtp.bdihub.com',
		   'smtp_port' => 587,
		   'smtp_user' => 'info@bdihub.com', // change it to yours
		   'smtp_pass' => 'welcome123', // change it to yours
		   'mailtype' => 'text',
		   'charset' => 'iso-8859-1',
		   'wordwrap' => TRUE,
                   'smtp_auth'=> TRUE
		  );
    	 $this->email->initialize($config);
    	$this->load->library('email', $config);
        $this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
    	
		$this->email->from('info@bdihub.com','BDIHUB Administrator'); // change it to yours
	    $this->email->to('jayawebdeveloper@gmail.com');
	    $this->email->subject('New candidate registered for Big Data-Associate course.');
            $message=$this->load->view('enrolladmtemplate',$data,TRUE);
	    $this->email->message($message);
	    if (!$this->email->send())
	    {
	      show_error($this->email->print_debugger());
	    }

	  
    }

    

     function verify($number)
     {
    	
	    //print_r("dfd"); exit();
	    $data['result']=$this->BigdataAdminModel->paymoney_get_buyer($number);
	    $this->load->view('enroll_header');
		$this->load->view('paymoney',$data);
		$this->load->view('footer');

		//print_r($data['result']); exit();
	}
	 function success_payment()
    {
        
        $paypalInfo = $this->input->get();
        print_r($paypalInfo); exit();
        $data['item_number'] = $paypalInfo['item_number']; 
        $data['txn_id'] = $paypalInfo["tx"];
        $data['payment_amt'] = $paypalInfo["amt"];
        $data['currency_code'] = $paypalInfo["cc"];
        $data['status'] = $paypalInfo["st"];
        
           $this->load->view('enroll_header');
           $this->load->view('success');
           $this->load->view('footer');


    }
   
    function register()
    {
    	$user_name=$this->input->post('user_name');
    	$user_id=$this->input->post('user_id');
		$user_password=$this->input->post('user_password');
	    $user_role=$this->input->post('user_role');
		$result=$this->BigdataAdminModel->register($user_id,$user_password,$user_name,$user_role);
    }
    function check()
    {
    	$user_id=$this->input->post('user_id');
    	$result=$this->BigdataAdminModel->check($user_id);
    }
	
	function forget_pass()
	{
    	$user=$this->input->post('user_id');
    	$result=$this->BigdataAdminModel->forget_pass($user);
    	if($result==1)
    	{
    		
           echo 1;
    	}
    	else{
            
            echo 2;
    	}
    }
    function savenewpass()
    {
      	$new_password=$this->input->post('new_password');
      	$id=$this->input->post('id');
      	$result=$this->BigdataAdminModel->savenewpass($new_password,$id);
    }

    function student_dashboard()
	{
         
		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			$this->load->view('student/header');
			$this->load->view('student/dashboard');
		}
		else
		{
			 redirect('BigdatasiteController');
		}
	}
	
	function bdihub_users()
	{
		$check=$this->session->userdata('sessiondata');
		if($check)
		{

			$data['result']=$this->BigdataAdminModel->get_users();
			$this->load->view('admin/header');
			$this->load->view('admin/user',$data);
		}
		else{
			 redirect('BigdatasiteController');
		}
	}
	function add_user_button()
	{

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			$this->load->view('admin/header');
			$data['mode']="add";
			$this->load->view('admin/add_user',$data);
		}
		else{
			 redirect('BigdatasiteController');
		}
	}
	function add_users()
	{

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			$this->BigdataAdminModel->add_user();

		}
		else{
			 redirect('BigdatasiteController');
		}
	}
	function user_edit($id){

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			$data['result']=$this->BigdataAdminModel->edit_user($id);
			$this->load->view('admin/header');
			$data['mode']="edit";
			$this->load->view('admin/add_user',$data);
		}
		else{
			 redirect('BigdatasiteController');
		}
	}
    function update_users(){

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			//print_r("dfds"); exit();
			$this->BigdataAdminModel->update_users();

		}
		else{
			 redirect('BigdatasiteController');
		}


	 }
        function user_delete($id)
	{
		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			$this->BigdataAdminModel->delete_users($id);

		}
		else{
			 redirect('BigdatasiteController');
		}
	}
	function reg_student(){

		$check=$this->session->userdata('sessiondata');
		if($check)
		{

			$data['result']=$this->BigdataAdminModel->reg_student();
			$this->load->view('admin/header');
			$this->load->view('admin/reg_view',$data);
		}
		else{
			 redirect('BigdatasiteController');
		}
	}
	
	function batch_student_view()
	{
		$check=$this->session->userdata('sessiondata');
		if($check)
		{
		    $data['result']=$this->BigdataAdminModel->get_schedular();
		    $this->load->view('admin/header');
			$this->load->view('admin/batch_view',$data);
		}
		else{
			redirect('BigdatasiteController');
		}
	}
	function bigdata_header()
	{
		$data['editdata']=$this->BigdataAdminModel->bigdata_headerview();
		$this->load->view('admin/header');
		$this->load->view('admin/bigdata_header',$data);
	}
	function header_update()
	{
		$this->BigdataAdminModel->header_update();
	}
	function footer()
	{   
		$data['editdata']=$this->BigdataAdminModel->footerview();
	    $this->load->view('admin/header');
		$this->load->view('admin/footer',$data);
	}
	function footer_update()
	{
		$this->BigdataAdminModel->footer_update();
	}
	function Home()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/home');
	}
	function home_update()
	{
		$this->BigdataAdminModel->home_update();
	}
	function About()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/about');
	}
	function courses()
	{
		$this->load->view('admin/header');
		$data['result']=$this->BigdataAdminModel->get_course();
		$this->load->view('admin/course_view',$data);
		
	}
	function course_edit($id)
	{
		
		//print_r($id); exit();
		$this->load->view('admin/header');
		$data['result']=$this->BigdataAdminModel->edit_course($id);
		//print_r($data); exit();
		$this->load->view('admin/course_edit',$data);
	}
	function update_course()
	{

       $this->BigdataAdminModel->update_course();

	}
        function course_delete($id)
	{
		$this->BigdataAdminModel->course_delete($id);
	}
	function contact()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/contact');
	}
	function show_class(){
		$id=($_POST['id']);
		//print_r($id); exit();
		$data=$this->BigdataAdminModel->show_class($id);
		//echo json_encode($data);

		foreach($data as $row)  {  ?>
  	<option value="<?php echo $row['class_id']?>">
	 <?php echo $row['class_name']?></option>
	 <?php } 


	}
	function get_class()
	{
		
		$this->load->view('admin/header');
		$data['result']=$this->BigdataAdminModel->get_class();
		$this->load->view('admin/class',$data);
	}
	function class_edit($id)
	{

		$this->load->view('admin/header');
		$data['result']=$this->BigdataAdminModel->edit_class($id);
		$this->load->view('admin/class_edit',$data);
	}
	function update_class()
	{
         
		$this->BigdataAdminModel->update_class();
	}
        function class_delete($id)
	{

            $this->BigdataAdminModel->class_delete($id);
	}
	function schedular(){

		$this->load->view('admin/header');
		$data['result']=$this->BigdataAdminModel->get_schedular();
		$this->load->view('admin/schedular',$data);

	}
	function show_batch(){
		$id=($_POST['id']);
		//print_r($id); exit();
		$data=$this->BigdataAdminModel->show_batch($id);
		//echo json_encode($data);
		$count=1; foreach($data as $row)  {  ?>
	  	<tr>
              <input type="hidden" value="<?php echo $row['class_schedule_id']?>" id="class_schedule_id">
	  	     <td><?php echo $count;?></td>
			 <td><?php echo $row['start_date']?></td>
			 <td><?php echo $row['end_date']?></td>
			 <td>
			 <a  type="button" id="edit_batch" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
 		 <a href="<?php echo base_url();?>BigdataAdminController/class_delete/<?php echo $row['class_schedule_id'];?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa fa-trash-o"></i></a>
	 		 </td>
  	</tr>
     <?php $count++; } 


	}
	function edit_batch(){

		$id=($_POST['id']);
		$data=$this->BigdataAdminModel->edit_batch($id);
		$data[0]['start_date']=date('d-M-Y',strtotime($data[0]['start_date']));
		$data[0]['end_date']=date('d-M-Y',strtotime($data[0]['end_date']));
		echo json_encode($data);

	}
	function update_batch(){

		$id=($_POST['id']);
		//print_r($id); exit();
		$data=$this->BigdataAdminModel->update_batch($id);
		// $data[0]['start_date']=date('d-M-Y',strtotime($data[0]['start_date']));
		// $data[0]['end_date']=date('d-M-Y',strtotime($data[0]['end_date']));
		// echo json_encode($data);

	}
	function insert_batchdate(){

		$this->BigdataAdminModel->insert_batchdate();

	}

	function add_jobprofile(){
		//print_r("dd"); exit();
		$this->BigdataAdminModel->add_jobprofile();

	}
	function job_profile()
	{
		
		$this->load->view('admin/header');
		$data['result']=$this->BigdataAdminModel->get_job_profile();
		$this->load->view('admin/jobprofile_view',$data);
	}
	function jobprofile_edit()
	{
		$id=($_POST['id']);
		//print_r($id); exit();
		$data=$this->BigdataAdminModel->jobprofile_edit($id);
		echo json_encode($data);
	}
	function update_jobprofile(){

       $id=($_POST['id']);
       $data=$this->BigdataAdminModel->update_jobprofile($id);
	}
        function job_profile_delete($id)
	{
		$this->BigdataAdminModel->job_profile_delete($id);

	}
	function stu_pre_req(){

        $this->load->view('admin/header');
		$data['result']=$this->BigdataAdminModel->stu_pre_req();
		$this->load->view('admin/stu_pre_req',$data);
	}
	function add_stu_pre(){

		$this->BigdataAdminModel->add_stu_pre();
	}
	function stu_pre_edit(){
		$id=($_POST['id']);
		//print_r($id); exit();
		$data=$this->BigdataAdminModel->stu_pre_edit($id);
		echo json_encode($data);
		
	}
	function update_student_pre(){
       $id=($_POST['stu_id']);
       //print_r($_POST); exit();
       $data=$this->BigdataAdminModel->update_student_pre($id);

	}
	function syllabus_view(){
		
		$check=$this->session->userdata('sessiondata');
		//print_r($check); exit();
		if($check)
		{

        $this->load->view('admin/header');
        $data['result']=$this->BigdataAdminModel->syllabus_view();
		$this->load->view('admin/syllabus_view',$data);
		}
		else{

			redirect('BigdatasiteController');
		}

	}
	function syllabus_add(){

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
        $this->load->view('admin/header');
        //$data['result']=$this->BigdataAdminModel->student_profile();
		$this->load->view('admin/syllabus_add');
		}
		else{

			redirect('BigdatasiteController');
		}

	}
	function student_profile()
	{	
		$check=$this->session->userdata('sessiondata');
		if($check)
		{
        $this->load->view('student/header');
        $data['result']=$this->BigdataAdminModel->student_profile();
		$this->load->view('student/student_profile',$data);
		}
		else{

			redirect('BigdatasiteController');
		}
	}
	function update_profile(){
        
		$this->BigdataAdminModel->update_profile();
		
	}
	function syallabus(){

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
        $this->load->view('student/header');
        //$data['result']=$this->BigdataAdminModel->student_profile();
		$this->load->view('student/syallabus');
		}
		else{

			redirect('BigdatasiteController');
		}

	}
	function duration(){

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
        $this->load->view('student/header');
        //$data['result']=$this->BigdataAdminModel->student_profile();
		$this->load->view('student/duration');
		}
		else{

			redirect('BigdatasiteController');
		}

	}
	function add_syllabus(){

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
       	    $this->BigdataAdminModel->add_syllabus();
		}
		else{

			redirect('BigdatasiteController');
		}

	}
	function syl_edit($id)
	{

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
		   $this->load->view('admin/header');
       	   $data['result']=$this->BigdataAdminModel->syl_edit($id);
       	   $this->load->view('admin/syllabus_edit',$data);
		}
		else{

			redirect('BigdatasiteController');
		}

	}
     function update_syllabus()
	{

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
		   
       	           $this->BigdataAdminModel->update_syllabus();
       	         
		}
		else{

			redirect('BigdatasiteController');
		}

	}
	function syl_view($id)
	{

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
		  
		   $this->load->view('admin/header');
       	   $data['result']=$this->BigdataAdminModel->syl_view($id);
       	   $this->load->view('admin/syl_course_view',$data);
 
		}
		else{

			redirect('BigdatasiteController');
		}

	}
	function syl_delete($id)
	{

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			$this->BigdataAdminModel->syl_delete($id);
       	   }
		else{

			redirect('BigdatasiteController');
		}

	}
	
	function syl_particular_del()
	{

		$check=$this->session->userdata('sessiondata');
		if($check)
		{
			$id=($_POST['id']);
			$this->BigdataAdminModel->syl_particular_del($id);
       	}
		else{

			redirect('BigdatasiteController');
		}
	}

        function assessment(){
		 $res['data']=$this->BigdataAdminModel->assessCourses();
		 // echo '<pre>';
		 // print_r($res['data']);exit();
		$this->load->view('admin/header');
		$this->load->view('admin/assessment',$res);
	}

	function associate(){
		$this->load->view('associate');
	}


	function addquestions(){
		// print_r("test");exit();
		$data['courseName']=$this->BigdataAdminModel->courseName();
		
		$this->load->view('admin/header');
		$this->load->view('admin/addques',$data);
	}

	function deleteQues($id,$pattern){
		// print_r($id);
		// print_r($pattern);exit();
		$data = array(
			'courseId' => $id,
			'patternType' => $pattern
			);
		//print_r($data);exit();
		$result=$this->BigdataAdminModel->deleteCourse($data);
		// print_r($result);exit();
		 redirect(base_url('BigdataAdminController/assessment'));
		// editQuestionPage();
	}

	function editQues($id,$pattern){
		$data = array(
			'courseId' => $id,
			'patternType' => $pattern
			);
		$data['result']=$this->BigdataAdminModel->editQuestions($data);
			if($data){
				$this->load->view('admin/header');
				$this->load->view('admin/editQues',$data);
			}
			else{
				echo false;
			}
	}

	function updateQues(){
		
		
		$this->BigdataAdminModel->updateQuestions();
		redirect(base_url('BigdataAdminController/assessment'));
		
	}

	function insertquestions(){
		

			 $this->BigdataAdminModel->insertQues();


	}

	function deleteQuestion($id){


		$this->BigdataAdminModel->deleteQuestions($id);
		// redirect(base_url('BigdataAdminController/editQues'));
		echo true;
	}

	function activatePattern()
	{
		$this->BigdataAdminModel->activatePattern();
	}
*/
	
}
