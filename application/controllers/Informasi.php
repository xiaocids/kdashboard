<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/19/2018
 * Time: 5:37 PM
 */
class Informasi extends CI_Controller
{

    // Prosedur
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'Prosedur';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'content_templates/prosedur', $data);
    }

    // Regulasi
    public function regulasi()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'Regulasi';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'content_templates/regulasi', $data);
    }

    // Layanan
    public function layanan()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'Layanan';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'content_templates/layanan', $data);
    }

    // Potensi
    public function potensi()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'Potensi';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'content_templates/potensi', $data);
    }

    // Event
    public function event()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'Event';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'content_templates/event', $data);
    }

    // FAQ
    public function faq()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'FAQ';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'content_templates/faq', $data);
    }

    // Form Dokumen
    public function form_dokumen()
    {
        header("Access-Control-Allow-Origin: *");
        $title = 'Form Dokumen';
        $data = array(
            'title' =>$title
        );
        $this->template->set('title', $title);
        $this->template->load('default_layout', 'contents' , 'content_templates/form_dokumen', $data);
    }
}