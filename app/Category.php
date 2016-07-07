<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['cat_name'];

    public function ticket()
    {
    	$this->hasMany('Ticket', 'category_id', 'id');
    }
}
