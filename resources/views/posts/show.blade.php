@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="mr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px">
                </div>
                <div>
                   <span class="font-weight-bold">
                       <a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }}</a>
                    </span>
                    <a href="#" class="font-weight-bold ml-2">&#8249; Follow</a>
                </div>
            </div>
            <hr>
            <div class="mt-3">
                <p>
                    <span class="font-weight-bold pr-2">
                        <a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }}</a>
                    </span>|
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
