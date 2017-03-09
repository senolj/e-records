<?php


class Teacher extends My_Controller {

    public $data =[
            'title' => 'Teacher',
            'style' => ['resources/assets/font/font-awesome-4.7.0/css/font-awesome.min.css',
                        'resources/vendors/ionicons-2.0.1/css/ionicons.min.css',
                        'resources/vendors/dist/css/AdminLTE.min.css',
                        'resources/vendors/dist/css/skins/_all-skins.min.css',
                        'resources/vendors/datepicker/datepicker3.css',
                        'resources/assets/css/teacher.css'],

            'skin' => 'hold-transition skin-blue sidebar-mini',
            'script' => ['resources/vendors/dist/js/app.min.js',
                         'resources/assets/js/validation.min.js',
                         'resources/vendors/datepicker/bootstrap-datepicker.js']
           
        ];

    public function __construct() 
    {
        parent:: __construct();
        $this->layoutView="teacher";
       
    }
    
    /* VIEW SECTION*/
    public function index()
    {
        $this->contentView='teacher/table/classes';
        $this->renderView($this->data);
    }

    public function exams()
    {
        
        $this->contentView='teacher/table/exam';
        $this->renderView($this->data);
    }

    public function studentExams()
    {
        $this->contentView='teacher/table/studentexams';
        $this->renderView($this->data);
    }

    public function project()
    {
        $this->contentView='teacher/table/project';
        $this->renderView($this->data);
    }

    public function studentProject()
    {
        $this->contentView='teacher/table/studentproject';
        $this->renderView($this->data);
    }

    public function quiz()
    {
        $this->contentView='teacher/table/quiz';
        $this->renderView($this->data);
    }

    public function studentQuiz()
    {
        $this->contentView='teacher/table/studentquizzes';
        $this->renderView($this->data);
    }

    public function attendance() 
    {
        $this->contentView='teacher/table/attendance';
        $this->renderView($this->data);
    }

    public function studentAttendance() 
    {
        $data2['script2'] = 'resources/vendors/datepicker/custom-datepicker.js';
        $this->contentView='teacher/table/studentattendance';
         $newData=array_merge($this->data,$data2);
        $this->renderView($newData);
    }

    /* END OF VIEW SECTION*/



    /* FORM SECTION*/

    public function addExam()
    {
         $data2['script2'] = 'resources/vendors/datepicker/custom-datepicker.js';
        $this->contentView='teacher/form/add_exam';
         $newData=array_merge($this->data,$data2);
        $this->renderView($newData);
    }

    public function saveExam()
    {
         echo $this->input->post("exam_name");
    }

    public function addProject()
    {
          $data2['script2'] = 'resources/vendors/datepicker/custom-datepicker.js';
        $this->contentView='teacher/form/add_project';
         $newData=array_merge($this->data,$data2);
        $this->renderView($newData);
    }

     public function addQuiz()
    {
          $data2['script2'] = 'resources/vendors/datepicker/custom-datepicker.js';
        $this->contentView='teacher/form/add_quiz';
         $newData=array_merge($this->data,$data2);
        $this->renderView($newData);
    }

    public function gradingSystem()
    {
        $this->contentView='teacher/table/gradingsystem';
        $this->renderView($this->data);
    }

    public function editExam()
    {
        $this->contentView='teacher/form/editexam';
        $this->renderView($this->data);
    }

    public function editQuiz()
    {
        $this->contentView='teacher/form/editquiz';
        $this->renderView($this->data);
    }

     public function editProject()
    {
        $this->contentView='teacher/form/editproject';
        $this->renderView($this->data);
    }

    /* END OF FORM SECTION*/


}
