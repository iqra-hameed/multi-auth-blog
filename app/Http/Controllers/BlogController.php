<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class BlogController extends Controller
{
   public function index(){ 
       $blogs=Blog::all();
       return view('admin' , compact('blogs'));
   }
   
   public function create()
   {
       $categories= Category::all();
      
       return view('create' , compact('categories'));
   }
 
   
   public function store(Request $request)
   {

       $request->validate([
           'Title'=>'required',
           'Slug'=>'required',
           'Description'=>'required',
           'Image'=>'required|image|mimes:jpeg,png,jpg.gif,svg|max:2048',
           'Tags'=>'required',
           'SEO_description'=>'required',
           'SEO_Title'=>'required',
           'Meta_keywords'=>'required',
           'category_name'=>'required',
       ]);
         $input=$request->all();
       if($image = $request ->file('Image')){
           $destinationPath='Image/';
           $profileImage=date('YmdHis'). ".". $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $input['Image']="$profileImage";

       }
     
       try {
        Blog::create([
            'Title' => $request->Title,
            'Slug' => $request->Slug,
            'Description' => $request->Description,
            'Image' => $request->Image,
            'Tags' => $request->Tags,
            'SEO_description' => $request->SEO_description,
            'SEO_Title' => $request->SEO_Title,
            'Meta_keywords' => $request->Meta_keywords,
            'Category_id' => $request->category_name,
    
           ]);

       } catch(Exception $e) {
           dd($e->getMessage());
       } 
      

      return redirect('/dashboard')->with('success','Customers created successfully');
       
    }

    public function edit( Blog $blog, Request $request)
     {
         $blog=Blog::find($request->id);
       return view('edit',compact('blog'));
     }
    
    
     public function approve( Request $request, Blog $blog)
    {
        $blogs = Blog::find($request->id);
        $blog->where('id', $request->id)->update(array('approve'=>1));
        return redirect('/dashboard');
    }


     public function update(Request $request, Blog $blog)
     {
        $blog=Blog::find($request->id);
      
        $blog->update($request->all());
        return redirect('/dashboard')->with('success','Customers updated successfully');
     }

     public function destroy(Blog $blog, Request $request)
     {
         $blog=Blog::find($request->id);
        $blog->delete();
        return redirect('/dashboard')->with('success','Customer deleted successfully');
     }

     public function Comment( Blog $blog, Request $request)
     {
         $blog=Blog::find($request->id);
        $comment=new comment();
        $comment->Name=Auth::user()->name;
        $comment->Comments=$request['Comments'];
        $comment->blog_id=$blog->id;
        $comment->save();
        return redirect()->back();
     }
     public function categories(Blog $blog, Request $request){
dd("aimhere");
     $category=category::find($request->id);
     dd($category);
     $blog->where('id', $request->id)->update(array('category'=>'name'));
     return redirect('/dashboard');

     }
     public function allcomments(Blog $blog, Request $request)
     {
        $comments=comment::all();
        return view('comments' , compact('comments'));
     }
}

