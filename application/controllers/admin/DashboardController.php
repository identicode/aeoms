<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function index()
	{
		// echo json_encode($_SESSION);
		return $this->slice->view('admin.dashboard');
	}
}
