<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
  public function index($date1)
  {
$date1== date('Y-m-d');
  $show =Location::whereDate('created_at', '=' , $date1)->get();
  return $show;

  }
public function index1()
{

$show =Location::orderByDesc('id')->paginate('6');
  return view('all', compact('show'));

}
public function home()
{
return view('home',);

}

  public function create()
  {

  return view('add');
  }


  public function store()
  {
  $data =request()->validate([
  
  'Regions'=>'required',
   'Confirmed'=>'required',
   'logitude'=>'required',
   'latitude'=>'required'
  ]);
  Location::create($data);
  $show = Location::orderByDesc('id')->paginate('6');
  return view('all', compact('show'));
  }



  public function show($type)
  {
  $id=Location::findOrFail($type);
  return view('admin.types.show',compact('id'));
  }



  public function edit(Location $type)
  {

  return view('admin.types.edit',compact('type'));
  }



  public function update(Location $type)
  {
  $data = request()->validate([
  'name' => 'required',
  ]);
  $type->update($data);
  $show = Location::all();
  return redirect('type1');
  }



  public function destroy(Location $type)
  {
  $type->delete();
  return redirect('type1');

  }
   
}
