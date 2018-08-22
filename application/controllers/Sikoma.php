<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/19/2018
 * Time: 5:37 PM
 */
class Sikoma extends CI_Controller
{

    // Prosedur
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'SIKOMA';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'sikoma/index', $data);
    }
}