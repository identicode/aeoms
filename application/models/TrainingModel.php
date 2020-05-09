<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;


class TrainingModel extends Eloquent
{

    protected $guarded = [];
    protected $table = "training";

    public function topics()
    {
        return $this->hasMany('TopicModel', 'training_id');
    }

    public function participants()
    {
        return $this->hasMany('ParticipantModel', 'training_id');
    }

}