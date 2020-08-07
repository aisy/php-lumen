<?php

namespace App\Http\Controllers;

use App\Models\Ticket; //user the latest name (Ticket) to use Model

class TicketController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $data = Ticket::all(); //elloquent allow us to catch all data
        return response($data);
    }
}
