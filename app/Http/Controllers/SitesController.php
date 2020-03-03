<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index(){
        return view('sites.index');
    }

    public function about(){
        $name='Farah';
        return view('sites.about')->with('name',$name);
    }

    public function job(){
        $data=array('position'=>'Software Engineer', 'job'=>['System Support','System Development', 'Write SQL Queries']);
        return view('sites.job')->with($data);
    }
}
