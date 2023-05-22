<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class User_model extends CI_Model
{
       
    function __construct()
    {

            parent::__construct();
    }

	function search($cname)
	{
		$result = $this->db->like('coursename', $cname, 'both');
	    return $this->db->get('course')->result();
 
	}

    function user_validate(){  
		$email = $this->input->post('username');
		 $password = md5($this->input->post('password')); 
		 
		$this->db->where(array('username'=>$email,'Password'=>$password,'isactive'=>1));
		$result = $this->db->get('user');
		if($result->num_rows() == 1)
			return true;
		return false;
	}

	function get_user_details($email){
		$this->db->where('username',$email);
		$user = $this->db->get('user');
		if($user->num_rows() > 0){
			
			foreach($user->result() as $row){
				$user_details = array(
						'userid'=>$row->userID,
						'username'=>$row->username,
						'email'=>$row->email,
						'usergroup'=>$row->category,
						'fname'=>$row->firstname,
						'Oname'=>$row->lastname,
						'county'=>$row->location,
						'constituency'=>$row->constituency,
						'photo'=>$row->photoID,
						'occupation'=>$row->job_category
				);
			}

			return $user_details;
		}else{
			return false;
		}

	}

	 

function fetch_county($id){
		 
			$query = $this->db->get_where('locations', array('location_id' => $id));
			if ( $query->num_rows() > 0){
				return $query->row();
			} else {
				return false;    
			}

		
	}

	function fetch_jbcat($id){
		 
			$query = $this->db->get_where('jobcategory', array('categoryID' => $id));
			if ( $query->num_rows() > 0){
				return $query->row();
			} else {
				return false;    
			}

		
	}
	

	function fetch_constituency($id){
		 
			$query = $this->db->get_where('constituents', array('constituents_id' => $id));
			if ( $query->num_rows() > 0){
				return $query->row();
			} else {
				return false;    
			}
		
	}

	function fetch_user($id){
		 
			$query = $this->db->get_where('user', array('userID' => $id));
			if ( $query->num_rows() > 0){
				return $query->row();
			} else {
				return false;    
			}
		
	}

	function fetch_jobcategories(){
		
		$query = "SELECT * FROM `jobcategory` order by categoryID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	function fetch_employer(){
		
		$query = "SELECT * FROM `user` where category='employer' order by userID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	function fetch_worker(){
		
		$query = "SELECT * FROM `user` where category='worker' order by userID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	

	function markjobcomplete($id){
		$sql = "UPDATE jobs
					SET status='Complete' 
					WHERE jobid=".$id;
	
			$query = $this->db->query($sql);
			if ($query){
				return 0;
			}
			else{
				return 1;
			}   
	}


	function delete($idtag ,$id_name,$table){
			$sql = "UPDATE $table
					SET is_deleted=1 
					WHERE $idtag=".$id_name;
	
			$query = $this->db->query($sql);
			if ($query){
				return 0;
			}
			else{
				return 1;
			}   

}


	function fetch_coursenames(){
		
		$query = "SELECT * FROM `course` order by courseID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	function fetch_jobs(){
		
		$query = "SELECT * FROM `jobs` jb 
		inner join jobcategory jc on jb.category=jc.categoryID 
		inner join constituents c on jb.constituency=c.constituents_id
		inner join locations l on jb.location=l.location_id
		where jb.isdeleted=0 order by JobID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	function fetch_course(){
		$query = "SELECT * FROM `course` c 
		inner join jobcategory jc on c.category=jc.categoryID 
		 
		where c.isdeleted=0 order by c.courseID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	function  fetch_jobs_employer($id){
		
		$query = "SELECT * , jb.status as jbstatus, jb.jobid as jid  FROM `jobs` jb 
		inner join jobcategory jc on jb.category=jc.categoryID 
		inner join constituents c on jb.constituency=c.constituents_id
		inner join locations l on jb.location=l.location_id
		where jb.isdeleted=0 and employerid=$id order by JobID desc ";

			 

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	function fetch_jobs_state($state){
		$uid=$this->session->userdata("userid");
		$query = "SELECT * , j.jobID as jid FROM jobstatus js
		inner join jobs j on js.job_id = j.jobid
		inner join jobcategory jc on j.category=jc.categoryID
		where js.status='$state' and js.user_id=$uid   order by js.last_updated desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	function fetch_jobs_progress($state){
		$uid=$this->session->userdata("userid");
		$query = "SELECT * , j.jobID as jid FROM jobs j
		 
		inner join jobcategory jc on j.category=jc.categoryID
		where j.status='$state' and j.worker_id=$uid   order by j.jobID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}



	function fetch_jobs_worker($cs,$ct){

		$uid=$this->session->userdata("userid");
		
		$query = "SELECT *, jobid FROM `jobs` j 
		inner join jobcategory jc on j.category=jc.categoryID 
		inner join constituents c on j.constituency=c.constituents_id
		inner join locations l on j.location=l.location_id
		WHERE 
		NOT EXISTS (SELECT * FROM jobstatus WHERE j.jobid = jobstatus.job_id and user_id=$uid) 
		and j.location=$ct and j.constituency=$cs";
 


		 
			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}


	function fetch_videos(){
		
		$query = "SELECT * FROM `coursevideos` cv inner join course c on cv.courseID=c.courseID where cv.isactive=1 order by videoID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}


	function fetch_locations(){
        $query = $this->db->get('locations');
        return $query;  
    }
 
    function get_constituency($category_id){
        $query = $this->db->get_where('constituents', array('county' => $category_id));
        return $query;
    }

	function add($data,$table){
        $this->db->insert($table,$data);

		return $this->db->insert_id(); 
    }


    function  fetch_jobs_employer_inprogress($id){
		
		$query = "SELECT * , jb.status as jbstatus, jb.jobid as jid  FROM `jobs` jb 
		inner join jobcategory jc on jb.category=jc.categoryID 
		inner join constituents c on jb.constituency=c.constituents_id
		inner join locations l on jb.location=l.location_id
		where jb.isdeleted=0 and employerid=$id and jb.status='In Progress' order by JobID desc ";

			 

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

function  fetch_jobs_employer_complete($id){
		
		$query = "SELECT * , jb.status as jbstatus, jb.jobid as jid  FROM `jobs` jb 
		inner join jobcategory jc on jb.category=jc.categoryID 
		inner join constituents c on jb.constituency=c.constituents_id
		inner join locations l on jb.location=l.location_id
		where jb.isdeleted=0 and employerid=$id and jb.status='Complete' order by JobID desc ";

			 

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}


	function fetch_job_dets($id){
		 
	/** 

$this->db->query('SELECT * FROM `jobs` jb 
		inner join jobcategory jc on jb.category=jc.categoryID 
		inner join constituents c on jb.constituency=c.constituents_id
		inner join locations l on jb.location=l.location_id
		where jb.jobid= ? and jb.isdeleted=0 order by JobID desc', $id);**/

 $this->db->select('*,jobs.jobid as mainjob');    
$this->db->from('jobs');
$this->db->join('jobcategory', 'jobs.category = jobcategory.categoryID', 'inner');
$this->db->join('constituents', 'jobs.constituency = constituents.constituents_id', 'inner');
$this->db->join('locations', 'jobs.location = locations.location_id', 'inner');
$this->db->where("jobs.jobid", $id );
$query = $this->db->get();


 
			if ( $query->num_rows() > 0){
				return $query->row();
			} else {
				return false;    
			}



	}


	 function edit($id,$data,$slug,$table){
	 
        
		$this->db->where($slug, $id);
 		return $this->db->update($table, $data);
	}

	function deletejob($id){
		$sql = "UPDATE jobs
					SET isdeleted=1 
					WHERE jobid=".$id;
	
			$query = $this->db->query($sql);
			if ($query){
				return 0;
			}
			else{
				return 1;
			}   
	}

	function assignjob($jid,$uid){
		$sql = "UPDATE jobs
					SET worker_id= $uid,status='In Progress'
					WHERE jobID=".$jid;
	
			$query = $this->db->query($sql);
			if ($query){
				return 0;
			}
			else{
				return 1;
			}   
	}

	function deletejobapp($status_id){
		$this -> db -> where('status_id', $status_id);
    $this -> db -> delete('jobstatus');
	}


	function publishuser($uid,$val){
		$sql = "UPDATE user
					SET isactive=$val
					WHERE userID=".$uid;
	
			$query = $this->db->query($sql);
			if ($query){
				return 0;
			}
			else{
				return 1;
			}   
	}

	function deletecourse($cid){
		$sql = "UPDATE course
					SET isdeleted=1
					WHERE courseID=".$cid;
	
			$query = $this->db->query($sql);
			if ($query){
				return 0;
			}
			else{
				return 1;
			}   
	}



	 function fetch_job_users($id){
		$query = "SELECT * , u.category as cid ,j.jobID as jid FROM `jobstatus` js 
		inner join user u on js.user_id=u.userid 
		inner join jobs j on j.jobID=js.job_id
		 
		where js.job_id=$id  order by status_id desc ";

			 

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	 }

	 function fetch_jobdets($id){



	 	$this->db->select('*');    
		$this->db->from('jobs');
		$this->db->join('user', 'jobs.employerid = user.userID', 'inner');
		$this->db->join('jobcategory', 'jobs.category = jobcategory.categoryID', 'inner');
		$this->db->join('constituents', 'jobs.constituency = constituents.constituents_id', 'inner');
		$this->db->join('locations', 'jobs.location = locations.location_id', 'inner');
		$this->db->where("jobs.jobid", $id );
		$query = $this->db->get();


 
			if ( $query->num_rows() > 0){
				return $query->row();
			} else {
				return false;    
			}






	  

	 }

	function editcoursedets($id){
			 
	 

			$this->db->select('*');    
			$this->db->from('course');
			$this->db->join('jobcategory', 'course.category = jobcategory.categoryID', 'inner');
			$this->db->where("courseID", $id );
			$query = $this->db->get();


	 
				if ( $query->num_rows() > 0){
					return $query->row();
				} else {
					return false;    
				}



	} 

	function fetchcoursevideos($id){
		$query = "SELECT * FROM `coursevideos` cv 
		inner join course c on cv.courseID=c.courseID 
		 
		 
		where cv.courseID=$id  order by videoID desc ";

			 

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	 
	}

	function deletecoursevideos($cvid){
		$this -> db -> where('videoID', $cvid);
    $this -> db -> delete('coursevideos');
	}

	function fetch_course_vids($id){
		$this->db->select('*,coursevideos.courseID as c_id');    
			$this->db->from('coursevideos');
			$this->db->join('course', 'course.courseID = coursevideos.courseID', 'inner');
			$this->db->where("videoID", $id );
			$query = $this->db->get();


	 
				if ( $query->num_rows() > 0){
					return $query->row();
				} else {
					return false;    
				}
	}

	function fetch_videos2(){
		
		$query = "
		SELECT * FROM `coursevideos` cv 
		inner join course c on cv.courseID=c.courseID 
		WHERE 
		 NOT EXISTS (SELECT * FROM completedvideos cpv WHERE cv.videoID = cpv.cvid ) 
		 

		and cv.isactive=1 order by videoID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

function fetch_videos3(){
		
		$query = "
		SELECT * FROM `coursevideos` cv 
		inner join course c on cv.courseID=c.courseID 
		WHERE 
		  EXISTS (SELECT * FROM completedvideos cpv WHERE cv.videoID = cpv.cvid ) 
		 

		and cv.isactive=1 order by videoID desc ";

			

			$this_array = array();

            $res = $this->db->query($query);



            foreach ($res->result() as $row)

            {

               $this_array[] = $row;

            }

            return $this_array;
	}

	 
    

}