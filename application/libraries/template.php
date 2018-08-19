<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/17/2018
 * Time: 11:44 PM
 */
class Template
{
    //ci instance
    private $CI;
    //template Data
    var $template_data = array();

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    function set($content_area, $value)
    {
        $this->template_data[$content_area] = $value;
    }

    function load($template = '', $name ='', $view = '' , $view_data = array(), $return = FALSE)
    {
        $this->set($name , $this->CI->load->view($view, $view_data, TRUE));

        $this->CI->load->view('layouts/'.$template, $this->template_data);
    }
}