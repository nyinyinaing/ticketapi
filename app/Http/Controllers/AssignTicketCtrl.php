<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Assignee;
class AssignTicketCtrl extends Controller
{
    public function index($id)
    {
    	$assignee = Assignee::find($id);
    	if(!$assignee)
    	{
    		return response()->json(['message'=>'This assignee not found!', 'code'=>'404'], 404);
    	}

    	return response()->json(['data'=>$assignee->tickets], 200);
    }
}