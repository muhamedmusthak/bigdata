<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BigdataAdminModel extends CI_Model {

 	function enrollvalue()
  	{
	     $first_name=$this->input->post('first_name');
	     $preferred_course=$this->input->post('preferred_course');
	     $last_name=$this->input->post('last_name');
	     $salutation=$this->input->post('salutation');
	     $email=$this->input->post('email');
	     $contact=$this->input->post('contact');
	     $address=$this->input->post('address');
	     $other=$this->input->post('other');
	     //$course=$this->input->post('course');
	     $course_id=$this->input->post('course_id');
	     $edu_qualification=$this->input->post('edu_qualification');
	     $work_exp=$this->input->post('work_exp');
	     $read_to_start=$this->input->post('read_to_start');
	     $contact_me=$this->input->post('contact_me');

	     $insdata= array(
	      'salutation'=>$salutation,
	      'first_name'=>$first_name,
	      'last_name' => $last_name,
	      'email'=>$email,
	      'preferred_course'=>$preferred_course,
	      'contact'=>$contact,
	      'address'=>$address,
	      'other'=>$other,
	      'educational_id'=>$edu_qualification,
	      'work_exp'=>$work_exp,
	      'ready_to'=>$read_to_start,
	      'contact_me' => $contact_me,
	      'course_id' => $course_id
	      );
	     
	     //print_r($insdata);exit();
	     $this->db->insert('enroll',$insdata);
	     $enroll_id=$this->db->insert_id();
	     return [$enroll_id,$insdata];
 	}
    function detailform()
    {

	  	$enroll_id=$this->input->post('enroll_map_id');
	 	$this->db->select("*");
	  	$this->db->from('enroll');
	  	$this->db->where('enroll.enroll_id',$enroll_id);
		$this->db->join('course', 'course.course_id = enroll.course_id');
		$this->db->join('educational_qualification', 'educational_qualification.id = enroll.educational_id');
		$this->db->join('educational_type', 'educational_type.educational_type_id = educational_qualification.educational_type_id');
		$this->db->join('map_session', 'map_session.enroll_id = enroll.enroll_id');
		$this->db->join('session', 'session.session_id = map_session.session_id');
		$query=$this->db->get();
	    $result1=$query->result_array();
	    //print_r($result1); exit();
	 	return  $result1;
    }

    function detailform_other()
    {

	  	$enroll_id=$this->input->post('enroll_map_id');
	  	$this->db->select("*");
	  	$this->db->from('enroll');
	  	$this->db->where('enroll.enroll_id',$enroll_id);
		$this->db->join('course', 'course.course_id = enroll.course_id');
		$this->db->join('map_session', 'map_session.enroll_id = enroll.enroll_id');
		$this->db->join('session_others', 'session_others.session_id = map_session.session_id');
		$query=$this->db->get();
	    $result1=$query->result_array();
	  	return  $result1;
    }
	function  detailform_both()
    {

	  	$enroll_id=$this->input->post('enroll_map_id');
	  
	  	$this->db->select("*");
	  	$this->db->from('enroll');
	  	$this->db->where('enroll.enroll_id',$enroll_id);
		$this->db->join('course', 'course.course_id = enroll.course_id');
		$this->db->join('map_session', 'map_session.enroll_id = enroll.enroll_id');
		$this->db->join('session_others', 'session_others.session_id = map_session.session_id');
		$this->db->join('map_both', 'map_both.map_session_id = map_session.map_session_id');
		$this->db->join('day_time', 'day_time.day_time_id = map_both.day_time_id');
		$query=$this->db->get();
	    $result1=$query->result_array();
	    return  $result1;

    }
    function login_auth($user, $password)
    {
		
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('User_Id',$user);
		$this->db->where('User_Password',$password);
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			
			return true;
		}
		else{
			
			return false;
		}
		
	}
	function get_enrollstudent()
   	{
	    $this->db->select("") ;
	    $this->db->from('enroll');
	    $this->db->join('course', 'course.course_id = enroll.course_id');
	    $query = $this->db->get();
        return $query->result_array();
   	}
   	function payment_check($id){
    	$this->db->select('payment');
	  	$this->db->from('enroll');
	  	$this->db->where('enroll_id',$id);
	  	$query=$this->db->get();
	    $result1=$query->result_array();
	    return $result1;
    }
    function detailform_other_paylater($id)
    {

	  	//$enroll_id=$this->input->post('enroll_map_id');
	  	//print_r($enroll_id); exit();
	  	$this->db->select("*");
	  	$this->db->from('enroll');
	  	$this->db->where('enroll.enroll_id',$id);
		$this->db->join('course', 'course.course_id = enroll.course_id');
		$this->db->join('map_session', 'map_session.enroll_id = enroll.enroll_id');
		$this->db->join('session_others', 'session_others.session_id = map_session.session_id');
		
		//$this->db->join('map_both', 'map_both.map_session_id = map_session.map_session_id');
		//$this->db->join('day_time', 'day_time.day_time_id = map_both.day_time_id');
		$query=$this->db->get();
	    $result1=$query->result_array();
	    //print_r($result1); exit();
	    return  $result1;
    }
  	










// 	function emaildetails()
// 	{
// 		//print_r($_POST['enroll_map_id']);exit();
// 		$enroll_map_id=$_POST['enroll_map_id'];
// 		$this->db->select("*");
// 		$this->db->from('enroll');
// 		$this->db->where('enroll_id',$enroll_map_id);
// 		$query=$this->db->get();
// 		$result=$query->result_array();
// 		return $result;
		
// 	}
// 	function paymoney_get_buyer($number)
// 	{
     
//        //print_r($number); exit();


//        $statusupdate=array(
// 			'active'=>"Yes"
// 			);
       
