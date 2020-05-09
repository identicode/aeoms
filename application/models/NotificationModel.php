<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class NotificationModel extends Eloquent
{

    protected $guarded = [];
    protected $table = "notification";


    public function target_admin()
    {
        return $this->belongsTo('AdminModel', 'target_id');
    }

    public function target_student()
    {
        return $this->belongsTo('StudentModel', 'target_id');
    }

    public static function notify_student($title, $message, $target)
    {
        $data['title'] = $title;
        $data['message'] = $message;
        $data['target_id'] = $target;
        $data['level'] = 1;

        return (new static)::create($data);

    }

}