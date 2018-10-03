<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user1\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function index()
    {
        $tags = tag::all();

        return view('admin.tag.show',compact('tags'));
    }

    public function create()
    {
       return view('admin/tag/tag');
    }

  
    public function store(Request $request)
    {
       $this->validate($request,[
        
         'name'=>'required',
             'slug'=>'required',

       ]);

       $tag = new tag;
        $tag->name = $request->name;
        $tag->slug = $request->slug;
         $tag->save();

         return redirect(route('tag.index'));
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $tag = tag::where('id',$id)->first();
       return view('admin.tag.edit',compact('tag'));
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
       tag::where('id',$id)->delete();
        return redirect()->back();
    }
}
