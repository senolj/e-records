<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parents extends My_Controller {

    public $data =[
            'title' => 'Parent',
            'style' => ['resources/assets/font/font-awesome-4.7.0/css/font-awesome.min.css',
                        'resources/vendors/ionicons-2.0.1/css/ionicons.min.css',
                        'resources/vendors/dist/css/AdminLTE.min.css',
                        'resources/vendors/dist/css/skins/_all-skins.min.css',
                         'resources/assets/css/students.css'],

            'skin' => 'hold-transition skin-blue sidebar-mini',
            'script' => ['resources/vendors/dist/js/app.min.js']
           
        ];

    public function __construct() 
    {
        parent:: __construct();
        $this->layoutView='parents';
    }
    
    /* VIEW SECTION*/
    public function index()
    { 
        $this->contentView='parent/dashboard_parent'; 
        $this->renderView($this->data);
    }

    public function exam()
    {
        $this->contentView='parent/exam'; 
        $this->renderView($this->data); 
    }

    public function project()
    {
        $this->contentView='parent/project'; 
        $this->renderView($this->data);
    }

    public function quiz()
    {
        $this->contentView='parent/quiz'; 
        $this->renderView($this->data);
    }
    
    public function student()
    {
       $this->contentView='parent/dashboard_parent';
       $this->renderView($this->data);
    }

    public function grades()
    {
        $this->contentView='parent/grades';
       $this->renderView($this->data);
    }

    /* END OF VIEW SECTION*/



    /* FORM SECTION*/
      public function addStudent()
    {
      $this->contentView='parent/dashboard_parent';
      $this->renderView($this->data);
    }
    

    /* END OF FORM SECTION*/


}