//         $this->db->select('*');
// 	    $this->db->from('enroll');
// 	    $this->db->where('verification_code',$number);
// 		$this->db->update('enroll',$statusupdate);
// 		$result=$this->db->affected_rows();
// 		// print_r($result);
// 		// if($result>0)
// 		// {
// 			$last_update_num=$number;
// 			//print_r($last_id); exit();
// 			$this->db->select('first_name');
// 		    $this->db->from('enroll');
// 		    $this->db->where('verification_code',$number);
// 		    $this->db->join('class_enroll', 'class_enroll.enroll_id = enroll.enroll_id');
// 		    $this->db->join('class', 'class.class_id = class_enroll.class_duration_id');
// 		    $this->db->join('course', 'course.course_id = class.course_id');
// 			$query=$this->db->get();
//             $result1=$query->result_array();
//            // print_r($result1); exit();
//             return $result1;
			
// 		// }
// 	    //return $result; 
		
// 	}
//      function  detailform_both_paylater($id)
//    {
//    //	print_r($id);exit();
// 	  	//$enroll_id=$this->input->post('enroll_map_id');
// 	  	//print_r($enroll_id); exit();
// 	  	$this->db->select("*");
// 	  	$this->db->from('enroll');
// 	  	$this->db->where('enroll.enroll_id',$id);
// 		$this->db->join('course', 'course.course_id = enroll.course_id');
// 		$this->db->join('map_session', 'map_session.enroll_id = enroll.enroll_id');
// 		$this->db->join('session_others', 'session_others.session_id = map_session.session_id');
// 		$this->db->join('map_both', 'map_both.map_session_id = map_session.map_session_id');
// 		$this->db->join('day_time', 'day_time.day_time_id = map_both.day_time_id');
// 		$query=$this->db->get();
// 	    $result1=$query->result_array();
// 	    //print_r($result1);exit();
// 	    return  $result1;

//    }
//     function detailform_other_paylater($id)
//     {

// 	  	//$enroll_id=$this->input->post('enroll_map_id');
// 	  	//print_r($enroll_id); exit();
// 	  	$this->db->select("*");
// 	  	$this->db->from('enroll');
// 	  	$this->db->where('enroll.enroll_id',$id);
// 		$this->db->join('course', 'course.course_id = enroll.course_id');
// 		$this->db->join('map_session', 'map_session.enroll_id = enroll.enroll_id');
// 		$this->db->join('session_others', 'session_others.session_id = map_session.session_id');
		
// 		//$this->db->join('map_both', 'map_both.map_session_id = map_session.map_session_id');
// 		//$this->db->join('day_time', 'day_time.day_time_id = map_both.day_time_id');
// 		$query=$this->db->get();
// 	    $result1=$query->result_array();
// 	    //print_r($result1); exit();
// 	    return  $result1;
//     }
// 	function enrollvalue_admin(){
		
// 		$data['first_name']=$this->input->post('first_name');
// 		$data['last_name']=$this->input->post('last_name');
// 		$data['email']=$this->input->post('email');
// 		$data['contact']=$this->input->post('contact');
// 		$data['batch_id']=$this->input->post('batch');
// 		$data['date']=$this->input->post('date');
//         $this->db->select('*');
// 	    $this->db->from('class');
// 	    $this->db->where('class.class_id',$data['batch_id']);
//         $this->db->join('course', 'course.course_id = class.course_id');
//        	$query=$this->db->get();
//         $result=$query->result_array();
//         //print_r($result); exit();
//         $data['class']=$result[0]['class_name'];
//         $data['course']=$result[0]['course_name'];



//         $config=array(
//         'protocol' => 'smtp',
//         'smtp_host' => 'ssl://smtp.googlemail.com',
// 	    'smtp_user' => 'jayawebdeveloper@gmail.com', // change it to yours
// 	    'smtp_pass' => 'webdeveloper',
// 	    'smtp_port' => 465, // change it to yours
	   
// 	    'charset' => 'iso-8859-1',
//         'wordwrap' => TRUE,
//         'smtp_auth'=> TRUE
//         );
//         $this->email->initialize($config);
//         $this->load->library('email', $config);
//         $this->email->set_mailtype("html");
//         $this->email->set_newline("\r\n");
// 	    $this->email->from('jayawebdeveloper@gmail.com'); 
//             $this->email->to('jayawebdeveloper@gmail.com'); 
// 	    //$this->email->to('frankrajan@gmail.com');
//         $this->email->subject('New student enroll'); 
//         $message=$this->load->view('enrolladmintemplete',$data,TRUE);
//         $this->email->message($message);
// 	    if ($this->email->send())
//             {
//                //redirect ('BigdatasiteController/thankyou_verify');
//             	return true;
//             }
//             else 
//             {
//                 //show_error($this->email->print_debugger());
//             }
//    }
//     function register($user_id,$user_password,$user_name,$user_role)
//     {
    	
//     	$register=array(
//     	'User_Name'=>$user_name,
//     	'User_Id'=>$user_id,
//     	'User_Password'=>$user_password,
//     	'User_Role'=>$user_role
//     	);
        
//         $this->db->insert('user',$register);
// 		$config=array(
//         'protocol' => 'mail',
// 	    'smtp_host' => 'ssl://secure180.servconfig.com',
// 	    'smtp_port' => 465,
// 	    'smtp_user' => 'mail@cloudlogic.in', // change it to yours
// 	    'smtp_pass' => 'welcome123', // change it to yours
// 	    'mailtype' => 'html',
// 	    'smtp_crypto'=>'ssl',
// 	    'charset' => 'utf-8',
// 	    'wordwrap' => TRUE,
//         'smtp_auth'=> TRUE
// 		);
// 		$this->load->library('email', $config);
//         $this->email->set_newline("\r\n");
// 	    //$this->email->initialize($config);  
//         $this->email->from('mail@cloudlogic.in'); 
// 	    $this->email->to($user_id);
// 	    $this->email->subject('Registration Verification');
// 	    $this->email->message('Thanks for signing Up! Your account has been created, you can login with your credentials after you have choose the course, go to choose your course');
//         //$this->email->message($msg);  
// 	    if ($this->email->send())
//         {
//                  // echo 'Your e-mail has been sent!';
//                 //show_error($this->email->print_debugger());
//         }
//              //else {
//                //echo 'Your e-mail has been sent!';
//               //redirect ('BigdatasiteController/thankyou');
//                //}
               
