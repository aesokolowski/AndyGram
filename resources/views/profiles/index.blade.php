@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}"
                 class="rounded-circle w-100"
                 style="max-height: 175px;" />
        </div>
        <div class="col-9 pt-4">
            <div class="d-flex justify-content-between align-items-baseline pb-3">
                <div class="d-flex align-items-center">
                    <h1>{{ $user->userhandle }}</h1>
                    <follow-button 
                        v-bind:user-id="{{ $user->id }}"
                        v-bind:follows='@json($follows)'>
                    </follow-button>
                </div>

                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan

            </div>
            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
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
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100" />
            </a>
        </div>
        @endforeach
    </div>
</div> {{-- container --}}
@endsection
