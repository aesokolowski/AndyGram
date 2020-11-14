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
            <div><h1>{{ $user->userhandle }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>353</strong> posts</div>
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
            </a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="{{ URL::to('/') }}/img/greenjacket.png" class="w-100" />
        </div>
        <div class="col-4">
            <img src="{{ URL::to('/') }}/img/thekids.jpg" class="w-100" />
        </div>
        <div>
            <img src="{{ URL::to('/') }}/img/ringsbaby.jpg" class="w-100" />
        </div>
    </div>
</div>
@endsection
