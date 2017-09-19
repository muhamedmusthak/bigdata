<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BigdatasiteModel extends CI_Model 
{
	
	function get_r_course_details()
	{
		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('course_id !=',23);
		$this->db->where('course_id !=',24);
		$query=$this->db->get();
	    $result=$query->result_array();
	    return $result;
	}	
	function get_session_others()
   	{

   	   $this->db->select('*');
	   $this->db->from('session_others');
	   $query=$this->db->get();
	   $result=$query->result_array();
	   return $result;
	}
	function associate($id)
    {

	    $this->db->select('*');
	    $this->db->from('course');
	    $this->db->where('course_title_id',$id);
	    $query=$this->db->get();
	    $data=$query->result_array();
	    return $data;
   	}
   	function insert_training()
   	{
		$interest_arr = $this->input->post('interest_ar');
		$data1=implode(",", $interest_arr);
		$contact_arr = $this->input->post('contact_ar');
		$data2=implode(",", $contact_arr);
		$data=array(
		'course_id'=>$this->input->post('course_id'),
		'salutation'=>$this->input->post('salutation'),
		'first_name'=>$this->input->post('first_name'),			
		'last_name'=>$this->input->post('last_name'),
		'email'=>$this->input->post('email'),
		'contact'=>$this->input->post('contact'),
		'company_name'=>$this->input->post('company'),
		'address'=>$this->input->post('address'),
		'business'=>$this->input->post('business'),
		'department'=>$this->input->post('department'),
		'designation'=>$this->input->post('designation'),
		'interested'=>$data1,
		'contact_through'=>$data2
		);
		$result = $this->db->insert('enroll',$data);
		$lastid = $this->db->insert_id();
		//print_r($lastid); exit();
		return $lastid;
	}
	function insert_batch()
   	{
   	   	$insert=array(
			'session_id'=>$this->input->post("id"),
			'enroll_id'=>$this->input->post("enroll_id"),
			'flag'=>$this->input->post("status")
		);
            
		$post = $_POST['yourArray'];

			if($post)
   			{	
   			
   			$conut =count($post);
       		$this->db->insert('map_session',$insert);
       		$insertid=$this->db->insert_id();
	       		for ($i=0; $i<$conut; $i++ )
	       		{
	       			//print_r($insertid); exit();
	       			$map=array(
	       				'map_session_id'=>$insertid,
	       				'day_time_id'=>$post[$i]
	       			);
	       			$this->db->insert('map_both',$map);
	       		}
       		}else
	   		{
	       		$this->db->insert('map_session',$insert);
	   		}
   	}
   	function enrollCount($id)
	{
	   $this->db->select('*');
	   $this->db->from('class_enroll');
	   $this->db->where('class_duration_id',$id);
	   $query=$this->db->get();
	   $result=$query->result_array();
	   return $result;
	}
	function insert_batch_other()
    {
   	   	$insert=array(
			'session_id'=>$this->input->post("id"),
			'enroll_id'=>$this->input->post("enroll_id"),
			'flag'=>$this->input->post("status")
		);
		$post = $_POST['yourArray'];
   
			if($post)
   			{	
   			
   			$conut =count($post);
       		$this->db->insert('map_session',$insert);
       		$insertid=$this->db->insert_id();
	       		for ($i=0; $i<$conut; $i++ )
	       		{
	       			//print_r($insertid); exit();
	       			$map=array(
	       				'map_session_id'=>$insertid,
	       				'day_time_id'=>$post[$i]
	       			);
	       			$this->db->insert('map_both',$map);
	       		}
       		}else
	   		{
	       		$this->db->insert('map_session',$insert);
	   		}
   	}
	function get_batch_timing()
   	{
   	   $id=$this->input->post('id');
   	
   	   		$this->db->select('*');
	   		$this->db->from('session');
	   		$this->db->where('session_id',$id);
	   		$query=$this->db->get();
	   		$result=$query->result_array();
	   		return $result;
	

	}
	function get_batchtiming_others()
   	{
   	   $id=$this->input->post('id');

   	   if($id=='3')
   	   {
   	   		$this->db->select('*');
	   		$this->db->from('session_others');
	   		$this->db->where('session_id',$id);
	   		$query=$this->db->get();
	   		$result=$query->result_array();
	   		//print_r($)
	   		return $result;

   	   }
   	   else
   	   {
   	   		$this->db->select('*');
	   		$this->db->from('session_others');
	   		$this->db->where('session_id',$id);
	   		$query=$this->db->get();
	   		$result=$query->result_array();
	   		return $result;
		}
	}
	function get_session()
   	{

   	   $this->db->select('*');
	   $this->db->from('session');
	   $query=$this->db->get();
	   $result=$query->result_array();
	   return $result;
	}
	function payment_update($id){
           $data = array('payment'=> "success");
           $this->db->where('enroll_id',$id);
           $this->db->update('enroll',$data);

         }
	  
	function get_training_data($id)
	{
		$this->db->select('*');
	   	$this->db->from('enroll');
	   	$this->db->where('enroll_id',$id);
	   	$this->db->join('course', 'course.course_id = enroll.course_id');
	    $query=$this->db->get(); 
		return $result=$query->result_array(); 
		//print_r($result); exit();
	}

		function get_undergraduate_details()
	{

	   $this->db->select('*');
	   $this->db->from('educational_qualification');
	   $this->db->where('educational_type_id',1);
	   $query=$this->db->get();
	   $result=$query->result_array();
	   //print_r($result); exit();
	   return $result;
	}

	function get_postgraduate_details()
	{

	   $this->db->select('*');
	   $this->db->from('educational_qualification');
	   $this->db->where('educational_type_id',2);
	   $query=$this->db->get();
	   $result=$query->result_array();
	   //print_r($result); exit();
	   return $result;
	}

function register_contact()
	{
		
		$data=array(
		'salutation'=>$this->input->post('salutation'),
		'first_name'=>$this->input->post('first_name'),			
		'last_name'=>$this->input->post('last_name'),
		'email'=>$this->input->post('email'),
		'contact'=>$this->input->post('contact'),
		'company'=>$this->input->post('company'),
		'message'=>$this->input->post('message')
		);
		//print_r($data);exit();
		$this->db->insert('contact',$data);
		$lastid = $this->db->insert_id();		
		return $lastid;
	}		
	function register_contact_mail($id)
	{	    
	   $this->db->select('*');
	   $this->db->from('contact');
	   $this->db->where('id',$id);
	   $query=$this->db->get();
		return $result=$query->result_array(); 
	}


    function get_days()
   	{

 		$this->db->select("") ;
	    $this->db->from('day_time');
		$query = $this->db->get();
        return $query->result_array();

   	}








 //   	 function get_pathfinder_details()
 //   	 {	
	// 	$sql="SELECT id,id as dummy_id,question,answer1,link1,answer2,link2,answer3,link3,(select id from pathfinder where pathfinder.link1=dummy_id) as back_id1,(select id from pathfinder where dummy_id=pathfinder.link2 group by pathfinder.link2) as back_id2,(select id from pathfinder where dummy_id=pathfinder.link3 group by pathfinder.link3) as back_id3 from pathfinder";
	// 	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	// }
 //       function get_pathfinder_course()
 //    {
	// 	$this->db->select('*');
	//    $this->db->from('pathfinder_link');
	//    //$this->db->where('class_duration_id',$id);
	//    $query=$this->db->get();
	//    $result=$query->result_array();
	//    return $result;
	// }
 
	



	
	// function bigdata_spec($id)
	// {
	//    $this->db->select('*');
	//    $this->db->from('class');
	//    $this->db->where('course_id',$id);
	//    $query=$this->db->get();
	//    return $result=$query->result_array();
	//  }
	// function bigdata_enroll($id){

	//    $this->db->select('*');
	//    $this->db->from('class');
	//    $this->db->where('class_id',$id);
	//    $query=$this->db->get();
	//    return $result=$query->result_array();
	//    // echo "<pre>";
 //    //    print_r($query->result_array()); exit();
	//  }
	// function datascience_spec($id)
	// {
	//    $this->db->select('*');
	//    $this->db->from('class');
	//    $this->db->where('course_id',$id);
	//    $query=$this->db->get();
	//    return $result=$query->result_array();
	//  }
	//  function combo($id)
	// {
	//    $this->db->select('*');
	//    $this->db->from('class');
	//    $this->db->where('course_id',$id);
	//    $query=$this->db->get();
	//    return $result=$query->result_array();
	//  }
	// function getschedule($id){
	//    $this->db->select('*');
	//    $this->db->from('class_schedule');
	//    $this->db->where('class_id',$id);
	//    $this->db->where('flag !=',"filled");
	//    $query=$this->db->get();
	//    return $result=$query->result_array();
	//    //echo "<pre>";
 //       //print_r($query->result_array()); exit();
 //    }
	// function getdaytiming($id)
	// {
	//    $this->db->select('*');
	//    $this->db->from('day_timing');
	//    $this->db->where('class_schedule_id',$id);
	//    $query=$this->db->get();
	//    return $result=$query->result_array();
	//     //echo "<pre>";
 //       //print_r($query->result_array()); exit();
	// }
	// function checNextAvailableDate($id, $date){
	// 	//print_r($date); exit();
	// 	$this->db->from('class_schedule');
	// 	$this->db->where('class_id',$id);
	// 	$this->db->where('start_date',$date);
	// 	$data=array(
	// 		'Flag'=>"filled"
	// 	);
	// 	//print_r($data); exit();
 //        $this->db->update('class_schedule',$data);


	// 	$this->db->from('class_schedule');
	// 	$this->db->where('class_id',$id);
	// 	$this->db->where('start_date >',$date);
	// 	$this->db->order_by("start_date", "asc");
	// 	$query1=$this->db->get();
 //   		return $result1=$query1->result_array();
 //   		//echo "<pre>";
 //        //print_r($query1->result_array()); exit();
	// }
	// function beforeDatecount($id,$date){

	// 	$this->db->select('*');
	//   	$this->db->from('class_schedule');
	//   	$this->db->where('class_id',$id);
	//   	$this->db->where('start_date <',$date);
	//   	$this->db->order_by("start_date", "desc");
	//   	$query=$this->db->get();
	//   	return $query->result_array();
	//  }
	// function checkStudentCount($id,$date){
	// 	$this->db->select('*');
	//   	$this->db->from('class_enroll');
	//   	//$this->db->join('class_schedule', 'class_schedule.class_schedule_id=class_enroll.class_duration_id');
	//   	$this->db->where('class_duration_id',$id);
	//   	$this->db->where('date',$date);
	//   	$query=$this->db->get();
	//   	return $query->result_array();
	// }
	// function check($id, $date)
	// {
	// 	$id=$id;
	// 	$date=$date;
		
	// 	$countTotal=$this->checkStudentCount($id,$date);
	// 	//print_r(count($countTotal)); exit();
	// 	if(count($countTotal)>=2)
	// 	{
 //        $dates=$this->checNextAvailableDate($id, $date);
 //        //print_r($dates); exit();
 //        $date=$dates[0]['start_date'];
 //        return $date;
 //        }
 //        else{
 //        return $date;
 //        }
        
	// }
	// function next_batch_date($id,$date)
	// {

		
	   
	//    $this->db->select('*');
	//    $this->db->from('schedule');
	//    $this->db->where('class_id',$id);
	//    $this->db->where('start_date >',$date);
	//    $this->db->order_by("start_date", "asc");
	//    $query1=$this->db->get();
	//    $result1=$query1->result_array();
	//    return $result1;
	//    //print_r($result1); exit();
	   
	// }
	// function ins()
	// {
	// 	$data=array(
	// 		'name'=>$this->input->post('name'),
	// 		'email'=>$this->input->post('email'),
	// 		'pnumber'=>$this->input->post('mobile'),
	// 		'subject'=>$this->input->post('subject'),
	// 		'message'=>$this->input->post('message')
	// 		);
 //                 //print_r($data); exit();
	// 	  $this->db->insert('contact_form',$data);
	// 	  return $data;

	// }
	// function getcoursequestion($enroll_id){

	// 	     $sql="SELECT * FROM assess_question WHERE course_id = (SELECT course_id  FROM enroll WHERE enroll_id='$enroll_id' ) AND pattern= (SELECT activePattern FROM course WHERE course_id=(SELECT course_id  FROM enroll WHERE enroll_id='$enroll_id')) ORDER BY RAND() LIMIT 10";


	//          $result=$this->db->query($sql)->result_array();
	       
	//         return $result;
	// }
	// function testvalidation()
	// {
	
	// 		$eid=$this->input->post('enrollid');
	// 		$count=0;
	// 		$totalcount=$this->input->post('count');
	// 		 	for ($i=1; $i <= $totalcount; $i++) { 
	// 		 		$qId=$this->input->post('quesId'.$i);
	// 		 		$qOption=$this->input->post('q'.$i.'_option');
	// 		 		$this->db->select('answer');
	// 			    $this->db->from('assess_question');
	// 			    $this->db->where('id',$qId);
	// 			    $query=$this->db->get();
	// 		        $result=$query->result_array();
	// 		         if($result[0]['answer']==$qOption){
	// 		         	$count++;
	// 		         }

			      
	// 		 	}
			 
	// 	 	if($count>=5){
	// 	 				$data = array('assessment_status'=>'Y');
	// 					$this->db->where('enroll_id',$eid);
	// 					$this->db->update('enroll', $data);
	// 	 		return true;
	// 	 	}
	// 	 	else{
	// 	 				$data = array('assessment_status'=>'N');
	// 					$this->db->where('enroll_id',$eid);
	// 					$this->db->update('enroll', $data);
	// 	 		return false;
	// 	 	}
			
	// }
	// function get_bigdata_details()
	// {

	//    $this->db->select('*');
	//    $this->db->from('courses');
	//    $this->db->where('course_type_id',1);
	//    $query=$this->db->get();
	//    $result=$query->result_array();
	//    //print_r($result); exit();
	//    return $result;
	// }

	// function get_datascience_details()
	// {

	//    $this->db->select('*');
	//    $this->db->from('courses');
	//    $this->db->where('course_type_id',2);
	//    $query=$this->db->get();
	//    $result=$query->result_array();
	//    //print_r($result); exit();
	//    return $result;
	// }



	// function register_course()
	// {
	// 	//$salutation = $_POST['']
		
	// 	$data=array(
	// 		'salutation'=>$this->input->post('r_salutation'),
	// 		'first_name'=>$this->input->post('r_first_name'),			
	// 		'last_name'=>$this->input->post('r_last_name'),
	// 		'email'=>$this->input->post('r_email'),
	// 		'phone_num'=>$this->input->post('r_phone_num'),
	// 		'company'=>$this->input->post('r_company'),
	// 		'course_id'=>$this->input->post('r_course')
	// 		);
	// 	//print_r($data);exit();
	// 	$this->db->insert('enroll',$data);
	// 	$lastid = $this->db->insert_id();		
	// 	return $lastid;
	// }		
	// function register_mail($id)
	// {	    
	//     $this->db->select('*');
	//    $this->db->from('enroll');
	//    $this->db->where('enroll_id',$id);
	//     $this->db->join('course', 'course.course_id = enroll.course_id');
	//    $query=$this->db->get();
	// return $result=$query->result_array(); 
	//  //print_r($result);
	  

	// }
			
}

?>