@extends('layout')
@section('content')


<div class="table-responsive">
    <table class="align-middle mb-0 table table-striped table-hover">
        <thead>
        <tr>
            <th class="text-center">id</th>
            <th class="text-center">Name</th>
            <th class="text-center">Comments</th>
        </tr>
       
        @foreach($comments as $comment)
                                            <tr>
                                            <th class="text-center" scope="row">{{$loop->iteration}}</th>
                                            {{-- <td class="text-center">{{$comment->id}}</td> --}}
                                            <td class="text-center">{{$comment->Name}}</td>
                                            <td class="text-center">{{$comment->Comments}}</td>
                                            </tr>
                                            @endforeach
                                       
@endsection