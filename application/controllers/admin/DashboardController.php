<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function index()
	{
		return $this->slice->view('admin.dashboard');
	}
}
