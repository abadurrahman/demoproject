<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use DB;

class TagController extends Controller
{
    public function index()
    {
        //$category=Category::all()->orderBy('id','DESC');
        $tag=DB::table('tags')->orderBy('id','DESC')->paginate(10);
        return response()->json($tag);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
         'tag_name' => 'required|unique:tags|max:255',
        ]);

           $tag = new Tag;
           $tag->tag_name = $request->tag_name;
           $tag->save();

           //query builder
           // $data=array();
           // $data['category_name']=$request->category_name;
           // DB::table('categories')->insert($data);
    }

     public function show($id)
    {
       //query builder
        //$categoru=DB::table('categories')->where('id',$id)->first();
        $tag=Tag::findorfail($id);
         return response()->json($tag);
    }


     public function update(Request $request, $id)
    {
        $data=array();
        $data['tag_name']=$request->tag_name;
        DB::table('tags')->where('id',$id)->update($data);
        // $category=Category::findorfail($id);
        // $category->save();
    }

    public function destroy($id)
    {
        DB::table('tags')->where('id',$id)->delete();
        // $category=Category::findorfail($id);
        // $category->delete();
    }
}
