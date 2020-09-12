<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogcategory;
use DB;

class Blogcategorycontroller extends Controller
{
   public function index()
    {
        //$category=Category::all()->orderBy('id','DESC');
        $blogcategory=DB::table('blogcategories')->orderBy('id','DESC')->paginate(10);
        return response()->json($blogcategory);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
         'blogcategory_name' => 'required|unique:blogcategories|max:255',
        ]);

           $blogcategory = new Blogcategory;
           $blogcategory->blogcategory_name = $request->blogcategory_name;
           $blogcategory->save();

           //query builder
           // $data=array();
           // $data['category_name']=$request->category_name;
           // DB::table('categories')->insert($data);
    }

     public function show($id)
    {
       //query builder
        //$categoru=DB::table('categories')->where('id',$id)->first();
        $blogcategory=Blogcategory::findorfail($id);
         return response()->json($blogcategory);
    }


     public function update(Request $request, $id)
    {
        $data=array();
        $data['blogcategory_name']=$request->blogcategory_name;
        DB::table('blogcategories')->where('id',$id)->update($data);
        // $category=Category::findorfail($id);
        // $category->save();
    }

    public function destroy($id)
    {
        DB::table('blogcategories')->where('id',$id)->delete();
        // $category=Category::findorfail($id);
        // $category->delete();
    }
}
