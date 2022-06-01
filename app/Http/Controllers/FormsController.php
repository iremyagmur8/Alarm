<?php

namespace App\Http\Controllers;

use App\Models\forms;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index()
    {
        $cData = new \ArrayObject();
        $cData->data = forms::all();


        return view('home.index', ['cData' => $cData]);
    }

    public function store(Request $request)
    {
        $cData= new forms();
        $cData->name = request('name');
        $cData->email = request('email');
        $cData->phone = request('phone');
        $cData->subject = request('subject');
        $cData->message = request('message');




        $cData->save();

        return view('home.iletisim', ['cData' => $cData]);
    }

}
