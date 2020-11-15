@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ URL::to('/') }}/svg/quicklogo.svg"
                 class="rounded-circle"
                 style="max-height: 175px;" />
        </div>
        <div class="col-9 pt-4">
            <div class="d-flex justify-content-between align-items-bottom">
                <h1>{{ $user->userhandle }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4">
                    <strong>{{ $user->posts->count() }}</strong> posts
                </div>
                <div class="pr-4"><strong>59.8k</strong> followers</div>
                <div class="pr-4"><strong>287</strong> following</div>
            </div>
            <div class="pt-5 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="{{ $user->profile->url }}">
                {{ $user->profile->url }}
            </a>
        </div> {{-- col-9 pt-4 --}}
    </div> {{-- row --}}

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" class="w-100" />
        </div>
        @endforeach
    </div>
</div> {{-- container --}}
@endsection
