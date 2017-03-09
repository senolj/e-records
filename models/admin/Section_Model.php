<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section_Model extends CI_Model {

        private $table = "tblsection";
        

        public function __construct() {
                parent::__construct();
                $this->load->database("default");
        }


        
        public function createSection($data = []) {
                $this->db->insert($this->table, $data);
        }



        public function getSectionId($id)
        {
                $query = $this->db->get_where($this->table,["sectionID"=>$id]);
                return $query->row();
        }


        public function updateSection($id,$data=[])
        {
        
                $query = $this->db->where('sectionID', $id);
                $result = $this->db->update($this->table, $data);
        }


        public function deleteSection($id)
        {
                $query = $this->db->where("sectionID",$id);
                $result = $this->db->delete($this->table);
                
                
        }

        public function deleteRows($id=[])
        {
            
           
            $this->db->where_in('sectionID', $id);
            $this->db->delete($this->table);       

        }

        public function find($data=[]) {
         
             $query = $this->db
            ->select("*")
            ->from($this->table)
            ->where("sectionName",$data)
            ->limit(1)
            ->get();
        return $query->row();
    }


        
}
