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
class Test extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->libraries([
            'Utilities'
        ]);
        $this->load->model([
            "Test_model"
        ]);
    }

    public function test_add() {
        $fecha = $this->utilities->getDate();
        $insert = [
            "test_date_add" => $fecha,
        ];
        $success = $this->Test_model->insert($insert);
        
        if($success > 0){
            $this->session->set_flashdata('message_success','Se agrego de manera correcta');
            redirect('test');
        }else{
            $this->session->set_flashdata('message_error','Ocurrio un error al agregar la informacion');
            redirect('test');
        }
    }

    public function Index() {
        $data = new stdClass();
        $data->title = "Admin";
        $data->view_content = "test/view_admin";
        $data->title_container = $this->lang->line('dashboard_title');
        $data->fecha = $this->utilities->getDate();
        $data->subtitle_container = $this->lang->line('dashboard_subtitle');
        $this->template->admin_template($data);
    }

    public function Home() {
        $data = new stdClass();
        $data->title = "Home";
        $data->title_container = $this->lang->line('home_title');
        $data->view_content = "test/view_home";
        $this->template->home_template($data);
    }

}
