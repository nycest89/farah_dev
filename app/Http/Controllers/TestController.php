<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $note='This is parameter send from controller';
        return view('sites.index')->with('note',$note);
    }

    public function about(){
        $data=array('name'=>'Farah', 'state'=>['Sabah','Sarawak', 'Kedah']);
        return view('sites.about')->with($data);
    }
}
