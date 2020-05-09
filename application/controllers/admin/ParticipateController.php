<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ParticipateController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function approve($id)
    {
        $find = ParticipantModel::find($id);
        $find->approved = 1;
        $find->save();

        // notifying the student
        $notify = NotificationModel::notify_student('sample', 'sample', $find->student_id);

        $this->session->set_flashdata('success', 'Student has been approved to participate the training.');
        redirect_back();
    }

    public function disapprove($id)
    {
        $find = ParticipantModel::find($id);
        $find->delete();

        $this->session->set_flashdata('success', 'Student has been disapproved to participate the training.');
        redirect_back();
    }
}