// 		redirect ('BigdatasiteController/thankyou');

//     }
// 	function check($user_id)
//     {
//        $this->db->select('*');
// 	   $this->db->from('user');
// 	   $this->db->where('User_Id',$user_id);
// 	   $query=$this->db->get();
// 	   if($query->num_rows()>0)
// 	   { 
// 	   	  //print_r('false'); 
//           $isAvailable = false;
//        }
//        else{
//        	 $isAvailable = true;
//        }
//        echo json_encode(array(
//            'valid' => $isAvailable,
//       ));
//    }
    
// 	function add_user()
// 	{

//      $email= $this->input->post('User_Id');
//      $name= $this->input->post('User_Name');
//      $password= $this->input->post('User_Password');
//      $user_role= $this->input->post('User_Role');
//      	$add=array(
//     		'User_Name'=>$name,
//     		'User_Id'=>$email,
// 			'User_Password'=>$password,
// 			'User_Role'=>$user_role
//         );
//         //print_r($add); exit();
//      	$this->db->insert('user',$add);
//      	redirect('BigdataAdminController/bdihub_users');

// 	}
// 	function get_users(){

// 	   $this->db->select('*');
// 	   $this->db->from('user');
// 	   //$this->db->where('User_Role !=',"studnet");
// 	   $this->db->where('User_Role !=',"student");
// 	   //$this->db->where('User_Role',"admin");
// 	   $query=$this->db->get();
//        $data=$query->result_array();
//        return $data;
// 	}
// 	function edit_user($id)
// 	{
// 	   $this->db->select('*');
// 	   $this->db->from('user');
// 	   $this->db->where('id',$id);
// 	   $query=$this->db->get();
//        $data=$query->result_array();
//        return $data;
//        }
//        function update_users()
//        {
		
// 	 $id= $this->input->post('id');
//          $email= $this->input->post('User_Id');
//          $name= $this->input->post('User_Name');
//          $password= $this->input->post('User_Password');
//          $user_role= $this->input->post('User_Role');
//      	 $add=array(
//     		'User_Name'=>$name,
//     		'User_Id'=>$email,
// 			'User_Password'=>$password,
// 			'User_Role'=>$user_role
//         );
//        // print_r($id); exit();
//      	$this->db->where('id',$id);
//      	$this->db->update('user',$add);
     	
//      	redirect('BigdataAdminController/bdihub_users');
//        }
//        function delete_users($id)
//       {
// 		//print_r($id); exit();
// 	  $this->db->where('id',$id);
//           $this->db->delete('user');
//           redirect('BigdataAdminController/bdihub_users');

//        }
//       function forget_pass($user_id)
// 	{
// 	   $this->db->select('*');
// 	   $this->db->from('user');
// 	   $this->db->where('User_Id',$user_id);
// 	   $query=$this->db->get();
// 	   $data['result']=$query->result_array();
//            $email=$data['result'][0]['User_Id']; 
          
// 	   if($query->num_rows()==1)
// 	   {
// 	   $config=array(
// 		  'protocol' => 'smtp',
// 		  'smtp_host' => 'ssl://smtp.googlemail.com', 		 
// 		  'smtp_user' => 'jayawebdeveloper@gmail.com',
// 		  'smtp_pass' => 'webdeveloper',
// 		  'smtp_port' => 465,
// 		  'mailtype' => 'html',
// 		  'charset' => 'utf-8',
//           'wordwrap' => TRUE,
//           'smtp_auth'=> TRUE
// 		  );

// 			$this->email->initialize($config);
// 			$this->email->set_newline("\r\n");
// 			$this->load->library('email', $config);
// 		    $this->email->from('jayawebdeveloper@gmail.com'); 
// 			$this->email->to($email);
// 			$this->email->subject('Reset your password');
//             $message=$this->load->view('resetpasswordtemplate',$data,TRUE);
// 			$this->email->message($message);
//             if(!$this->email->send()) 
// 			{
// 	           show_error($this->email->print_debugger()); 
// 	        }
// 	        else 
// 	        {
// 	           return true;

// 	        }
	   		
// 	}
// 	else{
            
//             return false;
// 	   }
// 	}
//         function savenewpass($new_password,$id)
// 	{

// 		$this->db->select("*");
// 		$this->db->from('user');
// 		$this->db->where('id',"$id");
// 		$update=array(
// 			'User_Password'=>$new_password
// 		);
		
// 		$this->db->update("user",$update);
// 		redirect('BigdatasiteController/resetpasswordsubmit');

//         }


