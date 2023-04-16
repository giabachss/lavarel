@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4">
                <img src = "/storage/{{$post->image}}" class="w-100">
            </div>
            @endforeach
            <div class="col-4">
                <img src = "https://tse3.mm.bing.net/th?id=OIP.gOECfnl0ky0NKan2XcXyYwHaFk&pid=Api&P=0" class="w-100">
            </div>
            <div class="col-4">
                <img src = "https://images.hdqwalls.com/wallpapers/cute-kitten-4k-im.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src = "http://images4.fanpop.com/image/photos/16100000/Cute-Kitten-kittens-16122061-1280-800.jpg" class="w-100">
            </div>
        </div>

    </div>
</div>
@endsection
