<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 *
	 */

	public function __construct(){

		parent::__construct() ; 
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function search($cname)
	{
		if(isset($_GET['term'])){
			$result = $this->user_model->search($_GET['term']);
	    if(count($result)>0){
			foreach($result as $cr)
			  $arr_result[] = $cr->cname;
			echo json_encode($arr_result);
		   }
		  
	    }
    }

public function view_my_jobs(){
	$this->is_logged_in();
			 
			$data['page'] = 'myjobs';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobs_employer($this->session->userdata("userid"));
			 
			$this->load->view('admin/template', $data);

}




	public function applyjob($id)
	{
		 $data = array(
			 'job_id'=>$id,
			 'user_id'=>$this->session->userdata("userid"),
			 'status'=>  'Applied'
			  
		 );

		 $table = 'jobstatus';
		 $this->user_model->add($data,$table);
		 redirect('user/home');
	}


public function my_jobs(){
	$this->is_logged_in();
			$state='Applied';
			$data['page'] = 'my_jobs';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobs_state($state);
			 
			$this->load->view('admin/template', $data);
}

public function in_progress_jobs(){
	$this->is_logged_in();
			$state='In Progress';
			$data['page'] = 'my_jobs';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobs_progress($state);
			 
			$this->load->view('admin/template', $data);
}




	public function login()
	{
		$this->load->view('admin/login');
	}
public function home()
	{


		$this->is_logged_in();
		$usergrp= $this->session->userdata("usergroup");
		if($usergrp=='worker'){
			$cs= $this->session->userdata("constituency");
			$ct= $this->session->userdata("county");
			
			$data['cats'] = $this->user_model->fetch_jobs_worker($cs,$ct);
			$data['page'] = 'index';
		}
		elseif($usergrp=='employer'){
			$data['dogs'] = $this->user_model->fetch_jobcategories();
			$data['cats'] = $this->user_model->fetch_jobs();
			$data['page'] = 'index2';			
		}
		else{
			$data['page'] = 'index3';


		}
		
		$data['title'] = 'Home';
		
		 
		$this->load->view('admin/template', $data);
 
	}

	function signin() {
	
	 
	
	  $email = $this->input->post('username');
	
	//	die();
	
		if ($this->user_model->user_validate()) {
	
			$user = $this->user_model->get_user_details($email);
	
			$this->session->set_userdata($user);
	
			$this->session->set_userdata('is_logged_in', true);
			
			 
			redirect('user/home');
	
	 
	
		}else{ 
		 $this->session->set_flashdata('incorrect',1);
		 //$incorrect=1;
		redirect('user/login');
		}
	
	}





	public function registration()
	{
	 
			//$data['star'] = $this->user_model->fetch_jobcategories();
			$data['cats'] = $this->user_model->fetch_locations()->result();

			$this->load->view('admin/registration', $data);
	}

	public function registration2()
	{
		$data['cats'] = $this->user_model->fetch_locations()->result();
		$data['star'] = $this->user_model->fetch_jobcategories();

			$this->load->view('admin/registration2', $data);
	}

	public function addemployer()
	{
		 $data = array(
			 'firstname'=>$this->input->post('fname'),
			 'lastname'=>$this->input->post('oname'),
			 'address'=>$this->input->post('address'),
			 'email'=>$this->input->post('email'),
			 'gender'=>$this->input->post('gender'),
			 'category'=>'employer',
			 'username'=>$this->input->post('user'),
			 'Password'=>md5($this->input->post('pass')),
			 'nationID'=>$this->input->post('idno'),
			 'location'=>$this->input->post('county'),
			 'constituency'=>$this->input->post('constituency')
		 );
		 $table = 'user';
		 $this->user_model->add($data,$table);
		 redirect('user/login');
	}


	public function addpersonaldetails(){
			if (!empty($_FILES['img']['name'])){
					$img = 'img';
					$this->image_upload($img);
					$image_name = $_FILES['img']['name'];  
				}else{
					$image_name = $this->input->post('imgold'); 
			}

			if (!empty($_FILES['img2']['name'])){
					$img = 'img2';
					$this->image_upload($img);
					$natid = $_FILES['img2']['name'];  
				}else{
					$natid = $this->input->post('imgold2'); 
			}


		
			$id = $this->session->userdata("userid");
  			$image_name2 = str_replace(' ', '_', $image_name);
  			$natid2 = str_replace(' ', '_', $natid);

  			$data= array(
	        'firstname'=>$this->input->post('firstname'),
			 'lastname'=>$this->input->post('lastname'),
			 'address'=>$this->input->post('address'),
			 'nationID'=>$this->input->post('nationID'),

			 'phonenumber'=>$this->input->post('phonenumber'),
			 'location'=>$this->input->post('county'),
			 'constituency'=>$this->input->post('constituency'),
			 'gender'=>$this->input->post('gender'),


			 'email'=>$this->input->post('email'),
			 
			 'category'=>'employer',
			 'username'=>$this->input->post('username'),
			 'Password'=>md5($this->input->post('Password')),
			 
			 
			 'photoID'=>$image_name2,
			 'IDPhoto'=>$natid2

         	);

  			$slug='userID';
  			$table = 'user';

		  $this->user_model->edit($id,$data,$slug,$table);
 
		  redirect ('user/logout');
	
	}




	public function addpersonaldetailsworker(){
			if (!empty($_FILES['img']['name'])){
					$img = 'img';
					$this->image_upload($img);
					$image_name = $_FILES['img']['name'];  
				}else{
					$image_name = $this->input->post('imgold'); 
			}

			if (!empty($_FILES['img2']['name'])){
					$img = 'img2';
					$this->image_upload($img);
					$natid = $_FILES['img2']['name'];  
				}else{
					$natid = $this->input->post('imgold2'); 
			}

			if (!empty($_FILES['certifications']['name'])){
					$img = 'certifications';
					$this->image_upload($img);
					$cert1 = $_FILES['certifications']['name'];  
				}else{
					$cert1 = $this->input->post('certifications_'); 
			}

			if (!empty($_FILES['certifications2']['name'])){
					$img = 'certifications2';
					$this->image_upload($img);
					$cert2 = $_FILES['certifications2']['name'];  
				}else{
					$cert2 = $this->input->post('certifications2_'); 
			}

			if (!empty($_FILES['certifications3']['name'])){
					$img = 'certifications3';
					$this->image_upload($img);
					$cert3 = $_FILES['certifications3']['name'];  
				}else{
					$cert3 = $this->input->post('certifications3_'); 
			}


		
			$id = $this->session->userdata("userid");
  			$image_name2 = str_replace(' ', '_', $image_name);
  			$natid2 = str_replace(' ', '_', $natid);
  			$cert10 = str_replace(' ', '_', $cert1);
  			$cert20 = str_replace(' ', '_', $cert2);
  			$cert30 = str_replace(' ', '_', $cert3);

  			$data= array(
	        'firstname'=>$this->input->post('firstname'),
			 'lastname'=>$this->input->post('lastname'),
			 'address'=>$this->input->post('address'),
			 'nationID'=>$this->input->post('nationID'),

			 'phonenumber'=>$this->input->post('phonenumber'),
			 'location'=>$this->input->post('county'),
			 'constituency'=>$this->input->post('constituency'),
			 'gender'=>$this->input->post('gender'),
			 'job_category'=>$this->input->post('occupation'),


			 'email'=>$this->input->post('email'),
			 
			 'category'=>'worker',
			 'username'=>$this->input->post('username'),
			 'Password'=>md5($this->input->post('Password')),
			 
			 
			 'photoID'=>$image_name2,
			 'IDPhoto'=>$natid2,

			 'cert1'=>$cert10,
			 'cert2'=>$cert20,
			 'cert3'=>$cert30,
			 

         	);

  			$slug='userID';
  			$table = 'user';

		  $this->user_model->edit($id,$data,$slug,$table);
 
		  redirect ('user/logout');
	
	}




	public function addworker()
	{
		 $data = array(
			 'firstname'=>$this->input->post('fname'),
			 'lastname'=>$this->input->post('oname'),
			 'address'=>$this->input->post('address'),
			 'email'=>$this->input->post('email'),
			 'location'=>$this->input->post('county'),
			 'constituency'=>$this->input->post('constituency'),
			 'gender'=>$this->input->post('gender'),
			 'category'=>'worker',
			 'username'=>$this->input->post('user'),
			 'nationID'=>$this->input->post('idno'),
			 'job_category'=>$this->input->post('category'),
			 
			 'Password'=>md5($this->input->post('pass'))
		 );
		 $table = 'user';
		 $this->user_model->add($data,$table);
		 redirect('user/login');
	}

	public function addnewjob()
	{
		 $data = array(
			 'jobdescription'=>$this->input->post('jobdescription'),
			 'location'=>$this->input->post('county'),
			 'jobstartdate'=>$this->input->post('jobstartdate'),
			 'jobenddate'=>$this->input->post('jobenddate'),
			 'jobtime'=>$this->input->post('jobtime'),
			 'moreareadesc'=>$this->input->post('moreareadesc'),
			 'category'=>$this->input->post('category'),
			 'constituency'=>$this->input->post('constituency'),
			 'pay'=>$this->input->post('pay'),
			 'employerid'=>$this->session->userdata("userid")
			 
		 );
		 $table = 'jobs';
		 $this->user_model->add($data,$table);
		 redirect('user/create_new_jobs');
	}


 




	public function editnewjob()
	{
		$this->is_logged_in();
			$id = $this->input->post('jid');

			 $data = array(
			 'jobdescription'=>$this->input->post('jobdescription'),
			 'location'=>$this->input->post('county'),
			 'jobstartdate'=>$this->input->post('jobstartdate'),
			 'jobenddate'=>$this->input->post('jobenddate'),
			 'jobtime'=>$this->input->post('jobtime'),
			 'moreareadesc'=>$this->input->post('moreareadesc'),
			 'category'=>$this->input->post('category'),
			 'constituency'=>$this->input->post('constituency'),
			 'pay'=>$this->input->post('pay'),
			 'employerid'=>$this->session->userdata("userid")
			 
		 );
		 $slug='jobid';
  			$table = 'jobs';

		  $this->user_model->edit($id,$data,$slug,$table);
		 redirect('user/editjob/'.$id);
	}




	
	public function addcoursevideo()
	{
		 $cid = $this->input->post('coursename');

		 $data = array(
			 'courseID'=>$cid,
			 'title'=>$this->input->post('title'),
			 'videodescription'=>$this->input->post('videodescription'),
			 'videolink'=>$this->input->post('videolink'),
			);
		 $table = 'coursevideos';
		 $this->user_model->add($data,$table);
		 redirect('user/coursevideos/'.$cid);
	}

	public function coursevideos($cid){
		echo 'Here: '.$cid;
		die();
	}



	


	public function indextemp()
	{
		$this->is_logged_in();
			$data['page'] = 'indextemp';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}

	public function general()
	{
		$this->is_logged_in();
			$data['page'] = 'general';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function buttons()
	{
		$this->is_logged_in();
			$data['page'] = 'buttons';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function widget()
	{
		$this->is_logged_in();
			$data['page'] = 'widget';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function nestable()
	{
		$this->is_logged_in();
			$data['page'] = 'nestable';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function font_awesome()
	{
		$this->is_logged_in();
			$data['page'] = 'font_awesome';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function grids()
	{
		$this->is_logged_in();
			$data['page'] = 'grids';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function calendar()
	{
		$this->is_logged_in();
			$data['page'] = 'calendar';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function gallery()
	{
		$this->is_logged_in();
			$data['page'] = 'gallery';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function todo_list()
	{
		$this->is_logged_in();
			$data['page'] = 'todo_list';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function form_component()
	{
		$this->is_logged_in();
			$data['page'] = 'form_component';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function advanced_form_components()
	{
		$this->is_logged_in();
			$data['page'] = 'advanced_form_components';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function form_wizard()
	{
		$this->is_logged_in();
			$data['page'] = 'form_wizard';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function form_validation()
	{
		$this->is_logged_in();
			$data['page'] = 'form_validation';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function dropzone()
	{
		$this->is_logged_in();
			$data['page'] = 'dropzone';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function inline_editor()
	{
		$this->is_logged_in();
			$data['page'] = 'inline_editor';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function image_cropping()
	{
		$this->is_logged_in();
			$data['page'] = 'image_cropping';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function basic_table()
	{
		$this->is_logged_in();
			$data['page'] = 'basic_table';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function dynamic_table()
	{
		$this->is_logged_in();
			$data['page'] = 'dynamic_table';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function advanced_table()
	{
		$this->is_logged_in();
			$data['page'] = 'advanced_table';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function editable_table()
	{
		$this->is_logged_in();
			$data['page'] = 'editable_table';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function product_details()
	{
		$this->is_logged_in();
			$data['page'] = 'product_details';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function google_maps()
	{
		$this->is_logged_in();
			$data['page'] = 'google_maps';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function profile()
	{
		$this->is_logged_in();
			$data['page'] = 'profile';
			$data['title'] = 'Home';
			$data['userdets'] = $this->user_model->fetch_user($this->session->userdata("userid"));
			$data['cats'] = $this->user_model->fetch_locations()->result();
			$data['job'] = $this->user_model->fetch_jbcat($this->session->userdata("occupation"));
 			
			$data['countys'] = $this->user_model->fetch_county($this->session->userdata("county"));
			$data['constituencys'] = $this->user_model->fetch_constituency($this->session->userdata("constituency"));
			 
			$this->load->view('admin/template', $data);
 
	}

	public function profile2()
	{
		$this->is_logged_in();
			$data['page'] = 'profile2';
			$data['title'] = 'Home';
			$data['userdets'] = $this->user_model->fetch_user($this->session->userdata("userid"));
			$data['cats'] = $this->user_model->fetch_locations()->result();
 			
			$data['countys'] = $this->user_model->fetch_county($this->session->userdata("county"));
			$data['constituencys'] = $this->user_model->fetch_constituency($this->session->userdata("constituency"));
			 
			$this->load->view('admin/template', $data);
 
	}
	public function invoice()
	{
		$this->is_logged_in();
			$data['page'] = 'invoice';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}


	public function profile_edit()
	{
		$this->is_logged_in();
			$data['page'] = 'profile-edit';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobcategories();
			//$data['admindets'] = $this->user_model->fetch_avn($id);
			$data['cats'] = $this->user_model->fetch_locations()->result();
			$data['userdets'] = $this->user_model->fetch_user($this->session->userdata("userid"));
			$data['job'] = $this->user_model->fetch_jbcat($this->session->userdata("occupation"));
			$data['star'] = $this->user_model->fetch_jobcategories();
			$data['countys'] = $this->user_model->fetch_county($this->session->userdata("county"));
			$data['constituencys'] = $this->user_model->fetch_constituency($this->session->userdata("constituency"));
			 
			$this->load->view('admin/template', $data);
 
	}
	public function profile_edit2()
	{ //echo $this->session->userdata("constituency");die();
		$this->is_logged_in();
			$data['page'] = 'profile-edit2';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_locations()->result();
			$data['userdets'] = $this->user_model->fetch_user($this->session->userdata("userid"));
			
			$data['countys'] = $this->user_model->fetch_county($this->session->userdata("county"));
			$data['constituencys'] = $this->user_model->fetch_constituency($this->session->userdata("constituency"));
			 
			$this->load->view('admin/template', $data);
 
	}
	
	public function profile_activity()
	{
		$this->is_logged_in();
			$data['page'] = 'profile-activity';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function search_result()
	{
		$this->is_logged_in();
			$data['page'] = 'search_result';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function fivehundred()
	{
		$this->is_logged_in(); 
			$this->load->view('admin/500');
 
	}
	public function add_new_course()
	{
		$this->is_logged_in();
			$data['page'] = 'add_new_course';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobcategories();
			 
			$this->load->view('admin/template', $data);
 
	}	

	public function add_new_coursevideos($courseid,$title)
	{
		$this->is_logged_in();
			$data['page'] = 'add_new_coursevideos';
			$data['title'] = $title;
			$data['cid'] = $courseid;
			$data['cats'] = $this->user_model->fetch_coursenames();
			 
			$this->load->view('admin/template', $data);
 
	}
	public function view_new_courses()
	{
		$this->is_logged_in();
			$data['page'] = 'view_new_courses';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_videos2();
			 
			$this->load->view('admin/template', $data);
 
	}
	public function view_complete_courses()
	{
		$this->is_logged_in();
	 
			$data['page'] = 'completed_courses';
			$data['title'] = 'Completed Courses';
			$data['cats'] = $this->user_model->fetch_videos3();
			 
			$this->load->view('admin/template', $data);
 
	}
	public function notifications()
	{
		$this->is_logged_in();
			$data['page'] = 'notifications';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function faq()
	{
		$this->is_logged_in();
			$data['page'] = 'faq';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function view_profile()
	{
		$this->is_logged_in();
			$data['page'] = 'view_profile';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function edit_profile()
	{
		$this->is_logged_in();
			$data['page'] = 'edit_profile';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function add_certifications()
	{
		$this->is_logged_in();
			$data['page'] = 'add_certifications';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function my_earnings()
	{
		$this->is_logged_in();
			$data['page'] = 'my_earnings';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function create_new_jobs()
	{
		$this->is_logged_in();
			$data['page'] = 'create_new_jobs';
			$data['title'] = 'Home';
			$data['star'] = $this->user_model->fetch_jobcategories();
			$data['cats'] = $this->user_model->fetch_locations()->result();
			 
			$this->load->view('admin/template', $data);
 
	}
	
    function get_constituency(){
        $category_id = $this->input->post('id',TRUE);
        $data = $this->user_model->get_constituency($category_id)->result();
        echo json_encode($data);
    }

	public function view_jobs()
	{
		$this->is_logged_in();
			$data['page'] = 'view_jobs';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobs();
			 
			$this->load->view('admin/template', $data);
 
	}

	public function remove_user()
	{
		$this->is_logged_in();
			$data['page'] = 'remove_user';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function view_course()
	{
		$this->is_logged_in();
			$data['page'] = 'view_course';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_course();
			 
			$this->load->view('admin/template', $data);
 
	}
	public function rate()
	{
		$this->is_logged_in();
			$data['page'] = 'rate';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function view_user()
	{
		$this->is_logged_in();
			$data['page'] = 'view_user';
			$data['title'] = 'Home';
			$data['emp'] = $this->user_model->fetch_employer();
			$data['wrk'] = $this->user_model->fetch_worker();
			 
			$this->load->view('admin/template', $data);
 
	}

	public function editjob($id){

			$this->is_logged_in();
			$data['page'] = 'editjob';
			$data['title'] = 'Home';
			$data['star'] = $this->user_model->fetch_jobcategories();
			$data['cats'] = $this->user_model->fetch_locations()->result();
			 
			//$data['emp'] = $this->user_model->fetch_employer();
			$data['wrk'] = $this->user_model->fetch_job_dets($id);
			 
			$this->load->view('admin/template', $data);
	}


	
	public function viewapplicants($id){

	$this->is_logged_in();
			$data['page'] = 'jobapplicants';
			$data['title'] = 'View Job Applicants';
			$data['cats'] = $this->user_model->fetch_job_users($id);
			//$data['cats'] = $this->user_model->fetch_locations()->result();
			 
			//$data['emp'] = $this->user_model->fetch_employer();
			//$data['wrk'] = $this->user_model->fetch_job_dets($id);
			 
			$this->load->view('admin/template', $data);
	}


public function profileuser($uid,$cs,$ct,$occ,$jobid)
	{
		$this->is_logged_in();
			$data['page'] = 'profileuser';
			$data['title'] = 'Home';
			$data['userdets'] = $this->user_model->fetch_user($uid);
			$data['cats'] = $this->user_model->fetch_locations()->result();
			$data['job'] = $this->user_model->fetch_jbcat($occ);
			$data['jobid'] = $jobid;
 			
			$data['countys'] = $this->user_model->fetch_county($ct);
			$data['constituencys'] = $this->user_model->fetch_constituency($cs);
			 
			$this->load->view('admin/template', $data);
 
	}


	public function publishuser($uid,$val){
		$this->is_logged_in();
			$this->user_model->publishuser($uid,$val);
			redirect('user/view_user');
	}
	
	public function markjobcomplete($id){

		$this->is_logged_in();
		$this->user_model->markjobcomplete($id);
		redirect('user/view_my_jobs');
	
	}

	public function deletejob($id){

		$this->is_logged_in();
		$this->user_model->deletejob($id);
		redirect('user/view_my_jobs');
	
	}



	public function view_my_inprogress_jobs(){
	$this->is_logged_in();
			 
			$data['page'] = 'myjobs';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobs_employer_inprogress($this->session->userdata("userid"));
			 
			$this->load->view('admin/template', $data);

}
public function view_my_completed_jobs(){
	$this->is_logged_in();
			 
			$data['page'] = 'myjobs';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobs_employer_complete($this->session->userdata("userid"));
			 
			$this->load->view('admin/template', $data);

}

public function  assignjob($jid,$uid){
			$this->is_logged_in();
			 
			 
			$data['cats'] = $this->user_model->assignjob($jid,$uid);
			 
			redirect('user/view_my_jobs');
}


public function  deletejobapp($status_id,$jid){
	$this->is_logged_in();
			 
			 
			$data['cats'] = $this->user_model->deletejobapp($status_id);
			 
			redirect('user/viewapplicants/'.$jid);
}

public function  deletecourse($cid){
	$this->is_logged_in();
			 
			 
			$data['cats'] = $this->user_model->deletecourse($cid);
			 
			redirect('user/view_course/');
}




public function  viewjobdets($id){
			$this->is_logged_in();
			 
			$data['page'] = 'jobdets';
			$data['title'] = 'Job Details';
			$data['userdets'] = $this->user_model->fetch_jobdets($id);
			 
			$this->load->view('admin/template', $data);
}

public function reportjob($job,$reportee){
$this->is_logged_in();
$reporter = $this->session->userdata("userid");
			 
			$data['page'] = 'reportform';
			$data['title'] = 'Make Report';
			$data['jobid'] = $job;
			$data['reportee'] = $reportee;
			$data['reporter'] = $reporter;

			//$data['userdets'] = $this->user_model->fetch_jobdets($id);
			 
			$this->load->view('admin/template', $data);
}

public function addreport()
	{
		 $data = array(
			 'jobid'=>$this->input->post('jobid'),
			 'reporter'=>$this->input->post('reporter'),
			 'reportee'=>$this->input->post('reportee'),
			 'title'=>$this->input->post('title'),
			 'report'=>$this->input->post('comment'),
			);
		 $table = 'report';
		 $this->user_model->add($data,$table);
		 redirect('user/my_jobs');
	}

	public function addcourse()
	{
		 $data = array(
			 'coursename'=>$this->input->post('coursename'),
			 'category'=>$this->input->post('category'),
			 'coursedescription'=>$this->input->post('coursedescription'),
			);
		 $table = 'course';
		 $this->user_model->add($data,$table);
		 redirect('user/add_new_course');
	}

	public function editcoursefrm(){
		 

		 $this->is_logged_in();
			$id = $this->input->post('cid');

			 $data = array(
			 'coursename'=>$this->input->post('coursename'),
			 'category'=>$this->input->post('category'),
			 'coursedescription'=>$this->input->post('coursedescription')
			 );

		 	$slug='courseID';
  			$table = 'course';

		  $this->user_model->edit($id,$data,$slug,$table);
		 redirect('user/editcourse/'.$id);


	}
	

	public function editcourse($id){
		$this->is_logged_in();
			$data['page'] = 'edit_new_course';
			$data['title'] = 'Edit Course';
			$data['cats'] = $this->user_model->fetch_jobcategories();
			$data['wrk'] = $this->user_model->editcoursedets($id);
			 
			$this->load->view('admin/template', $data);
	}

	public function viewcoursevideos($id){
		
		$this->is_logged_in();
			$data['page'] = 'view_course_videos';
			$data['title'] = 'View Course Videos';
 			$data['cats'] = $this->user_model->fetchcoursevideos($id);
			 
			$this->load->view('admin/template', $data);
	}

	 

	public function editcoursevideo($id)
	{
		$this->is_logged_in();
			$data['page'] = 'edit_new_coursevideos';
			$data['title'] = 'Edit Course Video';
			$data['cid'] = $id;
			//$data['cats'] = $this->user_model->fetch_coursenames();
			$data['wrk'] = $this->user_model->fetch_course_vids($id);
			 
			$this->load->view('admin/template', $data);
 
	}

	public function  editcoursevideofrm(){
		$this->is_logged_in();
			$id = $this->input->post('cvid');
			$cid = $this->input->post('cid');

			 $data = array(
			 'courseID'=>$cid,
			 'title'=>$this->input->post('title'),
			 'videodescription'=>$this->input->post('videodescription'),
			 'videolink'=>$this->input->post('videolink')
			 );

		 	$slug='videoID';
  			$table = 'coursevideos';

		  $this->user_model->edit($id,$data,$slug,$table);
		 redirect('user/editcoursevideo/'.$id);
	}




	public function deletecoursevideo($cvid,$cid){
		$this->is_logged_in();
			$data['page'] = 'view_course_videos';
			$data['title'] = 'View Course Videos';
 			$data['cats'] = $this->user_model->fetchcoursevideos($cid);
 			$data['edit'] = $this->user_model->deletecoursevideos($cvid);
			 
			$this->load->view('admin/template', $data);
	}




	public function mark_complete($id){
		$uid = $this->session->userdata("userid");
		$data = array(
			 'uid'=>$uid,
			 'cvid'=>$id,
			 'status'=>'Completed'
		 );
		 $table = 'completedvideos';
		 $this->user_model->add($data,$table);
		redirect('user/view_new_courses');
	}

	public function complete_jobs(){
	$this->is_logged_in();
	$state='Complete';
			$data['page'] = 'my_jobs';
			$data['title'] = 'Home';
			$data['cats'] = $this->user_model->fetch_jobs_progress($state);
			 
			$this->load->view('admin/template', $data);
}



	public function image_upload($img){
			$doc = $img;
			$config['upload_path'] = 'assets/uploads';
			$config['allowed_types'] = 'jpg|png|jpeg|doc|docx|txt|pdf|ppt|xls';
			$config['max_size'] = '100000000';
			$config['max_width'] = '10240000';
			$config['max_height'] = '768000';
			$data['view'] = 'upload';
			$this->upload->initialize($config);
			$upld = $this->upload->do_upload($doc);
			$fname = array('upload_data' => $this->upload->data());
			return $attach_path = $fname['upload_data']['file_name'];
	}

	function is_logged_in() {

        if (!$this->session->userdata('username')) {
			redirect('user/login');
        }

    }


    function logout() {

        $this->session->sess_destroy();

        //$incorrect=0;
		redirect('user/login');

    }


}