// 	function count_enroll_students(){
//         $this->db->select("*");
// 		$this->db->from('enroll');
// 		$query=$this->db->get();
// //print_r($query->num_rows()); exit();
//         return $query->num_rows();
//    }
//    function count_reg_students(){
//         $this->db->select("*");
// 		$this->db->from('user');
// 		$this->db->where('User_Role',"student");
// 		$query=$this->db->get();
//         return $query->num_rows();
//    }
//    function count_bdihub_users(){
//         $this->db->select("*");
// 		$this->db->from('user');
// 		$this->db->where('User_Role !=',"student");
// 		$query=$this->db->get();
//         return $query->num_rows();
//    }
//    function get_schedular()
//    {
//    	$this->db->select("") ;
//     $this->db->from('class_schedule');
//     $this->db->join('class', 'class.class_id=class_schedule.class_id');
//     $this->db->join('course', 'course.course_id=class.course_id');
//     $this->db->order_by("class_name");
//     $query = $this->db->get();
//     return $query->result_array();
//     /*echo "<pre>";
//     print_r($query->result_array()); exit();*/
//    }
//    function reg_student()
//    {
//    	$this->db->select("") ;
//     $this->db->from('user');
//     $this->db->where('User_Role',"student");
//     $query = $this->db->get();
//     return $query->result_array();
//    }
//    //function get_enrollstudent()
//    //{
//    	//$this->db->select("") ;
//     //$this->db->from('enroll');
//     //$this->db->join('class_enroll', 'class_enroll.enroll_id = enroll.enroll_id');
//     //$this->db->join('class', 'class.class_id = class_enroll.class_duration_id');
//     //$this->db->join('course', 'course.course_id = class.course_id');
//     //$query = $this->db->get();
//     //return $query->result_array();
//    //}
//    function get_batchstudent()
//    {
//    	$this->db->select("*") ;
//     $this->db->from('course');
//     $this->db->join('class', 'class.course_id = course.course_id');
//     $query = $this->db->get();
//     return $query->result_array();
//    }

//    function get_batchstudentCount($id,$date)
//    {
//    	$this->db->select("*") ;
//     $this->db->from('class_enroll');
//     $this->db->where('class_duration_id',$id);
//     $this->db->where('date',$date);
//     $query = $this->db->get();
//     return $query->result_array();
//    }
// 	function bigdata_headerview()
// 	{
// 		$this->db->select("*");
// 		$this->db->from('header');
// 		$query=$this->db->get();
// 		$search=$query->result_array();
// 		//print_r($search); exit();
// 		return $search;
// 	}
// 	function header_update()
// 	{
// 		$config['upload_path']='application/uploads/header';
// 		$config['allowed_types'] = 'gif|jpg|png|jpeg|txt|pdf';
// 		$this->load->library('upload',$config);
// 		$this->upload->do_upload('Logo_Image');
// 		$file_data=$this->upload->data();
// 		$file_name1=$file_data['file_name'];
// 		if($file_name1!='')
// 		{
// 			$logo_image=$file_name1;
// 		}
// 		else{
// 			$logo_image=$this->input->post('Old_Logo_Image');
// 		}
// 		$headerupdate=array(
// 			'Logo_Image'=>$logo_image,
// 			'Menu_1_Name'=>$this->input->post('Menu_1_Name'),
// 			'Menu_1_Link'=>$this->input->post('Menu_1_Link'),
// 			'Menu_2_Name'=>$this->input->post('Menu_2_Name'),
// 			'Menu_2_Link'=>$this->input->post('Menu_2_Link'),
// 			'Menu_3_Name'=>$this->input->post('Menu_3_Name'),
// 			'Menu_3_Link'=>$this->input->post('Menu_3_Link'),
// 			'Menu_4_Name'=>$this->input->post('Menu_4_Name'),
// 			'Menu_4_Link'=>$this->input->post('Menu_4_Link'),
// 			'Menu_5_Name'=>$this->input->post('Menu_5_Name'),
// 			'Menu_5_Link'=>$this->input->post('Menu_5_Link')
// 			);
// 		$this->db->update('header',$headerupdate);
// 		redirect('BigdataAdminController/bigdata_header');
// 	}
// 	function footerview()
// 	{
// 		$this->db->select('*');
// 		$this->db->from('footer');
// 		$query= $this->db->get();
// 		return $query->result_array();
// 	}
// 	function footer_update()
// 	{
//         $config['upload_path']='application/uploads/footer';
// 		$config['allowed_types'] = 'gif|jpg|png|jpeg|txt|pdf';
// 		$this->load->library('upload',$config);
// 		$this->upload->do_upload('Footer_Img');
// 		$file_data=$this->upload->data();
// 		$file_name1=$file_data['file_name'];
// 		if($file_name1!='')
// 		{
// 			$footer_image=$file_name1;
// 		}
// 		else{
// 			$footer_image=$this->input->post('Old_Footer_Img');
// 		}

// 		$config['upload_path']='application/uploads/footer';
// 		$config['allowed_types'] = 'gif|jpg|png|jpeg|txt|pdf';
// 		$this->load->library('upload',$config);
// 		$this->upload->do_upload('Phone_Num_Img');
// 		$file_data=$this->upload->data();
// 		$file_name2=$file_data['file_name'];
// 		if($file_name2!='')
// 		{
// 			$phone_image=$file_name2;
// 		}
// 		else{
// 			$phone_image=$this->input->post('Old_Phone_Num_Img');
// 		}

// 		$config['upload_path']='application/uploads/footer';
// 		$config['allowed_types'] = 'gif|jpg|png|jpeg|txt|pdf';
// 		$this->load->library('upload',$config);
// 		$this->upload->do_upload('Emailid_Image');
// 		$file_data=$this->upload->data();
// 		$file_name3=$file_data['file_name'];
// 		if($file_name3!='')
// 		{
// 			$email_image=$file_name3;
// 		}
// 		else{
// 			$email_image=$this->input->post('Old_Emailid_Image');
// 		}

