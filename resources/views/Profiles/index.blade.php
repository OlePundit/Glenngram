@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="../Profile image/Profile image/Profile image.jpg" class="rounded-circle">

        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->Username }}</h1>
                <a href= "/p/create"> Add New Post</a>
                
            </div>
            <a href= "/Profile/{{$user->id}}/edit"> Edit Profile</a>
                    
                
            <div class="d-flex">
                <div style="padding-right: 25px;"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div style="padding-right: 25px;"><strong>2M</strong> followers</div>
                <div style="padding-right: 25px;"><strong>300</strong> following</div>

            </div>
            <div><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
            <div class="col-4 pb-4">
            <a href = "/p/{{$post->id}}"> <img src="storage/{{ $post->image }}" class="w-100"></a>
            </div>
        @endforeach
        </div>
</div>
@endsection