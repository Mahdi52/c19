<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inf;
class InfController extends Controller
{
     public function index($date1)
     {

     $date1== date('Y-m-d');
      $show =Inf::whereDate('created_at', '=' , $date1)->get();
     return $show;

     }
     public function index1()
     {

     $show =Inf::all();
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
     Inf::create($data);
     $show =Inf::orderByDesc('id')->paginate('6');
     return view('inf.all', compact('show'));
     }
}
