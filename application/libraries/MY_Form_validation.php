<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Form_validation
 *
 * @author furbox
 */
class MY_Form_validation extends CI_Form_validation {

    //put your code here
    public $CI;

    public function __construct($rules = array()) {
        parent::__construct($rules);
        $this->CI = & get_instance();
    }

}
