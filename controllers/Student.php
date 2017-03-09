<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends My_Controller {

    public $data =[
            'title' => 'Student',
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
        $this->layoutView='student';
    }
    
    /* VIEW SECTION*/
    public function index()
    {
        $this->contentView='student/dashboard_student';
        $this->renderView($this->data);
    }

    public function exam()
    {
        $this->contentView='student/exam';  
        $this->renderView($this->data);
    }

    public function project()
    {
       $this->contentView='student/project'; 
       $this->renderView($this->data);
    }

    public function quiz()
    {
      $this->contentView='student/quiz'; 
      $this->renderView($this->data);
    }

    public function grades()
    {
      $this->contentView='student/grades'; 
      $this->renderView($this->data);
    }
    

    /* END OF VIEW SECTION*/


}
