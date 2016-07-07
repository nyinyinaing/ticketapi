<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Assignee;

class AssigneeCtrl extends Controller
{
    public function index()
    {
    	return response()->json(['data'=> Assignee::all()], 200);
    }

    public function show($id)
    {
    	$assignee = Assignee::find($id);
    	if(!$assignee)
    	{
    		return response()->json(['message'=>'This assignee not found!', 'code'=> 404], 404);
    	}

    	return response()->json(['data'=>$assignee], 200);
    }
}
