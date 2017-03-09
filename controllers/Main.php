<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends My_Controller {

    public $data =[
            'title' => 'E-Records',
            'style' => ['resources/assets/font/font-awesome-4.7.0/css/font-awesome.min.css',
                        'resources/vendors/ionicons-2.0.1/css/ionicons.min.css',
                        'resources/vendors/dist/css/AdminLTE.min.css',
                        'resources/vendors/dist/css/skins/_all-skins.min.css',
                        'resources/assets/css/main.css'],
        ];

    public function __construct() 
    {
        parent:: __construct();
    }
    
    /* VIEW SECTION*/
    public function index()
    {
        $this->layoutView='index';
        $this->contentView='main/index-content';
        $this->renderView($this->data);

    }
}