//         $footerupdate=array(
//         	'Footer_Img'=>$footer_image,
//         	'Phone_Num_Img'=>$phone_image,
//         	'Emailid_Image' =>$email_image,
//         	'First_Title'=>$this->input->post('First_Title'),
//         	'Subtitle_1'=>$this->input->post('Subtitle_1'),
//         	'Subtitle_1_Link'=>$this->input->post('Subtitle_1_Link'),
//         	'Subtitle_2'=>$this->input->post('Subtitle_2'),
//         	'Subtitle_2_Link'=>$this->input->post('Subtitle_2_Link'),        	
//         	'Subtitle_3'=>$this->input->post('Subtitle_3'),
//         	'Subtitle_3_Link'=>$this->input->post('Subtitle_3_Link'),
//         	'Subtitle_4'=>$this->input->post('Subtitle_4'),
//         	'Subtitle_4_Link'=>$this->input->post('Subtitle_4_Link'),
//         	'Subtitle_5'=>$this->input->post('Subtitle_5'),
//         	'Subtitle_5_Link'=>$this->input->post('Subtitle_5_Link'),
//         	'Subtitle_6'=>$this->input->post('Subtitle_6'),
//         	'Subtitle_6_Link'=>$this->input->post('Subtitle_6_Link'),
//         	'Subtitle_7'=>$this->input->post('Subtitle_7'),
//         	'Subtitle_7_Link'=>$this->input->post('Subtitle_7_Link'),
//         	'Subtitle_8'=>$this->input->post('Subtitle_8'),
//         	'Subtitle_8_Link'=>$this->input->post('Subtitle_8_Link'),
//         	'Second_Title'=>$this->input->post('Second_Title'),
//         	'Second_Subtitle_1'=>$this->input->post('Second_Subtitle_1'),
//         	'Second_Subtitle_1_Link'=>$this->input->post('Second_Subtitle_1_Link'),
//         	'Second_Subtitle_2'=>$this->input->post('Second_Subtitle_2'),
//         	'Second_Subtitle_2_Link'=>$this->input->post('Second_Subtitle_2_Link'),
//         	'Second_Subtitle_3'=>$this->input->post('Second_Subtitle_3'),
//         	'Second_Subtitle_3_Link'=>$this->input->post('Second_Subtitle_3_Link'),
//         	'Second_Subtitle_4'=>$this->input->post('Second_Subtitle_4'),
//         	'Second_Subtitle_4_Link'=>$this->input->post('Second_Subtitle_4_Link'),
//         	'Third_Title'=>$this->input->post('Third_Title'),
//         	'Third_Subtitle_1'=>$this->input->post('Third_Subtitle_1'),
//         	'Third_Subtitle_1_Link'=>$this->input->post('Third_Subtitle_1_Link'),
//         	'Third_Subtitle_2'=>$this->input->post('Third_Subtitle_2'),
//         	'Third_Subtitle_2_Link'=>$this->input->post('Third_Subtitle_2_Link'),
//         	'Third_Subtitle_3'=>$this->input->post('Third_Subtitle_3'),
//         	'Third_Subtitle_3_Link'=>$this->input->post('Third_Subtitle_3_Link'),
//         	'Third_Subtitle_4'=>$this->input->post('Third_Subtitle_4'),
//         	'Third_Subtitle_4_Link'=>$this->input->post('Third_Subtitle_4_Link'),
//         	'Third_Subtitle_5'=>$this->input->post('Third_Subtitle_5'),
//         	'Third_Subtitle_5_Link'=>$this->input->post('Third_Subtitle_5_Link'),
//         	'Third_Subtitle_6'=>$this->input->post('Third_Subtitle_6'),
//         	'Third_Subtitle_6_Link'=>$this->input->post('Third_Subtitle_6_Link'),
//         	'Fourth_Title'=>$this->input->post('Fourth_Title'),
//         	'Fourth_Subtitle_1'=>$this->input->post('Fourth_Subtitle_1'),
//         	'Fourth_Subtitle_1_Link'=>$this->input->post('Fourth_Subtitle_1_Link'),
//         	'Copyright_Content'=>$this->input->post('Copyright_Content')
//        	);
//        	$this->db->update('footer',$footerupdate);
// 		redirect('BigdataAdminController/footer');
// 	}
// 	function get_course_m()
// 	{

//         $this->db->select("*");
// 		$this->db->from('course');
// 		$query=$this->db->get();
// 		return $result=$query->result_array();
// 	}
// 	function get_course()
// 	{

//         $this->db->select("*");
// 		$this->db->from('course');
// 		$query=$this->db->get();
// 		return $query->result_array();
// 	}
// 	function edit_course($id)
// 	{


// 		$this->db->select("*") ;
//     	$this->db->from('course');
//     	$this->db->where('course_id',$id);
//     	$query = $this->db->get();

//     	return  $result=$query->result_array();

// 	}
// 	function update_course(){

//         $id=$this->input->post('course_id');
//         //print_r($id); exit();
// 		$config['upload_path']='application/images/courses';
// 		$config['allowed_types'] = 'gif|jpg|png|jpeg|txt|pdf';
// 		$this->load->library('upload',$config);
// 		$this->upload->do_upload('course_image');
// 		$file_data=$this->upload->data();
// 		$file_name1=$file_data['file_name'];
// 		if($file_name1!='')
// 		{
// 			$course_image=$file_name1;
// 		}
// 		else{
// 			$course_image=$this->input->post('old_course_img');
// 		}
// 		// print_r($course_image); exit();
// 		$courseupdate=array(
// 		'course_image'=>$course_image,
// 		'course_name'=>$this->input->post('course_name'),
// 		);
//         //print_r($courseupdate); exit();
// 		$this->db->where('course_id',$id);
//         $this->db->update('course',$courseupdate);
       
// 		redirect('BigdataAdminController/courses');
// 	}

//        function course_delete($id)
// 	{
// 		//this->db->select("*");
// 		//$this->db->from("course");
// 		$this->db->where('course_id',$id);
// 		$this->db->delete("course");
// 		redirect('BigdataAdminController/courses');

// 	}
// 	function show_class($id)
//   	{

//   		$this->db->select("*");
// 		$this->db->from('class');
// 		$this->db->where('course_id',$id);
// 		$query=$this->db->get();
// 		return $result=$query->result_array();
// 		//echo "<pre>";
//         //print_r($query->result_array()); exit();

//   	}
//   	function get_class()
//   	{

//   		$this->db->select("*");
// 		$this->db->from('class');
// 		$this->db->join('course', 'course.course_id = class.course_id');
// 		$query=$this->db->get();
// 		return $result=$query->result_array();
// 		//echo "<pre>";
//         //print_r($query->result_array()); exit();

