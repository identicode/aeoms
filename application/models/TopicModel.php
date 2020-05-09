<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;


class TopicModel extends Eloquent
{

    protected $guarded = [];
    protected $table = "topics";

    public function speaker()
    {
        return $this->belongsTo('SpeakerModel', 'speaker_id');
    }

}