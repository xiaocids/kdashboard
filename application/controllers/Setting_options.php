<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_options extends CI_Controller {

    function __construct(){
        parent::__construct();
        //validasi jika user belum login
        if(! $this->session->userdata('login') === TRUE){
            set_status_header(401);
            $this->session->set_flashdata('msg', 'You don\'t have access!');
            show_error('Anda tidak memiliki akses ke halaman tersebut!', 401, 'Akses Ditolak!');

           /* $url=base_url('login');
            redirect($url);*/
        }
    }
 
    function index(){
        header("Access-Control-Allow-Origin: *");
        $title = 'Setting';
        $data = array(
            'title' =>$title,
            
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'settings/index', $data);
    }
}