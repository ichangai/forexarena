<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function eventDetails(){
        return view('frontend.components.events.eventDetails');
    }
}
