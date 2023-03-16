@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-1 d-flex justify-content-center align-items-center"><img src="{{$user->profile->getProfileImage()}}" alt="freeGram Logo"  class="rounded-circle img-fluid w-100"></div>
        <div class="col-9 pt-1">
            <div class="ps-3 d-flex  justify-content-between align-items-center">
                <div class="d-flex pb-3">
                    <div class="h3">{{$user->username}}</div>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
            @can ('update', $user->profile)
                <a href="/p/create">Add New Picture</a>
            @endcan
            </div>
            @can ('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit" class="ms-3">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="ps-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="ps-3"><strong>{{ $user->profile->follows ? $user->profile->follows->count() : 0 }}</strong> followers</div>
                <div class="ps-3"><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-4 ps-3 font-weight-bold"><strong>{{$user->profile->title}}</strong></div>
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