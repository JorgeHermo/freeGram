@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-1 d-flex justify-content-center align-items-center"><img src="https://play-lh.googleusercontent.com/IeNJWoKYx1waOhfWF6TiuSiWBLfqLb18lmZYXSgsH1fvb8v1IYiZr5aYWe0Gxu-pVZX3" alt="freeGram Logo" style="width: 200px; height: 200px;" class="rounded-circle img-fluid"></div>
        <div class="col-9 pt-1">
            <div class="ps-3 d-flex  justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Picture</a>
            </div>
            <div class="d-flex">
                <div class="ps-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="ps-3"><strong>30k</strong> followers</div>
                <div class="ps-3"><strong>1k</strong> following</div>
            </div>
            <div class="pt-4 ps-3 font-weight-bold">{{$user->profile->title}}</div>
            <div class="ps-3">{{$user->profile->description}}</div>
            <div class="ps-3"><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 mt-5 p-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100 img-fluid">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection