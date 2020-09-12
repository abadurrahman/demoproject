<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Blog;

class BlogController extends Controller
{
       public function index()
    {
        //$brand=Brand::all();
        $blog=DB::table('blogs')->orderBy('id','DESC')->paginate(10);
        return response()->json($blog);
    }
    
     public function store(Request $request)
    {
         $validatedData = $request->validate([
             'title' => 'required|unique:blogs|max:255',
             'details' => 'required',
         ]);

           if($request->photo){
                   $position = strpos($request->photo, ';');
                   $sub=substr($request->photo, 0 ,$position);
                   $ext=explode('/', $sub)[1];
                   $name=time().".".$ext;
                   $img=Image::make($request->photo)->resize(240,200);
                   $upload_path='backend/blog/';
                   $image_url=$upload_path.$name;
                   $img->save($image_url);

                   $blog = new Blog;
                   $blog->title = $request->title;
                   $blog->date = $request->date;
                   $blog->details = $request->details;
                   $blog->main = $request->main;
                   $blog->latest = $request->latest;
                   $blog->photo =  $image_url;
                   $blog->status =1;
                   $blog->save();
            }else{
                   $blog = new Blog;
                   $blog->title = $request->title;
                   $blog->date = $request->date;
                   $blog->details = $request->details;
                   $blog->main = $request->main;
                   $blog->latest = $request->latest;
                   $blog->save();
            }
     }

     public function show($id)
    {
        $brand=DB::table('brands')->where('id',$id)->first();
        return response()->json($brand);
    }



    public function update(Request $request, $id)
    {
        $data=array();
        $data['brand_name']=$request->brand_name;
        $image=$request->newphoto;
      if ($image) {
           $position = strpos($image, ';');
           $sub=substr($image, 0 ,$position);
           $ext=explode('/', $sub)[1];
           $name=time().".".$ext;
           $img=Image::make($image)->resize(240,200);
           $upload_path='backend/brand/';
           $image_url=$upload_path.$name;
           $success=$img->save($image_url);
       if  ($success) {
             $data['photo']=$image_url;
             $img=DB::table('brands')->where('id',$id)->first();
             $image_path = $img->photo;
             $done=unlink($image_path);
             $user=DB::table('brands')->where('id',$id)->update($data); 
           }
       }else{
           $oldlogo=$request->photo;       
           $data['photo']=$oldlogo;  
           DB::table('brands')->where('id',$id)->update($data); 
        
       }
   
    }


   public function destroy($id)
    {
       $brand=DB::table('brands')->where('id',$id)->first();
       $photo=$brand->photo;
       if ($photo) {
          unlink($photo);
          DB::table('brands')->where('id',$id)->delete();
       }else{
        DB::table('brands')->where('id',$id)->delete();
       }
    }
}
