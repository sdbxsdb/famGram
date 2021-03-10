@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100"  alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="h3">{{ $user->name }}</div>

                    <!--FOLLOW BUTTON IS COMING FROM FOLLOW BUTTON.VUE-->
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

                </div>

                @can('update', $user->profile)
                    <a href="/p/create" class="btn btn-primary ">Add New Post</a>                
                @endcan 
                
            </div>

            @can('update', $user->profile)
                <div class="mb-2 mt-4"><a href="/profile/{{ $user->id }}/edit">Edit Profile</a></div>
            @endcan

            <div class="d-flex mt-2">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followerCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description ?? 'Something about me...? Ummmmmm...' }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'www.famGram.com'}}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach ($user->posts as $post)
        <div class="col-4 pt-5">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
        </div>
            
        @endforeach
    </div>
</div>
@endsection
