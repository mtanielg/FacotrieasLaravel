<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function cList(){
        $data['clients'] = Clients::paginate(5);

        return view('client.clientList', $data);
    }
}