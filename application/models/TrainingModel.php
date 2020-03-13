<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;


class TrainingModel extends Eloquent
{

    protected $guarded = [];
    protected $table = "training";

}