<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_Model extends CI_Model {

	private $table = "tblsubject";
	

	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}


	
	public function createSubject($data = []) {
		$this->db->insert($this->table, $data);
	}



	public function getSubjectId($id)
	{
        $query = $this->db->get_where($this->table,["subjectID"=>$id]);
		return $query->row();
	}


	public function updateSubject($id,$data=[])
	{
       	
		$query = $this->db->where('subjectID', $id);
		$result = $this->db->update($this->table, $data);
		
	}


	public function deleteSubject($id)
	{
		$query = $this->db->where("subjectID",$id);
		$result = $this->db->delete($this->table);
		
	}

	 public function find($data=[]) {
	 	foreach ($data as $key => $value) {
           if ($key == "subjectName"){
               $query = $this->db
	            ->select("*")
	            ->from($this->table)
	            ->where("subjectName",$value)
	            ->limit(1)
	            ->get();  
	            $val=$query->row_array();
             } elseif($key=="subjectCode") {
              $query = $this->db
	            ->select("*")
	            ->from($this->table)
	            ->where("subjectCode",$value)
	            ->limit(1)
	            ->get();  
	            $val2=$query->row_array();
             }
        }

        if($val!=NULL && $val2!=NULL){
        	return $val = ["val" => $val,
        				   "val2" => $val2];
        } elseif($val!=NULL && $val2==NULL) {
        	return $val;
        } elseif($val==NULL && $val2!=NULL) {
        	return $val2;
        } 
        
    }
	
}
