@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row col-8 offset-3">
                <h2>Add New Post</h2>
            </div>
            <div class="row md-6">
                            <label for="caption" class="col-md-4 col-form-label text-md-end">{{ __('Caption') }}</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row pt-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                                <div class="col-md-6">
                                <input type="file" class="form-control-file" id="image" name="image">
                                @error('image')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                                </div>
                            </div>
                           
                        </div>
                         <div class="row pt-3 col-12 offset-3">
                                <button class="btn btn-primary" style="width: 20%">Add New Post</button>
                            </div>
        </div>
    </div>
    </form>
</div>
@endsection
