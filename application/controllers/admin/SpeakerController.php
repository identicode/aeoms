<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SpeakerController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SpeakerModel');
    }

    public function index()
    {
        $speakers = SpeakerModel::get();
        return $this->slice->view('admin.speaker.index', [
            'speakers' => $speakers
        ]);
    }

    public function create()
    {
        return $this->slice->view('admin.speaker.create');
    }
}
