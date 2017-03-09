<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_Model extends CI_Model {
	

	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}
	

	public function pageData($table,$class,$method) {
		$this->load->library("pagination");
	/*QUERY FOR PAGINATION*/
        $query=$this->db->get($table,'10',$this->uri->segment(3)); // 5 limit, 3 number of record to display
       
        
        /*query for total rows*/
        $query2 =$this->db->get($table);

        /*pagination configuration*/
        $config['base_url'] ="http://localhost/e-records/".$class."/".$method." ";

        $config['total_rows']=$query2->num_rows();
        $config['per_page']=10;

        $config['full_tag_open'] ="<ul class='custom-pagination'>";
        $config['last_tag_open'] ='</ul>';

        $config['next_tag_open'] ='<li>';
        $config['prev_tag_open'] ='<li>';

        $config['num_tag_open'] ='<li>';
        $config['num_tag_close'] ='</li>';

        $config['first_tag_close'] ='</li>';
        $config['last_tag_close'] ='</li>';

        $config['next_tag_close'] ='</li>';
        $config['prev_tag_close'] ='</li>';

        $page_data= ['data' => $query->result(),
        	    'initial' =>$this->pagination->initialize($config) ];
        

       
        return $page_data;
        
	}


	




	
}
