<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateMessageRequest;
class PagesController extends Controller
{
    //


    public function home(){

    	return view('home');

    }
    public function contact(){

    	return view('contactos');

    }

    public function saludos($nombre = "Invitado" ){

    	 $html = "<h2>Contenido html</2>"; //Supuestamente ingresado por el usuario
    $script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>"; //Supuestamente ingresado por el usuario
    $consolas = [
   "Play station 3",
   "Xbox one",
   "Wii u"
   
   ];
   
	return view('saludo', compact('nombre','html','script','consolas'));
   

    }

    public function mensajes(CreateMessageRequest $request){
       	
       return $request->all();                            
    }
}
