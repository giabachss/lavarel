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
            @if(Route::has('user'))
            <div><h1>{{auth()->user()->name}}</h1></div>
            @elseif(!Route::has('user'))
            <div><h1>Hello</h1></div>
            @endif
        {{-- @else
            <div><h1>Hello</h1></div>
            @csrf
        @endguest --}}
        </div>
        <div class="row pt-5" >
            @foreach ($post as $key => $data)
                <div class="col-4">
                    <div class="col-4" style="height: 250px; width: 100%;">
                    <div style="height: 250px; width: 100%;">
                <img src = "/storage/{{$data->image}}" class="w-100">
                    </div>
                    </div>
                <h3>{{$data->caption}} : {{$data->price}}</h3>

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
