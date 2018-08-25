<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/**
	 * Displaying page Dashboard/Profile
	 */
	public function profil()
	{
		header("Access-Control-Allow-Origin: *");
		$title = 'Home';
		$data = array(
			'title' =>$title
		);
		$this->template->set('title', $title);
		$this->template->load('default_layout', 'contents' , 'content_templates/dashboard', $data);
	}

	/**
	 * Displaying page Dashboard/Kependudukan
	 */
	public function kependudukan()
	{
		header("Access-Control-Allow-Origin: *");
		$title = 'Kependudukan';
		$data = array(
				'title' =>$title
		);
		$this->template->set('title', $title);
		$this->template->load('default_layout', 'contents' , 'content_templates/kependudukan', $data);
	}

	/**
	 * Displaying page Dashboard/Kesehatan
	 */
	public function kesehatan()
	{
		header("Access-Control-Allow-Origin: *");
		$title = 'Kesehatan';
		$data = array(
				'title' =>$title
		);
		$this->template->set('title', $title);
		$this->template->load('default_layout', 'contents' , 'content_templates/kesehatan', $data);
	}
}