//   	}
//   	function edit_class($id)
//   	{
//   	    $this->db->select("*") ;
//     	$this->db->from('class');
//     	$this->db->where('class_id',$id);
//     	$this->db->join('course', 'course.course_id = class.course_id');
//     	$query = $this->db->get();
// 	    return $result=$query->result_array();
// 	    // print_r($result); exit();
// 	}
//         function class_delete($id)
// 	{

// 		$this->db->where('class_id',$id);
// 		$this->db->delete('class');
// 		redirect('BigdataAdminController/get_class');
// 	}
// 	function getcurrentbatch($id){

// 		$this->db->select("*") ;
//     	$this->db->from('class_schedule');
//     	$this->db->where('class_id',$id);
//     	$this->db->where('Flag',"available");
//     	//$this->db->where('Flag'," ");
//     	//$this->db->join('course', 'course.course_id = class.course_id');
//     	$query = $this->db->get();
//     	echo "<pre>";
//         print_r($query->result_array()); exit();
// 	    //return $result=$query->result_array();
// 	}
// 	function update_class(){

//         $id=$this->input->post('class_id');
// 		$classupdate=array(
//         'class_name'=>$this->input->post('class_name'),
// 		'class_fees'=>$this->input->post('class_fees'),
// 		'number_of_hours'=>$this->input->post('number_of_hours'),
// 		'weeks'=>$this->input->post('weeks'),
//         'course_id'=>$this->input->post('course_id'),
//         'student_limit'=>$this->input->post('student_limit')
//         );
//         //print_r($id); exit();
//         $this->db->where('class_id',$id);
//         $this->db->update('class',$classupdate);
// 		redirect('BigdataAdminController/get_class');
// 	}
// 	function show_batch($id){

// 		$this->db->select("*");
// 		$this->db->from('class_schedule');
// 		$this->db->where('class_id',$id);
// 		$query=$this->db->get();
// 		return $result=$query->result_array();
// 		//echo "<pre>";
//         //print_r($query->result_array()); exit();
// 	}
// 	function edit_batch($id){

// 		$this->db->select("*");
// 		$this->db->from('class_schedule');
// 		$this->db->where('class_schedule_id',$id);
// 		$this->db->join('class', 'class.class_id = class_schedule.class_id');
// 		$this->db->join('course', 'course.course_id = class.course_id');
// 		//$this->db->join('class', 'class.course_id = course.course_id');
// 		$query=$this->db->get();
// 		return $result=$query->result_array();
// 		//echo "<pre>";
//         //print_r($query->result_array()); exit();


// 	}
// 	function update_batch($id){

// 		$s_date=$this->input->post('start_date');
// 		$e_date=$this->input->post('end_date');
// 		$class_id=$this->input->post('class_id');
// 		//print_r($id); exit();
// 		$date = DateTime::createFromFormat('j-F-Y', $s_date);
// 		$start_date=$date->format('Y-m-d');
//        	$date = DateTime::createFromFormat('j-F-Y', $e_date);
// 	    $end_date=$date->format('Y-m-d');	
// 		$batchupdate=array(
//         'start_date'=>$start_date,
// 		'end_date'=>$end_date,
// 		'class_id'=>$class_id
// 		);
//         //print_r($id); exit();
//         $this->db->where('class_schedule_id',$id);
//         $this->db->update('class_schedule',$batchupdate);
// 		//redirect('BigdataAdminController/job_profile');


// 	}


// 	function insert_batchdate(){
// 		$s_date=$this->input->post('start_date');
// 		$e_date=$this->input->post('end_date');
//         $date = DateTime::createFromFormat('j-F-Y', $s_date);
// 		$start_date=$date->format('Y-m-d');
//        	$date = DateTime::createFromFormat('j-F-Y', $e_date);
// 	    $end_date=$date->format('Y-m-d');
//        $addbatchdate=array(
//         'class_id'=>$this->input->post('class_id'),
//         'start_date'=>$start_date,
// 		'end_date'=>$end_date
// 		);
//        //print_r($addbatchdate); exit();
//        $this->db->insert('class_schedule',$addbatchdate);
// 	   redirect('BigdataAdminController/schedular');
// 	}
// 	function add_jobprofile(){

// 		$addjobprofile=array(
//         'job_profile_title'=>$this->input->post('job_profile_title'),
//         'course_id'=>$this->input->post('course_id')
// 		);
//        // print_r('classupdat'); exit();
//         $this->db->insert('job_profile',$addjobprofile);
// 		redirect('BigdataAdminController/job_profile');


// 	}
// 	function get_job_profile()
// 	{
// 		$this->db->select("*");
// 		$this->db->from('job_profile');
// 		$this->db->join('course', 'course.course_id = job_profile.course_id');
// 		$query=$this->db->get();
// 		return $result=$query->result_array();
// 		//echo "<pre>";
//         //print_r($query->result_array()); exit();
// 	}
// 	function jobprofile_edit($id){


// 		$this->db->select("*") ;
//     	$this->db->from('job_profile');
//     	$this->db->where('job_profile_id',$id);
//     	$this->db->join('course', 'course.course_id = job_profile.course_id');
//     	$query = $this->db->get();
// 	    return $query->result_array();
// 	}
// 	function update_jobprofile($id){

// 		$jobprofileupdate=array(
//         'job_profile_title'=>$this->input->post('job_title'),
// 		'course_id'=>$this->input->post('course_id')
//         );
//         //print_r($jobprofileupdate); exit();
//         $this->db->where('job_profile_id',$id);
//         $this->db->update('job_profile',$jobprofileupdate);
// 		//redirect('BigdataAdminController/job_profile');
// 	}
//         function job_profile_delete($id)
// 	{

