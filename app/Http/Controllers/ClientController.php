<?php

namespace codeprojeto\Http\Controllers;

use codeprojeto\Client;
use Illuminate\Http\Request;

use codeprojeto\Http\Requests;

class ClientController extends Controller


{
    public function index()

    {
        return \codeprojeto\Client::all();
    }


    public function store(Request $request)


    {
        return \codeprojeto\Client::create($request->all());
    }


    public function show($id)
    {
        return Client::find($id);
    }




    public function destroy ($id)


    {

        Client::find($id)->delete();
    }



}