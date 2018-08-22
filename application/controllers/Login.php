<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        header("Access-Control-Allow-Origin: *");
        $title = 'Login';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('login_layout', 'contents' , 'login', $data);
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $auth=$this->login_model->auth_user($username,$password);
 
        if($auth->num_rows() > 0){ //jika login sebagai dosen
            $data=$auth->row_array();
            $this->session->set_userdata('login',TRUE);
            $this->session->set_userdata('access_level',$data['level']);
            $this->session->set_userdata('ses_id',$data['username']);
            $this->session->set_userdata('ses_email',$data['email']);
            redirect('dashboard/profil');
        }else{ //jika login sebagai mahasiswa
            $url=base_url('login');
            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
            redirect($url);
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('dashboard/profil');
        redirect($url);
    }
}