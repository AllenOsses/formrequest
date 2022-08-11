<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function store(PostRequest $request){
        //esta validacion no debe estar aqui solo de practica
      dd($request->all());  
    }
}
