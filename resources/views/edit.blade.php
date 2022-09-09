@extends('layout')
@section('content')
<div class='row'>
    <div class="col-md-12 margin-tb">
        <div class="pull-left">
            <h2>edit name</h2>
        </div>
        <div class="pull-right">
<a class="btn btn-primary" href="{{url('/dashboard')}}">back</a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> <h5> There is some problem with your input.</h5>  <br> <br>
<ul>
        @foreach($errors->all() as $error)
        <li>{{$$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{url('/update',$blog->id )}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <strong>Title</strong>
                <input type="text" name="Title"  class="form-control" value="{{$blog->Title}}">
            </div>
           </div>
          <input type="hidden" value="{{$blog->id}}" name="id">
        <div class="col-md-12">
            <div class="form-group">
            <strong>Slug:</strong>
                <input type="text" name="Slug" class="form-control" value="{{$blog->Slug}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>Description</strong>
                <input type="text" name="Description"  class="form-control" value="{{$blog->Description}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong> Image:</strong>
                <input type="file" name="Image"  class="form-control">
            </div>
        </div>


        <div class="col-md-12">
            <div class="form-group">
            <strong>Tags</strong>
                <input type="text" name="Tags"  class="form-control" value="{{$blog->Tags}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>SEO_description</strong>
                <input type="text" name="SEO_description"  class="form-control" value="{{$blog->SEO_description}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>SEO_Title</strong>
                <input type="text" name="SEO_Title"  class="form-control" value="{{$blog->SEO_Title}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>Meta_keywords</strong>
                <input type="text" name="Meta_keywords"  class="form-control" value="{{$blog->Meta_keywords}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>Category</strong>
                <input type="text" name="Category_id"  class="form-control" value="{{$blog->Category_id}}">
            </div>
        </div>
        


    </div>
    <div class="col-md-12 text-center">
     <button type="submit" class="btn btn-primary"> submit</button>

 </div>
</form>

@endsection