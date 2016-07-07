<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ticket;

class TicketCtrl extends Controller
{
    public function index()
    {
    	return response()->json(['data'=> Ticket::all()], 200);
    }
}
