@extends('layouts.app')

@section('content')
<div class="container">
    @if ($posts->count() == 0)
    <div>
        <p>There is nothing here yet. How about following some user:</p>
        @foreach ($userList as $user)
        <div><img src="{{ $user->profile->profileImage() }}" class="w-100" style="max-width:150px;"></div>
        <p class="font-weight-bold text-dark"><a href="/profile/{{ $user->id }}">{{ $user->name }}</a></p>
        @endforeach
    </div>

    @else
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
    @endif
</div>
@endsection
