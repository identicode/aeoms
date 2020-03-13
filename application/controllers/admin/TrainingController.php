<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('TrainingModel');
    }

	public function index()
	{
        $trainings = TrainingModel::get();
		return $this->slice->view('admin.training.index',[
            'trainings' => $trainings
        ]);
    }
    
    public function create()
    {
        return $this->slice->view('admin.training.create');
    }

    public function store()
    {
       $training = TrainingModel::create([
            'name' => $this->input->post('trainingName'),
            'description' => $this->input->post('trainingDescription'),
            'location' => $this->input->post('trainingLocation'),
            'start' => $this->input->post('trainingStart'),
            'end' => $this->input->post('trainingEnd')
       ]);

        $this->session->set_flashdata('success', 'Training has been created.');
        redirect(base_url().'admin/training/'.$training->id.'/show');
    }

    public function show($id)
    {
        $training = TrainingModel::where('id', $id)->get()->first();

        return $this->slice->view('admin.training.show', [
            'training' => $training
        ]);
    }

    public function edit($id)
    {
        $training = TrainingModel::where('id', $id)->get()->first();

        return $this->slice->view('admin.training.edit', [
            'training' => $training
        ]);
    }

    public function update($id)
    {
        $training = TrainingModel::find($id);
        $training->name = $this->input->post('trainingName');
        $training->description = $this->input->post('trainingDescription');
        $training->location = $this->input->post('trainingLocation');
        $training->start = $this->input->post('trainingStart');
        $training->end = $this->input->post('trainingEnd');
        $training->save();

        $this->session->set_flashdata('success', 'Training has been updated.');
        redirect(base_url().'admin/training/'.$training->id.'/show');

    }
}
