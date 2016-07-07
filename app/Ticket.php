<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'priority', 'category_id', 'assignee_id', 'status'];

    public function assignee()
    {
    	$this->belongsTo('Assignee');
    }

    public function category()
    {
    	$this->belongsTo('Category');
    }
}
