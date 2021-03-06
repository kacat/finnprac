<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	
	public function index()
	{
		$page_data = [];
		$page_data['page_title'] = 'FinnPrac';
		$page_data['views'][] = 'welcome_pages/view1';
		$page_data['views'][] = 'welcome_pages/view2';

		$timestamp = strtotime('22-09-2018');
		$now = time();
		$page_data['time_diff'] = max(($timestamp - $now), 0);
		
		$this->load->view('page_template', $page_data);
	}
}
