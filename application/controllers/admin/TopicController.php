<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TopicController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
       
    }

    public function create($id)
    {
        $training = TrainingModel::find($id);
        $speakers = SpeakerModel::get();

        return $this->slice->view('admin.topic.create', [
            "training" => $training,
            "speakers" => $speakers
        ]);
    }

    public function store($id)
    {
        $topic = TopicModel::create([
            "title" => $this->input->post('topic-name'),
            "description" => $this->input->post('topic-desc'),
            "speaker_id" => $this->input->post('topic-speaker'),
            "training_id" => $id,
            "start" => $this->input->post('topic-start'),
            "end" => $this->input->post('topic-end')
        ]);

        $this->session->set_flashdata('success', 'Topic has been created.');
        redirect(base_url().'admin/training/'.$id.'/show');
    }

    public function edit($training, $id)
    {
        $training = TrainingModel::find($training);
        $topic = TopicModel::find($id);
        $speakers = SpeakerModel::get();

        return $this->slice->view('admin.topic.edit', [
            "training" => $training,
            "topic" => $topic,
            "speakers" => $speakers
        ]);

    }

    public function update($training, $id)
    {
        $topic = TopicModel::find($id);
        $topic->title = $this->input->post('topic-name');
        $topic->description = $this->input->post('topic-desc');
        $topic->speaker_id = $this->input->post('topic-speaker');
        $topic->start = $this->input->post('topic-start');
        $topic->end = $this->input->post('topic-end');
        $topic->save();

        $this->session->set_flashdata('success', 'Topic has been updated.');
        redirect(base_url().'admin/training/'.$training.'/show');

    }

    public function delete($training, $id)
    {
        $topic = TopicModel::find($id);
        $topic->delete();

        $this->session->set_flashdata('success', 'Topic has been deleted.');
        redirect(base_url().'admin/training/'.$training.'/show');
    }

    
}
