<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    function __construct(){
        parent::__construct();
        //validasi jika user belum login
        if(! $this->session->userdata('login') === TRUE){
            $url=base_url('login');
            redirect($url);
        }
    }
 
    function index(){
        header("Access-Control-Allow-Origin: *");
        $title = 'Login';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'settings/index', $data);
    }
}