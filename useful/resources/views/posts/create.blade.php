@extends('layouts.app')
{{-- <h1>{{$user->id}}<h1> --}}
@section('content')

  <div class="container">
  <form action="/useful/public/p" method="post" entype="multipart/form-data">

    <div class="row">
     <div class="col-8 offset-0.5">
        <div class="row">
           <h1>ADD NEW POST<h1>
         </div>
     <div class="form-group row">
         <label for="caption" class="col-md-4 col-form-label ">POST CAPTION</label>

       <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('name') }}" required autocomplete="caption" autofocus>

           @error('caption')
           <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                    </span>
          @enderror

          </div>

       </div>
    </div>


      <div class="row ">

         {{csrf_field()}}
         <label for="image" class="col-md-4 col-form-label ">POST IMAGE</label>

       <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"  autofocus>

           @error('image')
           <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                    </span>
          @enderror

    </div>
    <div class="row p-5">
    <button class="btn btn-primary"><h6 style="margin:5px">ADD NEW POST</h6></button>
    </div>
    </form>
  </div>
@endsection
