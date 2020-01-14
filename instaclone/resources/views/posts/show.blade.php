@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{url('/storage/' . $post->image)}}" alt="{{$post->caption}}" class='w-100'>
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3" >
                        <img class="w-100  rounded-circle" src="{{url('/') . $post->user->profile->profileImage()}}" 
                        alt="{{$post->user->username}}" style="max-width:40px">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="{{url('/profile') . '/' . $post->user->id}}">
                                <span class="text-dark">
                                    {{$post->user->username}}
                                </span>
                            </a>

                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p> 
                    <span class="font-weight-bold pr-1">
                        <a href="{{url('/profile') . '/' . $post->user->id}}">
                            <span class="text-dark">
                                {{$post->user->username}}
                            </span>
                        </a>
                    </span>
                    {{$post->caption}}
                </p>
            </div>
        </div>
            
        
    </div>
</div>
@endsection
