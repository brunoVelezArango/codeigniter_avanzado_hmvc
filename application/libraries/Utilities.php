<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilities
 *
 * @author furbox
 */
class Utilities {
    //put your code here
    protected $CI;

    public function __construct() {
        // Assign the CodeIgniter super-object
        $this->CI = & get_instance();
    }
    
    public function getDate() {
        return date('Y-m-d H:i:s');
    }
    
    public function randomString($length) {
        $str = "";
        $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
    
    public function randomStringLower($length) {
        $str = "";
        $characters = array_merge(range('a', 'z'), range('0', '9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
    
    public function random_salt() {
        return md5(mt_rand());
    }
    
    public function hash_passwd($password, $random_salt) {
        return is_php('5.5') ? password_hash($password . config_item('encryption_key'), PASSWORD_BCRYPT, array('cost' => 11)) : crypt($password . config_item('encryption_key'), '$2a$09$' . $random_salt . '$');
    }
    
    public function check_passwd($hash, $random_salt, $password) {
        if (is_php('5.5') && password_verify($password . config_item('encryption_key'), $hash)) {
            return TRUE;
        } else if ($hash === $this->hash_passwd($password, $random_salt)) {
            return TRUE;
        }
        return FALSE;
    }
    
    function cambiaf_a_mysql($fecha) {
        $fecha = strtotime($fecha);
        $fecha_nueva = date('Y-m-d', $fecha);
        return $fecha_nueva;
    }
}
