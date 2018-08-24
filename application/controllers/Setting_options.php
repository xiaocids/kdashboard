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
        $this->load->library('controller_list');

        header("Access-Control-Allow-Origin: *");
        $title = 'Login';
        $data = array(
            'title' =>$title,
            'lists' => $this->controller_list->getControllers(),
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'settings/index', $data);
    }
}