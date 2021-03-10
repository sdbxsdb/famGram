@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user_id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">

            <div class="mt-2 mb-4">
                <p>
                    <span class="font-weight-bold pr-2">
                        <a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }}</a>
                    </span>|
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>

</div>
@endsection
