<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;

class ClientController extends Controller
{
    public function __construct(Title $titles)
    {
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd($this->titles);
    }

    public function index(){
        return view('clients/index');
    }

    public function newClient(){
        return view('clients/newClient');
    }

    public function create(){
        return view('clients/create');
    }

    public function show($client_id){
        return view('clients/show');
    }
}
