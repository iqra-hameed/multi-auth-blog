@extends('layout')
@section('content')
<div class='row'>
    <div class="col-md-12 margin-tb">
        <div class="pull-left">
            <h2>Create </h2>
        </div>
        <div class="pull-right">
<a class="btn btn-primary" href="{{url('/dashboard')}}">back</a>
        </div>
    </div>
</div>

<form action="{{route('saveblogs')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <strong>Title</strong>
                <input type="text" name="Title"  class="form-control" >
            </div>
        </div>
<input type="hidden"  name="Slug">
        <div class="col-md-12">
            <div class="form-group">
            <strong>Slug:</strong>
                <input type="text" name="Slug" class="form-control" >
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>Description</strong>
                <input type="text" name="Description"  class="form-control" >
            </div>
        </div>

        <div class="col-md-12"> 
            <div class="form-group">
            <strong> Image:</strong>
                <input type="file" name="Image"  class="form-control" >
            </div>
        </div>


        <div class="col-md-12">
            <div class="form-group">
            <strong>Tags</strong>
                <input type="text" name="Tags"  class="form-control" >
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>SEO_description</strong>
                <input type="text" name="SEO_description"  class="form-control" >
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>SEO_Title</strong>
                <input type="text" name="SEO_Title"  class="form-control" >
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
            <strong>Meta_keywords</strong>
                <input type="text" name="Meta_keywords"  class="form-control" >
            </div>
        </div>

        {{-- <div class="col-md-12">
            <div class="form-group">
            <strong>Category</strong>
                <input type="text" name="Category_id"  class="form-control" >
            </div>
        </div> --}}
        
        <label for="categories">Choose a category:</label>
        <select name="category_name" class="form-control" id="sel1">
            @forelse($category as $category)
          <option value="{{$category->id}}">{{$category->category_name}}</option>
          @empty
          <option> No  Category Found</option>
          @endforelse
          </select>
      
       
     
        {{-- @endforeach --}}

    </div>
    <div class="col-md-12 text-center">
     <button type="submit" class="btn btn-primary"> submit</button>

 </div>
</form>

@endsection