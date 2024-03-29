<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
        $message = request()->validate([
            'name' => 'required',
            // 'email' => 'required|email'
            //* o se puede pasar un array con las condiciones
            'email' => ['required', 'email'],
            'subject' => 'required',
            'content' => 'required|min:3'   //* Tenga minimo 3 caracteres
        ],[
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El email es obligatorio',
            'subject.required' => 'El asunto es obligatorio',
            'content.required' => 'El mensaje es obligatorio'
        ]);

        Mail::to('fredyrios01@gmail.com')->queue(new MessageReceived($message));

        // return new MessageReceived($message);

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}