// 		$this->db->where("job_profile_id",$id);
// 		$this->db->delete("job_profile");
// 		redirect("BigdataAdminController/job_profile");
// 	}
// 	function stu_pre_req(){
// 		$this->db->select("*");
// 		$this->db->from('student_pre_requisites');
// 		$this->db->join('course', 'course.course_id = student_pre_requisites.course_id');
// 		$query=$this->db->get();
// 		return $result=$query->result_array();

// 	}
// 	function add_stu_pre()
// 	{
// 		$addstupre=array(
//         'description'=>$this->input->post('description'),
//         'course_id'=>$this->input->post('course_id')
// 		);
//        // print_r('$addstupre'); exit();
//         $this->db->insert('student_pre_requisites',$addstupre);
// 		redirect('BigdataAdminController/stu_pre_req');


// 	}
// 	function stu_pre_edit($id)
// 	{

// 		$this->db->select("*") ;
//     	$this->db->from('student_pre_requisites');
//     	$this->db->where('id',$id);
//     	$this->db->join('course', 'course.course_id = student_pre_requisites.course_id');
//     	$query = $this->db->get();
// 	    return $query->result_array();

// 	}
// 	function update_student_pre($id){

		
// 		// $config['upload_path']='application/images/courses';
// 		// $config['allowed_types'] = 'gif|jpg|png|jpeg|txt|pdf';
// 		// $this->load->library('upload',$config);
// 		// $this->upload->do_upload('course_image');
// 		// $file_data=$this->upload->data();
// 		// $file_name1=$file_data['file_name'];
// 		// if($file_name1!='')
// 		// {
// 		// 	$course_image=$file_name1;
// 		// }
// 		// else{
// 		// 	$course_image=$this->input->post('old_course_img');
// 		// }
// 		// print_r($course_image); exit();
// 		$studentupdate=array(
// 		'icon_image'=>$this->input->post(''),
// 		'description'=>$this->input->post('description'),
// 		'course_id'=>$this->input->post('course_id')
// 		);
//         print_r($studentupdate); exit();
// 		$this->db->where('id',$id);
//         $this->db->update('student_pre_requisites',$studentupdate);
       
// 	}
// 	function student_profile()
// 	{

// 		$sessiondata=$this->session->userdata('sessiondata');
// 		$user_id=$sessiondata['email'];
// 		//print_r($user_id); exit();
// 		$this->db->select("*") ;
//     	$this->db->from('enroll');
//     	$this->db->where('email',$user_id);
//     	//$this->db->join('course', 'course.course_id = student_pre_requisites.course_id');
//     	$query = $this->db->get();
// 	    return $query->result_array(); 
// 	    //print_r($query->result_array()); exit();
// 	}
	
// 	function update_profile(){

// 		$id=$this->input->post('row_id');
// 		//print_r($id);
// 		$config['upload_path']='application/uploads/student';
// 		$config['allowed_types'] = 'gif|jpg|png|jpeg|txt|pdf';
// 		$this->load->library('upload',$config);
// 		$this->upload->do_upload('student_profile');
// 		$file_data=$this->upload->data();
// 		 //print_r($file_data); exit();
// 		$file_name1=$file_data['file_name'];
// 		if($file_name1!='')
// 		{
// 			$image=$file_name1;
// 		}
// 		else{
// 			$image=$this->input->post('old_student_profile');
// 		}
// 		$dfh=$this->input->post('contact');
//         //print_r($_POST); exit();
//         	$profileupdate=array(
//         	'student_image'=>$image,
// 			'first_name'=>$this->input->post('first_name'),
// 			'last_name'=>$this->input->post('last_name'),
// 			'date_birth'=>$this->input->post('date_birth'),
// 			'email'=>$this->input->post('email'),
// 			'address'=>$this->input->post('address'),
// 			'contact'=>$this->input->post('contact')
// 		);

//         $this->db->where('enroll_id',$id);
// 		$this->db->update('enroll',$profileupdate);
// 		redirect('BigdataAdminController/student_profile');

// 	}
// 	function add_syllabus()
// 	{

// 	 //print_r($_POST); exit();
// 		$title=$this->input->post('syllabus_title');
// 		for($i=0;$i<count($_POST['syllabus_title']);$i++)
// 		{
// 			$title=$_POST['syllabus_title'][$i];
// 			$des=$_POST['syllabus_des'][$i];
// 			$insert=array(
// 				'syllabus_title'=>$title,
// 				'syllabus_description'=>$des,
// 				'course_id'=>$this->input->post('course_id')
// 			);
//              $this->db->insert('syllabus',$insert);
//         }
//         redirect('BigdataAdminController/syllabus_add');
// 	}
// 	function syllabus_view(){

// 		$this->db->select('*');
// 	    $this->db->from('course');
// 	    //$this->db->join('course', 'course.course_id = syllabus.course_id');
// 	    $query=$this->db->get();
//         $result=$query->result_array();
//         return $result;
//     }
//     function syl_edit($id)
//     {

//     	$this->db->select('*');
// 	    $this->db->from('syllabus');
// 	    $this->db->where('course_id',$id);
// 	    $query=$this->db->get();
//         $result=$query->result_array();
//         return $result;
//        //print_r($result); exit();

//     }
//     function syl_view($id)
//     {

//     	$this->db->select('*');
// 	    $this->db->from('syllabus');
// 	    $this->db->where('course_id',$id);
// 	    $query=$this->db->get();
//         $result=$query->result_array();
//         return $result;
//     }
//     function update_syllabus(){

//        for($i=0;$i<count($_POST['syllabus_title']);$i++)
// 		{
//                         $id=$_POST['syllabus_id'][$i];
// //print_r($id); exit();			
//                       $title=$_POST['syllabus_title'][$i];
// 			$des=$_POST['syllabus_des'][$i];
// 			$insert=array(
// 				'syllabus_title'=>$title,
// 				'syllabus_description'=>$des,
// 				'course_id'=>$this->input->post('course_id')
// 			);

