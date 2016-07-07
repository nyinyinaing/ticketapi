<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignee extends Model
{
    protected $fillable = ['name'];

    public function ticket()
    {
    	$this->hasMany('ticket', 'assignee_id', 'id');
    }
}
