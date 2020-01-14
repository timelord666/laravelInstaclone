@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" src="{{url('/') . $user->profile->profileImage()}}" alt="photo" >
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex mb-2 align-items-center">
                    <div class="h4">{{$user->username}}</div>

                    <follow-button user-id='{{$user->id}}' follows='{{$follows}}'></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="{{url('/p/create')}}">Add a new post</a> 
                @endcan
            </div>
            @can('update', $user->profile)
                
                <a href="{{url('/profile' . '/' . auth()->user()->id) . '/edit'}}">Edit Profile</a>
               
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$postCount}}</strong> posts</div>
                <div class="pr-5"><strong>{{$followersCount}}</strong> followers</div>
                <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div> <a href="#"> {{$user->profile->url}}</a></div>
        </div>

        
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $post)
        <div class="col-4 p-2">
            <a href="{{url('/p/' . $post->id)}}"><img class="w-100" src="{{url('/') . '/storage/' . $post->image}}" alt=""></a>
        </div>
        @endforeach
    </div>

</div>
@endsection
