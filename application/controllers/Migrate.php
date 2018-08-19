<?php

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/19/2018
 * Time: 5:01 PM
 */
class Migrate extends CI_Controller
{
    public function index()
    {
        $this->load->library('migration');
        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
    }

}