@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="p-3">
                    <img src="{{$post->user->profile->getProfileImage()}}" class="w-100 rounded-circle" style="max-width: 35px" alt="user image">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}" style="text-decoration: none;">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                        <a href="#" class="ps-3" style="text-decoration: none;">Follow</a>
                    </div>
                </div>
            </div>
            <hr>
            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}" style="text-decoration: none;">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span> 
                {{$post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection
