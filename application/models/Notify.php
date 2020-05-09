<?php

class Notify extends CI_Model
{
    public function notify_student($title, $message)
    {
        $data['title'] = $title;          
        $data['message'] = $message;
        $data['level'] = 1;

        $this->db->insert('notification', $data);

        return true;
    }
}