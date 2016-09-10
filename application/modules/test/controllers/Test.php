<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author furbox
 */
class Test extends MY_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function Index(){
        $data =  new stdClass();
        $data->title = "Admin";
        $data->view_content = "test/view_admin";
        $data->title_container = $this->lang->line('dashboard_title');
        $this->template->admin_template($data);
    }
    
    public function Home(){
        $data =  new stdClass();
        $data->title = "Home";
        $data->title_container = $this->lang->line('home_title');
        $data->view_content = "test/view_home";
        $this->template->home_template($data);
    }
}