//              $this->db->where('syllabus_id',$id);
//              $this->db->update('syllabus',$insert);
//         }
// //print_r($insert); exit();
//         redirect('BigdataAdminController/syllabus_view');
// 	}
// 	function syl_delete($id)
// 	{
// 		     //print_r($id); exit();
//              $this->db->where('course_id',$id);
//              $this->db->delete('syllabus');
//              redirect('BigdataAdminController/syllabus_view');
// 	}
// 	function syl_particular_del($id)
// 	{

// 		     $this->db->where('syllabus_id',$id);
//              $this->db->delete('syllabus');

//     }
	
//          function insertQues(){
//     	// echo "<pre>";
// 		 // print_r($_POST['course']);exit();
		
// 		for ($i=0; $i < count($_POST['questions']) ; $i++) { 
// 			$data = array(

// 			'course_name' => $_POST['course'],
// 			'pattern' => $_POST['pattern'],	
// 			'question' => $_POST['questions'][$i],
// 			'option_a' => $_POST['option_1'][$i],
// 			'option_b' => $_POST['option_2'][$i],
// 			'option_c' => $_POST['option_3'][$i],
// 			'option_d' => $_POST['option_4'][$i],
// 			'answer' => $_POST['answer'][$i]
// 			);
// 			$insert=$this->db->insert('assess_questions', $data);
// 			// print_r($data);

// 		}
// 		if($insert){
// 			redirect ('BigdataAdminController/addquestions');
// 			return true;
// 		}
// 		else{
// 			return false;
// 		}
		
//     	// $questions = $this->input->post('questions');
//     }

//     function courseName(){
//     	$this->db->select('*');
//     	$this->db->from('course');
//     	$query=$this->db->get();
//     	$result=$query->result_array();
    	
// 		return $result;
//     }

//     function deleteCourse($data){
//     $course_id=$data['courseId'] || null;
//     	$pattern=$data['patternType'] || null;
// if($course_id && $pattern){
    	

//     	$query="DELETE FROM assess_question WHERE course_id='$course_id' AND pattern='$pattern'";
//     	$result = $this->db->query($query);
//      	 return $this->db->affected_rows();
    
//     	}
//     }

//     function editQuestions($data){
//     	$course_id=$data['courseId'];
//     	$pattern=$data['patternType'];

// 	    $sql="SELECT course_id,course_name,CASE WHEN (SELECT count(*) FROM assess_question WHERE course_id='$course_id' AND pattern='$pattern' GROUP by course_id)!=0 THEN '$pattern' ELSE '$pattern' END as pattern FROM course WHERE course_id='$course_id'";
// 	    $result = $this->db->query($sql, $return_object = TRUE)->result_array();
// 	    foreach ($result as $key => $value) {
// 	    	$query="SELECT * FROM assess_question WHERE course_id='$course_id' AND pattern='$pattern'";
// 	    	$result1 = $this->db->query($query, $return_object = TRUE)->result_array();
// 	    	$result[$key]['question']=$result1;
// 	    }
// 	    return $result;

//     }

//     function updateQuestions(){
//     //echo '<pre>';
//  //print_r($_POST);exit();
      
//     	if ($_POST['patterntype']) {
//     		$data = array(
// 					 'activePattern' => $_POST['patterntype']
// 		);
// 		$this->db->where('course_id',$_POST['course_id'][0]);
// 		$this->db->update('course',$data);
//     }

// 			$delId = $_POST['delete_id'];
// 			foreach (explode(",",$delId) as $id ) {
// 					$this->db->where('id',$id);
// 					$this->db->delete('assess_question');
// 			}
			
// 				    for ($i=0; $i < count($_POST['questions']) ; $i++) { 
    	   
// 	    		if($_POST['id'][$i]!=''){
// 	    			// echo "if";
// 					$data = array(
// 					'question' => $_POST['questions'][$i],
// 					'option_a' => $_POST['option_1'][$i],
// 					'option_b' => $_POST['option_2'][$i],
// 					'option_c' => $_POST['option_3'][$i],
// 					'option_d' => $_POST['option_4'][$i],
// 					'answer' => $_POST['answer'][$i]
// 					);
// 					// $insert=$this->db->insert('assess_questions', $data);
					
// 					 $this->db->where('id',$_POST['id'][$i]);
// 					 $this->db->update('assess_question', $data);
// 				}
// 				else{

// 					$data = array(
// 					 'course_id' => $_POST['course_id'][$i],
// 					 'pattern' => $_POST['pattern'][$i],
// 					'question' => $_POST['questions'][$i],
// 					'option_a' => $_POST['option_1'][$i],
// 					'option_b' => $_POST['option_2'][$i],
// 					'option_c' => $_POST['option_3'][$i],
// 					'option_d' => $_POST['option_4'][$i],
// 					'answer' => $_POST['answer'][$i]
// 					);
// 					$insert=$this->db->insert('assess_question', $data);

// 				}

// 			}
//     }

//     function assessCourses(){
    	


//     	$query="SELECT course_id, course_name, activePattern, (SELECT COUNT( ID ) FROM assess_question WHERE assess_question.course_id = course.course_id AND assess_question.pattern ='A') AS patternA,(SELECT COUNT( ID ) FROM assess_question WHERE assess_question.course_id = course.course_id AND assess_question.pattern ='B') AS patternB, (SELECT pattern FROM assess_question WHERE assess_question.course_id = course.course_id group by course_id) AS pattern FROM course GROUP BY course_id ";
//     	$result=$this->db->query($query)->result_array();
//     	//print_r($result);exit();
//     	return $result;			// $res=$logres[0]['USER_LOGIN_ROLE'];

 
//     }

//     function activatePattern(){
//     	$data=array(
//     		'activePattern'=>$_POST['pattern']
//     		);
//     	$this->db->where('course_id',$_POST['course_id']);
//     	$this->db->update('course',$data);
//     }

}