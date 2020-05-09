<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class ParticipantModel extends Eloquent
{

    protected $guarded = [];
    protected $table = "participants";

    public function student()
    {
        return $this->belongsTo('StudentModel', 'student_id');
    }

}