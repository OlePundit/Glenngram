@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">

                <div class="pr-3">
                    <img src = "{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/Profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->Username }}</span>
                        </a>
                        <a href="#" class="pl-3">follow</a>
                    </div>
                </div>
            </div>

                <hr>

                <p> <span class="font-weight-bold">
                    <a href="/Profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->Username }}</span>
                    </a></span>{{ $post->caption }}</p>
            </div>

        </div>

    </div>
</div>
@endsection