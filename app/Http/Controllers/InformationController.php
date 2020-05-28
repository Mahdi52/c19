<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    public function index()
    {

    $show =Information::all();
    return $show;

    }
    public function index1()
    {

    $show =Information::all();
    return view('inf.all', compact('show'));

    }

    public function create()
    {

    return view('inf.add');
    }


    public function store()
    {
    $data =request()->validate([

    'Recovered'=>'required',
    'Confirmed'=>'required',
    'Deaths'=>'required',
    ]);
    Information::create($data);
    $show = Information::orderByDesc('id')->paginate('6');
    return view('inf.all', compact('show'));
    }

}
