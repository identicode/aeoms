<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class StudentModel extends Eloquent
{

    protected $guarded = [];
    protected $table = "student";

}