
@extends('layouts.app')
@extends('layouts.auth')
@section('content')


<style>
   .tm-btn-primary {
    background-color: #0CC;
    color: white;
    padding: 8px 43px;
    border: none;
}

.tm-btn-small { padding: 8px 33px; }

.tm-btn-primary:hover {
    background-color: #09b6b6;
    color: white;
}
.tm-color-primary, span.tm-color-primary { color: #099; }
.tm-post-title {
    font-size: 1.7rem;
    transition: all 0.3s ease;
}
.tm-post-link:hover .tm-post-title { color: #0CC; }
.tm-mb-40 { margin-bottom: 40px; }
.tm-comment-form { max-width: 360px; }
.tm-comment-figure {
    margin-top: 10px;
    margin-right: 30px;
}
.tm-comment {
    display: flex;
    align-items: flex-start;
}

.tm-comment-figure {
    margin-top: 10px;
    margin-right: 30px;
}

   .tm-comment-reply { padding-left: 37px; }
   </style>

    <h1 class="text-center" ><img src="/image/{{$blog->Image}}" width="30%" alt=""></h1>
<p class="text-center"> <strong class="text-primary"> Title:</strong>  {{ $blog->Title}}</p>
<p class="text-center"> <strong class="text-primary"> Slug:</strong>{{ $blog->Slug}}</p>
<p class="text-center"> <strong class="text-primary"> Description:</strong> {{ $blog->Description}}</p>
<p class="text-center"><strong class="text-primary"> Tags:</strong> {{ $blog->Tags}}</p>
<p class="text-center"> <strong class="text-primary"> SEO_description:</strong> {{ $blog->SEO_description}}</p>
<p class="text-center"> <strong class="text-primary"> SEO_Title:</strong> {{ $blog->SEO_Title}}</p>
<p class="text-center"> <strong class="text-primary"> Meta_keywords:</strong> {{ $blog->Meta_keywords}}</p>
 <p class="text-center"> <strong class="text-primary"> Category_id:</strong> {{$blog->Category_id}}
</p>


<div class="mb-4">
    <h2 class="pt-2 tm-color-primary tm-post-title">Single Post of Xtra Blog HTML Template</h2>
    <p class="tm-mb-40">June 16, 2020 posted by Admin Nat</p>
    <p>
        This is a description of the video post. You can also have an image instead of
        the video. You can free download
        <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog Template</a>
        from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum
        lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu
        est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a,
pharetra lacus. </p>
    <p>
        Duis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque
        dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis
        quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent
        aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt
        et vitae dui.
    </p>
    <span class="d-block text-right tm-color-primary">Creative . Design . Business</span>
</div>

</div>

<!-- Comments -->
<div class="container-fluid " >

{{-- show comments --}}
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <h2 class="tm-color-primary tm-post-title ">Comments</h2>
    <hr class="tm-hr-primary tm-mb-45">
            @foreach ($comments as $comment)
            <div class=" border-bottom border-primary">
                <h5 class="color-primary text-center " >name: {{ $comment->Name}}</h5>

                <h5 class="color-primary text-center " > Comment: {{ $comment->Comments}}</h5>
             </div>
            @endforeach
        </div>

        <div class="col-md-6 border-bottom border-primary">

            <form action="{{url('comment',$blog->id)}}" class="mb-5 tm-comment-form">
                @csrf
                <h2 class="tm-color-primary tm-post-title mb-4 col-md-6">Your comment</h2>


                <div class="mb-4">
                    <textarea class="form-control" name="Comments" rows="6"></textarea>
                </div>
                <div class="text-right">
                    <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
    {{-- <div class="tm-comment tm-mb-45 col-md-6">
        @foreach ($comments as $comment)
        <figure class="tm-comment-figure border-bottom border-primary">


            <h5 class="color-primary text-center " >name: {{ $comment->Name}}</h5>

            <h5 class="color-primary text-center" > Comment: {{ $comment->Comments}}</h5>


        </figure>
        @endforeach
        {{-- <div>

            <div class="d-flex justify-content-between">
                <a href="#" class="tm-color-primary">REPLY</a>
                <span class="tm-color-primary">June 14, 2020</span>
            </div>
        </div>
    </div> --}}
<footer class="row tm-row">
    <hr class="col-12">

    {{-- <div class="col-md-6 col-12 tm-color-gray tm-copyright">
        Copyright 2020 Xtra Blog Company Co. Ltd.
    </div> --}}@endsection
