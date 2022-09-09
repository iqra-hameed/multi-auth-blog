<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\comment;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
//    public function blog(){
// $blogs=Blog::Where('approve','1')->get();
//        return view('blog' ,compact('blogs'));
//    }
   public function details(Blog $blogs , Request $request){
    $blog=Blog::find($request->id);
    $comments=comment::where('blog_id' , $request->id)->get();
           return view('post' ,compact('blog','comments'));
       }
       
}
