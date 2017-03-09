<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_Controller {

    private $data = [
            'title' => 'Administrator Dashboard',
            'style' => ['resources/assets/font/font-awesome-4.7.0/css/font-awesome.min.css',
                        'resources/vendors/ionicons-2.0.1/css/ionicons.min.css',
                        'resources/vendors/dist/css/AdminLTE.min.css',
                        'resources/vendors/dist/css/skins/_all-skins.min.css',
                        'resources/vendors/datepicker/datepicker3.css',
                        'resources/assets/css/admin.css'],

            'skin' => 'hold-transition skin-blue sidebar-mini',
            'script' => ['resources/vendors/dist/js/app.min.js',
                         'resources/assets/js/validation.min.js',
                         'resources/vendors/datepicker/bootstrap-datepicker.js'
                          
                        ]
           
        ];
    
    public function __construct() 
    {
        parent:: __construct();
        $this->layoutView="administrator";
        $this->load->library('form_validation');
        $this->load->model("Pagination_Model","paged");
        $this->load->model("admin/Subject_Model","subject");
        $this->load->model("admin/Room_Model","room");
        $this->load->model("admin/Section_Model","section");
        
      
    }
    
   /* VIEW SECTION*/
    public function index()
    {
       $this->layoutView="index";
       $this->contentView='admin/forms/login';
    $this->renderView($this->data);
       
    }
   
   public function dashboard()
   {
        
        $this->contentView='admin/dashboard_admin';
        $this->renderView($this->data);
   }

    public function teacher()
    {
        $this->contentView='admin/table/teachers';
        $this->renderView($this->data);
    }

    public function student()
    {
        $this->contentView='admin/table/student';
        $this->renderView($this->data);
    }

    public function parent()
    {
        $this->contentView='admin/table/parent';
        $this->renderView($this->data);
    }


    public function classroute()
    {
        $data2['script2'] = 'resources/vendors/datepicker/custom-datepicker.js';
        $this->contentView='admin/table/classroute';
         $newData=array_merge($this->data,$data2);
        $this->renderView($newData);
    }

    /*END OF VIEW SECTION*/


    /*FORMS SECTION*/

    public function addClassroute()
    {
         $data2['script2'] = 'resources/vendors/datepicker/custom-datepicker.js';
        $this->contentView='admin/forms/addclassroute';
         $newData=array_merge($this->data,$data2);
        $this->renderView($newData);
    }

    
    public function addTeacher()
    {
        $this->contentView='admin/forms/addteacher';
        $this->renderView($this->data);
    }

    public function addStudent()
    {
        $data2['script2'] = 'resources/vendors/datepicker/custom-datepicker.js';
        $this->contentView='admin/forms/addstudent';
         $newData=array_merge($this->data,$data2);
        $this->renderView($newData);
    }

    public function editRoute()
    {
        $this->contentView='admin/forms/editroute';
        $this->renderView($this->data);
    }

    /*END OF FORMS SECTION*/
    public function response($id=NULL)
    {
        if ($id == NULL){
            echo json_encode([
                "status" => "Exist",
                "message" => "Record Already Exist!"
                ]);
        } elseif ($id==1){
            echo json_encode([
                "status" => "Successful",
                "message" => "Successfuly!"
                ]);
        } elseif ($id==0){
            echo json_encode([
                "status" => "Failed",
                "message" => "Failed!"
                ]);
        } 
    }


//-------------------------------------------------------------------------------------------------------------
//##############################################################################################################
//--------------------------------------SUBJECT SECTION--------------------------------------------------------
    
    public function subject()
    {
        
         $data2['script2'] = 'resources/assets/js/admin/deletesubject.js';

        $page_data=$this->paged->pageData("tblsubject","admin","subject");

        $mergeData=array_merge($this->data,$page_data);

        $newData=array_merge($mergeData,$data2);

        $this->contentView='admin/table/subject';
        $this->renderView($newData);

    }


    public function saveSubject()
    {
       
       $data = [
            "subjectName" =>  ucfirst(trim($this->input->post("subject_name"))),
            "subjectCode" =>  ucfirst(trim($this->input->post("subject_code")))
        ];
        
        if(!empty($this->subject->find($data))){
                $this->response() ;
         } 
         else{
          $this->subject->createSubject($data);
           
            if ($this->db->affected_rows()>0) {
                $this->response(1) ;
            } elseif ($this->db->affected_rows()==0) {
                $this->response(0);
            }
         }  
    }


    public function saveEditSubject()
    {
       $data = [
            "subjectName" =>  ucfirst(trim($this->input->post("subject_name"))),
            "subjectCode" =>  ucfirst(trim($this->input->post("subject_code")))
           
        ];   

        if(!empty($this->subject->find($data))){
                $this->response() ;
         }  else{
         $this->subject->updateSubject($this->input->post("subjectID"),$data);
           
            if ($this->db->affected_rows()>0) {
                $this->response(1) ;
            }
         }     
    }


    public function editSubject($id='')
    {
        $getData=['records' => [$this->subject->getSubjectId($id)],
                  'script2' => 'resources/assets/js/admin/editsubject.js'];

        $this->contentView ='admin/forms/editsubject';

        $newData=array_merge($this->data,$getData);

        $this->renderView($newData);
    }
     

    public function addSubject()
    {
        $data2["script2"] = 'resources/assets/js/admin/addsubject.js';  

        $this->contentView='admin/forms/addsubject';

        $newData = array_merge($this->data,$data2);

        $this->renderView($newData);
    }


    public function deleteSubject()
    {
       $id = $this->input->post("idelete");

       $this->subject->deleteSubject($id);

        if($this->db->affected_rows()>0) {
            $this->response(1) ;
            
        } elseif($this->db->affected_rows()==0) {
            $this->response(0) ;
            
        }
    }

//-------------------------------------------------------------------------------------------------------------
//##############################################################################################################
//--------------------------------------ROOM SECTION--------------------------------------------------------

    public function classroom()
    {
        
        $data2['script2'] = 'resources/assets/js/admin/deleteroom.js';

        $page_data=$this->paged->pageData("tblroom","admin","classroom");

        $mergeData=array_merge($this->data,$page_data);

        $newData=array_merge($mergeData,$data2);

        $this->contentView='admin/table/room';
        $this->renderView($newData);
    }


    public function addroom()
    {
        $data2["script2"] = 'resources/assets/js/admin/addroom.js';  

        $this->contentView='admin/forms/addroom';

        $newData = array_merge($this->data,$data2);

        $this->renderView($newData);
    }

    public function saveEditRoom(){
        $data = [
            "roomName" => trim($this->input->post("room"))
        ];

         if(!empty($this->room->find($data["roomName"]))){
                $this->response() ;
         } else{
          $this->room->updateRoom($this->input->post("roomID"),$data);
           
            if ($this->db->affected_rows()>0) {
                $this->response(1) ;
            } 
         }
    }
    public function saveRoom()
    {
       $data = [
            "roomName" => trim($this->input->post("room"))   
        ];
       
          if(!empty($this->room->find($data["roomName"]))){
                $this->response() ;
         } else{
          $this->room->createRoom($data);
           
            if ($this->db->affected_rows()>0) {
                $this->response(1) ;
            } elseif ($this->db->affected_rows()==0) {
                $this->response(0);
            }
         }
    }

    public function editRoom($id='')
    {
        $getData=['records' => [$this->room->getRoomId($id)],
                  'script2' => 'resources/assets/js/admin/editroom.js'];

        $this->contentView ='admin/forms/editroom';

        $newData=array_merge($this->data,$getData);

        $this->renderView($newData);
    }

    public function deleteRoom()
    {
       $id = $this->input->post("idelete");

       $this->room->deleteRoom($id);

        if($this->db->affected_rows()>0) {
            $this->response(1) ;
            
        } elseif($this->db->affected_rows()==0) {
            $this->response(0) ;
            
        }
    }

//-------------------------------------------------------------------------------------------------------------
//##############################################################################################################
//-------------------------------------- SECTION---------------------------------------------------------------

    public function section()
    {
        $data2['script2'] = 'resources/assets/js/admin/deletesection.js';

        $page_data=$this->paged->pageData("tblsection","admin","section");

        $mergeData=array_merge($this->data,$page_data);

        $newData=array_merge($mergeData,$data2);

        $this->contentView='admin/table/section';
        $this->renderView($newData);
    }


    public function addSection()
    {
       
        $data2["script2"] = 'resources/assets/js/admin/addsection.js';  

        $this->contentView='admin/forms/addsection';

        $newData = array_merge($this->data,$data2);

        $this->renderView($newData);
    }

    public function saveSection()
    {

       $data = [
            "sectionName" => ucfirst(trim($this->input->post("section_name"))),
            "sectionLimit" => trim($this->input->post("section_limit"))
        ];
      
     
         if(!empty($this->section->find($data["sectionName"]))){
                $this->response() ;
         } else{
           $this->section->createSection($data);
           
            if ($this->db->affected_rows()>0) {
                $this->response(1) ;
            } elseif ($this->db->affected_rows()==0) {
                $this->response(0);
            }
         }
      
    }


    public function saveEditSection(){
        $data = [
            "sectionName" => ucfirst(trim($this->input->post("section_name"))),
            "sectionLimit" => trim($this->input->post("section_limit")),
        ];
        
        if(!empty($this->section->find($data["sectionName"]))){
                $this->response() ;
         } else{
           $this->section->updateSection($this->input->post("sectionID"),$data);
           
            if ($this->db->affected_rows()>0) {
                $this->response(1) ;
            } 
         }

    }

    public function editSection($id='')
    {
        

        $getData=['records' => [$this->section->getSectionId($id)],
                  'script2' => 'resources/assets/js/admin/editsection.js'];

        $this->contentView ='admin/forms/editsection';

        $newData=array_merge($this->data,$getData);

        $this->renderView($newData);
    }
    
    public function deleteSection()
    {
        $id = $this->input->post("idelete");
        
       $this->section->deleteSection($id);
      

        if($this->db->affected_rows()>0) {
            $this->response(1) ;
            
        } elseif($this->db->affected_rows()==0) {
            $this->response(0) ;
            
        }
    }

    public function deleteRows()
    {
        $id = $this->input->post('ids');
               
       
        $this->section->deleteRows($id);

        if($this->db->affected_rows()>0){
           $this->response(1) ;
            
        } elseif ($this->db->affected_rows()==0) {
            $this->response(0) ;
           
        }

       
       
    }
    

}



