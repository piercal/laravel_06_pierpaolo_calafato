<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class TicketController extends Controller
{  
    public function showForm(){
        return view('ticket');
    }

    public function sendTicket(Request $request){
        //invio della mail

        $ticketMail = new TicketMail($request->email,$request->name,$request->description);
        
        Mail::to ('admin@appticket.it')->send($ticketMail);

        return redirect()->back()->whith(['success'=>'Email inviata correttamente']);
    } 
}