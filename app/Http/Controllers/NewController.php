<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NewController extends Controller
{
    public function index()
    {
    $s=Post::all();
    return $s;

    }
    public function index1()
    {

    $show = Post::orderByDesc('id')->paginate('6');
    return view('news.all', compact('show'));

    }
   
    public function create()
    {

    return view('news.add');
    }


    public function store()
    {
    $data =request()->validate([

    'title'=>'required',
    'post'=>'required',
    'source'=>'required',
    'url'=>'required'
    ]);
    Post::create($data);
    $show = Post::orderByDesc('id')->paginate('6');
    return view('news.all', compact('show'));
    }



    public function show($type)
    {
    $id=Post::findOrFail($type);
    return view('admin.types.show',compact('id'));
    }



    public function edit(Post $type)
    {

    return view('admin.types.edit',compact('type'));
    }



    public function update(Post $type)
    {
    $data = request()->validate([
    'name' => 'required',
    ]);
    $type->update($data);
    $show = Post::all();
    return redirect('type1');
    }



    public function destroy(Post $type)
    {
    $type->delete();
    return redirect('type1');

    }
}
