<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room_Model extends CI_Model {

        private $table = "tblroom";
        

        public function __construct() {
                parent::__construct();
                $this->load->database("default");
        }


        
        public function createRoom($data = []) {
                $this->db->insert($this->table, $data);
        }



        public function getRoomId($id)
        {
                $query = $this->db->get_where($this->table,["roomID"=>$id]);
                return $query->row();
        }


        public function updateRoom($id,$data=[])
        {
        
                $query = $this->db->where('roomID', $id);
                $result = $this->db->update($this->table, $data);
                
        }


        public function deleteRoom($id)
        {
                $query = $this->db->where("roomID",$id);
                $result = $this->db->delete($this->table);
               
        }

         public function find($data=[]) {
         
             $query = $this->db
            ->select("*")
            ->from($this->table)
            ->where("roomName",$data)
            ->limit(1)
            ->get();  
            return $query->row();
        }

        
}
