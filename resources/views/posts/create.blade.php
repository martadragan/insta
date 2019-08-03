@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
    
                <input 
                    id="caption" 
                    type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" 
                    value="{{ old('caption') }}" 
                    required autocomplete="caption" 
                    autofocus>
    
                @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <input type="file" name="image" id="image" class="form-control-file">

                @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong>
                @endif
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button>
            </div>
        </div>
    </form>
</div>
@endsection
