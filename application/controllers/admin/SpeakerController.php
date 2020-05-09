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

    public function store()
    {
        $config['upload_path'] = "./uploads/speakers/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = time().$_FILES['image']['name'];
        $config['overwrite'] = 1;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
                $error = array('error' => $this->upload->display_errors());

                $speaker = SpeakerModel::create([
                    "fname" => $this->input->post('fname'),
                    "lname" => $this->input->post('lname'),
                    "description" => $this->input->post('description')
                ]);

               
                $this->session->set_flashdata('success', 'Speaker has been created.');
                redirect(base_url().'admin/speaker');

        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $speaker = SpeakerModel::create([
                    "fname" => $this->input->post('fname'),
                    "lname" => $this->input->post('lname'),
                    "description" => $this->input->post('description'),
                    "image" =>$config['file_name']
                ]);

                $this->session->set_flashdata('success', 'Speaker has been created.');
                redirect(base_url().'admin/speaker');
        }

        
    }

    public function edit($id)
    {
        $speaker = SpeakerModel::find($id);

        return $this->slice->view('admin.speaker.edit', [
            'speaker' => $speaker
        ]);
    }

    public function update($id)
    {
        $speaker = SpeakerModel::find($id);
        $speaker->fname = $this->input->post('fname');
        $speaker->lname = $this->input->post('lname');
        $speaker->description = $this->input->post('description');

        $config['upload_path'] = "./uploads/speakers/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = time().$_FILES['image']['name'];
        $config['overwrite'] = 1;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());
            $speaker->save();
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $speaker->image = $config['file_name'];
            $speaker->save();
        }

        $this->session->set_flashdata('success', 'Speaker has been updated.');
        redirect(base_url().'admin/speaker');

    }

    public function delete($id)
    {
        $speaker = SpeakerModel::find($id)->delete();
        $trainings = TopicModel::where('speaker_id', $id)->delete();

        $this->session->set_flashdata('success', 'Speaker has been deleted.');
        redirect(base_url().'admin/speaker');


    }
}
